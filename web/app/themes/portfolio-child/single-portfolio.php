<?php get_header(); ?>

    <main id="main" class="site-main">
        <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-single'); ?>>

            <div class="container">
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <?php if(has_post_thumbnail()): ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <div class="project-details">
                    <h2>Détails du projet</h2>

                    <?php if(get_field('client')): ?>
                        <div class="detail-item">
                            <strong>Client:</strong> <?php echo get_field('client'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('date_realisation')): ?>
                        <div class="detail-item">
                            <strong>Date de réalisation:</strong> <?php echo get_field('date_realisation'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(get_field('project_url')): ?>
                        <div class="detail-item">
                            <strong>Voir le projet:</strong>
                            <a href="<?php echo get_field('project_url'); ?>" target="_blank">
                                <?php echo get_field('project_url'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

                <?php
                // Affichage de la galerie d'images
                $images = get_field('gallery');
                if($images): ?>
                    <div class="project-gallery">
                        <h2>Galerie du projet</h2>
                        <div class="gallery-grid">
                            <?php foreach($images as $image): ?>
                                <div class="gallery-item">
                                    <a href="<?php echo esc_url($image['url']); ?>">
                                        <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

        </article>
    </main>

<?php get_footer(); ?>