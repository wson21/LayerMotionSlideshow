<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

<h1 style="padding-top:200px;">Projects</h1>

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
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/whatwedo.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
        </div>
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
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/whatwedo.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
        </div>
    </section>   

</div>
<?php include('footer.php'); ?>