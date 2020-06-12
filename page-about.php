<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

    <h1 style="text-align: center; padding-top: 200px;">Who We Are</h1>

    <section class="group_photo"><img src="<?php echo get_template_directory_uri() ?>/images/group_photo.jpg" class="img-fluid"></section>

    <section class="contain_inner">
        <div class="content_left_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about_1.jpg" class="img-fluid" width="650">
            <div class="pic_shadow_left" style="height:520px;"></div>
        </div>
        <div class="content_right_txt">

            <div class="txt_wrap">
                <h2>
                    More than Furniture,<br>
                    We Build Dreams.
                </h2>
                <p>Simfur Design Sdn. Bhd. is an end-to-end solution provider
                    with more than two decades of hands-on experience in
                    conceptualising, designing and manufacturing furniture
                    that complements various design languages, styles and
                    spaces. Driven by a fervent passion for discovering new
                    concepts and overcoming new challenges, our journey
                    towards becoming a complete provider has taken us
                    beyond local shores and exposed us to different industries
                    spanning residential, commercial, industrial as well as
                    hospitality.</p>
            </div>

        </div>
    </section>

    <section class="contain_inner reverse">
        <div class="content_left_txt">

            <div class="txt_wrap">
    
            <p>Founded in the 1980s in Penang, Malaysia under the name
                    Sim Furnishing, we started from a humble beginning
                    providing custom-made wooden furniture for private
                    residences and small-time commercial clients. Over the
                    years, our commitment to original craftsmanship, quality
                    materials and workmanship has propelled us by leaps and
                    bounds and enabled us to explore the many facets of
                    interior design, construction and project management. In
                    2005, our business model was revamped as a total
                    solution provider when the company was incorporated as
                    Simfur Design Sdn. Bhd.</p>

                <p>Today, even as we grow in size and scope, our dedication
                    remains true to creating bespoke furniture at a reasonable
                    price. We believe that the best design is a perfect balance
                    between aesthetics and functionality and one that tells the
                    personal story of each client with class and clarity.</p>
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about_2.jpg" class="img-fluid" width="650">
            <div class="pic_shadow_right" style="height:520px;"></div>
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

</div>

<?php include('libs/contact.php') ?>

<?php include('footer.php'); ?>