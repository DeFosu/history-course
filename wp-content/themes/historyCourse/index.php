<?php get_header(); ?>

<div class="home__main container">
    <div>
        <h1>
            <?php the_field('home_section_title'); ?>
        </h1>

        <div class="avatar mobile">
            <img src="<?php echo get_template_directory_uri(); ?>/images/home-1.png" alt="Рамка" class="avatar-frame" />
            <img src="<?php the_field('home_section_image'); ?>" alt="<?php the_field('home_section_title'); ?>" class="photo" />
        </div>

        <button class="accent-button">
            <?php the_field('home_section_button'); ?>
        </button>
    </div>
    <div>
        <div class="avatar desktop">
            <img src="<?php echo get_template_directory_uri(); ?> /images/home-1.png" alt="Рамка" width="364" height="583" class="avatar-frame" />
            <img src="<?php the_field('home_section_image'); ?>" alt="<?php the_field('home_section_title'); ?>" width="618" height="621" class="photo" />
        </div>
    </div>
</div>
</section>
<section id="about">
    <div id="bg-1_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-1.png" alt="bg_element-1"></div>
    <div id="bg-2_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-2.png" alt="bg_element-2"></div>
    <div class="container">
        <div class="section__title-1">
            <h2><?php the_field('about_section_title'); ?></h2>
        </div>
        <div class="section__text">
            <p><?php the_field('about_section_text'); ?></p>
        </div>
        <div class="section__collection">
            <div class="section__card" id="card-1">
                <span><?php the_field('about_section_card_1'); ?></span>
            </div>
            <div class="section__card" id="card-2">
                <span><?php the_field('about_section_card_2'); ?></span>
            </div>
            <div class="section__card" id="card-3">
                <span><?php the_field('about_section_card_3'); ?></span>
            </div>
            <div class="section__card" id="card-4">
                <span><?php the_field('about_section_card_4'); ?></span>
            </div>
            <div class="section__card" id="card-5">
                <span><?php the_field('about_section_card_5'); ?></span>
            </div>
            <div class="section__card" id="card-6">
                <span><?php the_field('about_section_card_6'); ?></span>
            </div>
        </div>
    </div>
</section>

<section id="advantages" class="section__bg">

    <div id="bg-5_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-5.png" alt="bg_element-5"></div>
    <div class="container">
        <div class="section__title-2">
            <h2><?php the_field('advantages_section_title'); ?>
                <div id="bg-3_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-3.png" alt="bg_element-3"></div>
                <div id="bg-4_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-4.png" alt="bg_element-4"></div>
            </h2>
        </div>
        <div class="section__collection">
            <div class="section__column">
                <div class="section__card">
                    <span class="number"><?php the_field('advantages_card_1_number'); ?></span>
                    <div class="text"><?php the_field('advantages_card_1_text'); ?></div>
                </div>
                <div class="section__card">
                    <span class="number"><?php the_field('advantages_card_2_number'); ?></span>
                    <div class="text"><?php the_field('advantages_card_2_text'); ?></div>
                </div>
                <div class="section__card">
                    <span class="number"><?php the_field('advantages_card_3_number'); ?></span>
                    <div class="text"><?php the_field('advantages_card_3_text'); ?></div>
                </div>
            </div>
            <div class="section__column">
                <div class="section__card">
                    <span class="number"><?php the_field('advantages_card_4_number'); ?></span>
                    <div class="text"><?php the_field('advantages_card_4_text'); ?></div>
                </div>
                <div class="section__card">
                    <span class="number"><?php the_field('advantages_card_5_number'); ?></span>
                    <div class="text"><?php the_field('advantages_card_5_text'); ?></div>
                </div>
                <div class="section__card">
                    <span class="number"><?php the_field('advantages_card_6_number'); ?></span>
                    <div class="text"><?php the_field('advantages_card_6_text'); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="reviews">
    <div id="bg-2_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-2.png" alt="bg_element-2"></div>
    <div id="bg-4_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-4.png" alt="bg_element-4"></div>
    <div id="bg-6_1" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-6.png" alt="bg_element-6"></div>
    <div class="container">
        <div class="section__title-1">
            <h2><?php the_field('reviews_section_title'); ?></h2>
        </div>
        <div class="section__collection">
            <div class="section__card" id="review-1">
                <div id="bg-1_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-1.png" alt="bg_element-1"></div>
                <div class="title"><?php the_field('review_1_title'); ?></div>
                <div class="text">
                    <?php the_field('review_1_text'); ?>
                </div>
            </div>
            <div class="section__card" id="review-2">
                <div class="title"><?php the_field('review_2_title'); ?></div>
                <div class="text">
                    <?php the_field('review_2_text'); ?>
                </div>
            </div>
            <div class="section__card" id="review-3">
                <div id="bg-5_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-5.png" alt="bg_element-5"></div>
                <div class="title"><?php the_field('review_3_title'); ?></div>
                <div class="text">
                    <?php the_field('review_3_text'); ?>
                </div>
            </div>
            <div class="section__card" id="review-4">
                <div id="bg-3_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-3.png" alt="bg_element-3"></div>
                <div id="bg-4_3" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-4.png" alt="bg_element-4"></div>
                <div class="title"><?php the_field('review_4_title'); ?></div>
                <div class="text">
                    <?php the_field('review_4_text'); ?>
                </div>
            </div>
            <div class="section__card" id="review-5">
                <div id="bg-6_2" class="bg-element"><img src="<?php echo get_template_directory_uri(); ?> /images/background_elements/bg-6.png" alt="bg_element-6"></div>
                <div class="title"><?php the_field('review_5_title'); ?></div>
                <div class="text">
                    <?php the_field('review_5_text'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
</main>
<script>
    let menuBtn = document.querySelector("#burger-menu");
    let menu = document.querySelector(".mobile-menu");

    menuBtn.addEventListener("click", function(e) {
        e.stopPropagation();
        menuBtn.classList.toggle("active");
        menu.classList.toggle("active");
    });

    document.addEventListener("click", function(e) {
        if (!menu.contains(e.target) && !menuBtn.contains(e.target)) {
            menuBtn.classList.remove("active");
            menu.classList.remove("active");
        }
    });
</script>
<?php get_footer(); ?>