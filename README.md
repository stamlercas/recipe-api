# RecipeAPI

### What is this?
This API is an open source API for sharing recipes and recipe related data.  With this API, you will be able to view recipes, ingredients, directions, nutrients, units, and their conversions.

### What are we using?
The Recipe API is a REST API built using the Laravel framework. All data is stored in a database, and made available via RESTful endpoints which return JSON data.

### Getting Started

If you're interested in working on the RecipeAPI, you can start by identifying and fixing errors, writing additional unit tests (these desperately need written), and adding comments to confusing code. 

## Installation
First, copy the env.example file, rename it to .env, and configure it to your needs.

Install the composer requirements.
```
composer install
```
Generate the app key.
```
php artisan key:generate
```

Create the database
```
php artisan migrate
```

Populate database
```
php artisan db:seed
```

Run the app
```
php artisan serve
```

## Testing
TODO: Make tests.
