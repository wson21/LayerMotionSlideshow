<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="page">

<?php include('libs/contact.php') ?>

</div>

<?php include('footer.php'); ?>