<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

<section class="slider-wrapper">
  <div class="slider">
    <div>
    <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
    </div>
    <div>
    <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
    </div>
  </div>
</section>

<section class="project_info_wrap">
    <div class="inner">
        <h3>THE REGENCY</h3>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nesciunt, blanditiis ad a non autem eum minus quae necessitatibus libero dicta possimus ipsam dolorem ab laudantium. Ullam qui eius impedit?
        </p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nesciunt, blanditiis ad a non autem eum minus quae necessitatibus libero dicta possimus ipsam dolorem ab laudantium. Ullam qui eius impedit?
        </p>

    </div>
    <div class="inner">right
        <ul>
            <li>client</li>
            <li>completion date</li>
            <li>scope</li>
        </ul>
    </div>

</section>

</div>
<?php include('footer.php'); ?>