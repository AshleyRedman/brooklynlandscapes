<?php

use Timber\Post;
use Timber\Timber;

$context = Timber::context();

$context['page'] = new Post();

Timber::render(['templates/page.twig'], $context);
