<?php
$page_title       = "Power Architecture for Permanent Bases | Long-Term Energy Systems for Century-Scale Habitats";
$meta_description = "Reliable, redundant, restartable power systems designed for multi-century operation inside hollowed asteroid bases.";
$meta_keywords    = "space power architecture, long-term energy systems, asteroid base power, century-scale power";
$breadcrumb_text  = "Power Architecture for Permanent Bases";
include 'header.php';
?>

    <div class="max-w-screen-2xl mx-auto px-6 pt-4 pb-24">
        <h1 class="text-5xl font-semibold tracking-tighter mb-8">Power Architecture for Permanent Bases</h1>
        <p class="text-xl text-white/70 max-w-2xl">Reliable, multi-century power systems for hollowed-asteroid habitats — designed to support life support, manufacturing, docking, and all other operations with zero dependence on Earth resupply.</p>

        <div class="mt-8 space-y-12">
            <div>
                <h3 class="text-2xl font-semibold mb-4">Purpose</h3>
                <p class="text-white/70">Provide continuous, safe, and highly redundant power for a permanent base that may operate for hundreds or thousands of years. The system must be restartable after long dormancy periods and gracefully degrade over centuries.</p>
            </div>

            <div>
                <h3 class="text-2xl font-semibold mb-4">Key Functional Requirements</h3>
                <p class="text-white/70 mb-4">The requirement cards on this page govern. Where this text differs, the card applies.</p>
                <ul class="list-disc pl-6 space-y-4 text-white/80">
                    <li>The ASI recommends the primary power source. The operator selects it under IPLS-5.1-002.</li>
                    <li>Service life per IPLS-3.1.6-008.</li>
                    <li>Multiple independent power buses and energy storage systems (redundancy at every level)</li>
                    <li>Safe, restartable architecture after multi-decade or multi-century dormancy</li>
                    <li>Universal power interfaces compatible with the Universal Modular Platform hardpoints</li>
                    <li>Integration with ISRU-derived materials for shielding and structural components</li>
                    <li>Thermal management and waste-heat utilisation for base heating and industrial processes</li>
                    <li>Autonomous monitoring, fault isolation, and repair protocols</li>
                    <li>Scalable output to support growing base population and industrial activity</li>
                </ul>
            </div>

            <div>
                <h3 class="text-2xl font-semibold mb-4">Integration with Hollowed Asteroid</h3>
                <p class="text-white/70">Installation order relative to hollowing and sealing is unset. Heat not used shall be rejected to space. Life-support heat shall not depend on generator waste heat alone.</p>
            </div>

            <div class="pt-8 border-t border-white/10">
                <a href="life-support.php" class="inline-flex items-center gap-2 text-emerald-400 hover:text-white transition">
                    ← Back to Life Support &amp; Closed-Loop Ecology
                </a>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>