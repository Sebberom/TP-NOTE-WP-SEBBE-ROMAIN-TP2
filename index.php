<?php get_header(); ?>

<h1>Randonnées - Niveau Facile</h1>

<?php
$args = array(
    'post_type' => 'randonnee',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'difficulte',
            'field'    => 'slug',
            'terms'    => 'facile',
        ),
    ),
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : ?>

    <div class="randonnee-archive-list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <article class="randonnee-card-component">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </article>
        <?php endwhile; ?>
    </div>

<?php else : ?>
    <p>Aucune randonnée facile trouvée.</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>


<!-- ====================== MOYEN ====================== -->

<h1>Randonnées - Niveau Moyen</h1>

<?php
$args = array(
    'post_type' => 'randonnee',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'difficulte',
            'field'    => 'slug',
            'terms'    => 'moyen',
        ),
    ),
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : ?>

    <div class="randonnee-archive-list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <article class="randonnee-card-component">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </article>
        <?php endwhile; ?>
    </div>

<?php else : ?>
    <p>Aucune randonnée moyenne trouvée.</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>


<!-- ====================== DIFFICILE ====================== -->

<h1>Randonnées - Niveau Difficile</h1>

<?php
$args = array(
    'post_type' => 'randonnee',
    'posts_per_page' => 3,
    'tax_query' => array(
        array(
            'taxonomy' => 'difficulte',
            'field'    => 'slug',
            'terms'    => 'difficile',
        ),
    ),
);
$query = new WP_Query($args);
?>

<?php if ( $query->have_posts() ) : ?>

    <div class="randonnee-archive-list">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
            <article class="randonnee-card-component">
                <a href="<?php the_permalink(); ?>">
                    <h2><?php the_title(); ?></h2>
                </a>
            </article>
        <?php endwhile; ?>
    </div>

<?php else : ?>
    <p>Aucune randonnée difficile trouvée.</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
