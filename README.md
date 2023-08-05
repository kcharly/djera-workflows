# Workflows App for Djera Group

## Local Development

Steps to follow for local environnement configuration:

### Create a new laravel app

-   laravel new djera-workflows (breeze, vue + inertia, dark mode, pest)
-   composer require barryvdh/laravel-debugbar --dev
-   composer require laravel-lang/common --dev
-   composer require pestphp/pest-plugin-faker --dev
-   composer require laravel/pint --dev
-   composer require nunomaduro/larastan --dev
-   artisan lang:update
-   artisan queue:table
-   artisan session:table
-   npm install @headlessui/vue
-   npm install @heroicons/vue
-   npm install class-variance-authority
-   npm install laravel-precognition-vue-inertia
-   npm install prettier --save-dev
-   npm install prettier-plugin-tailwindcss --save-dev

### Configure an octane server

-   composer require laravel/octane
-   artisan octane:install
-   pecl install swoole
-   npm install chokidar --save-dev

## Start app for local development

-   npm run dev
-   artisan octane:start --watch

## Devlog

-   new Admin namespace for models, controllers, factory
