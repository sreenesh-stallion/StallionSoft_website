<?php
get_header(); ?>

<main class="flex-grow pt-20 pb-16 bg-[#f8f9fa]">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-6 sm:p-10 rounded-2xl border border-slate-200/80 shadow-xs'); ?>>
          <h1 class="font-headline text-3xl font-extrabold text-[#001945] mb-6"><?php the_title(); ?></h1>
          <div class="prose max-w-none text-slate-700 leading-relaxed">
            <?php the_content(); ?>
          </div>
        </article>
        <?php
      endwhile;
    endif;
    ?>
  </div>
</main>

<?php get_footer(); ?>