<?php
// === IPLS REQUIREMENT RECORD TEMPLATE (v0.5) ===
// Mandatory structure for every requirement on every functional page
// Insert via: <?php include 'requirement-template.php'; after page header
?>

<!-- Requirement Record -->
<div class="max-w-screen-2xl mx-auto px-6 mb-12">
    <div class="bg-white/5 border border-white/10 rounded-3xl p-8">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-x-3">
                <span class="font-mono text-xs bg-emerald-400 text-black px-3 py-1 rounded-xl font-semibold">IPLS-<?php echo $req_id ?? 'XXXX-XXX-000'; ?></span>
                <span class="text-xs text-white/60 font-mono">Maturity: <span class="<?php 
                    if ($req_lane === 'A') echo 'text-emerald-400';
                    elseif ($req_lane === 'B') echo 'text-emerald-400';
                    elseif ($req_lane === 'C') echo 'text-amber-400';
                    elseif ($req_lane === 'D') echo 'text-red-400';
                ?>"><?php echo $req_lane ?? '—'; ?></span></span>
            </div>
            <div class="text-xs text-white/50 font-mono"><?php echo $req_phase ?? 'Phase X'; ?></div>
        </div>
        
        <h4 class="text-2xl font-semibold tracking-tighter mb-4"><?php echo $req_title ?? 'Requirement Title'; ?></h4>
        
        <div class="prose prose-invert max-w-none">
            <p><strong>Requirement:</strong> <?php echo $req_statement ?? 'Shall ...'; ?></p>
            <p><strong>Rationale:</strong> <?php echo $req_rationale ?? '—'; ?></p>
            
            <div class="grid md:grid-cols-2 gap-8 mt-8 text-sm">
                <div>
                    <strong>Interfaces</strong><br>
                    <?php echo $req_interfaces ?? 'Mechanical / Power / Data / Fluid / Operator-Control'; ?>
                </div>
                <div>
                    <strong>Verification Method</strong><br>
                    <?php echo $req_verification ?? 'Digital-twin simulation • Interface-control document review • Prototype bench test'; ?>
                </div>
                <div>
                    <strong>Failure Modes &amp; Mitigations</strong><br>
                    <?php echo $req_failure_modes ?? '—'; ?>
                </div>
                <div>
                    <strong>Dependencies</strong><br>
                    <?php echo $req_dependencies ?? '—'; ?>
                </div>
            </div>
            
            <p class="text-xs text-white/50 mt-8"><strong>Open Questions:</strong> <?php echo $req_open_questions ?? 'None'; ?></p>
        </div>
    </div>
</div>