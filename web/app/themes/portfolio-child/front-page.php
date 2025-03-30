<?php get_header(); ?>

    <main id="main" class="site-main home-page">
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Louison Petit</h1>
                    <p class="tagline">Développeur Informatique en formation</p>
                    <p class="intro">Étudiant en 2ème année de BUT informatique à Laval, passionné par le développement web et mobile.</p>
                    <div class="hero-buttons">
                        <a href="#projects" class="button primary">Voir mes projets</a>
                        <a href="#contact" class="button secondary">Me contacter</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about-section">
            <div class="container">
                <div class="section-header">
                    <h2>À propos de moi</h2>
                </div>

                <div class="about-content">
                    <div class="about-text">
                        <p>Je suis étudiant en 2ème année de BUT informatique à Laval, à la recherche d'une alternance pour 2025-2026. Passionné par le développement informatique, j'ai acquis de solides compétences techniques à travers mes études et différents projets personnels et académiques.</p>

                        <p>J'ai notamment réalisé un stage chez Tempora où j'ai travaillé sur la modernisation d'applications web et le développement d'API. Je suis également impliqué dans divers projets étudiants comme le site du BDE et le développement de jeux en Kotlin et Java.</p>

                        <h3>Mes compétences</h3>
                        <div class="skills-container">
                            <div class="skill-category">
                                <h4>Langages de programmation</h4>
                                <ul class="skills-list">
                                    <li>Java</li>
                                    <li>Python</li>
                                    <li>HTML/CSS</li>
                                    <li>JavaScript</li>
                                    <li>PHP</li>
                                    <li>Kotlin</li>
                                    <li>SQL</li>
                                    <li>C</li>
                                </ul>
                            </div>

                            <div class="skill-category">
                                <h4>Frameworks & Outils</h4>
                                <ul class="skills-list">
                                    <li>Symfony</li>
                                    <li>Suite JetBrain</li>
                                    <li>VS Code</li>
                                    <li>GitHub</li>
                                    <li>Figma</li>
                                    <li>MySQL</li>
                                </ul>
                            </div>

                            <div class="skill-category">
                                <h4>Gestion de projets</h4>
                                <ul class="skills-list">
                                    <li>Méthodes Agiles</li>
                                    <li>Scrum</li>
                                    <li>Gantt, PERT</li>
                                    <li>Analyse des risques</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience" class="experience-section">
            <div class="container">
                <div class="section-header">
                    <h2>Expériences</h2>
                </div>

                <div class="experience-content">
                    <div class="experience-item">
                        <h3>Stage chez Tempora</h3>
                        <p class="experience-meta">Avril - Mai 2025 | 8 semaines</p>
                        <ul>
                            <li>Modernisation d'application web (HTML5, CSS, JavaScript)</li>
                            <li>Développement d'API et fonctionnalités frontend (Scala)</li>
                            <li>Amélioration de la sécurité, performance et maintenabilité</li>
                            <li>Optimisation des fonctionnalités d'agenda et messagerie</li>
                        </ul>
                    </div>

                    <div class="experience-item">
                        <h3>Stage chez Zenika</h3>
                        <p class="experience-meta">Entreprise de conseil informatique</p>
                    </div>

                    <div class="experience-item">
                        <h3>Emplois saisonniers</h3>
                        <p>Agent de mise sous pli, ouvrier agricole</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="featured-projects">
            <div class="container">
                <div class="section-header">
                    <h2>Mes projets</h2>
                </div>

                <?php
                // Récupérer les 3 dernières réalisations
                $args = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $featured_projects = new WP_Query($args);

                if($featured_projects->have_posts()): ?>
                    <div class="projects-grid">
                        <?php while($featured_projects->have_posts()): $featured_projects->the_post(); ?>
                            <div class="project-card">
                                <a href="<?php the_permalink(); ?>" class="project-link">
                                    <?php if(has_post_thumbnail()): ?>
                                        <div class="project-thumbnail">
                                            <?php the_post_thumbnail('medium_large'); ?>
                                        </div>
                                    <?php endif; ?>

                                    <div class="project-info">
                                        <h3 class="project-title"><?php the_title(); ?></h3>

                                        <?php if(function_exists('get_field') && get_field('client')): ?>
                                            <div class="project-client">
                                                Client: <?php echo get_field('client'); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="project-excerpt">
                                            <?php the_excerpt(); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <div class="view-all-container">
                        <a href="<?php echo get_post_type_archive_link('portfolio'); ?>" class="button">Voir tous mes projets</a>
                    </div>

                    <?php wp_reset_postdata(); ?>
                <?php else: ?>
                    <div class="projects-list">
                        <div class="project-item">
                            <h3>Site du BDE</h3>
                            <p>Analyse des besoins et cahier des charges, maquetage, conception et implémentation de la base de données. Site fait en PHP avec 3 autres étudiants.</p>
                            <p><strong>Technologies :</strong> PHP, HTML, CSS, MySQL</p>
                            <p><strong>Durée :</strong> 120 heures</p>
                        </div>

                        <div class="project-item">
                            <h3>Jeu 2048</h3>
                            <p>Développement du jeu mobile en Kotlin avec utilisation de différents capteurs du téléphone.</p>
                            <p><strong>Technologies :</strong> Kotlin, Android Studio</p>
                            <p><strong>Durée :</strong> 12 heures</p>
                        </div>

                        <div class="project-item">
                            <h3>Morpion</h3>
                            <p>Création du jeu du Morpion avec Java et JavaFX, en améliorant les règles.</p>
                            <p><strong>Technologies :</strong> Java, JavaFX</p>
                            <p><strong>Durée :</strong> 20 heures</p>
                        </div>

                        <div class="project-item">
                            <h3>Projets personnels</h3>
                            <p>TO-DO List et Application Trello en JavaScript, Générateur de mots de passe et Démineur avec Tkinter, Jeu RPG avec Pygame.</p>
                            <p><strong>Technologies :</strong> JavaScript, Python (Tkinter, Pygame)</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <section id="education" class="education-section">
            <div class="container">
                <div class="section-header">
                    <h2>Formation</h2>
                </div>

                <div class="education-content">
                    <div class="education-item">
                        <h3>BUT Informatique</h3>
                        <p class="education-meta">2023 - Présent | IUT de Laval</p>
                        <p>Formation en cours, spécialisation en développement d'applications.</p>
                    </div>

                    <div class="education-item">
                        <h3>Baccalauréat Général</h3>
                        <p class="education-meta">2023 | Sacré Coeur Angers</p>
                        <p>Spécialités NSI et Mathématiques, Mention Très Bien.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <div class="container">
                <div class="section-header">
                    <h2>Contact</h2>
                </div>

                <div class="contact-content">
                    <div class="contact-info">
                        <p>N'hésitez pas à me contacter pour discuter de projets ou d'opportunités d'alternance.</p>

                        <div class="contact-methods">
                            <div class="contact-method">
                                <i class="icon-phone">📱</i>
                                <div class="method-details">
                                    <h4>Téléphone</h4>
                                    <p>07 67 09 72 32</p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <i class="icon-email">✉️</i>
                                <div class="method-details">
                                    <h4>Email</h4>
                                    <p><a href="mailto:louisonpetit67@gmail.com">louisonpetit67@gmail.com</a></p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <i class="icon-linkedin">🔗</i>
                                <div class="method-details">
                                    <h4>LinkedIn</h4>
                                    <p><a href="https://linkedin.com/in/louison-petit" target="_blank">linkedin.com/in/louison-petit</a></p>
                                </div>
                            </div>

                            <div class="contact-method">
                                <i class="icon-github">💻</i>
                                <div class="method-details">
                                    <h4>GitHub</h4>
                                    <p><a href="https://github.com/Logtimal" target="_blank">github.com/Logtimal</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>