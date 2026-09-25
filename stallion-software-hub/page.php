<?php
get_header(); ?>

<div data-sim-type="warehouse">
  <main class="flex-grow pt-14">
    <?php
    while (have_posts()) : the_post();
      the_content();
    endwhile;
    ?>
  </main>
</div>

<?php get_footer(); ?>