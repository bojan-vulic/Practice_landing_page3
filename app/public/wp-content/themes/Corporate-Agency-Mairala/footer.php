 <!-- footer -->
    <footer>
        <section class="container">
          
           <?php if(is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>
            
            <?php if(is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
            <?php endif; ?>
            
            <?php if(is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
            <?php endif; ?>
            
            <?php if(is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
            <?php endif; ?>

        </section>
    </footer>
    <!-- bottomBar -->
    <section class="bottomBar">
    
            <?php if(is_active_sidebar('footer-5')) : ?>
            <?php dynamic_sidebar('footer-5'); ?>
            <?php endif; ?>
            
    </section>  
<!-- JQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- OWL Carousel JS -->
<script src="owl.carousel.min.js"></script>
<!-- Intenal JS -->
<script src="main.js"></script>
<?php wp_footer(); ?>
</body>
</html>