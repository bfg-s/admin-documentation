# Installation Guide

Integrate the Bfg Admin package into your Laravel application by following the straightforward instructions outlined below. This process involves using Composer, the PHP package manager, to install the package and then configuring your application to utilize it.

## Prerequisites

Ensure you have Laravel installed in your project before proceeding with the Bfg Admin installation. For Laravel installation instructions, refer to the [official Laravel documentation](https://laravel.com/docs/11.x#the-laravel-installer).

## Step 1: Install Bfg Admin via Composer

To install the Bfg Admin package, use Composer by executing the following command in your terminal within your project directory:

```bash
composer require bfg/admin:^6
```

This command downloads and installs the Bfg Admin package as a dependency for your project.

## Step 2: Configure Environment Variables
After installing the package, it is essential to configure specific environment variables in your project's `.env` file to ensure the admin panel functions correctly. This step is crucial for setting up the connection between your application and its database, as the admin panel relies on database interactions for its operations.

## Step 3: Install Bfg Admin
With the Bfg Admin package installed and the environment variables set up, you can now install the admin panel extension in your Laravel application by running:
```bash
php artisan admin:install
```
This command deploys all required migrations and admin files to your Laravel application folder, setting up the admin panel for your project.


By following these steps, you will successfully integrate the Bfg Admin panel into your Laravel project, allowing you to utilize its comprehensive features for efficient application administration and management.
