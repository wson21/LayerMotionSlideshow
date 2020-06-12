<?php include('header.php'); ?>

<?php if (have_posts()) : the_post(); ?>
<?php endif; ?>

<div data-barba="container" data-barba-namespace="index">

    <h1 style="text-align: center; padding-top:150px; padding-bottom:100px;">what we do</h1>

    <section class="whatwedo__icon">

        <div class="inhouse icon">
            <img src="<?php echo get_template_directory_uri() ?>/images/furniture.svg" class="icon_size">
            <h3>In-House</h3>
            <p>Furniture Manufacturing</p>
        </div>

        <div class="project icon">
        <img src="<?php echo get_template_directory_uri() ?>/images/project.svg" class="icon_size">
        <h3>Project</h3>
            <p>Furniture Manufacturing</p>
        </div>

        <div class="oem icon">
        <img src="<?php echo get_template_directory_uri() ?>/images/oem.svg" class="icon_size">
        <h3>oem</h3>
            <p>Original Equipment Manufacturer </p>
        </div>

        <div class="interior icon">
        <img src="<?php echo get_template_directory_uri() ?>/images/interior.svg" class="icon_size">
        <h3>Interior</h3>
            <p>Design & Renovation</p>
        </div>

    </section>


    <div style="padding-bottom:100px;">
        <section class="contain_inner">
            <div class="content_left_img">
                <img src="<?php echo get_template_directory_uri() ?>/images/services_1.jpg" class="img-fluid" width="600">
                <div class="pic_shadow_left" style="height:520px;"></div>
            </div>
            <div class="content_right_txt">
    
                <div class="txt_wrap">
                    <h2>
                        Everything 
                        You Can Dream of,
                        We Make it a Reality.
                    </h2>
    
                    <p>At Simfur Design, we are not just designers or builders; we are an all-in-one solution provider. That
                    means that not only do we help you to design your kitchen, wardrobe or even your entire house or office, the way you want it, we are also able to manage your entire project for you, from design
                    consultation all the way to manufacturing and installation, as well as liaise with all the relevant contractors and suppliers – so you can have an enjoyable experience while making your dream a
                    vivid reality.</p>
    
                </div>
    
            </div>
        </section>
    </div>




    <!-- <section class="contain_inner reverse">
        <div class="content_left_txt">

            <div class="txt_wrap">
                <h3>
                In-House
                Furniture
                Manufacturing
                </h3>
    
                <p>What sets us apart notably as one of the leading
                    companies in the northern region is our capability to
                    fabricate furniture in our very own production facility,
                    giving us the upper hand in selecting the best quality raw
                    materials for our clients and ample time to scrutinise the
                    quality of our production with utmost attention to detail.
                    We have also invested heavily in state-of-the-art machinery
                    and equipment, which has enabled us to achieve precision
                    and quality that meets world-class standards.</p>

                <p>As opposed to other designers who have to send their
                    designs to external manufacturers for mass production, our
                    complete in-house fabrication enables us to closely
                    monitor the progress and quality of our furniture before
                    they are delivered to our clients’ homes or offices.</p>    
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
        </div>
    </section>

    <section class="contain_inner">
        <div class="content_left_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="pic_shadow_left"></div>
        </div>
        <div class="content_right_txt">

            <div class="txt_wrap">
                <h3>
                Interior
                Design &
                Renovation
                </h3>

                <p>Having garnered a solid reputation for reliability and timely
                    delivery, Simfur Design began to evolve internally to cater
                    to the ever-changing market demands. Established in
                    2017, Zeta Home became the company’s interior design
                    and renovation division specialising in private residences
                    as well as commercial and hospitality projects. Our highly
                    experienced team of interior designers, contractors and
                    suppliers have been with us for over a decade, ensuring an
                    exceptionally streamlined service that is honest,
                    competitive and efficient, while offering you absolute
                    peace of mind.</p>

            </div>

        </div>
    </section>

    <section class="contain_inner reverse">
        <div class="content_left_txt">

            <div class="txt_wrap">
                <h3>
                Project Management
                </h3>
    
                <p>Apart from our core businesses, many clients have come to
                    us for our project management services. To this end, we
                    are able to help you manage your entire project -
                    regardless of whether you employ our services for design or
                    manufacturing - from the initial planning stage right up to
                    the final handover of keys to you. Our project managers
                    and coordinators are not only well-versed in all aspects of
                    construction and renovation, we are driven to provide
                    exceptional customer service and meet, if not exceed, our
                    clients’ realistic expectations.</p>
            </div>

        </div>
        <div class="content_right_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="pic_shadow_right"></div>
        </div>
    </section>

    <section class="contain_inner">
        <div class="content_left_img">
            <img src="<?php echo get_template_directory_uri() ?>/images/about.jpg" class="img-fluid">
            <div class="pic_shadow_left"></div>
        </div>
        <div class="content_right_txt">

            <div class="txt_wrap">
                <h3>
                Original
                Equipment
                Manufacturer</h3>
                Furniture Manufacturing
                

                <p>As a family-owned business with an impeccable track
                record for commendable quality and workmanship, our
                success truly lies in the diligence, creativity and
                innovativeness of our people. If you wish to start your own
                brand but are unsure of where to start or how to go about
                it, our consultants may be able to help you realise your
                ambition. From design and prototyping to mass
                production, we believe we can help you get on the right
                track.</p>

            </div>

        </div>
    </section> -->

    <!-- <section>

        <ul></ul>

        <ul></ul>

        <ul></ul>

        <ul></ul>

        <ul></ul>

        <ul></ul>

        <ul></ul>

    </section> -->


</div>

<?php include('libs/contact.php') ?>
<?php include('footer.php'); ?>