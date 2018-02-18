<?php

namespace App\Controller;

use App\Entity\Category;
use App\Service\CategoriesManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    private $categoriesManager;

    public function __construct(CategoriesManager $categoriesManager)
    {
        $this->categoriesManager = $categoriesManager;
    }

    /**
     * @Route("/categories/add/{parentId}", name="categories_add")
     */
    public function add(Request $request, $parentId = 0)
    {
        if ($parentId !== 0) {
            $category = $this->getDoctrine()->getRepository(Category::class)->find($parentId);
            if ($category === null) {
                return new Response('Category not found for given ID (' . $parentId . ')');
            }
        }

        // check childCount of parent category tree
        //  (child_count > max_allowed_children) ?
        if ($this->categoriesManager->isParentCategoryTreeIncrementedChildCountGreaterThanMaxAllowedChildren($parentId)) {
            return new Response('Parent category tree max allowed children limit reached.');
        }

        $category = new Category();
        $category
            ->setName('Test Category')
            ->setMaxAllowedChildren(10);

        $form = $this->createFormBuilder($category)
            ->add('name', TextType::class)
            ->add('parentId', TextType::class)
            ->add('maxAllowedChildren', TextType::class)
            ->add(
                'active',
                ChoiceType::class,
                [
                    'choices' => [
                        'Yes' => true,
                        'No' => false,
                    ],
                    'expanded' => true,
                    'multiple' => false,
                ]
            )
            ->add('save', SubmitType::class, ['label' => 'Save'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Category $category */
            $category = $form->getData();
            $category->setParentId($parentId);

            if ($this->categoriesManager->isGreaterThanParentCategoryTreeMaxAllowedChildren($category->getMaxAllowedChildren(), $parentId)) {
                return new Response('Max allowed children is GREATER than PARENT category tree max allowed children.');
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            // update parent category tree childCount by +1
            if ($parentId !== 0) {
                $this->updateParentCategoryTreeCounts($parentId, '+', true, false);
            }


            return $this->redirectToRoute('menus');
        }

        return $this->render(
            'category/add.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    public function updateParentCategoryTreeCounts(
        int $categoryId,
        string $operator,
        bool $childCount = true,
        bool $productsCount = true,
        bool $activeChildCount = true,
        bool $activeProductsCount = true
    ): void {
        $this->categoriesManager->updateParentCategoryTreeCounts($categoryId, $operator, $childCount, $productsCount, $activeChildCount, $activeProductsCount);
    }

    /**
     * @Route("/categories/edit/{id}", name="categories_edit")
     */
    public function edit(Request $request, int $id)
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($id);
        $currentActiveStatus = $category->getActive();

        if ($category === null) {
            return new Response('Category not found for given ID (' . $id . ')');
        }

        $repository = $this->getDoctrine()->getRepository(Category::class);
        $category = $repository->find($id);

        $form = $this->createFormBuilder($category)
            ->add('name', TextType::class)
            ->add('maxAllowedChildren', TextType::class)
            ->add(
                'active',
                ChoiceType::class,
                [
                    'choices' => [
                        'Yes' => true,
                        'No' => false,
                    ],
                    'expanded' => true,
                    'multiple' => false,
                ]
            )
            ->add('save', SubmitType::class, ['label' => 'Save'])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /** @var Category $category */
            $category = $form->getData();

            // (greater than parent category max allowed children) ?
            if ($this->categoriesManager->isGreaterThanParentCategoryTreeMaxAllowedChildren($category->getMaxAllowedChildren(), $category->getParentId())) {
                return new Response('Max allowed children is GREATER than PARENT category tree max allowed children.');
            }

            // (less than child category max allowed children) ?
            if ($this->categoriesManager->isLessThanChildCategoryTreeMaxAllowedChildren($category)) {
                return new Response('Max allowed children is LESS than CHILD category tree max allowed children.');
            }

            // check childCount of parent category tree
            //  (child_count > max_allowed_children) ?
            if ($category->getChildCount() > $category->getMaxAllowedChildren()) {
                return new Response('Category max allowed children can\'t  be less than current child count.');
            }

            // from true to false => -
            if ($currentActiveStatus === true && $category->getActive() === false) {
                $this->categoriesManager->updateParentCategoryTreeActiveCounts($id, '-', true, false);
            }

            // from false to true => +
            if ($currentActiveStatus === false && $category->getActive() === true) {
                $this->categoriesManager->updateParentCategoryTreeActiveCounts($id, '+', true, false);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('menus');
        }

        return $this->render(
            'category/edit.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/categories/delete/{id}", name="categories_delete")
     */
    public function delete(int $id)
    {
        $this->categoriesManager->deleteCategory($id);

        return $this->redirectToRoute('menus');
    }
}
