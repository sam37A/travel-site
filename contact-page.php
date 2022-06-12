<?php
/**
* Template Name: contactpage *
* @package TravelSite
*
*/
?>
<?php get_header(); ?>


<section>
   
    <div class="contact-box">
    <h1>Contact Us</h1>
        <label for="">First Name</label>
        <input type="text">
        <label for="">Last Name</label>
        <input type="text">
        <label for="">Email</label>
        <input type="email">
        <label for="">Phone No.</label>
        <input type="number">
       
        <br>
       <button>send</button>
    </div>
</section>

<?php get_template_part('template-parts/banner') ?>

<?Php get_footer(); ?>
