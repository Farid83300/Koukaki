<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video class="fade-in-down" id="banner-video" alt="Bannière animée" autoplay loop muted>
                <source src="/wp-content/themes/foce-child/videos/Studio+Koukaki-vidéo+header+sans+son+(1).mp4" type="video/mp4">
            </video>
            <img class="logo" id="logo" src="/wp-content/themes/foce-child/images/logo.png'" alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="#story" class="story fade-in-up">
            <h2><span>L'histoire</span></h2>
            <article class="story__article">
                <p class="fade-in-down"><?php echo get_theme_mod('story'); ?></p>
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
            
            <?php get_template_part('template-parts/personnages')?>
    
            <article id="place" class="fade-in-up">
                <div>
                    <h3><span>Le Lieu</span></h3>
                    <p class="fade-in-down"><?php echo get_theme_mod('place'); ?></p>
                    <img class="big-cloud" src="wp-content\themes\foce-child\images\big_cloud.png" alt="Gros nuage">
                    <img class="little-cloud" src="wp-content\themes\foce-child\images\little_cloud.png" alt="Petit nuage">
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in-up">
            <h2><span>Studio Koukaki</span></h2>
            <div>
                <p class="fade-in-down">Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p class="fade-in-down">Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>

        <?php get_template_part('template-parts/nomination')?>

    </main><!-- #main -->

    

<?php
get_footer();
