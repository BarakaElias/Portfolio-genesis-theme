<?php
/**
 * Template Name: Template: About
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="my-intro">
    <div class="container">
    <h3>About me</h3>

        <div class="row">
            <div class="col-lg-6">
                <p>At platea tortor consectetur morbi. 
                    Elit quam eget cursus quam nibh 
                    pellentesque tincidunt morbi suspendisse.
                     Massa suscipit nisi ultrices vitae tempor,
                      pellentesque= urna sollicitudin adipiscing.
                       Bibendum mollis et nunc quis. Eu tincidunt 
                       metus at tristique et consequat sed facilisi.
                        Auctor tellus felis, sem est vel. Lectus suspendisse
                         fermentum eget in amet. Facilisis dignissim nulla 
                         phasellus mauris sit tellus, lorem ut odio.
                    Elementum felis commodo lorem velit augue cursus tincidunt. Eget in
                    nunc, pharetra tristique in ut posuere viverra pretium. 
                Quam cursus turpis pharetra odio ultricies viverra condimentum
                quam. Odio magna.
            </p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/myphoto.jpg" alt="A picture of me">
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/myphoto.jpg" alt="A picture of me">
            </div>
            <div class="col-lg-6">
                <p>At platea tortor consectetur morbi. 
                    Elit quam eget cursus quam nibh 
                    pellentesque tincidunt morbi suspendisse.
                     Massa suscipit nisi ultrices vitae tempor,
                      pellentesque= urna sollicitudin adipiscing.
                       Bibendum mollis et nunc quis. Eu tincidunt 
                       metus at tristique et consequat sed facilisi.
                        Auctor tellus felis, sem est vel. Lectus suspendisse
                         fermentum eget in amet. Facilisis dignissim nulla 
                         phasellus mauris sit tellus, lorem ut odio.
                    Elementum felis commodo lorem velit augue cursus tincidunt. Eget in
                    nunc, pharetra tristique in ut posuere viverra pretium. 
                Quam cursus turpis pharetra odio ultricies viverra condimentum
                quam. Odio magna.
            </p>
            </div>
        </div>
    </div>
</div>


<div class="my-skills">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3>My Skills</h3>
                <p>At platea tortor consectetur morbi. 
                    Elit quam eget cursus quam nibh 
                    pellentesque tincidunt morbi suspendisse.
                     Massa suscipit nisi ultrices vitae tempor,</p>
            </div>
            <div class="col-lg-7">
                <div class="skills-holder p-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/skills/wordpress.svg" alt="Wordpress Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/skills/php.svg" alt="Wordpress Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/skills/react.svg" alt="Wordpress Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/skills/figma.svg" alt="Wordpress Logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/skills/sass.svg" alt="Wordpress Logo">

                </div>
            </div>
        </div>
    </div>
</div>


<div class="about-action">
    <div class="container">
        <div class="action-container">
            <h3 class="p-2">Let's work together</h3>
            <p class="p-2">At platea tortor consectetur morbi. Elit quam eget 
                cursus quam nibh pellentesque tincidunt morbi 
                suspendisse. Auctor tellus felis, sem est vel.
                 Lectus suspendisse fermentum eget in amet. 
                 Facilisis dignissim nulla 
                </p>
            <a class="p-2" href="#">
                Let's Talk
            </a>
        </div>
    </div>
</div>


<div class="collaboration">
    <div class="container">
        <h3>Companies I collaborate with</h3>    
    </div>
</div>

<?php
get_footer();
