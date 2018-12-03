### Task Desription
See ```task_description.txt``` at root of the project.

#### Required setup/environment:
* PHP 7.2
* Symfony 4
* Postgres 10

#### Project dependencies
[Composer](https://getcomposer.org/) is used for managing dependencies.

Open a terminal window & run ```composer install``` command at root of the project.
It will install all required dependencies of the project which are specified in ```composer.json``` file.
It will also create ```vendor``` directory on file system.


#### DB Connection
update connection information in /config/packages/doctrine.yaml
Data for DB is provided in "menu-task/data" in CSV formats.

#### Web server:
If you don't have apache/nginx already configured, you can use php built-in web server as well.
Open a terminal window & run ```php bin/console server:start``` at root of the project to start the server. Then open a browser with address & port where web
server started in terminal window.


#### Login: 
* admin
* demo

Logged In user can add/edit categories & products, while non logged in user can only view the tree.
Tree for non logged in user user is generated fast.

#### Max Allowed Children
* CHILD category can't have "Max Allowed Children" GREATER than PARENT category "Max Allowed Children"
* PARENT category can't have "Max Allowed Children" LESS than CHILD category "Max Allowed Children"
* Child category can't have more children than allowed by parent category "Max Allowed Children"


#### DB Schema
DB schema is defined in menu-task/config/doctrine/
To generate the necessary schema in database, run ```php bin/console doctrine:schema:update --force``` at root of the project.

####  Populating the database
To populate the database, you can use "AUTO CLICK" Google Chrome extension, while disabling the show "Add Product" form in code.
It will simply add hard coded data which is passed to $product entity instance in ProductController:add()


#### Edit Product
Changing the "active" status from false to true will increase active child count of parent category tree.
Similarly changing the "active" status from true to false will decrease the child count of parent category tree.

#### Child Count
For logged in user, there are additional counts visible (next to each category) which simply show total no of child (categories + products) under this category.





