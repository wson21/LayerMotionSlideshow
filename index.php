<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

    <section class="slideshow">
        <img src="<?php echo get_template_directory_uri() ?>/images/slideshow.jpg" class="img-fluid picture">
    </section>

    <section class="contain_inner">
        <div class="content_left_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="pic_shadow_left"></div>
        </div>
        <div class="content_right_txt">

            <div class="txt_wrap">
                <h1>
                    More than Furniture,<br>
                    We Build Dreams.
                </h1>
                <p>Founded in the 1980s in Penang, Malaysia under the name Sim Furnishing, we started from a humble beginning providing custom-made wooden furniture for private oresidences and small-time commercial clients. Over the years, our commitment to original craftsmanship, quality materials and workmanship has propelled us by leaps and bounds and enabled us to explore the many facets of interior design, construction and project management. In 2005, our business model was revamped as a total solution provider when the company was incorporated as Simfur Design Sdn. Bhd.</p>
        
                <p>Today, even as we grow in size and scope, our dedication remains true to creating bespoke furniture at a reasonable price. We believe that the best design is a perfect balance between aesthetics and functionality and one that tells the personal story of each client with class and clarity.</p>
            </div>

        </div>
    </section>

    <section class="contain_inner reverse">
        <div class="content_left_txt">

            <div class="txt_wrap">
                <h2>
                    Everything 
                    You Can Dream of,
                    We Make it a Reality.
                </h2>
    
                <p>At Simfur Design, we are not just designers or builders; we are an all-in-one solution provider. That means that not only do we help you to design your kitchen, wardrobe or even your entire house or office, the way you want it, we are also able to manage your entire project for you, from design consultation all the way to manufacturing and installation, as well as liaise with all the relevant contractors and suppliers – so you can have an enjoyable experience while making your dream a vivid reality.</p>
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
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

    <section class="">
    </section>

</d>

<?php include('footer.php'); ?>
