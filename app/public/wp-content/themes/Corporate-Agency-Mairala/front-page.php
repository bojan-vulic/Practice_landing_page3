<?php get_header(); ?>
<!-- header -->
<header>
    <article class="container">
        <hgroup>
            <h3><?php the_field('main_subtitle'); ?></h3>
            <h1><?php the_field('main_title'); ?></h1>
            <a  href=""><?php echo('Download'); ?><i class="fas fa-download"></i></a>
        </hgroup>
    </article>
</header>

<!-- about us -->
<section class="about">
    <h2 class="underline"><?php the_field('main_title_in_the_about_section'); ?></h2>
    <p><?php the_field('text_under_the_main_title'); ?></p>
    <article>
        <div class="text">
            <h4><?php the_field('subtitle_in_the_about_section'); ?></h4>
            <p><?php the_field('text_under_the_subtitle'); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn"><?php echo ('Read more');?><i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        
        <div class="about-img">
         <img src="<?php the_field('right_background_picture'); ?>" alt="">
        </div>
    </article>
</section>
<!-- services -->
<section class="services container">
    <h4><?php the_field('main_title_in_the_services_section'); ?></h4>
    <p><?php the_field('text_under_the_title_in_the_services_section'); ?></p>
    <article>
        <div>
            <i class="fas fa-users"></i>
            <h5><?php the_field('title_under_the_first_icon_in_the_services_section'); ?></h5>
            <p><?php the_field('text_under_the_first_icon_in_the_services_section'); ?></p>
        </div>
        <div>
            <i class="fas fa-bullhorn"></i>
            <h5><?php the_field('title_under_the_second_icon_in_the_services_section'); ?></h5>
            <p><?php the_field('text_under_the_second_icon_in_the_services_section'); ?></p>
        </div>
        <div>
            <i class="fas fa-users"></i>
            <h5><?php the_field('title_under_the_third_icon_in_the_services_section'); ?></h5>
            <p><?php the_field('text_under_the_third_icon_in_the_services_section'); ?></p>
        </div>
      
    </article>
</section>
<!-- skills -->
<section class="skills">
    <h4><?php the_field('main_title_in_the_skills_section'); ?></h4>
    <div class="row container">
        <article>
            <div class="outer-circle">
                <div class="inner-circle">
                    <p><?php the_field('first_percentage_number'); ?></p>
                </div>
            </div>
            <p><?php the_field('first_title_under_the_circle'); ?></p>
        </article>
        <article>
            <div class="outer-circle">
                <div class="inner-circle">
                    <p><?php the_field('second_percentage_number'); ?></p>
                </div>
            </div>
            <p><?php the_field('second_title_under_the_circle'); ?></p>
        </article>
        <article>
            <div class="outer-circle">
                <div class="inner-circle">
                    <p><?php the_field('third_percentage_number'); ?></p>
                </div>
            </div>
            <p><?php the_field('third_title_under_the_circle'); ?></p>
        </article>
        <article>
            <div class="outer-circle">
                <div class="inner-circle">
                    <p><?php the_field('fourth_percentage_number'); ?></p>
                </div>
            </div>
            <p><?php the_field('fourth_title_under_the_circle'); ?></p>
        </article>
        <article>
            <div class="outer-circle">
                <div class="inner-circle">
                    <p><?php the_field('fifth_percentage_number'); ?></p>
                </div>
            </div>
            <p><?php the_field('fifth_title_under_the_circle'); ?></p>
        </article>
    </div>    
</section>
<!-- project -->
<section class="project">
    <h2 class="underline"><?php the_field('main_title_in_the_projects_section'); ?></h2>
    <p><?php the_field('text_under_the_title_in_the_projects_section'); ?></p>
    <div class="row">
         <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'projects'
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
     <article class="images">
            <div class="img">
               <?php the_post_thumbnail(); ?>
                <div class="overlay">
                    <h5>Paperclips</h5>
                    <h6>Branding</h6>
                </div>
            </div>
        </article>
        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        
        <article class="latest">
            <h3><?php the_field('title_between_the_projects'); ?></h3>
            <p><?php the_field('text_between_the_projects'); ?></p>
            <a href="#">buff.ly/NC8gog</a> 
        </article>
        
         <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'projects2'
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        
        <article class="images">
            <div class="img">
               <?php the_post_thumbnail(); ?>
                <div class="overlay">
                    <h5>Paperclips</h5>
                    <h6>Branding</h6>
                </div>
            </div>
        </article>
        
         <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
      
        <article class="button">
            <a href="<?php the_permalink(); ?>" class="btn"><?php echo ('SEE ALL'); ?><i class="fas fa-long-arrow-alt-right"></i></a>
        </article>
    </div>
</section>

<!-- team -->
<section class="team">
    <h2 class="underline"><?php the_field('main_title_in_the_team_section'); ?></h2>
    <p><?php the_field('text_in_the_team_section'); ?></p>
    <div class="row container">
       
         <?php
        // the query
        $the_query = new WP_Query(array(
            'post_type' => 'teams'
         
        )); ?>

        <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
       
        <article>
            <div class="img">
                <?php the_post_thumbnail(); ?>
                <div class="overlay">
                    <a href="#"><span><i class="fab fa-twitter"></i></span></a>
                    <a href="#"><span><i class="fab fa-facebook-f"></i></span></a>
                    <a href="#"><span><i class="fab fa-linkedin-in"></i></span></a>
                </div>
            </div>
            <div class="text">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
        </article>
        
         <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
      
    </div>
</section>
<!-- testimonial -->
<section class="testimonial">
    <h3><?php the_field('main_title_in_the_testimonial_section'); ?></h3>

    <div class="owl-one owl-carousel owl-theme">
        <div class="item">
            <p><?php the_field('first_text_in_the_testimonial_section'); ?></p>
            <h4><?php the_field('first_name_in_the_testimonial_section'); ?></h4>
            <a href="">www.yourwebsite.zt</a>
        </div>
        <div class="item">
            <p><?php the_field('second_text_in_the_testimonial_section'); ?></p>
            <h4><?php the_field('second_name_in_the_testimonial_section'); ?></h4>
            <a href="">www.yourwebsite.zt</a>
        </div>
        <div class="item">
            <p><?php the_field('third_text_in_the_testimonial_section'); ?></p>
            <h4><?php the_field('third_name_in_the_testimonial_section'); ?></h4>
            <a href="">www.yourwebsite.zt</a>
        </div>
    </div>
</section>
<!-- blog -->
<section class="blog">
    <h2 class="underline">Our blog</h2>
    <p>Nam liber tempor cum soluta nobis eleifend option <br> congue nihil imperdiet doming id quod mazim</p>
    <div class="row container">
        
        
                <?php
            // the query
            $the_query = new WP_Query(array(
            'post_type' => 'post',
            
            )); ?>

                <?php if ($the_query->have_posts()) : ?>

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="wrapper">
            <article class="img">
                <?php the_post_thumbnail(); ?>
            </article>
            <article class="inner">
                <div class="circle"></div>
                <div class="line"></div>
            </article>
            <article class="text">
                <p><?php echo get_the_date('d M Y'); ?></p>
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </article>
        </div>
         <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

                <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

<!--
        <div class="wrapper">
            <article class="img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/skills.png" alt="blog1">
            </article>
            <article class="inner">
                <div class="circle"></div>
                <div class="line"></div>
            </article>
            <article class="text">
                <p>10 April 2014</p>
                <h4>Typi non habent claritatem insitam</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui [...]</p>
            </article>
        </div>

        <div class="wrapper">
            <article class="img">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?><?php echo esc_url(get_template_directory_uri()); ?>/img/skills.png" alt="blog1">
            </article>
            <article class="inner">
                <div class="circle"></div>
                <div class="line"></div>
            </article>
            <article class="text">
                <p>10 April 2014</p>
                <h4>Typi non habent claritatem insitam</h4>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui [...]</p>
            </article>
        </div>
-->

        <div class="wrapper">
            <article class="inner">
                <div class="line"></div>
                <div class="circle">
                    <div class="inner-circle">
                        <span>All</span>
                        <span>Post</span>
                    </div>   
                </div>
            </article>
        </div>
    </div>
</section>

<!-- contact -->
<section class="contact">
    <h2>Contact</h2>
        <form class="container">
        <?php the_field('form'); ?>

        </form>
       
</section>
<?php get_footer(); ?>

   