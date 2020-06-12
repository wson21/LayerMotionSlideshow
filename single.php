<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

<div class="projects_title"><h2>Skycube Residence</h2></div>

<section class="slider-wrapper">
  <div class="slider">
    <div>
    <img src="<?php echo get_template_directory_uri() ?>/images/skycube_1.jpg" class="img-fluid">
    </div>
    <div>
    <img src="<?php echo get_template_directory_uri() ?>/images/skycube_2.jpg" class="img-fluid">
    </div>
    <div>
    <img src="<?php echo get_template_directory_uri() ?>/images/skycube_3.jpg" class="img-fluid">
    </div>
  </div>
</section>

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