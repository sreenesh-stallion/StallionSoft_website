<?php
/* Template Name: Home Page */
get_header(); 
$assets = get_template_directory_uri() . '/assets';
?>

  <!-- MAIN CONTENT -->
  <main class="flex-grow pt-14">
    <!-- HERO CAROUSEL SECTION -->
    <section id="home"
      class="relative overflow-hidden bg-gradient-to-b from-[#f3f4f5] via-[#f8f9fa] to-white border-b border-slate-200/70">
      <div class="absolute inset-0 opacity-15 pointer-events-none mix-blend-multiply overflow-hidden">
        <img src="<?php echo esc_url($assets); ?>/images/mesh-bg.png" alt="Mesh Pattern" class="w-full h-full object-cover scale-105" />
      </div>

      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 md:px-8 pt-4 sm:pt-6 pb-3 sm:pb-4">
        <!-- SLIDE 0: ASSET MANAGEMENT -->
        <!-- SLIDE 0: ASSET MANAGEMENT -->
        <div class="carousel-slide" data-slide="0">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-7 space-y-4 sm:space-y-5 order-2 lg:order-1 slide-text-col">
              <span class="text-xs font-bold uppercase tracking-wider text-[#003c90] font-mono-tech">
                Enterprise Asset Intelligence
              </span>
              <h1 class="font-headline text-3xl sm:text-4xl lg:text-[42px] font-extrabold text-[#001945] tracking-tight leading-[1.15]">
                Complete Lifecycle Visibility with
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0f52ba] to-[#00b4d8]">
                  Asset Management.
                </span>
              </h1>
              <p class="text-base sm:text-lg text-[#434653] leading-relaxed max-w-2xl">
                Empower your enterprise to monitor, govern, and optimize tangible and intangible capital assets. Ensure
                continuous audit readiness and prevent downtime with automated RFID tracking.
              </p>
              <div class="flex flex-wrap gap-2 text-xs">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[#003c90] font-medium">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">check_circle</span>
                  Automated Depreciation
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[#003c90] font-medium">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">check_circle</span>
                  RFID Audit Verification
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[#003c90] font-medium">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">check_circle</span>
                  Multi-Branch Sync
                </span>
              </div>
              <div class="pt-2 flex flex-wrap gap-3">
                <a href="<?php echo esc_url(home_url('/asset-management')); ?>"
                  class="btn-primary text-white text-sm font-bold px-6 py-3 rounded-lg shadow-md hover:opacity-95 transition-all cursor-pointer flex items-center gap-2 text-decoration-none">
                  <span>Explore Solution</span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
                <button type="button" data-open-demo="asset-management"
                  class="bg-white hover:bg-slate-50 text-[#001945] font-semibold text-sm px-6 py-3 rounded-lg border border-slate-300 shadow-2xs transition-colors cursor-pointer">
                  Request Live Demo
                </button>
              </div>
            </div>
            <div class="lg:col-span-5 order-1 lg:order-2 slide-image-col">
              <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/80 bg-slate-900 group">
                <img src="<?php echo esc_url($assets); ?>/images/asset-management.jpg" alt="Asset Management Dashboard"
                  class="w-full h-60 sm:h-72 lg:h-96 object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>
                <div class="absolute top-3 right-3 sm:top-4 sm:right-4 glass-panel p-2.5 sm:p-3 rounded-xl border border-white/60 shadow-lg animate-float">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-cyan-600 fs-6">verified</span>
                    <span class="text-xs font-bold text-[#001945]">99.8% Accuracy</span>
                  </div>
                  <span class="text-[10px] text-slate-500 font-mono-tech block mt-0.5">Real-Time Audit Sync</span>
                </div>
                <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 glass-panel p-2.5 sm:p-3 rounded-xl border border-white/60 shadow-lg animate-float-delayed">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-emerald-600 fs-6">trending_up</span>
                    <span class="text-xs font-bold text-[#001945]">-38% Loss Rate</span>
                  </div>
                  <span class="text-[10px] text-slate-500 font-mono-tech block mt-0.5">Autonomous Tracking</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- SLIDE 1: WAREHOUSE MANAGEMENT (ACTIVE) -->
        <div class="carousel-slide active" data-slide="1">
          <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-8 lg:gap-12 items-center">
            <div class="lg:col-span-7 space-y-4 sm:space-y-5 order-2 lg:order-1 slide-text-col">
              <span class="text-xs font-bold uppercase tracking-wider text-[#003c90] font-mono-tech">
                Intelligent Logistics &amp; Supply Chain
              </span>
              <h1 class="font-headline text-3xl sm:text-4xl lg:text-[42px] font-extrabold text-[#001945] tracking-tight leading-[1.15]">
                Next-Gen Orchestration with
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0f52ba] to-[#00b4d8]">
                  Warehouse Management.
                </span>
              </h1>
              <p class="text-base sm:text-lg text-[#434653] leading-relaxed max-w-2xl">
                Control storage, picking, dispatching, and bin-level movements instantly. Seamlessly synchronize Barcode
                &amp; high-speed RFID scanning for frictionless fulfillment.
              </p>
              <div class="flex flex-wrap gap-2 text-xs">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[#003c90] font-medium">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">check_circle</span>
                  Automated Bin Allocation
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[#003c90] font-medium">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">check_circle</span>
                  Instant Pallet Verification
                </span>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/80 border border-slate-200 text-[#003c90] font-medium">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">check_circle</span>
                  ERP &amp; SAP Connectors
                </span>
              </div>
              <div class="pt-2 flex flex-wrap gap-3">
                <a href="<?php echo esc_url(home_url('/warehouse-management')); ?>"
                  class="btn-primary text-white text-sm font-bold px-6 py-3 rounded-lg shadow-md hover:opacity-95 transition-all cursor-pointer flex items-center gap-2 text-decoration-none">
                  <span>Explore Solution</span>
                  <span class="material-symbols-outlined fs-6">arrow_forward</span>
                </a>
                <button type="button" data-open-demo="warehouse-management"
                  class="bg-white hover:bg-slate-50 text-[#001945] font-semibold text-sm px-6 py-3 rounded-lg border border-slate-300 shadow-2xs transition-colors cursor-pointer">
                  Request Live Demo
                </button>
              </div>
            </div>
            <div class="lg:col-span-5 order-1 lg:order-2 slide-image-col">
              <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/80 bg-slate-900 group">
                <img src="<?php echo esc_url($assets); ?>/images/warehouse-management.jpg" alt="Warehouse Management Automation"
                  class="w-full h-60 sm:h-72 lg:h-96 object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>
                <div class="absolute top-3 right-3 sm:top-4 sm:right-4 glass-panel p-2.5 sm:p-3 rounded-xl border border-white/60 shadow-lg animate-float">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-cyan-600 fs-6">bolt</span>
                    <span class="text-xs font-bold text-[#001945]">3x Faster Picking</span>
                  </div>
                  <span class="text-[10px] text-slate-500 font-mono-tech block mt-0.5">Guided Path Routing</span>
                </div>
                <div class="absolute bottom-3 left-3 sm:bottom-4 sm:left-4 glass-panel p-2.5 sm:p-3 rounded-xl border border-white/60 shadow-lg animate-float-delayed">
                  <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-emerald-600 fs-6">inventory</span>
                    <span class="text-xs font-bold text-[#001945]">Zero Stockout</span>
                  </div>
                  <span class="text-[10px] text-slate-500 font-mono-tech block mt-0.5">Predictive Restocking</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- 6-PILL NAVIGATION TABS -->
        <div class="mt-4 sm:mt-5 hidden md:grid grid-cols-6 gap-2.5 lg:gap-3">
          <button type="button" class="nav-pill p-2.5 rounded-xl text-left cursor-pointer flex flex-col justify-between" data-target="0">
            <div class="flex items-center gap-2 mb-1">
              <span class="material-symbols-outlined text-[#003c90] fs-5">inventory_2</span>
              <span class="nav-pill-title text-xs font-bold text-slate-700 truncate">Asset Mgmt</span>
            </div>
            <span class="text-[10px] text-slate-400 font-mono-tech truncate">Lifecycle &amp; RFID</span>
            <div class="tab-indicator-bar"></div>
          </button>

          <button type="button" class="nav-pill active p-2.5 rounded-xl text-left cursor-pointer flex flex-col justify-between" data-target="1">
            <div class="flex items-center gap-2 mb-1">
              <span class="material-symbols-outlined text-[#003c90] fs-5">warehouse</span>
              <span class="nav-pill-title text-xs font-bold text-slate-700 truncate">Warehouse</span>
            </div>
            <span class="text-[10px] text-slate-400 font-mono-tech truncate">Storage &amp; Picking</span>
            <div class="tab-indicator-bar"></div>
          </button>

          <button type="button" class="nav-pill p-2.5 rounded-xl text-left cursor-pointer flex flex-col justify-between" data-target="2">
            <div class="flex items-center gap-2 mb-1">
              <span class="material-symbols-outlined text-[#003c90] fs-5">share_location</span>
              <span class="nav-pill-title text-xs font-bold text-slate-700 truncate">Track &amp; Trace</span>
            </div>
            <span class="text-[10px] text-slate-400 font-mono-tech truncate">Global Telemetry</span>
            <div class="tab-indicator-bar"></div>
          </button>

          <button type="button" class="nav-pill p-2.5 rounded-xl text-left cursor-pointer flex flex-col justify-between" data-target="3">
            <div class="flex items-center gap-2 mb-1">
              <span class="material-symbols-outlined text-[#003c90] fs-5">conveyor_belt</span>
              <span class="nav-pill-title text-xs font-bold text-slate-700 truncate">Work-in-progress</span>
            </div>
            <span class="text-[10px] text-slate-400 font-mono-tech truncate">Shopfloor Trace</span>
            <div class="tab-indicator-bar"></div>
          </button>

          <button type="button" class="nav-pill p-2.5 rounded-xl text-left cursor-pointer flex flex-col justify-between" data-target="4">
            <div class="flex items-center gap-2 mb-1">
              <span class="material-symbols-outlined text-[#003c90] fs-5">folder_managed</span>
              <span class="nav-pill-title text-xs font-bold text-slate-700 truncate">File Mgmt</span>
            </div>
            <span class="text-[10px] text-slate-400 font-mono-tech truncate">Records &amp; Audit</span>
            <div class="tab-indicator-bar"></div>
          </button>

          <button type="button" class="nav-pill p-2.5 rounded-xl text-left cursor-pointer flex flex-col justify-between" data-target="5">
            <div class="flex items-center gap-2 mb-1">
              <span class="material-symbols-outlined text-[#003c90] fs-5">storefront</span>
              <span class="nav-pill-title text-xs font-bold text-slate-700 truncate">Retail Mgmt</span>
            </div>
            <span class="text-[10px] text-slate-400 font-mono-tech truncate">POS &amp; Merchandising</span>
            <div class="tab-indicator-bar"></div>
          </button>
        </div>

        <div class="mt-4 flex md:hidden items-center justify-center gap-2">
          <button type="button" class="w-2 h-1.5 rounded-full bg-slate-300" data-dot="0" aria-label="Slide 1"></button>
          <button type="button" class="w-6 h-1.5 rounded-full bg-[#003c90]" data-dot="1" aria-label="Slide 2"></button>
          <button type="button" class="w-2 h-1.5 rounded-full bg-slate-300" data-dot="2" aria-label="Slide 3"></button>
          <button type="button" class="w-2 h-1.5 rounded-full bg-slate-300" data-dot="3" aria-label="Slide 4"></button>
          <button type="button" class="w-2 h-1.5 rounded-full bg-slate-300" data-dot="4" aria-label="Slide 5"></button>
          <button type="button" class="w-2 h-1.5 rounded-full bg-slate-300" data-dot="5" aria-label="Slide 6"></button>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="pt-4 pb-6 sm:pt-5 sm:pb-7 bg-[#f8f9fa] border-b border-slate-200/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="max-w-4xl mx-auto text-center mb-4 sm:mb-5">
          <h2 class="font-headline text-2xl sm:text-3xl font-extrabold text-[#001945] tracking-tight mb-2">
            About Stallion Software Hub
          </h2>
          <p class="text-sm sm:text-base text-[#434653] leading-relaxed mb-0">
            Stallion Software Hub is a division of Stallion Group, serving as an in-house software development center focused on driving industrial and enterprise efficiency. We specialize in providing innovative technology solutions that help businesses flourish, offering an entire range of IT services to conceptualize and realize digital initiatives.
          </p>
        </div>

        <div id="vision-mission" class="row g-3 sm:g-4 pt-1">
          <div class="col-12 col-md-6">
            <div class="glass-panel p-4 sm:p-5 rounded-2xl relative overflow-hidden group hover:shadow-xl transition-all duration-300 h-100 border border-white/70">
              <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#003c90] flex items-center justify-center mb-2.5 shadow-2xs">
                <span class="material-symbols-outlined fs-5">visibility</span>
              </div>
              <h3 class="font-headline text-lg sm:text-xl font-bold text-[#001945] mb-1.5">Our Vision</h3>
              <p class="text-sm sm:text-base text-[#434653] leading-relaxed mb-0">
                To become a Globally Leading and Reputed Organisation, respected by all Stake Holders such as Customers, Employees, Partners and Society.
              </p>
            </div>
          </div>

          <div class="col-12 col-md-6">
            <div class="glass-panel p-4 sm:p-5 rounded-2xl relative overflow-hidden group hover:shadow-xl transition-all duration-300 h-100 border border-white/70">
              <div class="w-10 h-10 rounded-xl bg-cyan-50 text-[#004757] flex items-center justify-center mb-2.5 shadow-2xs">
                <span class="material-symbols-outlined fs-5">rocket_launch</span>
              </div>
              <h3 class="font-headline text-lg sm:text-xl font-bold text-[#001945] mb-1.5">Our Mission</h3>
              <p class="text-sm sm:text-base text-[#434653] leading-relaxed mb-0">
                To achieve profit by providing best of products, technologies, services to its customers by practicing business ethics, and to become useful to the society.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SOLUTIONS 6-CARD GRID -->
    <section id="solutions" class="py-6 sm:py-7 bg-[#f8f9fa] border-b border-slate-200/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="text-center mb-6 sm:mb-7">
          <h2 class="font-headline text-2xl sm:text-3xl font-extrabold text-[#001945] tracking-tight">
            Intelligent Solutions Ecosystem
          </h2>
          <p class="text-sm sm:text-base text-[#434653] mt-1.5 max-w-2xl mx-auto">
            Using Stallion.Soft is equivalent to getting work done quickly and efficiently.
          </p>
        </div>

        <div class="row g-4">
          <!-- Card 1: Asset Management -->
          <div class="col-12 col-md-6 col-lg-4">
            <a href="<?php echo esc_url(home_url('/asset-management')); ?>"
              class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-100 text-decoration-none">
              <div class="h-52 bg-slate-900 overflow-hidden relative">
                <img src="<?php echo esc_url($assets); ?>/images/asset-management.jpg" alt="Asset Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10"></div>
                <div class="absolute bottom-4 left-4 z-20 bg-white/20 backdrop-blur-md p-2 rounded-lg border border-white/20 flex items-center justify-center text-white">
                  <span class="material-symbols-outlined fs-5">inventory_2</span>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h4 class="font-headline text-xl font-bold text-[#001945] mb-2 group-hover:text-[#003c90] transition-colors">
                    Asset Management
                  </h4>
                  <p class="text-sm text-[#434653] line-clamp-3 leading-relaxed mb-4">
                    Facilitates organisations in managing their tangible and intangible assets. Maintains records to monitor asset state and assignments.
                  </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                  <span class="text-[#003c90] font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </span>
                  <span class="text-xs text-slate-400 font-mono-tech uppercase">Asset Mgmt</span>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 2: Warehouse Management -->
          <div class="col-12 col-md-6 col-lg-4">
            <a href="<?php echo esc_url(home_url('/warehouse-management')); ?>"
              class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-100 text-decoration-none">
              <div class="h-52 bg-slate-900 overflow-hidden relative">
                <img src="<?php echo esc_url($assets); ?>/images/warehouse-management.jpg" alt="Warehouse Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10"></div>
                <div class="absolute bottom-4 left-4 z-20 bg-white/20 backdrop-blur-md p-2 rounded-lg border border-white/20 flex items-center justify-center text-white">
                  <span class="material-symbols-outlined fs-5">warehouse</span>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h4 class="font-headline text-xl font-bold text-[#001945] mb-2 group-hover:text-[#003c90] transition-colors">
                    Warehouse Management
                  </h4>
                  <p class="text-sm text-[#434653] line-clamp-3 leading-relaxed mb-4">
                    Control movement and storage of materials within a warehouse and process associated transactions using Barcode and RFID.
                  </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                  <span class="text-[#003c90] font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </span>
                  <span class="text-xs text-slate-400 font-mono-tech uppercase">Warehouse</span>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 3: File Management -->
          <div class="col-12 col-md-6 col-lg-4">
            <a href="<?php echo esc_url(home_url('/file-management')); ?>"
              class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-100 text-decoration-none">
              <div class="h-52 bg-slate-900 overflow-hidden relative">
                <img src="<?php echo esc_url($assets); ?>/images/file-management.jpg" alt="File Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10"></div>
                <div class="absolute bottom-4 left-4 z-20 bg-white/20 backdrop-blur-md p-2 rounded-lg border border-white/20 flex items-center justify-center text-white">
                  <span class="material-symbols-outlined fs-5">folder_managed</span>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h4 class="font-headline text-xl font-bold text-[#001945] mb-2 group-hover:text-[#003c90] transition-colors">
                    File Management
                  </h4>
                  <p class="text-sm text-[#434653] line-clamp-3 leading-relaxed mb-4">
                    Track documents effectively and rapidly using Barcode technology to ensure controlled and improved distribution.
                  </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                  <span class="text-[#003c90] font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </span>
                  <span class="text-xs text-slate-400 font-mono-tech uppercase">File Mgmt</span>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 4: Work-in-progress -->
          <div class="col-12 col-md-6 col-lg-4">
            <a href="<?php echo esc_url(home_url('/work-in-progress')); ?>"
              class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-100 text-decoration-none">
              <div class="h-52 bg-slate-900 overflow-hidden relative">
                <img src="<?php echo esc_url($assets); ?>/images/work-in-progress.jpg" alt="Work in Progress" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10"></div>
                <div class="absolute bottom-4 left-4 z-20 bg-white/20 backdrop-blur-md p-2 rounded-lg border border-white/20 flex items-center justify-center text-white">
                  <span class="material-symbols-outlined fs-5">conveyor_belt</span>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h4 class="font-headline text-xl font-bold text-[#001945] mb-2 group-hover:text-[#003c90] transition-colors">
                    Work-in-progress
                  </h4>
                  <p class="text-sm text-[#434653] line-clamp-3 leading-relaxed mb-4">
                    Manage unfinished items in a production process or supply chain with real-time traceability using RFID.
                  </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                  <span class="text-[#003c90] font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </span>
                  <span class="text-xs text-slate-400 font-mono-tech uppercase">Work-in-progress</span>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 5: Retail Management -->
          <div class="col-12 col-md-6 col-lg-4">
            <a href="<?php echo esc_url(home_url('/retail-management')); ?>"
              class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-100 text-decoration-none">
              <div class="h-52 bg-slate-900 overflow-hidden relative">
                <img src="<?php echo esc_url($assets); ?>/images/retail-management.jpg" alt="Retail Management" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10"></div>
                <div class="absolute bottom-4 left-4 z-20 bg-white/20 backdrop-blur-md p-2 rounded-lg border border-white/20 flex items-center justify-center text-white">
                  <span class="material-symbols-outlined fs-5">storefront</span>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h4 class="font-headline text-xl font-bold text-[#001945] mb-2 group-hover:text-[#003c90] transition-colors">
                    Retail Management
                  </h4>
                  <p class="text-sm text-[#434653] line-clamp-3 leading-relaxed mb-4">
                    Automate activities of retailers and wholesalers to make correct merchandising decisions using precise POS data.
                  </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                  <span class="text-[#003c90] font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </span>
                  <span class="text-xs text-slate-400 font-mono-tech uppercase">Retail Mgmt</span>
                </div>
              </div>
            </a>
          </div>

          <!-- Card 6: Track & Trace -->
          <div class="col-12 col-md-6 col-lg-4">
            <a href="<?php echo esc_url(home_url('/track-and-trace')); ?>"
              class="bg-white border border-slate-200 rounded-2xl overflow-hidden hover:shadow-xl transition-all duration-300 group flex flex-col h-100 text-decoration-none">
              <div class="h-52 bg-slate-900 overflow-hidden relative">
                <img src="<?php echo esc_url($assets); ?>/images/track-and-trace.jpg" alt="Track and Trace" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent z-10"></div>
                <div class="absolute bottom-4 left-4 z-20 bg-white/20 backdrop-blur-md p-2 rounded-lg border border-white/20 flex items-center justify-center text-white">
                  <span class="material-symbols-outlined fs-5">share_location</span>
                </div>
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h4 class="font-headline text-xl font-bold text-[#001945] mb-2 group-hover:text-[#003c90] transition-colors">
                    Track &amp; Trace
                  </h4>
                  <p class="text-sm text-[#434653] line-clamp-3 leading-relaxed mb-4">
                    Determine current and past locations of products efficiently with modern identification technologies.
                  </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between">
                  <span class="text-[#003c90] font-semibold text-sm flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span>Learn More</span>
                    <span class="material-symbols-outlined fs-6">arrow_forward</span>
                  </span>
                  <span class="text-xs text-slate-400 font-mono-tech uppercase">Track &amp; Trace</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- TRUSTED LEADERS -->
    <section class="py-5 sm:py-6 bg-white border-b border-slate-200/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 text-center">
        <h2 class="font-headline text-xl sm:text-2xl font-extrabold text-[#001945] mb-4">
          Trusted by Industry Leaders
        </h2>
        <div class="d-flex flex-wrap justify-content-center gap-2.5 sm:gap-3.5 align-items-center">
          <div class="px-4 py-2 bg-[#f3f4f5] border border-slate-200 rounded-xl hover:shadow-xs transition-shadow">
            <span class="font-headline font-bold text-slate-500 text-xs sm:text-sm">APM Terminals</span>
          </div>
          <div class="px-4 py-2 bg-[#f3f4f5] border border-slate-200 rounded-xl hover:shadow-xs transition-shadow">
            <span class="font-headline font-bold text-slate-500 text-xs sm:text-sm">Reliance Logistics</span>
          </div>
          <div class="px-4 py-2 bg-[#f3f4f5] border border-slate-200 rounded-xl hover:shadow-xs transition-shadow">
            <span class="font-headline font-bold text-slate-500 text-xs sm:text-sm">DHL Supply Chain</span>
          </div>
          <div class="px-4 py-2 bg-[#f3f4f5] border border-slate-200 rounded-xl hover:shadow-xs transition-shadow">
            <span class="font-headline font-bold text-slate-500 text-xs sm:text-sm">Honeywell Auto</span>
          </div>
          <div class="px-4 py-2 bg-[#f3f4f5] border border-slate-200 rounded-xl hover:shadow-xs transition-shadow">
            <span class="font-headline font-bold text-slate-500 text-xs sm:text-sm">Maersk Global</span>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="relative overflow-hidden bg-[#001945] text-white py-8 sm:py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="row g-4 align-items-center">
          <div class="col-12 col-lg-5 space-y-4">
            <h2 class="font-headline text-2xl sm:text-3xl lg:text-[38px] font-extrabold tracking-tight leading-tight">
              Ready to accelerate?
            </h2>
            <p class="text-sm sm:text-base text-[#b0c6ff] leading-relaxed">
              Have a project in mind or want to consult with our experts? Let's collaborate to get your project done efficiently.
            </p>
            <div class="space-y-3 pt-1">
              <a href="mailto:marketing@stallionindia.com" class="flex items-center gap-3 text-slate-200 hover:text-white transition-colors text-decoration-none">
                <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center text-[#3cd7ff]">
                  <span class="material-symbols-outlined fs-5">mail</span>
                </div>
                <span class="font-medium text-sm">marketing@stallionindia.com</span>
              </a>
              <a href="tel:+919846240458" class="flex items-center gap-3 text-slate-200 hover:text-white transition-colors text-decoration-none">
                <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center text-[#3cd7ff]">
                  <span class="material-symbols-outlined fs-5">call</span>
                </div>
                <span class="font-medium text-sm">+91 9846240458</span>
              </a>
              <div class="flex items-start gap-3 text-slate-200">
                <div class="w-9 h-9 rounded-lg bg-white/10 flex items-center justify-center text-[#3cd7ff] shrink-0 mt-0.5">
                  <span class="material-symbols-outlined fs-5">location_on</span>
                </div>
                <span class="font-medium text-sm max-w-sm leading-relaxed">
                  Stallion House, Paadam Stop, K P Vallon Road Kadavanthara – 682020
                </span>
              </div>
            </div>
          </div>

          <div class="col-12 col-lg-7">
            <div class="glass-panel-dark p-5 sm:p-6 rounded-2xl shadow-2xl relative overflow-hidden">
              <form id="contact-form" class="space-y-3">
                <div class="row g-2.5">
                  <div class="col-12 col-sm-6">
                    <label class="block text-xs font-semibold uppercase tracking-wider mb-1 text-[#d9e2ff]">Name</label>
                    <input type="text" required placeholder="Jane Doe" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                  <div class="col-12 col-sm-6">
                    <label class="block text-xs font-semibold uppercase tracking-wider mb-1 text-[#d9e2ff]">Company</label>
                    <input type="text" required placeholder="Acme Global Logistics" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                </div>

                <div class="row g-2.5">
                  <div class="col-12 col-sm-6">
                    <label class="block text-xs font-semibold uppercase tracking-wider mb-1 text-[#d9e2ff]">Email</label>
                    <input type="email" required placeholder="jane@company.com" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                  <div class="col-12 col-sm-6">
                    <label class="block text-xs font-semibold uppercase tracking-wider mb-1 text-[#d9e2ff]">Phone</label>
                    <input type="tel" placeholder="+91 9846240458" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                </div>

                <div>
                  <label class="block text-xs font-semibold uppercase tracking-wider mb-1 text-[#d9e2ff]">Message</label>
                  <textarea rows="3" required placeholder="Tell us about your warehouse throughput, RFID objectives, or supply chain modernization goals..." class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm resize-none"></textarea>
                </div>

                <button type="submit" class="btn-primary w-full text-white py-3 rounded-lg font-bold text-sm shadow-lg mt-1 cursor-pointer flex items-center justify-center gap-2">
                  <span>Send Message</span>
                  <span class="material-symbols-outlined fs-6">send</span>
                </button>
              </form>

              <div id="contact-success" class="d-none py-6 text-center space-y-2">
                <div class="w-12 h-12 rounded-full bg-emerald-500/20 text-emerald-400 mx-auto flex items-center justify-center border border-emerald-500/30">
                  <span class="material-symbols-outlined fs-3">check_circle</span>
                </div>
                <h4 class="font-headline text-lg font-bold text-white">Inquiry Dispatched Successfully</h4>
                <p class="text-slate-300 text-xs sm:text-sm max-w-md mx-auto">
                  Thank you. A Stallion OneByte solutions engineer has received your message and will respond within 24 hours.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>