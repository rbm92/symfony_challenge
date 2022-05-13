# SYMPHONY CHALLENGE

## Author

Ricard Bargallo

## Project Description

Creation of a simple Product CRUD API using PHP Symfony framework and its ecosystem

## Previous Requirements

Install PHP, Composer & Symfony

## Project Methodology

### 1. Creating the project skeleton

symfony new --full sym_prod

### 2. Setting the environment variables on .env (example on MySQL)

DB_USER=your_user
DB_PASSWORD=your_password
DB_HOST=your_host
DB_PORT=your_port
DB_NAME=your_url

DATABASE_URL=mysql://${DB_USER}:${DB_PASSWORD}@${DB_HOST}:${DB_PORT}/${DB_NAME}

### 3. Creating DB

php bin/console doctrine:database:create
(after confirming, DB will be added locally)

### 4. Creating the 'product' entity

php bin/console make:entity
Class name: Product

Adding properties:
Name Type Length Nullable
type string 60 no
name string 60 no
description string 150 yes
weight integer no
enabled boolean no

### 5. Creating and running the migration

php bin/console make:migration
php bin/console doctrine:migration:migrate
(after confirming, table 'product' will be created on DB)

### 6. Creating CRUD

php bin/console make:crud Product
Controller class: ProductController
Generate tests? No

### 7. Editing main endpoint

/product will be changed to /catalog/products

### 8. Editing the $builder

In src/Form/ProductType:

- type will have a ChoiceType
- enable will have a CheckboxType

### 9. Starting the server

symfony server:start --no-tls

### 10. Going to Product Index

http://localhost:8000/catalog/products

### 11. Adding a new product

All fields required but description
Once created, it can be shown, updated or deleted

### 12. Adding styles

On templates/base.html.twig,
adding a 'link' tag inside block stylesheets with attribute:
href="{{ asset('css/styles.css') }}

On 'public' folder, creating a 'css' folder and a 'styles.css'

## Happy Coding! :heart:
