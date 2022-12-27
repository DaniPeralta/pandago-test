# PandaGo Excercise
Repo to do technical test 

## DATABASE MODEL

On aplication root is the PDF document with the database model and its explanation.

*RUN*

This is a Laravel Sail application (Docker). We have found that for testing purposes, this is about the best approach there is. To bring the application up locally, (with Docker installed) simply cd to the project and run:

## To install Sail project
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

## Run project

*.env.example prepared to used as .env*

```
cd pandago-app
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail composer install
./vendor/bin/sail php artisan migrate
```
When you do the migration, you will already have test data loaded into the database.

## Test

On aplication root is a postman .json with two endpoints to test the aplication.

