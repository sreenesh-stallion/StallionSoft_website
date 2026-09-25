// Stallion OneByte - Digital Intelligence Vanilla JavaScript Application
// Pure JavaScript - No TypeScript

const SOLUTIONS_DATA = [
  {
    id: 'asset-management',
    index: 0,
    categoryTag: 'Enterprise Asset Intelligence',
    titlePrefix: 'Complete Lifecycle Visibility with ',
    highlightedTitle: 'Asset Management.',
    tagline: 'Maintain records to monitor asset state and assignments',
    description:
      'Empower your enterprise to monitor, govern, and optimize tangible and intangible capital assets. Ensure continuous audit readiness and prevent downtime with automated RFID tracking.',
    image: 'images/asset-management.jpg',
    label: 'Asset Mgmt',
    subtitle: 'Lifecycle & RFID',
    icon: 'inventory_2',
    features: ['Automated Depreciation', 'RFID Audit Verification', 'Multi-Branch Sync'],
    metricTop: { value: '99.8% Accuracy', label: 'Real-Time Audit Sync', icon: 'verified' },
    metricBottom: { value: '-38% Loss Rate', label: 'Autonomous Tracking', icon: 'trending_up' },
    simType: 'asset',
    badgeText: 'Live Dashboard • Global Assets',
    overview:
      'Stallion OneByte Asset Management streamlines the full equipment, IT asset, and infrastructure lifecycle. By fusing active/passive RFID tag telemetry with enterprise ERP connectors, physical audits that previously took weeks are completed in minutes.',
    benefits: [
      'Automated fixed asset depreciation based on international IFRS & GAAP schedules.',
      'Continuous geo-location logging across multi-facility operations.',
      'Zero-trust custody transfers with dual-signature digital sign-offs.',
      'Proactive maintenance alerts triggered by hours logged or operational thresholds.',
    ],
    specs: [
      'EPC Gen 2 / ISO 18000-6C passive RFID reader protocol integration',
      'Bulk asset scanning up to 700 tags per second',
      'Direct bidirectional sync with SAP S/4HANA, Oracle NetSuite, and Microsoft Dynamics',
      'Custom asset categorization trees with role-based visibility rules',
    ],
  },
  {
    id: 'warehouse-management',
    index: 1,
    categoryTag: 'Intelligent Logistics & Supply Chain',
    titlePrefix: 'Next-Gen Orchestration with ',
    highlightedTitle: 'Warehouse Management.',
    tagline: 'Control storage, picking, dispatching, and bin-level movements instantly',
    description:
      'Control storage, picking, dispatching, and bin-level movements instantly. Seamlessly synchronize Barcode & high-speed RFID scanning for frictionless fulfillment.',
    image: 'images/warehouse-management.jpg',
    label: 'Warehouse',
    subtitle: 'Storage & Picking',
    icon: 'warehouse',
    features: ['Automated Bin Allocation', 'Instant Pallet Verification', 'ERP & SAP Connectors'],
    metricTop: { value: '3x Faster Picking', label: 'Guided Path Routing', icon: 'bolt' },
    metricBottom: { value: 'Zero Stockout', label: 'Predictive Restocking', icon: 'inventory' },
    simType: 'warehouse',
    badgeText: 'Smart Distribution Hub',
    overview:
      'A comprehensive Warehouse Management System (WMS) engineered for high-throughput distribution hubs and fulfillment operations. From dock-to-stock putaway to wave picking and dispatch staging, it eliminates manual reconciliation.',
    benefits: [
      'Dynamic 3D bin coordinate allocation maximizing vertical and aisle cube utilization.',
      'Wave, zone, and batch picking algorithms reducing floor travel distance by up to 64%.',
      'Pallet-level validation preventing wrong-item loading on outbound dispatch trucks.',
      'Sub-second cross-docking workflows with automated ASN (Advanced Shipping Notice) matching.',
    ],
    specs: [
      'Support for 1D/2D Barcodes, GS1-128, Datamatrix, and UHF RFID portal gates',
      'Voice-directed and Pick-to-Light integration support',
      'Automated guided vehicle (AGV) & conveyor PLC handshake API',
      'Real-time temperature and shelf-life monitoring for perishable cold-chain stock',
    ],
  },
  {
    id: 'track-and-trace',
    index: 2,
    categoryTag: 'Global Logistics & Telemetry',
    titlePrefix: 'Worldwide Precision with ',
    highlightedTitle: 'Track & Trace.',
    tagline: 'Determine current and past locations of products efficiently',
    description:
      'Determine past and live geographic milestones across international distribution corridors with high-precision IoT tracking, digital waybills, and geofencing.',
    image: 'images/track-and-trace.jpg',
    label: 'Track & Trace',
    subtitle: 'Global Telemetry',
    icon: 'share_location',
    features: ['Multi-modal Telemetry', 'Anti-counterfeit Crypto Tags', 'Dynamic ETA Alerts'],
    metricTop: { value: '100% Traceability', label: 'Point-to-Point Visibility', icon: 'public' },
    metricBottom: { value: 'Live Geofence', label: 'Smart Milestone Alerts', icon: 'radar' },
    simType: 'track',
    badgeText: 'Global Transit Node • Live',
    overview:
      'End-to-end supply chain visibility spanning sea shipping lanes, cross-border road freight, and localized last-mile delivery. Prevent counterfeit intrusion and cargo diversion with encrypted cryptographic serials.',
    benefits: [
      'Real-time transit milestone alerts sent to shippers, forwarders, and end clients.',
      'Continuous temperature, humidity, shock, and tilt data logger telematics.',
      'Automated geofencing triggering arrival notices and gate access clearance.',
      'Anti-diversion verification verifying legitimate retail distribution points.',
    ],
    specs: [
      'Cellular IoT (LTE-M, NB-IoT), Satellite transponder, and BLE gateway logging',
      'GS1 EPCIS compliant event repository',
      'Cryptographic QR code verification against centralized brand registry',
      'Automated Customs e-Waybill and dispatch documentation generation',
    ],
  },
  {
    id: 'work-in-progress',
    index: 3,
    categoryTag: 'Manufacturing & Shopfloor IoT',
    titlePrefix: 'Optimize Shopfloors with ',
    highlightedTitle: 'Work-in-Progress.',
    tagline: 'Manage unfinished items in a production process or supply chain with real-time traceability',
    description:
      'Track unfinished goods, assemblies, and subcomponents across multi-stage production lines with sub-second RFID and Barcode telemetry.',
    image: 'images/work-in-progress.jpg',
    label: 'Work-in-progress',
    subtitle: 'Shopfloor Trace',
    icon: 'conveyor_belt',
    features: ['Bottleneck Elimination', 'Real-Time OEE Metrics', 'Automated Quality Gates'],
    metricTop: { value: '-42% Cycle Latency', label: 'Stage-wise Traceability', icon: 'precision_manufacturing' },
    metricBottom: { value: 'Sub-second Sync', label: 'Conveyor RFID Sensors', icon: 'tune' },
    simType: 'wip',
    badgeText: 'Smart Production Line • Active',
    overview:
      'Stallion WIP Traceability gives plant managers microsecond-level insight into shopfloor operations. By tagging carriers, jigs, and work-orders, manufacturing facilities uncover bottlenecks and prevent rework before defects leave the line.',
    benefits: [
      'Instant detection of assembly stations exceeding standard takt time.',
      'Prevention of out-of-sequence production steps using interlocked gate sensors.',
      'Complete pedigree history tracing every part batch used in finished serials.',
      'Live Overall Equipment Effectiveness (OEE) and scrap rate dashboards.',
    ],
    specs: [
      'Industrial IP67-rated UHF RFID tunnel antennas and optical vision sensors',
      'Direct interface with PLC systems via OPC-UA, Modbus, and PROFINET',
      'Work-order routing engine with dynamic re-routing around down lines',
      'Statistical Process Control (SPC) charting with automated tolerance alerts',
    ],
  },
  {
    id: 'file-management',
    index: 4,
    categoryTag: 'Records Governance & Compliance',
    titlePrefix: 'Enterprise Control with ',
    highlightedTitle: 'File Management.',
    tagline: 'Track documents effectively and rapidly using Barcode technology',
    description:
      'Track sensitive corporate documentation, legal files, and archive movements rapidly using intelligent 2D Barcode and RFID check-in/check-out protocols.',
    image: 'images/file-management.jpg',
    label: 'File Mgmt',
    subtitle: 'Records & Audit',
    icon: 'folder_managed',
    features: ['Chain of Custody Audits', 'Confidential Access Tiers', 'Rapid Archive Retrieval'],
    metricTop: { value: '100% Audit Proof', label: 'Tamper-evident logs', icon: 'shield' },
    metricBottom: { value: '< 10 Sec Search', label: 'Instant File Location', icon: 'search' },
    simType: 'file',
    badgeText: 'Secure Records Vault',
    overview:
      'Designed for law firms, healthcare institutions, financial enterprises, and government departments. Stallion File Management pairs physical folder smart-tags with digitized metadata records, guaranteeing unbroken chain-of-custody.',
    benefits: [
      'Locate misplaced physical folders across multi-tier storage vaults within seconds.',
      'Automate retention schedules and compliance-mandated document destruction certificates.',
      'Enforce strict clearance levels: track who opened, retrieved, or transferred every folder.',
      'Rapid physical inventory reconciliation using handheld RFID wand scanners.',
    ],
    specs: [
      'Compact UHF RFID adhesive tags designed specifically for paper files and binders',
      'Secure 256-bit encrypted metadata database with biometric clerk authentication',
      'Integration with Microsoft 365, SharePoint, OpenText, and legacy ECM repositories',
      'Automated barcode printing station with customized security watermark patterns',
    ],
  },
  {
    id: 'retail-management',
    index: 5,
    categoryTag: 'Omnichannel Retail & POS Intelligence',
    titlePrefix: 'Elevate In-Store Growth with ',
    highlightedTitle: 'Retail Management.',
    tagline: 'Automate activities of retailers and wholesalers to make correct merchandising decisions',
    description:
      'Automate floor activities, inventory reconciliation, and wholesaler transactions. Make data-driven merchandising decisions backed by precise real-time checkout telemetry.',
    image: 'images/retail-management.jpg',
    label: 'Retail Mgmt',
    subtitle: 'POS & Merchandising',
    icon: 'storefront',
    features: ['Live Shelf Replenishment', 'Omnichannel Order Sync', 'Fast POS Barcode Handling'],
    metricTop: { value: '+25% Checkout Speed', label: 'Omni POS Integration', icon: 'shopping_cart_checkout' },
    metricBottom: { value: 'Predictive Sell-Through', label: 'Accurate Merchandising', icon: 'insights' },
    simType: 'retail',
    badgeText: 'Connected Retail Branch',
    overview:
      'Transform physical retail stores into connected, high-efficiency micro-fulfillment hubs. Stallion Retail Management syncs brick-and-mortar shelf inventory with digital eCommerce storefronts in real time, preventing phantom stockouts.',
    benefits: [
      'Instant multi-item POS checkout scanning via smart overhead RFID readers.',
      'Automated backroom-to-shelf replenishment alerts triggered by threshold sales.',
      'Loss prevention alerts instantly triggered when un-deactivated merchandise approaches exits.',
      'Unified customer loyalty, promotions, and wholesaler pricing tier rules.',
    ],
    specs: [
      'Seamless integration with modern cloud POS systems and legacy cash terminals',
      'Support for electronic shelf labels (ESL) with real-time price updates',
      'Store heat-mapping and dwell-time analytics based on passive shopper tags',
      'Click-and-collect (BOPIS) fulfillment packing assistant with guided aisle locator',
    ],
  },
];

document.addEventListener('DOMContentLoaded', () => {
  // 1. CAROUSEL CONTROLLER
  let currentSlideIndex = 1; // Default to 1 (Warehouse Management) matching screenshot
  let slideTimer = null;
  const slideInterval = 6500;
  const slides = document.querySelectorAll('.carousel-slide');
  const tabs = document.querySelectorAll('.nav-pill');
  const dots = document.querySelectorAll('[data-dot]');
  const prevBtn = document.getElementById('carousel-prev');
  const nextBtn = document.getElementById('carousel-next');
  const heroSection = document.getElementById('hero-carousel');

  function updateCarousel(index) {
    if (index < 0) currentSlideIndex = slides.length - 1;
    else if (index >= slides.length) currentSlideIndex = 0;
    else currentSlideIndex = index;

    // Toggle slide visibility
    slides.forEach((slide, i) => {
      if (i === currentSlideIndex) {
        slide.classList.add('active');
      } else {
        slide.classList.remove('active');
      }
    });

    // Toggle nav tab active styling and animated indicator
    tabs.forEach((tab, i) => {
      const indicator = tab.querySelector('.tab-indicator-bar');
      if (i === currentSlideIndex) {
        tab.classList.add('active');
        if (indicator) {
          indicator.style.transition = 'none';
          indicator.style.width = '0%';
          setTimeout(() => {
            indicator.style.transition = 'width 6.5s linear';
            indicator.style.width = '100%';
          }, 40);
        }
      } else {
        tab.classList.remove('active');
        if (indicator) {
          indicator.style.transition = 'none';
          indicator.style.width = '0%';
        }
      }
    });

    // Toggle mobile dots
    dots.forEach((dot, i) => {
      if (i === currentSlideIndex) {
        dot.className = 'w-6 h-1.5 rounded-full bg-[#003c90] transition-all duration-300';
      } else {
        dot.className = 'w-2 h-1.5 rounded-full bg-slate-300 transition-all duration-300';
      }
    });
  }

  function startAutoSlide() {
    stopAutoSlide();
    slideTimer = setInterval(() => {
      updateCarousel(currentSlideIndex + 1);
    }, slideInterval);
  }

  function stopAutoSlide() {
    if (slideTimer) clearInterval(slideTimer);
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      updateCarousel(currentSlideIndex - 1);
      startAutoSlide();
    });
  }

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      updateCarousel(currentSlideIndex + 1);
      startAutoSlide();
    });
  }

  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      const target = parseInt(tab.getAttribute('data-target'), 10);
      updateCarousel(target);
      startAutoSlide();
    });
  });

  dots.forEach((dot) => {
    dot.addEventListener('click', () => {
      const target = parseInt(dot.getAttribute('data-dot'), 10);
      updateCarousel(target);
      startAutoSlide();
    });
  });

  if (heroSection) {
    heroSection.addEventListener('mouseenter', stopAutoSlide);
    heroSection.addEventListener('mouseleave', startAutoSlide);
  }

  // Initialize carousel on index 1
  updateCarousel(1);
  startAutoSlide();

  // 2. MOBILE MENU TOGGLE
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
  if (mobileMenuBtn && mobileMenuDrawer) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenuDrawer.classList.toggle('hidden');
    });
  }

  // 3. SOLUTION DETAIL MODAL (BOOTSTRAP MODAL)
  let activeSolution = null;
  const solutionModalElement = document.getElementById('solutionDetailModal');
  const solutionModal = solutionModalElement ? new bootstrap.Modal(solutionModalElement) : null;

  function openSolutionModal(solutionId) {
    const sol = SOLUTIONS_DATA.find((s) => s.id === solutionId) || SOLUTIONS_DATA[0];
    activeSolution = sol;

    // Populate modal contents
    document.getElementById('modal-sol-category').textContent = sol.categoryTag;
    document.getElementById('modal-sol-title').innerHTML =
      sol.titlePrefix +
      `<span class="text-transparent bg-clip-text bg-gradient-to-r from-[#0f52ba] to-[#00b4d8]">${sol.highlightedTitle}</span>`;
    document.getElementById('modal-sol-desc').textContent = sol.description;
    document.getElementById('modal-sol-img').src = sol.image;
    document.getElementById('modal-sol-img-label').textContent = sol.badgeText;
    document.getElementById('modal-metric-top-val').textContent = sol.metricTop.value;
    document.getElementById('modal-metric-top-lbl').textContent = sol.metricTop.label;
    document.getElementById('modal-metric-bot-val').textContent = sol.metricBottom.value;
    document.getElementById('modal-metric-bot-lbl').textContent = sol.metricBottom.label;
    document.getElementById('modal-sol-overview').textContent = sol.overview;

    // Benefits
    const benefitsList = document.getElementById('modal-sol-benefits');
    benefitsList.innerHTML = sol.benefits
      .map(
        (b) => `
        <div class="col-12 col-md-6">
          <div class="p-3 bg-white border border-slate-200 rounded-3 text-sm d-flex align-items-start gap-2 h-100">
            <span class="material-symbols-outlined text-emerald-600 fs-5 mt-0.5">check_circle</span>
            <span class="text-slate-700">${b}</span>
          </div>
        </div>`
      )
      .join('');

    // Specs
    const specsList = document.getElementById('modal-sol-specs');
    specsList.innerHTML = sol.specs
      .map(
        (s) => `
        <div class="p-2.5 bg-white border border-slate-200 rounded-2 text-xs font-mono d-flex align-items-center gap-2">
          <span class="d-inline-block rounded-circle bg-primary" style="width: 8px; height: 8px;"></span>
          <span class="text-slate-800">${s}</span>
        </div>`
      )
      .join('');

    // Simulator initialization
    const simEngineName = document.getElementById('sim-engine-name');
    simEngineName.textContent = sol.label.toUpperCase();
    const simTriggerBtn = document.getElementById('sim-trigger-btn');
    simTriggerBtn.querySelector('span:last-child').textContent =
      sol.simType === 'warehouse'
        ? 'Simulate Inbound Pallet Arrival'
        : sol.simType === 'asset'
        ? 'Execute Handheld RFID Sweep'
        : sol.simType === 'track'
        ? 'Emit GPS Telemetry Ping'
        : sol.simType === 'wip'
        ? 'Trigger Station Quality Gate'
        : sol.simType === 'file'
        ? 'Log Docket Check-Out Event'
        : 'Simulate Multi-Tag POS Checkout';

    // Reset sim feed
    const simFeed = document.getElementById('sim-feed');
    simFeed.innerHTML = `<div class="text-cyan-300 font-semibold">[${new Date().toLocaleTimeString()}] Live connection established to Stallion Gateway. Ready.</div>`;

    if (solutionModal) solutionModal.show();
  }

  // Bind all "Explore Solution" and "Learn More" buttons
  document.querySelectorAll('[data-open-solution]').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const solId = btn.getAttribute('data-open-solution');
      openSolutionModal(solId);
    });
  });

  // Simulator action trigger
  const simTriggerBtn = document.getElementById('sim-trigger-btn');
  if (simTriggerBtn) {
    simTriggerBtn.addEventListener('click', () => {
      if (!activeSolution) return;
      const simFeed = document.getElementById('sim-feed');
      const time = new Date().toLocaleTimeString();
      let logMsg = '';

      if (activeSolution.simType === 'warehouse') {
        const bins = ['Aisle-02-Bay-04', 'Aisle-04-Bay-11', 'Aisle-01-Bay-08'];
        const bin = bins[Math.floor(Math.random() * bins.length)];
        logMsg = `[${time}] RFID Inbound Portal: Verified Pallet PLT-${Math.floor(
          1000 + Math.random() * 9000
        )}. WMS dynamic putaway allocated to [${bin}].`;
      } else if (activeSolution.simType === 'asset') {
        logMsg = `[${time}] RFID Sweep: Tag 0x${Math.random()
          .toString(16)
          .substring(2, 8)
          .toUpperCase()} recognized. Depreciation state: Compliant. Location: Facility #1.`;
      } else if (activeSolution.simType === 'track') {
        logMsg = `[${time}] Geofence Telematics: Vessel reached Milestone 'Rotterdam Hub'. Temperature 3.8°C | Shock 0.05G | Seal OK.`;
      } else if (activeSolution.simType === 'wip') {
        logMsg = `[${time}] Conveyor Gate: Assembly WIP-${Math.floor(
          100 + Math.random() * 900
        )} inspected. Takt delta: -3.2s. Quality check: PASSED.`;
      } else if (activeSolution.simType === 'file') {
        logMsg = `[${time}] Smart Docket: Folder #LGL-2024-88 checked out. Access tier: Partner. Retention clock active.`;
      } else {
        logMsg = `[${time}] Smart POS Tray: 6 tagged items detected simultaneously in 0.28s. Omnichannel inventory decremented.`;
      }

      const logEl = document.createElement('div');
      logEl.className = 'text-cyan-300 font-semibold animate-in fade-in';
      logEl.textContent = logMsg;
      simFeed.prepend(logEl);
    });
  }

  // 4. REQUEST DEMO MODAL
  const demoModalElement = document.getElementById('requestDemoModal');
  const demoModal = demoModalElement ? new bootstrap.Modal(demoModalElement) : null;

  document.querySelectorAll('[data-open-demo]').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const solId = btn.getAttribute('data-open-demo');
      if (solId) {
        const selectEl = document.getElementById('demo-solution-select');
        if (selectEl) selectEl.value = solId;
      }
      if (solutionModal) solutionModal.hide();
      if (demoModal) demoModal.show();
    });
  });

  const demoForm = document.getElementById('demo-form');
  const demoSuccess = document.getElementById('demo-success');
  if (demoForm) {
    demoForm.addEventListener('submit', (e) => {
      e.preventDefault();
      demoForm.classList.add('d-none');
      demoSuccess.classList.remove('d-none');
    });
  }

  // 5. LOGIN / SSO MODAL
  const authModalElement = document.getElementById('authModal');
  const authModal = authModalElement ? new bootstrap.Modal(authModalElement) : null;
  document.querySelectorAll('[data-open-auth]').forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      if (authModal) authModal.show();
    });
  });

  const authForm = document.getElementById('auth-form');
  const authSuccess = document.getElementById('auth-success');
  if (authForm) {
    authForm.addEventListener('submit', (e) => {
      e.preventDefault();
      authForm.classList.add('d-none');
      authSuccess.classList.remove('d-none');
    });
  }

  // 6. CONTACT FORM SUBMISSION
  const contactForm = document.getElementById('contact-form');
  const contactSuccess = document.getElementById('contact-success');
  if (contactForm && contactSuccess) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      contactForm.classList.add('d-none');
      contactSuccess.classList.remove('d-none');
    });
  }

  // 7. SMOOTH SCROLLING
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: 'smooth' });
          if (mobileMenuDrawer) mobileMenuDrawer.classList.add('hidden');
        }
      }
    });
  });
});
