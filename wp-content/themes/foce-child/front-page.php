<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner fade-section-top">
            <?php get_template_part('partials/section', 'banner'); ?>
            
            <div class="js-parallax logo-hidden">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" class="hero__logo fade-section-bot float-logo " alt="logo Fleurs d'oranger & chats errants" />
            </div>
            
        </section>
        <section id="story" class="story fade-section-bot">
            <h2 class="title-to-animate">
                <span class="wall">
                    <span class="title-text">L'histoire</span>
                </span>
            </h2>
            <article id="" class="story__article ">
                <p class="fade-section-top">
                    <?php echo get_theme_mod('story'); ?>
                </p>    
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
                    
            <?php 
            $characters_query = new WP_Query($args);
            get_template_part('partials/section', 'characters', array(
            'characters_query' => $characters_query
            )); ?>

            <article id="place" class="place-section">
                <div>
                    <h3 class="title-to-animate">Le Lieu</h3>
                    <p ><?php echo get_theme_mod('place'); ?></p>
                </div>
                <div class="clouds-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/big_cloud.png" class="cloud cloud1" alt="cloud1"/>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/little_cloud.png" class="cloud cloud2" alt="cloud2"/>
                </div>

            </article>
        </section>


        <section id="studio" class="fade-section-bot">
            <h2 class="title-to-animate">
                <span class="wall word-1">
                    <span class="title-text ">Studio</span>
                </span>
                <span class="wall word-2">
                    <span class="title-text ">Koukaki</span>
                </span>
            </h2>
            <div>
                <p class="fade-section-top">Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p class="fade-section-top">Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
                
    </main><!-- #main -->

<?php
get_footer();
