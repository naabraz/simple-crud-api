# Simple Crud API

This is an experimental project to study REST API with Slim PHP framework.

## Installing dependencies

This project was made with Compose, so it's necessary to run: ```composer install``` to install all dependencies.

## Starting the server

Run: ```php -S localhost:8000``` to run the application.

## Creating database

Doctrine was used as ORM for this project. Run this command to create a local database: ```vendor/bin/doctrine orm:schema-tool:update --force```

