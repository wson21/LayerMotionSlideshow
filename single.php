<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

  <div class="slider stick-dots">
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow1.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>

    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow2.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>

    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/slideshow3.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
    </div>
  </div>

<section class="project_info_wrap">

        <ul>
            <li>
            <span>Project</span>
            The Regency
            </li>

            <li>
            <span>Location</span>
            Penang
            </li>            

            <li>
            <span>Client</span>
            Private Owner    
            </li>

            <li>
            <span>Completion Date</span>
            2018
            </li>

            <li>
            <span>Scope</span>
            Full renovation work
            and furniture work
            </li>

            

        </ul>

</section>

<div class="pre_next_project">
    <div class="pre_btn">Previous Project</div>
    <div class="next_btn">Next Project</div>
</div>

</div>

<?php include('libs/contact.php') ?>
<?php include('footer.php'); ?>