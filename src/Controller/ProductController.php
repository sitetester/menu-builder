<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Service\CategoriesManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    private $categoriesManager;

    public function __construct(CategoriesManager $categoriesManager)
    {
        $this->categoriesManager = $categoriesManager;
    }

    /**
     * @Route("/products/add/{categoryId}", name="products_add")
     */
    public function add(Request $request, $categoryId)
    {
        $category = $this->getDoctrine()->getRepository(Category::class)->find($categoryId);
        if ($category === null) {
            return new Response('Category not found for given ID (' . $categoryId . ')');
        }

        //  (child_count > max_allowed_children) ?
        if ($this->categoriesManager->isParentCategoryTreeIncrementedChildCountGreaterThanMaxAllowedChildren($categoryId)) {
            return new Response('Parent category tree max allowed children limit reached.');
        }

        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $product
            ->setName('Test Product ')
            ->setCurrency('€')
            ->setPrice(10.00);

        $form = $this->createFormBuilder($product)
            ->add('name', TextType::class)
            ->add('price', TextType::class)
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
            /** @var Product $product */
            $product = $form->getData();
            $product->setCategory($category);
            $em->persist($product);
            $em->flush();

            // update parent category tree childCount & productsCount by +1
            $this->updateParentCategoryTreeCounts($categoryId, '+', true, true);

            return $this->redirectToRoute('menus');
        }

        return $this->render(
            'product/add.html.twig',
            [
                'form' => $form->createView(),
            ]
        );

    }

    /**
     * Call this on ADD & DELETE product operations
     * Parent category tree childCount must be updated accordingly
     *
     * ADD => increment updateParentCategoryTreeChildCount by +1
     * DELETE => decrement updateParentCategoryTreeChildCount by -1
     *
     */
    private function updateParentCategoryTreeCounts(int $categoryId, string $operator): void
    {
        $this->forward(
            'App\Controller\CategoryController::updateParentCategoryTreeCounts',
            [
                'categoryId' => $categoryId,
                'operator' => $operator,
            ]
        );
    }

    /**
     * @Route("/products/edit/{id}", name="products_edit")
     */
    public function edit(Request $request, int $id)
    {
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $currentActiveStatus = $product->getActive();

        $form = $this->createFormBuilder($product)
            ->add('name', TextType::class)
            ->add('price', TextType::class)
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
            /** @var Product $product */
            $product = $form->getData();

            // from true to false => -
            if ($currentActiveStatus === true && $product->getActive() === false) {
                $this->categoriesManager->updateParentCategoryTreeActiveCounts($product->getCategory()->getId(), '-');
            }

            // from false to true => +
            if ($currentActiveStatus === false && $product->getActive() === true) {
                $this->categoriesManager->updateParentCategoryTreeActiveCounts($product->getCategory()->getId(), '+');
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('menus');
        }

        return $this->render(
            'product/add.html.twig',
            [
                'form' => $form->createView(),
            ]
        );
    }

    /**
     * @Route("/products/delete/{id}", name="products_delete")
     */
    public function delete(int $id)
    {
        /** @var Product $product */
        $product = $this->getDoctrine()->getRepository(Product::class)->find($id);
        $categoryId = $product->getCategory()->getId();

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($product);
        $manager->flush();

        // update parent category tree childCount by -1
        $this->updateParentCategoryTreeCounts($categoryId, '-');

        return $this->redirectToRoute('menus');
    }
}
