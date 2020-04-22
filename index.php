<?php include('header.php'); ?>

<div data-barba="container" data-barba-namespace="index">

    <div class="scroll_down"> — scroll down</div>



    <?php
    $query_args = array(
        'post_type'             =>   'projects',
        'posts_per_page'        =>    20,
        'post_status'           =>   'publish',
        'ignore_sticky_posts'   =>   true,
        'order'                 =>   'DESC',
		//'paged' => get_query_var('paged')
    );
     
    $wp_query = new WP_Query( $query_args );
	$post_thumbnail_id = get_post_thumbnail_id($post->ID);
	$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
	$terms = get_the_terms( $post_id, 'pcategory' );
    ?>


    <div class="main_slideshow">
        <section class="slideshow">

            <?php while( $wp_query->have_posts() ): $wp_query->the_post(); 
        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'large'); ?>

            <div class="item">

                <div class="item_desc">
                    <div class="item_title">
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </div>
                </div>

                <div>
                    <img src="<?php echo $url[0] ?>" alt="<?php echo get_the_title(); ?>" class=" img-fluid img">
                </div>

                <!-- <div class="item_bg">
                </div> -->

            </div>

            <?php endwhile; ?>

        </section>
    </div>

    <section class="who_we_are">

        <div class="container flex_wrap">

            <div class="flex2 index_wwa">
                <h1 data-aos="fade-up">WHO WE ARE</h1>
                <div class="sub_title" data-aos="fade-up" style="padding-bottom:30px;">
                    Millewn Designs
                </div>
                <p data-aos="fade-up"><b>MILLEWN DESIGNS</b> was established in 2017 in Penang, Malaysia, as a sister
                    company of EOWON DESIGNS, specialising in interior design for residential, commercial and
                    hospitality projects. Young, fresh and dynamic, in just a little over three years, we have
                    positioned ourselves as the preferred interior designer in Penang for clients who value creativity,
                    functionality and quality.</p>

                <p data-aos="fade-up">To date, we have completed numerous projects spanning from residential to
                    commercial clients, where unique interior architecture concepts and feasible ideas were
                    conceptualised and materialised with bespoke craftsmanship and quality.</p>

                <p data-aos="fade-up">From idea generation and 3D visualisation to construction, project management and
                    customer service, we pride ourselves on service excellence that meets and hopefully exceeds the
                    expectations of our clients.</p>

                <p data-aos="fade-up">For every design, our aim is to inspire emotions, enrich spatial experiences and
                    ultimately provide an ideal, modern-living environment that serves to enhance everyday life.</p>
            </div>

            <div class="flex1">
                <div class="our_services">
                    <div class="our_services_title">WHAT WE DO </div>
                    <div data-aos="fade-up" class="our_services_desc">
                    Transforming Empty Spaces</br>
                    into Enchanting Places
                    </div>

                    <ul>
                        <li>INTERIOR DESIGN</li>
                        <li>spatial planning</li>
                        <li>3D visualisation</li>
                        <li>refurbishment</li>
                        <li>furniture and fabric selection</li>
                        <li>decorative ornamentation</li>
                    </ul>

                    <ul>
                        <li>RENOVATION & CONSTRUCTION</li>
                        <li>design & build</li>
                        <li>liaison with contractors</li>
                        <li>material procurement</li>
                        <li>project management</li>
                        <li>site supervision</li>
                    </ul>

                    <ul>
                        <li>ALA CARTE SPECIAL SERVICES</li>
                        <li>homestay design & build makeover</li>
                        <li>kitchen & bathroom makeover</li>
                        <li>office relocation</li>
                        <li>f&b and retail design & build</li>
                        <li>custom built furniture</li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="contact_bg">MILLEWN</div>
    </section>

    <section class="contact">

        <div class="container">

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
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/place.svg" width="18px"> Get
                                Direction</a></li>
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



</div>

<?php include('footer.php'); ?>