<?php include('header.php'); ?>

    <?php if (have_posts()) : the_post(); ?>
            
            <h1><?php the_title(); ?></h1>
            
            <?php the_content(); ?>
            
            <?php endif; ?>

<?php include('footer.php'); ?>