<?php get_header() ?>

<form class="form-inline">
    <input type="search" name="s" class="form-control mb-2 mr-sm-2" value="<?= get_search_query() ?>" placeholder="Votre recherche">

    <div class="form-check mb-2 mr-sm-2">
        <input class="form-check-input" type="checkbox" value="1" name="sponso" id="inlineFormCheck" <?= checked('1', get_query_var('sponso')) ?>>
        <label class="form-check-label" for="inlineFormCheck">
            Article sponsorisé seulement
        </label>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
</form>

<h1 class="mb-4">Résultat pour votre recherche "<?= get_search_query() ?>"</h1>

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