<?php include('header.php'); ?>
<?php if (have_posts()) : the_post(); ?>

    <div data-barba="container" data-barba-namespace="<?php the_title(); ?>">

    <div style="font-size: 500px; font-weight:bold; text-transform:uppercase; letter-spacing:-60px;"><?php the_title(); ?></div>
    <p><?php the_content(); ?></p>

    </div>
<?php endif; ?>
<?php include('footer.php'); ?>