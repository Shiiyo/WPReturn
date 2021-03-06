<?php get_header() ?>
<div class="row">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-sm-4">
                <div class="card">
                    <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-imp-top', 'alt' => '', 'style' => 'height : auto;']); ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                    </div>
                </div>
            </div>
    <?php endwhile; ?>

    <?php montheme_pagination() ?>

    <?php else : ?>
        <p>Aucun article :(</p>
    <?php endif; ?>
</div>

<?php get_footer() ?>