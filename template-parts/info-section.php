 <!-- This is the start of info section -->
 <section class="info-section" id="aboutSection">
        <div class="infoBox">
            <img src="<?php the_field('info_image');?>" alt="beach chairs with umberellas on a beach." height="490px" width="50%" style="border: 1px solid #000;">
        </div>
        <div class="infoBox infoTextbox">
            <h2> <?php the_field('info_box_title');?></h2>
            <p> <?php the_field('infobox_paragraph');?>
           </p>
        </div>
    </section>
    <!-- This is the end of info section -->