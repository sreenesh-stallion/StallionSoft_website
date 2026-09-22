// Stallion OneByte - Dedicated Product Page Controller
// Pure Vanilla JavaScript

document.addEventListener('DOMContentLoaded', () => {
  // 1. MOBILE MENU TOGGLE
  const mobileMenuBtn = document.getElementById('mobile-menu-btn');
  const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
  if (mobileMenuBtn && mobileMenuDrawer) {
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenuDrawer.classList.toggle('hidden');
    });
  }

  // 2. EDGE SIMULATOR INTERACTIVE LOGIC
  const simTriggerBtn = document.getElementById('sim-trigger-btn');
  const simFeed = document.getElementById('sim-feed');
  const bodyEl = document.body;
  const simType = bodyEl.getAttribute('data-sim-type') || 'asset';

  if (simTriggerBtn && simFeed) {
    simTriggerBtn.addEventListener('click', () => {
      const time = new Date().toLocaleTimeString();
      let logMsg = '';

      if (simType === 'warehouse') {
        const bins = ['Aisle-02-Bay-04', 'Aisle-04-Bay-11', 'Aisle-01-Bay-08', 'Aisle-03-Bay-19'];
        const bin = bins[Math.floor(Math.random() * bins.length)];
        const palletId = Math.floor(1000 + Math.random() * 9000);
        logMsg = `[${time}] RFID Inbound Portal: Verified Pallet PLT-${palletId}. WMS dynamic putaway allocated to [${bin}]. Gate clearance granted.`;
      } else if (simType === 'asset') {
        const tagId = Math.random().toString(16).substring(2, 8).toUpperCase();
        const branches = ['Facility #1 (HQ)', 'Warehouse Beta', 'DC North'];
        const branch = branches[Math.floor(Math.random() * branches.length)];
        logMsg = `[${time}] RFID Sweep: Tag 0x${tagId} recognized. Depreciation state: Compliant. Location: ${branch}. Dual-signature logged.`;
      } else if (simType === 'track') {
        const hubs = ['Rotterdam Hub', 'Jebel Ali Port', 'Singapore Gate', 'Frankfurt Rail Terminal'];
        const hub = hubs[Math.floor(Math.random() * hubs.length)];
        const temp = (2.5 + Math.random() * 3).toFixed(1);
        logMsg = `[${time}] Geofence Telematics: Vessel reached Milestone '${hub}'. Temp ${temp}°C | Shock 0.04G | Cryptographic seal verified.`;
      } else if (simType === 'wip') {
        const wipId = Math.floor(100 + Math.random() * 900);
        const takt = (2.1 + Math.random() * 2).toFixed(1);
        logMsg = `[${time}] Conveyor Gate #3: Assembly WIP-${wipId} inspected. Takt delta: -${takt}s. Quality check: PASSED. Pedigree recorded.`;
      } else if (simType === 'file') {
        const docketNum = Math.floor(1000 + Math.random() * 9000);
        const clerks = ['Agent John D.', 'Compliance Officer R.K.', 'Archivist S. Nair'];
        const clerk = clerks[Math.floor(Math.random() * clerks.length)];
        logMsg = `[${time}] Smart Docket: Folder #LGL-2024-${docketNum} verified. Handler: ${clerk}. Access tier: Partner. Retention clock active.`;
      } else if (simType === 'retail') {
        const items = Math.floor(3 + Math.random() * 5);
        const duration = (0.2 + Math.random() * 0.2).toFixed(2);
        logMsg = `[${time}] Smart POS Tray: ${items} tagged items detected simultaneously in ${duration}s. Inventory decremented across omnichannel stores.`;
      }

      const logEl = document.createElement('div');
      logEl.className = 'text-cyan-300 font-semibold border-l-2 border-cyan-400 pl-2 py-0.5 animate-in fade-in';
      logEl.textContent = logMsg;
      simFeed.prepend(logEl);
    });
  }

  // 3. REQUEST DEMO MODAL
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
      if (demoModal) demoModal.show();
    });
  });

  const demoForm = document.getElementById('demo-form');
  const demoSuccess = document.getElementById('demo-success');
  if (demoForm) {
    demoForm.addEventListener('submit', (e) => {
      e.preventDefault();
      demoForm.classList.add('d-none');
      if (demoSuccess) demoSuccess.classList.remove('d-none');
    });
  }

  // 4. SSO / AUTH MODAL
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
      if (authSuccess) authSuccess.classList.remove('d-none');
    });
  }

  // 5. CONTACT FORM
  const contactForm = document.getElementById('contact-form');
  const contactSuccess = document.getElementById('contact-success');
  if (contactForm && contactSuccess) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      contactForm.classList.add('d-none');
      contactSuccess.classList.remove('d-none');
    });
  }
});
