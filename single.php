<?php include('header.php'); ?>

<?php if ( have_posts() ) : the_post();
		$slideshow_images = get_post_meta($post->ID,'_slideshow_images', TRUE);
        $attachments = array_filter(explode(',', $slideshow_images));
        //$url = wp_get_attachment_image_src(($post->ID),'large'); 
        //$thumb_url = wp_get_attachment_url( $thumb_id );
        //$thumb_url = the_post_thumbnail_url();
?>

<div data-barba="container" data-barba-namespace="project" class="project-wrap">

    <section class="header">
        
        <div class="info">
            <h1><?php the_title(); ?></h1>
            <div class="project_info">
                <ul>
                    <li>
                        <span>CATEGORY —</span>
                        <span>Commercial</span>
                    </li>
                    <li>
                        <span>LOCATION —</span>
                        <span>Penang</span>
                    </li>
                    <li>
                        <span>TOTAL AREA —</span>
                        <span>22㎡/7t</span>
                    </li>
                </ul>
            </div>
        </div>

        <img src="<?php the_post_thumbnail_url(); ?> " class="project_cover">

    </section>
    
    <section class="concept">

        <div class="container" data-aos="fade-up" data-aos-duration="300" data-aos-anchor-placement="top-center">

        <div class="concept_wrap">

            <div class="flex1">
                <h2>DESIGN CONCEPT</h2>
                <div class="sub_title"><?php the_title(); ?></div>
                

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac libero id magna pulvinar ornare vel feugiat urna. Phasellus pharetra vehicula tellus et ornare. Sed nec blandit elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec bibendum tellus vel neque convallis, at hendrerit nisl venenatis. Maecenas in venenatis odio. Integer consectetur, tellus eu condimentum ultricies, lacus sapien pulvinar massa, a lobortis mi nibh quis quam. Integer at odio consectetur, hendrerit ipsum accumsan, interdum nisl. Suspendisse potenti. Praesent a justo nec massa sagittis dictum. Proin dictum id arcu semper viverra. Suspendisse potenti. Maecenas finibus mollis dui id dapibus. Proin sodales nisl quis vulputate mollis.
                    </p>


                <div class="concept_info">
                    <ul>
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
            
            <div class="flex1">
                
            </div>

        </div>

        </div>

        <div class="concept_bg" data-aos="fade-up"
     data-aos-duration="300"
     data-aos-anchor-placement="top-center">Concept

        </div>
    </section>

    <section class="project_wrap">
        <div>

            <?php
                if ($attachments) {
                    foreach ($attachments as $attachment_id) {
                    $alt = get_post_meta( $attachment_id->ID, '_wp_attachment_image_alt', true );
                    $caption = get_post($attachment_id)->post_excerpt;
                    $description = get_post($attachment_id)->post_content;
                    $href = get_permalink( $attachment_id->ID );
                    $src = $attachment_id->guid;
                    $title = $attachment_id->post_title;?>

                <div class="project_img" data-aos="fade-up"
     data-aos-duration="300"
     data-aos-anchor-placement="top-center"><img src="<?php echo wp_get_attachment_url( $attachment_id ) ?>" alt="<?php echo $title; ?>" class=" img-fluid"/></div>

                <?php }
            }?>
            <?php endif; ?>

        </div>
    </section>

    <section class="contact">

        <div class="container" data-aos="fade-up">

            <h1>Contact Us</h1>

            <div class="title_wrap">
                <div class="title">let’s build</div>
                <div class="title">something awesome</div>
            </div>

            <div class="contact_info">

                <div class="our_office">
                    <ul>
                        <li>Visit Our Office —</li>
                        <li>53a, Jalan Kelawai</li>
                        <li>10250 Penang. Malaysia.</li>
                        <li><a href="https://goo.gl/maps/DSj39T9Sw8QcJvLu6" target="_blank">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/place.svg" width="18px"> Get Direction
                        </a></li>
                    </ul>
                </div>

                <div class="talk_to_us">
                    <ul>
                        <li>Talk to Us — </li>
                        <li>info@millewn.com</li>
                        <li><a href="https://wa.me/60164844274" target="blank">Whatsapp</a></li>
                        <li><a href="http://m.me/millewndesigns" target="blank">Messenger</a></li>
                    </ul>
                </div>

                <div class="follow_us">
                    <ul>
                        <li>Follow Us —</li>
                        <li><a href="https://www.facebook.com/millewndesigns" target="_blank">Facebook</a></li>
                        <li><a href="https://www.instagram.com/millewn_designs" target="_blank">Instagram</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="contact_bg">CONTACT</div>
    </section>

    <section class="project_nav">

        <div class="nav_prev">
            <?php
            if( $prev_id = get_adjacent_post(false, '', false)->ID ) { 
                $prev_thumb_id = get_post_thumbnail_id($prev_id);
                $prev_thumb_url = wp_get_attachment_image_src(($prev_thumb_id),'large');
                $prev_name = get_the_title( $prev_id );
                $prev_url = get_permalink( $prev_id );?>

                <div class="prev_title">
                    <a href="<?php echo $prev_url ?>">
                        <?php echo $prev_name ?>
                    </a>
                </div>

                <div class="prev_img size">
                    <img src="<?php echo $prev_thumb_url[0]?>" class="nav_thumb">
                </div>

            <?php
            } else { 
                $last = new WP_Query('post_type=projects&posts_per_page=1&order=ASC'); $last->the_post();
                $last_thumb_id = get_post_thumbnail_id($last->ID);
                $last_thumb_url = wp_get_attachment_image_src(($last_thumb_id),'large');
                $last_name = get_the_title( $last->ID);
                $last_url = get_permalink( $last->ID );?>


                <div class="prev_title size">
                    <a href="<?php echo $last_url ?>">
                        <?php echo $last_name ?>
                    </a>
                </div>

                <div class="prev_img size">
                    <img src="<?php echo $last_thumb_url[0]?>" class="nav_thumb">
                </div>

                <?php wp_reset_query();
            };?>
        </div>

        <div class="nav_next">
            <?php
            if( $next_id = get_adjacent_post(false, '', true)->ID ) { 
                $next_thumb_id = get_post_thumbnail_id($next_id);
                $next_thumb_url = wp_get_attachment_image_src(( $next_thumb_id ),'large');
                $next_name = get_the_title( $next_id );
                $next_url = get_permalink( $next_id);?>


                <div class="next_title">
                    <a href="<?php echo $next_url ?>">
                        <?php echo $next_name ?>
                    </a>
                </div>

                <div class="next_img size">
                    <img src="<?php echo $next_thumb_url[0]?>" class="nav_thumb">
                </div>


            <?php
            } else { 
                $first = new WP_Query('post_type=projects&posts_per_page=1&order=DESC'); $first->the_post();
                $first_thumb_id = get_post_thumbnail_id($first->ID);
                $first_thumb_url = wp_get_attachment_image_src(($first_thumb_id),'large');
                $first_name = get_the_title( $first->ID);
                $first_url = get_permalink( $first->ID );?>


                <div class="next_title">
                    <a href="<?php echo $first_url ?>">
                        <?php echo $first_name ?>
                    </a>
                </div>

                <div class="next_img size">
                    <img src="<?php echo $first_thumb_url[0]?>" class="nav_thumb">
                </div>

                <?php wp_reset_query();
            };?>
        </div>

    </section>


</div>

<?php include('footer.php'); ?>