<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<div id="primary">
	<div class="presentation-wrapper" id="content" role="main">
		<div class="student-wrapper">
			<?php while(have_posts()) : the_post();?>
       			<div class="student-card">
          			<h2><?php echo get_post_meta(get_the_ID(), 'student_name', true) ?></h2>
          			<p><?php echo get_post_meta(get_the_ID(), 'student_description', true) ?></p>
          			<p>
        		</div>
      		<?php endwhile;?>
		</div>           
	</div>
</div>

<?php get_footer();?>
