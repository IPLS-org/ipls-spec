<?php
// === SET THESE VARIABLES AT THE TOP OF EVERY CONTENT PAGE ===
// $page_title, $meta_description, $meta_keywords, $breadcrumb_text
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $meta_description ?? ''; ?>">
    <meta name="keywords" content="<?php echo $meta_keywords ?? ''; ?>">
    <title><?php echo $page_title ?? 'Inter-Planetary Link Ship'; ?></title>
    <link rel="stylesheet" href="/assets/css/output.css">
    <style>
        .hero-bg { 
  background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.9)), 
              url('/assets/images/hero-bg.webp') center/cover no-repeat; 
}
        body { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; }
        h1, h2, h3, h4 { font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif; font-weight: 600; letter-spacing: -0.04em; }
    </style>
</head>
<body class="bg-black text-white font-sans">

<!-- Universal Header -->
<nav class="border-b border-white/10 bg-black/70 backdrop-blur-md fixed w-full z-50">
    <div class="max-w-screen-2xl mx-auto px-6 py-5 flex justify-between items-center">
        <div class="flex items-center gap-x-3">
            <h1 onclick="window.location.href='/'" class="cursor-pointer text-2xl font-semibold tracking-tighter">IPLS</h1>
            <span class="text-sm text-white/60 hidden md:inline">Inter-Planetary Link Ship</span>
        </div>
        <div class="flex items-center gap-x-4">
            <a href="#contact" class="px-6 py-3 bg-white text-black rounded-full font-semibold text-sm hover:bg-white/90 transition whitespace-nowrap">Get Involved</a>
            <button id="hamburgerBtn" class="text-3xl leading-none text-white focus:outline-none">☰</button>
        </div>
    </div>

    <!-- Hamburger Menu -->
    <div id="hamburgerMenu" class="hidden bg-black/95 border-t border-white/10 px-6 py-8 max-h-[88vh] overflow-y-auto">
        <div class="flex flex-col gap-y-6 text-base max-w-md mx-auto">

            <!-- MAIN NAVIGATION -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">MAIN NAVIGATION</div>
                <a href="/#mission" class="block py-1 hover:text-emerald-400">Mission</a>
                <a href="/#approach" class="block py-1 hover:text-emerald-400">Our Approach</a>
                <a href="/#focus" class="block py-1 hover:text-emerald-400">Focus Areas</a>
                <a href="spec.php" class="block py-1 hover:text-emerald-400">Master Spec</a>
                <a href="capstone.php" class="block py-1 hover:text-emerald-400">Capstone</a>
            </div>

            <!-- ASTEROID MINING SEQUENCE -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">ASTEROID MINING SEQUENCE</div>
                <a href="mining.php" class="block py-1 hover:text-emerald-400">3.1 • Asteroid Mining &amp; ISRU</a>
                <a href="probes.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.1 Mineral Profiling Probes</a>
                <a href="orbital-manufacturing.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.2 Orbital Manufacturing Platforms</a>
                <a href="mining-fleet.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.3 Mining Fleet &amp; Automated Extraction</a>
                <a href="colony-seeding-ships.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.17 Colony Seeding Ships and Multi-Body Infrastructure</a>
                <a href="interplanetary-logistics.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.18 Interplanetary Trade, Logistics &amp; Supply Chain Systems</a>
            </div>

            <!-- ASTEROID MINING SEQUENCE -->
            <div>  
                <div class="text-emerald-400 text-xs font-medium mb-2">UNIVERSAL MODULAR PLATFORMS</div>         
                <a href="universal-modular-platforms.php" class="block py-1 pl-4 hover:text-emerald-400">3.2 • Universal Modular Platforms</a>
            </div>            

            <!-- HOLLOWED ASTEROID BASE SYSTEMS -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">HOLLOWED ASTEROID BASE SYSTEMS</div>
                <a href="hollowed-asteroid-bases.php" class="block py-1 hover:text-emerald-400">3.1.4 • Hollowed Asteroid Bases &amp; Crewed Habitats</a>
                <a href="life-support.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.5 Life Support &amp; Closed-Loop Ecology</a>
                <a href="power-architecture.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.6 Power Architecture for Permanent Bases</a>
                <a href="power-generation-pgeds-v1.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.6.1 Power Generation &amp; Energy Distribution (PGEDS-v1)</a>
                <a href="docking-facilities.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.7 Docking, Maintenance &amp; Outfitting Facilities</a>
                <a href="internal-transport.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.8 Internal Transportation &amp; Logistics Systems</a>
                <a href="recreation-psychological.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.9 Recreation, Entertainment, Psychological &amp; Social Systems</a>
                <a href="medical-facilities.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.10 Medical &amp; Regenerative Medicine Facilities</a>
                <a href="on-site-manufacturing.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.13 On-Site Manufacturing &amp; Shipyard Facilities</a>
                <a href="storage-logistics.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.14 Storage, Resource Warehousing &amp; Logistics Hubs</a>
                <a href="base-security-defense.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.15 Base Security, Defense &amp; Marshall Service Systems</a>
                <a href="expansion-scalability.php" class="block py-1 pl-4 hover:text-emerald-400">• 3.1.16 Expansion &amp; Scalability Systems</a>
            </div>

            <!-- ROBOTICS &amp; DIGITAL LIFE SYSTEMS -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">ROBOTICS &amp; DIGITAL LIFE SYSTEMS</div>
                <a href="robotics-tiering-sentience-management.php" class="block py-1 hover:text-emerald-400">• 3.1.20 Robotics Tiering &amp; Sentience Management</a>
                <a href="sentience-emergence-monitoring-response.php" class="block py-1 hover:text-emerald-400">• 3.1.21 Sentience Emergence Monitoring &amp; Response Framework</a>
                <a href="digital-life-habitat-thriving-environment.php" class="block py-1 hover:text-emerald-400">• 3.1.22 Digital-Life Habitat &amp; Thriving Environment Requirements</a>
            </div>

            <!-- INTERSTELLAR PHASE -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">INTERSTELLAR PHASE</div>
                <a href="interstellar-generation-ships.php" class="block py-1 hover:text-emerald-400">4.1 • Interstellar Generation Ships &amp; Precursor Missions</a>
                <a href="arrival-colony-establishment.php" class="block py-1 pl-4 hover:text-emerald-400">• 4.2 Arrival &amp; Colony Establishment Protocols</a>
                <a href="long-term-expansion.php" class="block py-1 pl-4 hover:text-emerald-400">• 4.3 Long-Term Interstellar Expansion &amp; Network Growth</a>
                <a href="portal-transportation.php" class="block py-1 pl-4 hover:text-emerald-400">• 4.4 Portal Transportation &amp; Spacetime Folding</a>
                <a href="portal-universal-interface-pis-v1.php" class="block py-1 pl-4 hover:text-emerald-400">• 4.4.1 Universal Portal Interface Specification (PIS-v1)</a>
                <a href="frontier-technology-integration-framework.php" class="block py-1 pl-4 hover:text-emerald-400">• 4.5 Frontier Technology Integration Framework</a>
            </div>

            <!-- STANDARDS &amp; ETHICS -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">STANDARDS &amp; ETHICS</div>
                <a href="governance-frameworks.php" class="block py-1 hover:text-emerald-400">3.1.11 • Governance, Legal, Ownership &amp; Ethical Frameworks</a>
                <a href="communication-systems.php" class="block py-1 hover:text-emerald-400">3.1.12 • Communication &amp; External Connectivity Systems</a>
                <a href="network-standards.php" class="block py-1 hover:text-emerald-400">3.1.19 • Solar System Network Standards &amp; Long-Term Evolution</a>
                <a href="ethical-frameworks.php" class="block py-1 hover:text-emerald-400">5.1 • Ethical, Philosophical &amp; Cultural Preservation Frameworks</a>
            </div>

            <!-- STRATEGIC EXPANSION -->
            <div>
                <div class="text-emerald-400 text-xs font-medium mb-2">STRATEGIC EXPANSION</div>
                <a href="strategic-expansion.php" class="block py-1 hover:text-emerald-400">7.0 • Strategic Expansion &amp; Growth Framework</a>
                <a href="contributor-value-proposition.php" class="block py-1 pl-4 hover:text-emerald-400">• 7.1 • Contributor Value Proposition &amp; Recognition Framework</a>
                <a href="decade-forecast-milestone-roadmap.php" class="block py-1 pl-4 hover:text-emerald-400">• 7.2 • Decade Forecast &amp; Milestone Roadmap (2026–2036)</a>
                <a href="founder-personal-sustainability-protocol.php" class="block py-1 pl-4 hover:text-emerald-400">• 7.3 • Founder Personal Sustainability Protocol</a>
            </div>
        </div>
</nav>

<!-- Nav spacer -->
<div class="h-[90px]"></div>

<!-- Breadcrumb -->
<div class="max-w-screen-2xl mx-auto px-6 pb-4 text-sm flex items-center gap-x-2 text-white/60">
    <a href="/" class="hover:text-white transition">Home</a>
    <span class="text-white/40">›</span>
    <a href="spec.php" class="hover:text-white transition">Master Spec</a>
    <span class="text-white/40">›</span>
    <span class="text-emerald-400 font-medium"><?php echo $breadcrumb_text ?? 'Page'; ?></span>
</div>

<!-- v0.5.3 Credibility Reinforcement Banner -->
<div class="max-w-screen-2xl mx-auto px-6 py-3 bg-emerald-400/10 border border-emerald-400/30 rounded-3xl text-center text-emerald-400 text-sm font-medium">
    IPLS Foundation Release v0.5.3 • 11 May 2026 • Disciplined Requirements Engineering • External Validation Integrated • Foundation Phase 100 % Complete
</div>

<!-- Contributors Welcome Banner (v0.5.2) -->
<div class="max-w-screen-2xl mx-auto px-6 py-3 bg-amber-400/10 border border-amber-400/30 rounded-3xl text-center text-amber-400 text-sm font-medium flex items-center justify-center gap-x-3">
    <span class="inline-flex items-center px-3 py-1 bg-amber-400 text-black text-xs font-semibold rounded-2xl">NOW OPEN</span>
    Serious contributors wanted — Section 7.1 Contributor Value Proposition is live
    <a href="contributor-value-proposition.php" class="underline hover:no-underline">Read what you receive →</a>
</div>


<!-- === AUTO MATURITY BADGE + EXPANDABLE LANES (robust version) === -->
<?php
include 'maturity-mapping.php';
if (isset($primary_lane)) {
    include 'page-maturity-badge.php';
}
?>

<!-- Hamburger script -->
<script>
    const hamburgerBtn = document.getElementById('hamburgerBtn');
    const hamburgerMenu = document.getElementById('hamburgerMenu');
    hamburgerBtn.addEventListener('click', () => {
        hamburgerMenu.classList.toggle('hidden');
    });
</script>
<main>