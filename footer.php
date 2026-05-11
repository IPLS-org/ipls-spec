<!-- Footer -->
</main>
<!-- === AUTO REQUIREMENTS RENDERER (centralised – zero per-page edits) === -->
<?php
include 'requirements-db.php';
if (isset($breadcrumb_text) && isset($requirements_db[$breadcrumb_text]) && !empty($requirements_db[$breadcrumb_text])) {
    foreach ($requirements_db[$breadcrumb_text] as $req) {
        $req_id            = $req['id'] ?? 'XXXX-XXX-000';
        $req_lane          = $req['lane'] ?? 'B';
        $req_phase         = $req['phase'] ?? 'Phase X';
        $req_title         = $req['title'] ?? 'Requirement Title';
        $req_statement     = $req['statement'] ?? 'Shall ...';
        $req_rationale     = $req['rationale'] ?? '—';
        $req_interfaces    = $req['interfaces'] ?? '—';
        $req_verification  = $req['verification'] ?? '—';
        $req_failure_modes = $req['failure_modes'] ?? '—';
        $req_dependencies  = $req['dependencies'] ?? '—';
        $req_open_questions = $req['open_questions'] ?? 'None';
        include 'requirement-template.php';
    }
}
?>

<footer class="border-t border-white/10 bg-black/70 backdrop-blur-md py-8">
    <div class="max-w-screen-2xl mx-auto px-6 text-center text-sm text-white/60">
                    <div>© 2026 Inter-Planetary Link Ship Limited • Guildford, Surrey, UK • <a href="https://github.com/IPLS-org/ipls-spec" target="_blank" class="hover:text-white">github.com/IPLS-org/ipls-spec</a><a href="https://www.linkedin.com/company/ipls-limited/" target="_blank" class="hover:text-white"> • LinkedIn</a></div>
        <p class="mt-2">A living blueprint for ASI-enabled interplanetary and interstellar expansion.</p>
        
        <!-- Cookie banner (you can keep your existing one here if you prefer) -->
        <div id="cookieBanner" class="fixed bottom-4 left-4 right-4 max-w-md mx-auto bg-black border border-white/20 rounded-2xl p-4 text-sm hidden">
            <p class="mb-3">We use essential cookies only for basic functionality. No tracking.</p>
            <button onclick="acceptCookies()" class="px-6 py-2 bg-white text-black rounded-full text-sm font-medium">Accept</button>
        </div>
    </div>
</footer>

<script>
    // Simple cookie consent (you can expand this)
    function acceptCookies() {
        document.getElementById('cookieBanner').classList.add('hidden');
        localStorage.setItem('cookiesAccepted', 'true');
    }
    if (!localStorage.getItem('cookiesAccepted')) {
        document.getElementById('cookieBanner').classList.remove('hidden');
    }
</script>

</body>
</html>