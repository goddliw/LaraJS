<p align="center">
  <img width="320" src="https://cdn-images-1.medium.com/max/2600/0*rHWrSMikANaGuc11">
</p>
<p align="center">
  <a href="https://github.com/vuejs/vue">
    <img src="https://img.shields.io/badge/laravel-5.8-red.svg" alt="laravel-5.8">
  </a>
  <a href="https://laravel.com/docs/5.8">
    <img src="https://img.shields.io/badge/vue-2.5.17-brightgreen.svg" alt="vue">
  </a>
  <a href="https://github.com/ElemeFE/element">
    <img src="https://img.shields.io/badge/element--ui-2.7.2-brightgreen.svg" alt="element-ui">
  </a>
  <a href="https://bulma.io/documentation/">
    <img src="https://img.shields.io/badge/bulma-0.7.5-brightgreen.svg" alt="element-ui">
  </a>
  <a href="https://tailwindcss.com/docs/installation">
    <img src="https://img.shields.io/badge/tailwindcss-1.0.1-brightgreen.svg" alt="element-ui">
  </a>
  <a href="https://github.com/PanJiaChen/vue-element-admin/blob/master/LICENSE">
    <img src="https://img.shields.io/badge/license-MIT-brightgreen.svg" alt="license">
  </a>
</p>

# Larajs

## Preparation
** [Node](http://nodejs.org/)

** [Git](https://git-scm.com/)

** [Laravel](https://laravel.com/)

The project is built on top of [Laravel](https://laravel.com), [vue](https://cn.vuejs.org/index.html), [vuex](https://vuex.vuejs.org/zh-cn/), [vue-router](https://router.vuejs.org/zh-cn/), [axios](https://github.com/axios/axios) and [element-ui](https://github.com/ElemeFE/element). Since this is positioned as an enterprise management solution, it is recommended to use it to start a project.

## API
API will be served by Laravel. In this project, you need to run migration and data feeder to generate sample data for authentication/authorization, other APIs will be faked.

## Getting started
This project is built on top of fresh latest version Laravel (5.8). You should check the installation guide of Laravel [here](https://laravel.com/docs/5.8)

```bash
# Clone the project and run composer
git clone https://github.com/laudaikinhdi/larajs.git
# https://github.com/beyondcode/laravel-er-diagram-generator#requirements
sudo apt-get install graphviz #(For ubuntu)
cd larajs
composer install

# Create .env from .env.example
cp .env.example .env

# Generate application key
php artisan key:generate

# Migration and DB seeder (after changing your DB settings in .env)
php artisan migrate --seed

# Generate Passport secret key
php artisan passport:install

# Config Virtual host 
Exemple: http://local.larajs.com

# Change passport and api 
PASSPORT_CLIENT_SECRET, PASSPORT_CLIENT_ID, PASSPORT_LOGIN_ENDPOINT, BASE_API

# install dependency
npm install

#Generate file lang
php artisan vue-i18n:generate

# develop
npm run dev # or npm run watch

# username, password
- Amin
username: admin@larajs.com
password: admin123
- User 
username: user@larajs.com
password: user123

# Build on production
npm run production
```
