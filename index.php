<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

    <!-- <section class="slideshow">
        <img src="<?php echo get_template_directory_uri() ?>/images/slideshow.jpg" class="img-fluid picture">
    </section> -->

    <section class="about_simfur">
        <div class="about_simfur_left">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="img_shadow"></div>
        </div>

        <div class="about_simfur_right">

            <div class="about_simfur_right_content">
                <div>
                    <h2>More than Furniture,</h2>
                    <h1>We Build Dreams.</h1>
                </div>
    
                <p>design x functionality</p>
    
                <p>Founded in the 1980s in Penang, Malaysia under the name Sim Furnishing, we started from a humble beginning providing custom-made wooden furniture for private oresidences and small-time commercial clients. Over the years, our commitment to original craftsmanship, quality materials and workmanship has propelled us by leaps and bounds and enabled us to explore the many facets of interior design, construction and project management. In 2005, our business model was revamped as a total solution provider when the company was incorporated as Simfur Design Sdn. Bhd.</p>

                <div class="btn">more about us</div>
            </div>

        </div>
    </section>

    <section class="about_simfur">
        <div class="about_simfur_left">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="img_shadow"></div>
        </div>

        <div class="about_simfur_right">

            <div class="about_simfur_right_content">
                <div>
                    <h2>More than Furniture,</h2>
                    <h1>We Build Dreams.</h1>
                </div>
    
                <p>design x functionality</p>
    
                <p>Founded in the 1980s in Penang, Malaysia under the name Sim Furnishing, we started from a humble beginning providing custom-made wooden furniture for private oresidences and small-time commercial clients. Over the years, our commitment to original craftsmanship, quality materials and workmanship has propelled us by leaps and bounds and enabled us to explore the many facets of interior design, construction and project management. In 2005, our business model was revamped as a total solution provider when the company was incorporated as Simfur Design Sdn. Bhd.</p>

                <div class="btn">more about us</div>
            </div>

        </div>
    </section>

</div>

<?php include('footer.php'); ?>
