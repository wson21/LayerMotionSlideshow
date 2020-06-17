<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">


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


  <div class="projects_title">
    <h3>Tropics Eight Suites</h3>
  </div>

  <div class="slider stick-dots">
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tp/1.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tp/2.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>

    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tp/3.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tp/4.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tp/5.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
    </div>
    <div class="slide">
      <div class="slide__img">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/tp/6.jpg" class="full-image animated" data-animation-in="zoomInImage"/>
      </div>
    </div>
  </div>



<div class="pre_next_project">
    <div class="pre_btn">Previous Project</div>
    <div class="next_btn">Next Project</div>
</div>

</div>

<?php include('libs/contact.php') ?>
<div class="pre_next_project">
    <div class="pre_btn">Previous Project</div>
    <div class="next_btn">Next Project</div>
</div>
<?php include('footer.php'); ?>