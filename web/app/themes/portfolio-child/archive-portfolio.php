<?php get_header(); ?>

    <main id="main" class="site-main">
        <div class="container">
            <header class="page-header">
                <h1 class="page-title">Portfolio</h1>
            </header>

            <?php if(have_posts()): ?>
                <div class="portfolio-grid">
                    <?php while(have_posts()): the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-item'); ?>>
                            <a href="<?php the_permalink(); ?>" class="portfolio-link">
                                <?php if(has_post_thumbnail()): ?>
                                    <div class="portfolio-thumbnail">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </div>
                                <?php endif; ?>

                                <div class="portfolio-content">
                                    <h2 class="portfolio-title"><?php the_title(); ?></h2>

                                    <?php if(get_field('client')): ?>
                                        <div class="portfolio-client">
                                            Client: <?php echo get_field('client'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="portfolio-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <div class="pagination">
                    <?php echo paginate_links(); ?>
                </div>

            <?php else: ?>
                <p>Aucune réalisation trouvée.</p>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>