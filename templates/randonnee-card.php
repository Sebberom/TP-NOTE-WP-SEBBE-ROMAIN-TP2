        <?php $distance = get_field('distance');
                $duree = get_field('duree');
                $image = get_field('image');
                ?>

                <article class="randonnee-card-component">
                    
                    <a href="<?php the_permalink(); ?>">
                        
                        <?php if($image): ?>
                            <img src="<?= esc_url($image['url']); ?>" alt="">
                        <?php endif; ?>

                        <?php the_post_thumbnail('medium'); ?>
                        <h2><?php the_title(); ?></h2>

                    </a>

                    <p>Distance : <?= esc_html($distance); ?> km</p>
                    <p>Durée : <?= esc_html($duree); ?></p>

                </article>