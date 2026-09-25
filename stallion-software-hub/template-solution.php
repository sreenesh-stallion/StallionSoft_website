<?php
/* Template Name: Solution Product Template */
get_header(); 
$assets = get_template_directory_uri() . '/assets';
$slug = get_post_field('post_name', get_post());

// Configuration map matching your HTML variations
$solutions = [
    'asset-management' => [
        'sim_type' => 'asset',
        'badge' => 'Enterprise Asset Intelligence',
        'title' => 'Complete Lifecycle Visibility with',
        'title_grad' => 'Asset Management.',
        'tagline' => 'Maintain records to monitor asset state and assignments.',
        'desc' => 'Empower your enterprise to monitor, govern, and optimize tangible and intangible capital assets. Ensure continuous audit readiness and prevent downtime with automated RFID tracking. By fusing active/passive RFID tag telemetry with enterprise ERP connectors, physical audits that previously took weeks are completed in minutes.',
        'img' => 'asset-management.jpg',
        'm1_val' => '99.8% Accuracy',
        'm1_lbl' => 'Real-Time Audit Sync',
        'm2_val' => '-38% Loss Rate',
        'm2_lbl' => 'Autonomous Tracking',
        'live_tag' => 'Live Telemetry • Global Assets',
        'sim_title' => 'Live Edge Simulator: Asset Management',
        'sim_engine' => 'ASSET INTELLIGENCE GATEWAY',
        'sim_btn' => 'Execute Handheld RFID Sweep',
    ],
    'warehouse-management' => [
        'sim_type' => 'warehouse',
        'badge' => 'Intelligent Logistics & Supply Chain',
        'title' => 'Next-Gen Orchestration with',
        'title_grad' => 'Warehouse Management.',
        'tagline' => 'Control storage, picking, dispatching, and bin-level movements instantly.',
        'desc' => 'A comprehensive Warehouse Management System (WMS) engineered for high-throughput distribution hubs and fulfillment operations. From dock-to-stock putaway to wave picking and dispatch staging, seamlessly synchronize Barcode & high-speed RFID scanning for frictionless fulfillment.',
        'img' => 'warehouse-management.jpg',
        'm1_val' => '3x Faster Picking',
        'm1_lbl' => 'Guided Path Routing',
        'm2_val' => 'Zero Stockout',
        'm2_lbl' => 'Predictive Restocking',
        'live_tag' => 'Smart Distribution Hub',
        'sim_title' => 'Live Edge Simulator: Warehouse Orchestration',
        'sim_engine' => 'WMS INBOUND PORTAL',
        'sim_btn' => 'Simulate Inbound Pallet Arrival',
    ]
];

// Fallback to warehouse or current slug
$data = isset($solutions[$slug]) ? $solutions[$slug] : $solutions['asset-management'];
?>

<div data-sim-type="<?php echo esc_attr($data['sim_type']); ?>">
  <main class="flex-grow pt-14">
    <!-- BREADCRUMBS -->
    <div class="bg-white border-b border-slate-200/70 py-2.5">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 flex items-center gap-2 text-xs text-slate-500 font-mono-tech">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:text-[#003c90] text-decoration-none flex items-center gap-1">
          <span class="material-symbols-outlined fs-6">home</span>
          <span>Home</span>
        </a>
        <span>/</span>
        <a href="<?php echo esc_url(home_url('/#solutions')); ?>" class="hover:text-[#003c90] text-decoration-none">
          Solutions
        </a>
        <span>/</span>
        <span class="text-[#003c90] font-bold"><?php the_title(); ?></span>
      </div>
    </div>

    <!-- PRODUCT HERO SECTION -->
    <section class="relative overflow-hidden bg-gradient-to-b from-[#f3f4f5] via-[#f8f9fa] to-white border-b border-slate-200/70 pt-8 sm:pt-12 pb-10 sm:pb-14">
      <div class="absolute inset-0 opacity-15 pointer-events-none mix-blend-multiply overflow-hidden">
        <img src="<?php echo esc_url($assets); ?>/images/mesh-bg.png" alt="Mesh Pattern" class="w-full h-full object-cover scale-105" />
      </div>

      <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          <div class="lg:col-span-7 space-y-5">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 border border-blue-200/60">
              <span class="w-2 h-2 rounded-full bg-[#003c90] animate-pulse"></span>
              <span class="text-xs font-bold uppercase tracking-wider text-[#003c90] font-mono-tech">
                <?php echo esc_html($data['badge']); ?>
              </span>
            </div>

            <h1 class="font-headline text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#001945] tracking-tight leading-tight">
              <?php echo esc_html($data['title']); ?> <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0f52ba] to-[#00b4d8]"><?php echo esc_html($data['title_grad']); ?></span>
            </h1>

            <p class="text-base sm:text-lg text-[#434653] font-medium leading-relaxed">
              <?php echo esc_html($data['tagline']); ?>
            </p>

            <p class="text-sm text-slate-600 leading-relaxed">
              <?php echo esc_html($data['desc']); ?>
            </p>

            <div class="flex flex-wrap gap-2 pt-1">
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-2xs">
                <span class="material-symbols-outlined text-emerald-600 text-sm">check_circle</span>
                Automated Allocation &amp; Audit
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-2xs">
                <span class="material-symbols-outlined text-emerald-600 text-sm">check_circle</span>
                RFID Live Gate Verification
              </span>
              <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white border border-slate-200 text-xs font-semibold text-slate-700 shadow-2xs">
                <span class="material-symbols-outlined text-emerald-600 text-sm">check_circle</span>
                Enterprise ERP Integration
              </span>
            </div>

            <div class="flex flex-wrap gap-3 pt-3">
              <button type="button" data-open-demo="<?php echo esc_attr($slug); ?>"
                class="btn-primary text-white font-bold text-sm px-6 py-3 rounded-lg shadow-lg flex items-center gap-2 cursor-pointer">
                <span>Request Live Demo</span>
                <span class="material-symbols-outlined text-sm">arrow_forward</span>
              </button>
              <a href="#contact" class="bg-white hover:bg-slate-50 text-[#001945] font-semibold text-sm px-6 py-3 rounded-lg border border-slate-300 shadow-2xs transition-colors cursor-pointer text-decoration-none">
                Contact Specialist
              </a>
            </div>
          </div>

          <div class="lg:col-span-5">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/80 bg-slate-900 group">
              <img src="<?php echo esc_url($assets . '/images/' . $data['img']); ?>" alt="<?php the_title(); ?>"
                class="w-full h-80 sm:h-96 object-cover group-hover:scale-105 transition-transform duration-500" />
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent pointer-events-none"></div>

              <div class="absolute top-4 right-4 glass-panel p-3 rounded-xl border border-white/60 shadow-lg animate-float">
                <div class="flex items-center gap-2">
                  <span class="material-symbols-outlined text-cyan-600 fs-6">verified</span>
                  <span class="text-xs font-bold text-[#001945]"><?php echo esc_html($data['m1_val']); ?></span>
                </div>
                <span class="text-[10px] text-slate-500 font-mono-tech block mt-0.5"><?php echo esc_html($data['m1_lbl']); ?></span>
              </div>

              <div class="absolute bottom-4 left-4 glass-panel p-3 rounded-xl border border-white/60 shadow-lg animate-float-delayed">
                <div class="flex items-center gap-2">
                  <span class="material-symbols-outlined text-emerald-600 fs-6">trending_up</span>
                  <span class="text-xs font-bold text-[#001945]"><?php echo esc_html($data['m2_val']); ?></span>
                </div>
                <span class="text-[10px] text-slate-500 font-mono-tech block mt-0.5"><?php echo esc_html($data['m2_lbl']); ?></span>
              </div>

              <div class="absolute bottom-4 right-4 bg-slate-900/80 backdrop-blur-md px-2.5 py-1 rounded text-[10px] text-cyan-300 font-mono-tech border border-cyan-500/30 flex items-center gap-1.5">
                <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
                <span><?php echo esc_html($data['live_tag']); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- INTERACTIVE EDGE SIMULATOR SECTION -->
    <section class="py-8 sm:py-10 bg-white border-b border-slate-200/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="text-center mb-6">
          <span class="text-xs font-bold uppercase tracking-wider text-[#003c90] font-mono-tech">
            Interactive Test Console
          </span>
          <h2 class="font-headline text-2xl sm:text-3xl font-extrabold text-[#001945] tracking-tight mt-1">
            <?php echo esc_html($data['sim_title']); ?>
          </h2>
          <p class="text-sm text-slate-600 max-w-xl mx-auto mt-1">
            Observe real-time telemetry reconciliation, scanning events, and automated edge logging.
          </p>
        </div>

        <div class="max-w-4xl mx-auto bg-slate-900 text-slate-100 p-5 rounded-2xl font-mono border border-slate-800 shadow-xl">
          <div class="flex justify-between items-center pb-3 border-b border-slate-800">
            <div class="flex items-center gap-2">
              <span class="inline-block rounded-full bg-emerald-400 w-2.5 h-2.5 animate-pulse"></span>
              <span class="text-xs text-emerald-400 font-bold">
                EDGE SIMULATOR: <?php echo esc_html($data['sim_engine']); ?>
              </span>
            </div>
            <span class="text-xs text-slate-400">GS1 / EPC Gen 2 Compliant</span>
          </div>

          <div class="py-4">
            <div id="sim-feed" class="p-3 bg-black/60 rounded-xl text-xs space-y-2 font-mono" style="min-height: 120px; max-height: 180px; overflow-y: auto;">
              <div class="text-cyan-300 font-semibold">[Connected] Live socket connected to Stallion Gateway. Ready for trigger.</div>
            </div>
          </div>

          <div class="flex flex-wrap justify-between items-center gap-3 pt-3 border-t border-slate-800">
            <button id="sim-trigger-btn" type="button" class="btn-primary text-white text-xs font-bold px-4 py-2.5 rounded-lg flex items-center gap-2 cursor-pointer">
              <span class="material-symbols-outlined text-sm">sensors</span>
              <span><?php echo esc_html($data['sim_btn']); ?></span>
            </button>
            <span class="text-[11px] text-slate-400 font-mono-tech">
              Sub-second multi-facility sync enabled
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- CAPABILITIES SECTION -->
    <section class="py-10 sm:py-12 bg-[#f8f9fa] border-b border-slate-200/60">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="text-center mb-8">
          <span class="text-xs font-bold uppercase tracking-wider text-[#003c90] font-mono-tech">
            Core Capabilities
          </span>
          <h2 class="font-headline text-2xl sm:text-3xl font-extrabold text-[#001945] tracking-tight mt-1">
            Enterprise Capabilities &amp; Value
          </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-5xl mx-auto">
          <div class="p-5 bg-white border border-slate-200 rounded-2xl shadow-xs hover:shadow-md transition-shadow">
            <div class="flex items-start gap-3">
              <div class="w-10 h-10 rounded-xl bg-blue-50 text-[#003c90] flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined fs-5">calculate</span>
              </div>
              <div>
                <h3 class="font-headline font-bold text-base text-[#001945] mb-1">Automated Systems Calculation</h3>
                <p class="text-sm text-slate-600 leading-relaxed mb-0">Direct ERP synchronization with ledger rules, automated schedules, and audit-ready outputs.</p>
              </div>
            </div>
          </div>

          <div class="p-5 bg-white border border-slate-200 rounded-2xl shadow-xs hover:shadow-md transition-shadow">
            <div class="flex items-start gap-3">
              <div class="w-10 h-10 rounded-xl bg-cyan-50 text-[#004757] flex items-center justify-center shrink-0">
                <span class="material-symbols-outlined fs-5">pin_drop</span>
              </div>
              <div>
                <h3 class="font-headline font-bold text-base text-[#001945] mb-1">Continuous Multi-Facility Geo-Logging</h3>
                <p class="text-sm text-slate-600 leading-relaxed mb-0">Real-time status and movement logging across warehouses, hubs, and transport routes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT LEAD SECTION -->
    <section id="contact" class="py-12 sm:py-16 bg-[#001945] text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
          <div class="lg:col-span-5 space-y-4">
            <span class="text-xs font-bold uppercase tracking-wider text-cyan-400 font-mono-tech">
              Connect With Engineers
            </span>
            <h2 class="font-headline text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
              Ready to accelerate with <?php the_title(); ?>?
            </h2>
            <p class="text-sm text-slate-300 leading-relaxed">
              Have a project in mind or want to consult with our RFID specialists? Let's collaborate.
            </p>
            <div class="space-y-2.5 pt-2 text-xs text-slate-300 font-mono-tech">
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-cyan-400 text-sm">mail</span>
                <span>marketing@stallionindia.com</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-cyan-400 text-sm">call</span>
                <span>+91 9846240458</span>
              </div>
              <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-cyan-400 text-sm">location_on</span>
                <span>Stallion House, Paadam Stop, K P Vallon Road, Kadavanthara, Kochi - 682020</span>
              </div>
            </div>
          </div>

          <div class="lg:col-span-7">
            <div class="glass-panel-dark p-6 sm:p-8 rounded-2xl border border-white/15 shadow-2xl">
              <form id="contact-form" class="space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label class="block text-xs font-mono-tech text-slate-300 mb-1">YOUR NAME</label>
                    <input type="text" required placeholder="Jane Doe" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                  <div>
                    <label class="block text-xs font-mono-tech text-slate-300 mb-1">COMPANY</label>
                    <input type="text" required placeholder="Acme Global Logistics" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div>
                    <label class="block text-xs font-mono-tech text-slate-300 mb-1">WORK EMAIL</label>
                    <input type="email" required placeholder="jane@company.com" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                  <div>
                    <label class="block text-xs font-mono-tech text-slate-300 mb-1">PHONE NUMBER</label>
                    <input type="tel" placeholder="+91 9846240458" class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm" />
                  </div>
                </div>

                <div>
                  <label class="block text-xs font-mono-tech text-slate-300 mb-1">PROJECT OBJECTIVES</label>
                  <textarea rows="3" placeholder="Tell us about your requirements..." class="form-control bg-white/5 border-white/20 text-white placeholder-slate-400 py-2 rounded-lg text-sm"></textarea>
                </div>

                <button type="submit" class="w-full btn-primary text-white font-bold text-sm py-3 rounded-lg shadow-lg flex items-center justify-center gap-2 cursor-pointer">
                  <span>Send Message</span>
                  <span class="material-symbols-outlined text-sm">send</span>
                </button>
              </form>

              <div id="contact-success" class="d-none text-center py-8">
                <span class="material-symbols-outlined text-emerald-400 fs-1">check_circle</span>
                <h4 class="font-headline font-bold text-white text-lg mt-2">Inquiry Submitted</h4>
                <p class="text-xs text-slate-300 mt-1">Our technical solution team will connect with you within 2 business hours.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</div>

<?php get_footer(); ?>