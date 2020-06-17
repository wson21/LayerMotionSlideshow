<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

    <h1 style="text-align: center; padding-top:150px; padding-bottom:100px;">Future Projects</h1>
   
    
	<?php
    $query_args = array(
        'post_type'             =>   'projects',
        'posts_per_page'        =>    100,
        'post_status'           =>   'publish',
        'ignore_sticky_posts'   =>   true,
        'order'                 =>   'DESC',
		//'paged' => get_query_var('paged')
    );
     
  $wp_query = new WP_Query( $query_args );
	$post_thumbnail_id = get_post_thumbnail_id($post->ID);
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
    ?>

    <section class="projects_list">
    
    <?php while( $wp_query->have_posts() ): $wp_query->the_post();
	
            $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large'); ?>
            
        <div class="project_item project_box_1">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow1.jpg" class="img-fluid img_box"/>
            <h3><?php echo get_the_title(); ?></h3>
            <div class="pro_img_shadow"></div>
        </div>

    <?php endwhile; ?>        
    
    </section>

</div>
<?php include('libs/contact.php') ?>
<?php include('footer.php'); ?>