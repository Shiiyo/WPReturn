<?php

use JupiterX_Core\Raven\Modules\Forms\Fields\Time;
use Timber\Timber;

$context = Timber::get_context();
$context['firstname'] = 'Camille';
$context['posts'] = Timber::query_posts();

Timber::render('page/index.twig', [$context]);