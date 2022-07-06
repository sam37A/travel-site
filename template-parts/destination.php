

<h1 class="about-heading"><?php the_field('detination_heading'); ?></h1>
<section class="row">
        <div class="about-column">
           
            <p class="destination-name"><?php the_field('destination_name'); ?></p>
            <img class="destination-img" src="<?php the_field('destination_image');?>" alt="">
            <p class="intro"><?php the_field('destination_intro'); ?></p>
            
            <button class ="btn"><?php the_field('_button_content'); ?></button>
           
        </div>
        <div class="about-column">
           
            <p class="destination-name"><?php the_field('destination_name2'); ?></p>
           
            <img class="destination-img" src="<?php the_field('destination_image2');?>" alt="">
            
            <p class="intro"><?php the_field('destination_intro2'); ?></p>
            <button class ="btn"><?php the_field('_button_content'); ?></button>

        </div>
        <div class="about-column">
          
          <p class="destination-name"><?php the_field('destination_name3'); ?></p>
          <img class="destination-img" src="<?php the_field('destination_image3');?>" alt="">
            <p class="intro"><?php the_field('destination_intro3'); ?></p>
           
            <button class ="btn"><?php the_field('_button_content'); ?></button>
        </div>
</section>