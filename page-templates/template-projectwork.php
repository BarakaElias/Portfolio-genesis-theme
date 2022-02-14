<?php
/**
 * Template Name: Template: Project/Work
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="heading">
    <div class="container">
    <div class="title">
        <h3>My Projects/Work</h3>
        <p>HOME/PROJECTS</p>
    </div>
    </div>
</div>


<div class="project-list">
    <div class="container">
        <div class="project">
            <div class="row">
                <div class="col-lg-6 snapshot">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/licks.png" alt="Licks Logo">
                </div>
                <div class="col-lg-6 info">
                    <h4 class="category">CLIENT</h4>
                    <h3 class="project-title">Licks The Pharmacy</h3>
                    <p class="project-info">
                    I'm Oluwakemi Adeleke, a professional and talented Product Designer 
                    with front end development skills. I’m Oluwakemi Adeleke, 
                    a professional and talented Product Designer with front end 
                    development skills. 
                    </p>
                    <ul class="project-tools">
                        <li>VSCODE</li>
                        <li>UNDERSTRAP</li>
                        <li>WORDPRESS</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-github"></i></li>
                        <li><i class="fa fa-external-link"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
