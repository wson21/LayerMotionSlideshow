<?php include('header.php'); ?>

<div data-barba="container" data-barba-namespace="index">

<?php if ( have_posts() ) : the_post();
		$slideshow_images = get_post_meta($post->ID,'_slideshow_images', TRUE);
		$attachments = array_filter(explode(',', $slideshow_images));?>

  <!-- <div class="projects_title">
    <h3><?php the_title(); ?></h3>
  </div> -->

  <div class="slider stick-dots" data-midnight="white">

    <?php if ($attachments) {
        foreach ($attachments as $attachment_id) {
        $alt = get_post_meta( $attachment_id->ID, '_wp_attachment_image_alt', true );
        $caption = get_post($attachment_id)->post_excerpt;
        $description = get_post($attachment_id)->post_content;
        $href = get_permalink( $attachment_id->ID );
        $src = $attachment_id->guid;
        $title = $attachment_id->post_title;
        ?>

          <div class="slide">
            <div class="slide__img">
              <img src="<?php echo wp_get_attachment_url( $attachment_id ) ?>" class="full-image animated" data-animation-in="zoomInImage" alt="<?php echo $title; ?>"/>
            </div>
          </div>

          <?php }
            }?>
            
    <?php endif; ?>

  </div>
  
   
  <section class="info_wrap">
    
    <div class="info_inner">
      <div class="info_inner_left">
        <div><h2><?php the_title(); ?></h2>

      <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ad reprehenderit recusandae exercitationem. Perspiciatis consequatur consequuntur temporibus sequi delectus est ut suscipit voluptatem assumenda quibusdam! Placeat qui laborum, rerum quasi sit perspiciatis, praesentium ducimus laboriosam aut iste blanditiis veritatis. Quas fugit, aspernatur placeat amet dolore dolorem. Possimus ex voluptates reiciendis optio aliquid. Cumque sit temporibus ipsa? Esse placeat ipsa voluptatem enim, magnam eveniet ipsum illum alias est dolorum sequi vitae ab corrupti exercitationem qui amet repellendus quisquam? Eveniet quos totam sunt quidem impedit, asperiores eaque voluptatem exercitationem sequi id iste iusto placeat quisquam, quia molestiae fuga itaque amet! Nisi, praesentium.</p> -->
    
      </div>
        
        <div class="info_inner_right">
        <ul class="concept_info">
          <li>
            <span>CATEGORY — </span> 
            <span>Commercial </span>
          </li>

          <li>
            <span>LOCATION — </span>
            <span>Penang </span>
          </li>

          <li>
            <span>TOTAL AREA — </span>
            <span>22㎡/7t </span>
          </li>

          <li>
            <span>ROLE — </span>
            <span>Planning / Design & build </span>
          </li>

          <li>
            <span>CLIENT — </span>
            <span>Private Owner </span>
          </li>
        </ul>
        </div>

      </div>
    </div>

  </section>



</div>

<?php include('libs/contact.php') ?>
<?php include('footer.php'); ?>