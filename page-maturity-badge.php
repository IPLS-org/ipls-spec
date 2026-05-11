<?php
// === IPLS PAGE-LEVEL MATURITY BADGE with Expandable Lanes (v0.4) ===
// Fully self-contained accordion. No external files needed.
// $primary_lane is set automatically by maturity-mapping.php
?>

<div class="max-w-screen-2xl mx-auto px-6 mb-8">
    <!-- Primary Lane Badge (always visible) -->
    <div class="inline-flex items-center gap-x-2 bg-white/10 border border-white/20 rounded-2xl px-5 py-2 text-sm">
        <span class="font-mono text-xs px-3 py-1 rounded-xl 
            <?php 
                if ($primary_lane === 'A') echo 'bg-emerald-400 text-black';
                elseif ($primary_lane === 'B') echo 'bg-emerald-400 text-black';
                elseif ($primary_lane === 'C') echo 'bg-amber-400 text-black';
                elseif ($primary_lane === 'D') echo 'bg-red-400 text-black';
            ?>">
            Lane <?php echo $primary_lane; ?>
        </span>
        <span class="text-white/70">
            <?php 
                if ($primary_lane === 'A') echo 'Presently demonstrated or active-program compatible';
                elseif ($primary_lane === 'B') echo 'Engineering extrapolation (known physics, plausible scaling)';
                elseif ($primary_lane === 'C') echo 'ASI-contingent (requires superintelligence or radical manufacturing)';
                elseif ($primary_lane === 'D') echo 'Frontier physics / speculative placeholder (non-baseline for early phases)';
            ?>
        </span>
    </div>

    <!-- Expandable Full Maturity Lanes -->
    <div class="mt-4">
        <button onclick="toggleMaturityLanes(this)" 
                class="flex items-center gap-x-2 text-emerald-400 hover:text-emerald-300 text-sm font-medium tracking-widest transition">
            <span>IPLS MATURITY LANES</span>
            <span class="text-xl leading-none transition-transform">›</span>
        </button>
        
        <div id="maturityDetails" class="hidden mt-4 grid md:grid-cols-4 gap-5 text-sm">
            <div class="flex gap-3 bg-black/30 rounded-2xl p-4">
                <span class="font-mono bg-emerald-400 text-black px-3 py-1 rounded-xl text-xs font-semibold flex-shrink-0">A</span>
                <div><strong class="text-emerald-400">Lane A</strong><br><span class="text-white/80 text-xs">Presently demonstrated or active-program compatible</span></div>
            </div>
            <div class="flex gap-3 bg-black/30 rounded-2xl p-4">
                <span class="font-mono bg-emerald-400 text-black px-3 py-1 rounded-xl text-xs font-semibold flex-shrink-0">B</span>
                <div><strong class="text-emerald-400">Lane B</strong><br><span class="text-white/80 text-xs">Engineering extrapolation (known physics, plausible scaling)</span></div>
            </div>
            <div class="flex gap-3 bg-black/30 rounded-2xl p-4">
                <span class="font-mono bg-amber-400 text-black px-3 py-1 rounded-xl text-xs font-semibold flex-shrink-0">C</span>
                <div><strong class="text-amber-400">Lane C</strong><br><span class="text-white/80 text-xs">ASI-contingent (requires superintelligence or radical manufacturing)</span></div>
            </div>
            <div class="flex gap-3 bg-black/30 rounded-2xl p-4">
                <span class="font-mono bg-red-400 text-black px-3 py-1 rounded-xl text-xs font-semibold flex-shrink-0">D</span>
                <div><strong class="text-red-400">Lane D</strong><br><span class="text-white/80 text-xs">Frontier physics / speculative placeholder (non-baseline for early phases)</span></div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleMaturityLanes(btn) {
    const details = document.getElementById('maturityDetails');
    const arrow = btn.querySelector('span:last-child');
    details.classList.toggle('hidden');
    arrow.style.transform = details.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(90deg)';
}
</script>