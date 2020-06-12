<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

<h1 style="text-align: center; padding-top: 200px;">Future Projects</h1>

<section class="contain_inner projects_page">
        <div class="content_left_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/project1.jpg" class="img-fluid">
            <div class="pic_shadow_left"></div>
        </div>
        <div class="content_right_txt">

            <div class="txt_wrap">
                <h2>
                <a href="<?php echo site_url(); ?>/projects/skycube/">THE LANDMARK</a>
                </h2>
            </div>

        </div>
    </section>

    <section class="contain_inner reverse projects_page">
        <div class="content_left_txt">

            <div class="txt_wrap">
                <h2>
                <a href="<?php echo site_url(); ?>/projects/skycube/">THE REGENCY</a>
                </h2>
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/project2.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
        </div>
    </section>


    <section class="contain_inner projects_page">
        <div class="content_left_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/project3.jpg" class="img-fluid">
            <div class="pic_shadow_left"></div>
        </div>
        <div class="content_right_txt">

            <div class="txt_wrap">
                <h2>
                <a href="<?php echo site_url(); ?>/projects/skycube/">TROPICS EIGHT</a>
                </h2>
            </div>

        </div>
    </section>

    <section class="contain_inner reverse projects_page">
        <div class="content_left_txt">

            <div class="txt_wrap">
                <h2>
                <a href="<?php echo site_url(); ?>/projects/skycube/">SKYCUBE RESIDENCE</a>
                </h2>
            </div>

        </div>
        <div class="content_right_img projects_page">
            <img src="<?php echo get_template_directory_uri() ?>/images/project4.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
        </div>
    </section>


    <section style="padding-top:150px; padding-bottom:150px; text-align:center;">
        <h3>Load More Projects</h3>
    </section>

</div>

<?php include('libs/contact.php') ?>
<?php include('footer.php'); ?>