<?php get_header() ?>

<?php
    $sports = get_terms(['taxonomy' => 'sport']);
?>
<ul class="nav nav-pills my-4">
    <?php foreach($sports as $sport): ?>
    <li class="nav-item">
        <a href="<?= get_term_link($sport) ?>" class="nav-link <?= is_tax('sport', $sport->term_id) ? 'active': ''?>" ><?= $sport->name ?></a>
    </li>
    <?php endforeach ?>
</ul>

<div class="row">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
    <?php endwhile; ?>

    <?php Pagination::paginate() ?>

    <?php else : ?>
        <p>Aucun article :(</p>
    <?php endif; ?>
</div>

<?php get_footer() ?>