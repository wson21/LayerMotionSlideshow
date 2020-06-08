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

    <section class="what__we__do">
        
        <div class="left">

            <div class="wrap">

            <h1>Everything <br>
                 You Can Dream of,<br>
                We Make it a Reality.
            </h1>
    
            <p>At Simfur Design, we are not just designers or builders; we are an all-in-one solution provider. That means that not only do we help you to design your kitchen, wardrobe or even your entire house or office, the way you want it, we are also able to manage your entire project for you, from design consultation all the way to manufacturing and installation, as well as liaise with all the relevant contractors and supploers - so you have an enjoyable experience while making your dream a vivid reality.</p>

            <div class="btn">what we do</div>

            </div>
        </div>
        
        <div class="right">
            <img src="<?php echo get_template_directory_uri() ?>/images/whatwedo.jpg" class="img-fluid">
            <div class="img_shadow"></div>
        </div>

    </section>

    <section class="whatwedo__icon">

        <div class="inhouse icon">
            <img src="<?php echo get_template_directory_uri() ?>/images/furniture.svg" class="icon_size">
            <h3>In-House</h3>
            <p>Furniture Manufacturing</p>
        </div>

        <div class="project icon">
        <img src="<?php echo get_template_directory_uri() ?>/images/project.svg" class="icon_size">
        <h3>Project</h3>
            <p>Furniture Manufacturing</p>
        </div>

        <div class="oem icon">
        <img src="<?php echo get_template_directory_uri() ?>/images/oem.svg" class="icon_size">
        <h3>oem</h3>
            <p>Original Equipment Manufacturer </p>
        </div>

        <div class="interior icon">
        <img src="<?php echo get_template_directory_uri() ?>/images/interior.svg" class="icon_size">
        <h3>Interior</h3>
            <p>Design & Renovation</p>
        </div>
        
    </section>

    <section class="projects">
        project photo
    </section>

    <section class="philosophy">
    <h3>OUR BUSINESS PHILOSOPHY</h3>
            <div class="box_wrap">
                <div class="box">
                    <img src="<?php echo get_template_directory_uri() ?>/images/quality.svg" class="icon_size">
                    <h3>QUALITY</h3>
                    is our first priority.
                </div>
    
                <div class="box">
                <img src="<?php echo get_template_directory_uri() ?>/images/design.svg" class="icon_size">
                    <h3>DESIGN</h3>
                    is based on originality,<br/>
                    aesthetics and functionality.
                </div>
    
                <div class="box">
                <img src="<?php echo get_template_directory_uri() ?>/images/price.svg" class="icon_size">
                    <h3>PRICE</h3>
                    is always competitive.
                </div>
            </div>

    </section>


</div>

<?php include('footer.php'); ?>
