<?php

  get_header();
  pageBanner(array(
    'title' => 'All Professors',
    'subtitle' => 'Introducing our amazing professors.'
  ));

?>

  <div class="container container--narrow page-section">

    <ul class="link-list min-list">

      <?php
        while (have_posts()) {
            the_post(); ?>
         <li>
          <?php the_post_thumbnail('professorThumbnail'); ?><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
      <?php
        }
        echo paginate_links();
      ?>

    </ul>

  </div>

<?php get_footer(); ?>