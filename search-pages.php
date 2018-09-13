



<?php



$search_term = $_GET['s'];
$search_criteria = $_GET['post_type'];

$loopcount = 0;

$query = new WP_Query( array(
    'post_type' => array('page', 'post'),
    'posts_per_page' => -1,
    's' => $search_term
));
?>

<?php if ($query->have_posts()) : ?>
  <?php while ($query->have_posts()) : $query->the_post(); ?>
     <h4><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to: "%s"', '__x__' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php x_the_alternate_title(); ?></a></h4></br>
     <?php echo the_excerpt(); ?>
     <hr>
<?php endwhile; else: ?>


<?php wp_reset_postdata(); ?>

<?php endif; ?>
