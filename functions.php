<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_register_script('iconify', 'https://code.iconify.design/2/2.1.0/iconify.min.js', '' , true , false);
    wp_enqueue_script('iconify');
}?>

<?php add_shortcode( 'student-list', 'diwp_create_shortcode_student_post_type' );?>

<?php function diwp_create_shortcode_student_post_type(){
  
  $args = array(
                  'post_type'      => 'students',
                  'orderby' => 'title',
                  'order'   => 'ASC',
                  'posts_per_page' => '14',
                  'publish_status' => 'published',
               );?>

<div class="promo-wrapper">
  <?php $query = new WP_Query($args);?>

  <?php if($query->have_posts()) : ?>

      <?php while($query->have_posts()) : $query->the_post();?>
       
      <div class="student-list">
          <h2><?php echo get_post_meta(get_the_ID(), 'student_name', true) ?></h2>
          <p><?php echo get_post_meta(get_the_ID(), 'student_description', true) ?>&nbsp;€</p>
          <p><?php $gallery = get_post_meta(get_the_ID(), 'student_pic', true) ?></p>
          <?php echo wp_get_attachment_image($gallery, 'medium');?>
          <a href="<?php  the_permalink() ?>"><button class="btn-know-more">En savoir plus</button></a>
        </div>
      <?php endwhile;?>
    <?php endif;?>
</div>           
<?php };?>

<?php add_shortcode( 'presentation-list', 'diwp_create_shortcode_presentation_post_type' );?>

<?php function diwp_create_shortcode_presentation_post_type(){
  
  $args = array(
                  'post_type'      => 'presentation',
                  'posts_per_page' => '50',
                  'publish_status' => 'published',
               );?>

<div class="presentation-wrapper">
  <?php $query = new WP_Query($args);?>

  <?php if($query->have_posts()) : ?>

    <?php while($query->have_posts()) : $query->the_post();?>
       
      <div class="presentation-list">
        <div class="presentation">
          <h2><?php echo get_post_meta(get_the_ID(), 'presentation_title', true) ?></h2>
          <p><?php echo get_post_meta(get_the_ID(), 'author', true) ?></p>
        </div>
        <?php $file = get_field('doc');
        if( $file ): ?>
      <a href="<?php echo $file['url']; ?>"><button class="btn-download">Télécharger</button></a>
        <?php endif; ?>
          
      </div>
    <?php endwhile;?>
  <?php endif;?>
</div>           
<?php };?>

<?php add_shortcode( 'display-icon-tech', 'diwp_add_icon_tech' );?>
<?php function diwp_add_icon_tech(){?>
  <div class="icons-container">
  <h2> <?php echo 'utilisées durant la formation'?></h2>
  <div class="tech-icons">
  <?php echo '<span class="iconify c1" data-icon="simple-icons:html5"></span>'?>
  <?php echo '<span class="iconify c1" data-icon="simple-icons:css3"></span>'?>
  <?php echo '<span class="iconify c2" data-icon="cib:sass-alt"></span>'?>
  <?php echo '<span class="iconify c2" data-icon="fluent:javascript-16-filled"></span>'?>
  <?php echo '<span class="iconify c1" data-icon="brandico:wordpress"></span>'?>
  <?php echo '<span class="iconify c1" data-icon="codicon:github"></span>'?>
  <?php echo '<span class="iconify c2" data-icon="bi:bootstrap"></span>'?>
  <?php echo '<span class="iconify c2" data-icon="ph:figma-logo-duotone"></span>'?>
  <?php echo '<span class="iconify c1" data-icon="simple-icons:adobephotoshop"></span>'?>
  <?php echo '<span class="iconify c1" data-icon="simple-icons:adobeillustrator"></span>'?>
  <?php echo '<span class="iconify c2" data-icon="mdi:microsoft-visual-studio-code"></span>'?>
  <?php echo '<span class="iconify c2" data-icon="simple-icons:mamp"></span>'?>
  <?php echo'<span class="iconify c1" data-icon="bx:bxl-jquery"></span>'?>
</div>
</div>
<?php }?>

<?php function blog_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
} ?>