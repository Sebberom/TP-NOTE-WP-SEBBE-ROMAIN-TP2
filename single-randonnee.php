<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); 

$distance = get_field('distance');
$duree = get_field('duree');
$image = get_field('image');
$points_interets = get_field('points_int');
?>

<section>
    <?php if ($image) :

    if (is_array($image)) {
        $image_url = $image['url'];
    } elseif (is_numeric($image)) {
        $image_url = wp_get_attachment_url($image);
    } else {
        $image_url = $image;
    }
?>
    <img src="<?= esc_url($image_url); ?>" alt="">
<?php endif; ?>


    <p>Distance : <?= esc_html($distance); ?> km</p>
    <p>Durée : <?= esc_html($duree); ?></p>


        <?php if (have_rows('points_int')): ?>
            <h3>Points d'intérêts :</h3>
            <ul>
                <?php while (have_rows('points_int')) : the_row(); 
                    $nom = get_sub_field('nom');
                ?>
                    <li><?= esc_html($nom); ?></li>
                <?php endwhile; 
endif; ?>
            </ul>

</section>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
