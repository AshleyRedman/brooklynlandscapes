<?php

use Timber\Post;
use Timber\Timber;

$context = Timber::context();

$page = new Post();

$context['page'] = $page;

Timber::render([$page->post_name . '/index.twig', 'templates/page.twig'], $context);
