<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

    <section class="slideshow">
        <img src="<?php echo get_template_directory_uri() ?>/images/slideshow.jpg" class="img-fluid picture">
        
    </section>

    <section class="about_simfur">
        <div class="about_simfur_left">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="img_shadow"></div>
        </div>
        <div class="about_simfur_right">
        More than Furniture,
        We Build Dreams.
        </div>
    </section>

</div>

<?php include('footer.php'); ?>
