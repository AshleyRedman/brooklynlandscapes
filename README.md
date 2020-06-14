# **Digital Studio | WordPress Starter Theme**

A wordpress starter theme project to help ensure consistent theme development & coding standards by providing a project ready boilerplate.
This theme, like many others leans away from the reccomend WordPress coding standards to give a more _Laravel_ - like feel.
There are various other WordPress / Laravel-like starter themes available, including [Sage](https://roots.io/sage/), [Timber Starter Theme](https://www.upstatement.com/timber/) & [Lumberjack Starter Theme](https://lumberjack.rareloop.com/) of which we used a lot of ideas from, however we noticed that project after project we we're doing the same things these themes to get them ready and 50% of the power of those themes we're not being used.

This opinionated starter theme utilizes a set of tools including:

-   [Timber](https://timber.github.io/docs/)
-   [Twig](https://twig.symfony.com/)
-   [Yarn](https://yarnpkg.com/)
-   [Laravel Mix](https://laravel-mix.com/)
-   [Tailwind css](https://tailwindcss.com/)
-   [Vue _v2_](https://vuejs.org/)
-   [Axios](https://github.com/axios/axios)
-   [Prettier](https://prettier.io/)

## **Getting started:**

1. Clone the repository into your WordPress projects theme directory. (/wp-content/themes/)
2. `cd` into the digital-studio directory
3. Run `composer install`
4. Composer will then install all the required php packages specificed in the composer.json
5. Run `yarn && yarn dev`
6. Yarn will install all the needed JavaScript packages, such as Vue, Babel & more

## **Documentation**

For additional documentation on any of the used technoligies, packages & bundles, please refer to the links at the top of this readme.

## **Extending**

This starter theme by default does not directly support common plugins such as Woocommerce, however the theme can be extended to do so. For this informaiton, please refer to the [Timber Woocommerce](https://timber.github.io/docs/guides/woocommerce) docs.
