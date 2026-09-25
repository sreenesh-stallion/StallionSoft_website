<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <?php wp_head(); ?>
</head>

<body <?php body_class('bg-[#f8f9fa] text-[#191c1d] min-h-screen flex flex-col'); ?>>
<?php wp_body_open(); ?>

  <!-- NAVIGATION BAR -->
  <header class="fixed top-0 left-0 right-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/80 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 h-14 flex items-center justify-between">
      <!-- Brand Logo & Name -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-2.5 text-decoration-none group">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?> Logo"
          class="h-8 w-auto object-contain transition-transform group-hover:scale-105" />
        <div class="flex items-center gap-1.5">
          <span class="font-headline font-bold text-lg text-[#001945] tracking-tight">
            <?php bloginfo('name'); ?>
          </span>
        </div>
      </a>

      <!-- Desktop Navigation Links -->
      <nav class="hidden md:flex items-center gap-6 lg:gap-8">
        <a href="<?php echo esc_url(home_url('/#home')); ?>"
          class="text-xs font-semibold text-slate-600 hover:text-[#003c90] transition-colors text-decoration-none">
          Home
        </a>
        <a href="<?php echo esc_url(home_url('/#about')); ?>"
          class="text-xs font-semibold text-slate-600 hover:text-[#003c90] transition-colors text-decoration-none">
          About
        </a>
        <a href="<?php echo esc_url(home_url('/#vision-mission')); ?>"
          class="text-xs font-semibold text-slate-600 hover:text-[#003c90] transition-colors text-decoration-none">
          Vision &amp; Mission
        </a>
        <a href="<?php echo esc_url(home_url('/#solutions')); ?>"
          class="text-xs font-semibold text-slate-600 hover:text-[#003c90] transition-colors text-decoration-none">
          Solutions
        </a>
        <a href="#contact"
          class="text-xs font-semibold text-slate-600 hover:text-[#003c90] transition-colors text-decoration-none">
          Contact
        </a>
      </nav>

      <!-- Right Side Actions / Mobile Menu Button -->
      <div class="flex items-center gap-3">
        <button id="mobile-menu-btn" type="button"
          class="md:hidden p-1.5 rounded-lg text-slate-600 hover:bg-slate-100 transition-colors border-0 bg-transparent cursor-pointer"
          aria-label="Toggle Navigation Menu">
          <span class="material-symbols-outlined fs-5">menu</span>
        </button>
      </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu-drawer"
      class="hidden md:hidden bg-white border-b border-slate-200 px-4 py-4 space-y-3 shadow-lg">
      <a href="<?php echo esc_url(home_url('/#home')); ?>" class="block text-sm font-semibold text-slate-700 hover:text-[#003c90] text-decoration-none py-1">
        Home
      </a>
      <a href="<?php echo esc_url(home_url('/#about')); ?>"
        class="block text-sm font-semibold text-slate-700 hover:text-[#003c90] text-decoration-none py-1">
        About
      </a>
      <a href="<?php echo esc_url(home_url('/#vision-mission')); ?>"
        class="block text-sm font-semibold text-slate-700 hover:text-[#003c90] text-decoration-none py-1">
        Vision &amp; Mission
      </a>
      <a href="<?php echo esc_url(home_url('/#solutions')); ?>"
        class="block text-sm font-semibold text-slate-700 hover:text-[#003c90] text-decoration-none py-1">
        Solutions
      </a>
      <a href="#contact"
        class="block text-sm font-semibold text-slate-700 hover:text-[#003c90] text-decoration-none py-1">
        Contact
      </a>
    </div>
  </header>