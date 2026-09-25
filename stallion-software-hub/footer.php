<!-- FOOTER -->
  <footer class="bg-[#00102e] text-slate-400 py-10 border-t border-white/10 text-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 pb-8 border-b border-white/10">
        <div class="space-y-3">
          <div class="flex items-center gap-2 text-white">
            <span class="font-headline font-bold text-base text-white">Stallion OneByte</span>
          </div>
          <p class="text-slate-400 leading-relaxed text-xs">
            In-house software development division of Stallion Group driving industrial IoT, RFID tracking, and supply
            chain automation.
          </p>
        </div>

        <div>
          <h5 class="font-headline font-bold text-white text-xs uppercase tracking-wider mb-3">Solutions</h5>
          <ul class="space-y-2 list-unstyled text-xs">
            <li><a href="<?php echo esc_url(home_url('/asset-management')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Asset Management</a></li>
            <li><a href="<?php echo esc_url(home_url('/warehouse-management')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Warehouse Systems</a></li>
            <li><a href="<?php echo esc_url(home_url('/track-and-trace')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Track &amp; Trace</a></li>
            <li><a href="<?php echo esc_url(home_url('/work-in-progress')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Work-in-progress</a></li>
            <li><a href="<?php echo esc_url(home_url('/file-management')); ?>" class="text-decoration-none text-slate-300 hover:text-white">File Management</a></li>
            <li><a href="<?php echo esc_url(home_url('/retail-management')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Retail Management</a></li>
          </ul>
        </div>

        <div>
          <h5 class="font-headline font-bold text-white text-xs uppercase tracking-wider mb-3">Enterprise</h5>
          <ul class="space-y-2 list-unstyled text-xs">
            <li><a href="<?php echo esc_url(home_url('/#vision-mission')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Corporate Governance</a></li>
            <li><a href="<?php echo esc_url(home_url('/#about')); ?>" class="text-decoration-none text-slate-300 hover:text-white">Privacy &amp; Compliance</a></li>
            <li><a href="#contact" class="text-decoration-none text-slate-300 hover:text-white">Contact Sales</a></li>
          </ul>
        </div>

        <div>
          <h5 class="font-headline font-bold text-white text-xs uppercase tracking-wider mb-3">Connect</h5>
          <p class="text-slate-300 text-xs leading-relaxed mb-2">
            Global Support &amp; Engineering HQ<br />
            Kadavanthara, Kochi, Kerala – 682020
          </p>
          <span class="text-cyan-400 font-mono-tech block">+91 9846240458</span>
        </div>
      </div>

      <div class="pt-6 text-center text-slate-400 text-[11px]">
        &copy; <?php echo date('Y'); ?> Stallion OneByte. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- BOOTSTRAP MODAL: REQUEST DEMO -->
  <div class="modal fade" id="requestDemoModal" tabindex="-1" aria-labelledby="demoModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 rounded-4 shadow-2xl bg-white overflow-hidden">
        <div class="modal-header bg-[#f8f9fa] border-bottom border-slate-100 px-4 py-3">
          <div>
            <h5 id="demoModalTitle" class="modal-title font-headline font-bold text-base text-[#001945]">
              Request Live Enterprise Demo
            </h5>
            <p class="text-xs text-slate-500 mb-0">Live interactive walkthrough with our principal solution engineer</p>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <form id="demo-form" class="space-y-3">
            <div>
              <label class="block text-xs font-semibold text-slate-700 mb-1">Target Solution</label>
              <select id="demo-solution-select" class="form-select text-sm py-2 rounded-lg border-slate-300">
                <option value="asset-management">Asset Management (Fixed &amp; IT Lifecycle)</option>
                <option value="warehouse-management">Warehouse Management (WMS &amp; Storage)</option>
                <option value="track-and-trace">Track &amp; Trace (Global Telemetry)</option>
                <option value="work-in-progress">Work-in-progress (Shopfloor IoT)</option>
                <option value="file-management">File Management (Records &amp; Audit)</option>
                <option value="retail-management">Retail Management (POS &amp; Omni)</option>
              </select>
            </div>
            <div class="row g-2">
              <div class="col-6">
                <label class="block text-xs font-semibold text-slate-700 mb-1">Full Name</label>
                <input type="text" required placeholder="Alex Morgan"
                  class="form-control text-sm py-2 rounded-lg border-slate-300" />
              </div>
              <div class="col-6">
                <label class="block text-xs font-semibold text-slate-700 mb-1">Company</label>
                <input type="text" required placeholder="Enterprise Corp"
                  class="form-control text-sm py-2 rounded-lg border-slate-300" />
              </div>
            </div>
            <div>
              <label class="block text-xs font-semibold text-slate-700 mb-1">Corporate Email</label>
              <input type="email" required placeholder="alex@enterprise.com"
                class="form-control text-sm py-2 rounded-lg border-slate-300" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-slate-700 mb-1">Contact Phone</label>
              <input type="tel" placeholder="+91 9846240458"
                class="form-control text-sm py-2 rounded-lg border-slate-300" />
            </div>
            <button type="submit"
              class="btn-primary w-100 text-white font-bold py-2.5 rounded-lg text-sm mt-3 cursor-pointer">
              Confirm Demo Schedule
            </button>
          </form>
          <div id="demo-success" class="d-none text-center py-6">
            <span class="material-symbols-outlined text-emerald-500 fs-1">verified</span>
            <h5 class="font-headline font-bold text-base text-[#001945] mt-2">Demo Request Received!</h5>
            <p class="text-xs text-slate-500 mt-1">A calendar invitation and sandbox credentials will be dispatched to your email.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- BOOTSTRAP MODAL: SSO / AUTH -->
  <div class="modal fade" id="authModal" tabindex="-1" aria-labelledby="authModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-0 rounded-4 shadow-2xl bg-white overflow-hidden">
        <div class="modal-header bg-[#f8f9fa] border-bottom border-slate-100 px-4 py-3">
          <div class="d-flex align-items-center gap-2">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Logo" class="h-5 w-auto" />
            <h5 id="authModalTitle" class="modal-title font-headline font-bold text-sm text-[#003c90]">
              Stallion Enterprise SSO
            </h5>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <form id="auth-form" class="space-y-3">
            <div>
              <label class="block text-xs font-semibold text-slate-700 mb-1">Corporate ID / Email</label>
              <input type="email" required placeholder="name@stallion-enterprise.com"
                class="form-control text-sm py-2 rounded-lg border-slate-300" />
            </div>
            <div>
              <label class="block text-xs font-semibold text-slate-700 mb-1">Access Token / Password</label>
              <input type="password" required placeholder="••••••••••••"
                class="form-control text-sm py-2 rounded-lg border-slate-300" />
            </div>
            <button type="submit"
              class="btn-primary w-100 text-white font-bold py-2.5 rounded-lg text-sm mt-3 cursor-pointer">
              Authenticate Session
            </button>
          </form>
          <div id="auth-success" class="d-none text-center py-4">
            <span class="material-symbols-outlined text-emerald-500 fs-2">verified_user</span>
            <p class="text-xs text-slate-600 font-bold mt-2">SSO Session Verified</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>