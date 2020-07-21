# ex-aethera ecom
## Description
E-Commerce platform meant to replace Magento with a more up2date and faster code base.  This project main purpose is to show how to use our various bundles to build a full fledged ecommerce application.

We choose to use the Symfony PHP framework as we think it now became a stable and mature solution for developing production ready products.

## Features
We aim to develop a complete eCommerce solution with the following features:

- Lightning fast processing of content pages
- Catalog with hierarchical category structure and different types of products (simple, configurable, bundled, virtual, ...)
- CMS system for static pages
- Configurable URL rewrites for clean URLs
- Extensible sitemap.xml for SEO
- Extensible feed providers (google shopping, facebook marketplace, ...)
- Customizable styling with less preprocessor

## Installation
- clone project into www dir
- set appropriate permissions to the folders and files
- Copy and/or rename the .env.example file to .env
- Generate a random secret seed number and store it in environment variable APP_SECRET in .env file
- In the projects' root execute `composer install` to install php dependencies
- In the projects' root execute `npm install` to install npm dependencies