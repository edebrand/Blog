<?php
/**
 * Display student information pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
	<div class="student-wrapper">
			<?php while(have_posts()) : the_post();?>
       			<div class="student-card">
          			<h2><?php echo get_post_meta(get_the_ID(), 'student_name', true) ?></h2>
                      <p><?php $gallery = get_post_meta(get_the_ID(), 'student_pic', true) ?></p>
                    <?php echo wp_get_attachment_image($gallery, 'medium');?>
          			<h3 class="about">à propos de moi</h3>
                    <p><?php echo get_post_meta(get_the_ID(), 'student_description', true) ?></p>
					<div class="socials">
						<a href="#"><span class="iconify" data-icon="akar-icons:github-fill" style="color: #968c90;"></span></a>
                    	<a href="#"><span class="iconify" data-icon="fa-brands:linkedin-in" style="color: #968c90;"></span></a>
					</div>
        		</div>
				<div class="student-projects">
					<h3>mes projets</h3>
					<div class="projects-wrapper">
						<div class="project1">
          					<h4><?php echo get_post_meta(get_the_ID(), 'title_project1', true) ?></h4>
                      		<?php $gallery = get_post_meta(get_the_ID(), 'pic_project1', true) ?>
							<?php echo wp_get_attachment_image($gallery, 'medium');?>
                      		<p><?php echo get_post_meta(get_the_ID(), 'summary_project1', true) ?></p>
							<div class="tech">
								<h4>technologies utlisées</h4>
								<div class="tech-icons">
									<span class="iconify" data-icon="cib:figma"></span>
									<span class="iconify" data-icon="simple-icons:html5"></span>
									<span class="iconify" data-icon="simple-icons:css3"></span>
									<span class="iconify" data-icon="simple-icons:javascript"></span>
								</div>
							</div>
							<div class="project-links">
								<h4>voir le projet :</h4>
								<div class="project-icons">
									<a href="#"><span class="iconify" data-icon="akar-icons:github-fill"></span></a>
									<a href="#"><span>en ligne</span></a>
								</div>
							</div>
						</div>
	
						<div class="project2">
          					<h4><?php echo get_post_meta(get_the_ID(), 'title_project2', true) ?></h4>
                      		<?php $gallery = get_post_meta(get_the_ID(), 'pic_project2', true) ?>
							<?php echo wp_get_attachment_image($gallery, 'medium');?>
                      		<p><?php echo get_post_meta(get_the_ID(), 'summary_project2', true) ?></p>
							<div class="tech">
								<h4>technologies utlisées</h4>
								<div class="tech-icons">
									<span class="iconify" data-icon="simple-icons:html5"></span>
									<span class="iconify" data-icon="simple-icons:css3"></span>
									<span class="iconify" data-icon="simple-icons:javascript"></span>
								</div>
							</div>
							<div class="project-links">
								<h4>voir le projet :</h4>
								<div class="project-icons">
									<a href="#"><span class="iconify" data-icon="akar-icons:github-fill"></span></a>
									<a href="#"><span>en ligne</span></a>
								</div>
							</div>
						</div>
						<div class="project3">
          					<h4><?php echo get_post_meta(get_the_ID(), 'title_project3', true) ?></h4>
                      		<?php $gallery = get_post_meta(get_the_ID(), 'pic_project3', true) ?>
							<?php echo wp_get_attachment_image($gallery, 'medium');?>
                      		<p><?php echo get_post_meta(get_the_ID(), 'summary_project3', true) ?></p>
							<div class="tech">
								<h4>technologies utlisées</h4>
								<div class="tech-icons">
									<span class="iconify" data-icon="cib:figma"></span>
									<span class="iconify" data-icon="simple-icons:html5"></span>
									<span class="iconify" data-icon="simple-icons:css3"></span>
									<span class="iconify" data-icon="simple-icons:javascript"></span>
								</div>
							</div>
							<div class="project-links">
								<h4>voir le projet :</h4>
								<div class="project-icons">
									<a href="#"><span class="iconify" data-icon="akar-icons:github-fill"></span></a>
									<a href="#"><span>en ligne</span></a>
								</div>
							</div>
        			</div>
				</div>
      		<?php endwhile;?>          
	</div>

<?php get_footer();?>
