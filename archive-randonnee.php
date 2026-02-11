<?php get_header(); ?>

<h1>Nos Randonnées</h1>

<?php if ( have_posts() ) : ?>
    <div class="randonnee-archive">
        <div class="randonnee-archive-list">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part('templates/randonnee-card'); ?>

            <?php endwhile; ?>

        </div>
    </div>

    <?php the_posts_pagination(); ?>

<?php else : ?>
    <p>Aucune randonnée trouvée.</p>
<?php endif; ?>

<?php get_footer(); ?>
