Menu Page
=========

Definition
----------

Menu ::
  - Category (5)
    - Category (3)
      - Category (2)
        - Product (€1.10)
        - Product (€6.25)
      -Category (1)
        - Product (€3.33)
    - Category (2)
      - Product (€1.10)
      - Product (€9.99)
    - Category (0)
    - Category (0)
  - Category (1)
    - Product (€5.55)

Rules:
- Menu is a tree
- Only categories are allowed in top level of the tree
- Every category is allowed to have 0..N child elements
- A Child element is either a category or a product
- A product can't have any child elements
- Both products and categories must have `active` field
- If a category's `active` field is `False` than the category is hidden and
  all its sub-elements are hidden as well

Mandatory products' fields:
- `name`
- `active`
- `price`

Mandatory categories' fields:
- `name`
- `active`


Task
----

Create web application:
- It should allow to edit categories and products tree defined in the top. UI
  can be super simple and it is not suppose to be user friendly.

- non-logined users are only suppose to see tree (similar to as displayed in
  "Menu" section) without ability to edit it. They are suppose to see only
  active elements. And it should display *all* elements. No additional clicks
  or ajax calls. It should display *all* elements via one request.

- Logined users are suppose to see all products and all categories.


Element representation
----------------------

Category (N): "Category" is a value of `name` field. "N" is a number of
products inside a category.

Product (€X.XX): "Product" is a value of `name` field. "€X.XX" is a value of
`price` field.


Notes
-----
- Use PostgreSQL DB

- Use Python as backend technology. It can be any web framework: Django,
  Flask, Pyramid etc. You are allow to use other programming languages (Like
  Ruby, Java, Go, Node.js, PHP etc). But then please provide a detailed readme
  file how to run your app on UNIX based OS.

- ***- A tree is suppose to be able to display around 10000 products. UI is not
  suppose to be intuitive but non-logined user page is suppose to be able to
  generate a tree in sane amount of time (few minutes, preferably few
  seconds).
