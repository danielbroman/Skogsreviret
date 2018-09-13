<?php

// =============================================================================
// TEMPLATE NAME: Layout - Table with sidebar
// -----------------------------------------------------------------------------
// Skriver ut text sidornas template.
// =============================================================================

?>
<?php
$tabellnamn1 = get_field('tabellnamn1');
$tabellurl1 = get_field('tabelllink1');

$tabellnamn2 = get_field('tabellnamn2');
$tabellurl2 = get_field('tabelllink2');

$tabellnamn3 = get_field('tabellnamn3');
$tabellurl3 = get_field('tabelllink3');

$tabellnamn4 = get_field('tabellnamn4');
$tabellurl4 = get_field('tabelllink4');

?>

<?php get_header(); ?>


<div class="container information-area-container">
  <div class="row">
    <div class="col-md-12 information-outer">
      <div class="information-page-header">
      <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="page-heading banner-text"><?php the_title(); ?></h1>
      </div>
  </div>
  </div>
  <div class="row">
        <div class="col-md-8 information-area" role="main">
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>
      <table>
        <tbody>
          <tr>
            <td>
              <?php echo $tabellnamn1; ?>
            </td>
            <td>
              <a class="underline" href="<?php echo $tabellurl1['url']; ?>" target="<?php echo $tabellurl1['target']; ?>"><?php echo $tabellurl1['title']; ?></a>
            </td>
          </tr>

          <tr>
            <td>
              <?php echo $tabellnamn2; ?>
            </td>

            <td>
              <a class="underline" href="<?php echo $tabellurl2['url']; ?>" target="<?php echo $tabellurl2['target']; ?>"><?php echo $tabellurl2['title']; ?></a>
            </td>
          </tr>

          <tr>
            <td>
              <?php echo $tabellnamn3; ?>
            </td>

            <td>
              <a class="underline" href="<?php echo $tabellurl3['url']; ?>" target="<?php echo $tabellurl3['target']; ?>"><?php echo $tabellurl3['title']; ?></a>
            </td>
          </tr>

          <tr>
            <td>
              <?php echo $tabellnamn4; ?>
            </td>

            <td>
              <a class="underline" href="<?php echo $tabellurl4['url']; ?>" target="<?php echo $tabellurl4['target']; ?>"><?php echo $tabellurl4['title']; ?></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="col-md-4 sidebar-menu">
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
<?php get_footer(); ?>
