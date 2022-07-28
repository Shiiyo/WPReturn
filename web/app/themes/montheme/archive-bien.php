<?php get_header() ?>

<h1>Voir tous nos biens : </h1>

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