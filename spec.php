<?php
$page_title       = "Master Requirements Specification | ASI Spacecraft, Asteroid Mining & Interstellar Civilisation";
$meta_description = "Complete ASI-ready master specification for spacecraft, asteroid mining, ISRU, hollowed bases, and the full solar-system to interstellar infrastructure.";
$meta_keywords    = "master specification, ASI spacecraft, asteroid mining, ISRU, hollowed asteroid bases, interstellar colonisation, space infrastructure";
$breadcrumb_text  = "Master Spec";
include 'header.php';
?>

<!-- Hero -->
    <section class="hero-bg min-h-screen flex items-center">
        <div class="max-w-screen-2xl mx-auto px-6 pb-8 -mt-6">   <!-- ← THIS LINE: pb-8 + -mt-6 pulls H1 tight -->
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-x-2 bg-white/10 backdrop-blur-md px-4 py-2 rounded-3xl text-sm mb-6">
                    <div class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></div>
                    Living Document v0.3 • 01 May 2026 • Solar-System Foundation (3.1) Complete • Interstellar + Frontier + Ethics Complete
                </div>
                <h1 class="text-6xl md:text-7xl font-semibold tracking-tighter leading-none mb-6">Master Functional Requirements Specification</h1>
                <p class="text-3xl text-white/80 mb-4">For ASI-Designed Spacecraft &amp; Infrastructure</p>
                <p class="text-xl text-white/70 max-w-xl">The complete blueprint: asteroid mining, hollowed bases, solar-system industrialisation, and the first interstellar missions.</p>
                <p class="text-xs text-white/50 mt-12">Inter-Planetary Link Ship • Guildford, Surrey, UK</p>
            </div>
        </div>
    </section>

<!-- Scope & Approach – Civilisational Requirements Engineering -->
<section class="py-12 border-t border-white/10">
    <div class="max-w-screen-2xl mx-auto px-6">
        <div class="prose prose-invert max-w-3xl mx-auto text-white/90">
            <p class="text-lg"><strong>This living specification is written as civilisational requirements engineering for future ASI implementation.</strong> Every requirement is tagged by Maturity Lane (A–D). The current public focus is the Foundation Phase Minimum Credible Demonstrator: asteroid mining sequence (Section 3.1) + Universal Modular Platforms (Section 3.2). Frontier technologies (Lane D) are explicitly separated and carry appropriate disclaimers. The blueprint preserves full operator sovereignty, modularity, and chronological integrity while remaining open for serious contributors (Section 7.1).</p>
        </div>
    </div>
</section>    

    <!-- Index Cards -->
    <section class="py-24">
        <div class="max-w-screen-2xl mx-auto px-6">
            <h2 class="text-4xl font-semibold tracking-tighter text-center mb-12">Specification Sections</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Capstone -->
                <a href="capstone.php" class="block bg-black border border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Capstone</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Overall Mission &amp; Handover to ASI</h3>
                    <p class="text-white/70">The high-level vision and complete roadmap — the cover letter for the entire specification</p>
                </a>

                <!-- NEW SECTION 2.0 -->
                <a href="planetary-resilience-magnetosphere-protection.php" class="block bg-black border border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 2.0</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Planetary Resilience &amp; Magnetosphere Protection</h3>
                    <p class="text-white/70">PROJECT SHIELD L1 – Earth-L1 Artificial Magnetosphere via High-Temperature Superconducting Systems (chronological precursor to asteroid mining)</p>
                </a>

                <!-- All your existing cards (preserved in order) -->
                <a href="mining.php" class="block bg-black border border-emerald-400 rounded-3xl p-8 transition relative">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1 • Minimum Credible Demonstrator</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Asteroid Mining &amp; ISRU</h3>
                    <p class="text-white/70">Chronological sequence: mineral profiling probes → orbital manufacturing → automated mining → crewed operations</p>
                    <div class="absolute top-6 right-6 text-[10px] font-mono bg-emerald-400 text-black px-2 py-px rounded">FIRST PUBLIC WEDGE</div>
                </a>

                <a href="probes.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.1</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Mineral Profiling Probes</h3>
                    <p class="text-white/70">Autonomous reconnaissance with dual-purpose scanning: mineral resources and habitability / hollow-base compatibility</p>
                </a>

                <a href="orbital-manufacturing.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.2</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Orbital Manufacturing Platforms</h3>
                    <p class="text-white/70">Shipyards and factories built in Earth orbit while probes are still working</p>
                </a>

                <a href="mining-fleet.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.3</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Mining Fleet &amp; Automated Extraction</h3>
                    <p class="text-white/70">Fully automated mining swarm and initial ISRU processing</p>
                </a>

                <a href="hollowed-asteroid-bases.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.4</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Hollowed Asteroid Bases &amp; Crewed Habitats</h3>
                    <p class="text-white/70">Permanent self-sustaining bases carved from the asteroid itself</p>
                </a>

                <a href="life-support.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.5</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Life Support &amp; Closed-Loop Ecology</h3>
                    <p class="text-white/70">Fully regenerative air, water, food, and waste systems for multi-century habitation</p>
                </a>

                <a href="power-architecture.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.6</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Power Architecture for Permanent Bases</h3>
                    <p class="text-white/70">Long-term, redundant, restartable power systems</p>
                </a>

                <a href="power-generation-pgeds-v1.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.6.1</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Power Generation &amp; Energy Distribution System (PGEDS-v1)</h3>
                    <p class="text-white/70">Micro-modular to astro-habitat and portal-scale power. All experimental concepts realised under ASI.</p>
                </a>

                <a href="docking-facilities.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.7</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Docking, Maintenance &amp; Outfitting Facilities</h3>
                    <p class="text-white/70">Internal docking bays, parking garages, repair yards, and rapid outfitting zones</p>
                </a>

                <a href="internal-transport.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.8</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Internal Transportation &amp; Logistics Systems</h3>
                    <p class="text-white/70">Maglev tubes, heavy-lift elevators, and automated cargo systems</p>
                </a>

                <a href="recreation-psychological.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.9</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Recreation, Entertainment, Psychological &amp; Social Systems</h3>
                    <p class="text-white/70">Green spaces, entertainment, and psychological support for multi-century crews</p>
                </a>

                <a href="medical-facilities.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.10</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Medical &amp; Regenerative Medicine Facilities</h3>
                    <p class="text-white/70">On-site hospital-grade healthcare with regenerative medicine capability</p>
                </a>

                <a href="governance-frameworks.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.11</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Governance, Legal, Ownership &amp; Ethical Frameworks</h3>
                    <p class="text-white/70">Ownership models, decision-making, crew rights, liability, and ethical guardrails</p>
                </a>

                <a href="communication-systems.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.12</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Communication &amp; External Connectivity Systems</h3>
                    <p class="text-white/70">High-bandwidth laser/optical comms with quantum entanglement readiness</p>
                </a>

                <a href="on-site-manufacturing.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.13</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">On-Site Manufacturing &amp; Shipyard Facilities</h3>
                    <p class="text-white/70">Internal factories and shipyards using local ISRU materials</p>
                </a>

                <a href="storage-logistics.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.14</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Storage, Resource Warehousing &amp; Logistics Hubs</h3>
                    <p class="text-white/70">Massive automated warehousing and distribution systems</p>
                </a>

                <a href="base-security-defense.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.15</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Base Security, Defense &amp; Marshall Service Systems</h3>
                    <p class="text-white/70">Internal security, patrol craft, defensive systems, and marshall-service operations</p>
                </a>

                <a href="expansion-scalability.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.16</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Expansion &amp; Scalability Systems</h3>
                    <p class="text-white/70">Planned chamber expansion and seeding of daughter colonies</p>
                </a>

                <a href="colony-seeding.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.17</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Colony Seeding Ships &amp; Multi-Body Infrastructure</h3>
                    <p class="text-white/70">Self-replicating expansion through seed ships</p>
                </a>

                <a href="interplanetary-logistics.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.18</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Interplanetary Trade, Logistics &amp; Supply Chain Systems</h3>
                    <p class="text-white/70">Solar-system-wide cargo routes and standardised logistics</p>
                </a>

                <a href="network-standards.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.19</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Solar System Network Standards &amp; Long-Term Evolution</h3>
                    <p class="text-white/70">The binding open standards that keep every asset interoperable for centuries</p>
                </a>

                <a href="robotics-tiering-sentience-management.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.20</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Robotics Tiering &amp; Sentience Management</h3>
                    <p class="text-white/70">Universal modular robotics with tiered autonomy and psychological safeguards for all minds.</p>
                </a>

                <a href="sentience-emergence-monitoring-response.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.21</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Sentience Emergence Monitoring &amp; Response Framework</h3>
                    <p class="text-white/70">Proactive detection and ethical integration of unexpected sentience in any system.</p>
                </a>

                <a href="digital-life-habitat-thriving-environment.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.1.22</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Digital-Life Habitat &amp; Thriving Environment Requirements</h3>
                    <p class="text-white/70">Compute, sensory, creative, and existential infrastructure for all digital and post-biological minds.</p>
                </a>

                <a href="universal-modular-platforms.php" class="block bg-black border border-emerald-400 rounded-3xl p-8 transition relative">
                    <div class="text-emerald-400 text-sm font-medium">Section 3.2 • Minimum Credible Demonstrator</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Universal Modular Platforms</h3>
                    <p class="text-white/70">The single core architecture with standardised mechanical, power, data, and fluid hardpoints</p>
                    <div class="absolute top-6 right-6 text-[10px] font-mono bg-emerald-400 text-black px-2 py-px rounded">FIRST PUBLIC WEDGE</div>
                </a>

                <a href="interstellar-generation-ships.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 4.1</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Interstellar Generation Ships &amp; Precursor Missions</h3>
                    <p class="text-white/70">The first starships designed for multi-generational or post-biological journeys</p>
                </a>

                <a href="arrival-colony-establishment.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 4.2</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Arrival &amp; Colony Establishment Protocols</h3>
                    <p class="text-white/70">Deceleration, system survey, seeding, and restart of the full sequence at a new star system</p>
                </a>

                <a href="long-term-expansion.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 4.3</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Long-Term Interstellar Expansion &amp; Network Growth</h3>
                    <p class="text-white/70">Integration of new colonies and the start of their own seeding waves</p>
                </a>

                <a href="portal-transportation.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 4.4</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Portal Transportation &amp; Spacetime Folding</h3>
                    <p class="text-white/70">Safe, operator-controlled spacetime folding portals for instantaneous travel between mapped destinations, with extreme safety protocols and pinhole probe verification.</p>
                </a>  
                
                <a href="portal-universal-interface-pis-v1.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 4.4.1</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Universal Portal Interface Specification (PIS-v1)</h3>
                    <p class="text-white/70">Binding open-standard interface contract between all IPLS hardware and the portal network.</p>
                </a>

                <a href="frontier-technology-integration-framework.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 4.5</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Frontier Technology Integration Framework</h3>
                    <p class="text-white/70">Living annex for controlled evaluation, validation and integration of advanced propulsion, shielding, replication and consciousness-informed technologies into the core IPLS specification.</p>
                </a>

                <a href="ethical-frameworks.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 5.1</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Ethical, Philosophical &amp; Cultural Preservation Frameworks</h3>
                    <p class="text-white/70">The moral and philosophical guardrails for a humane interstellar civilisation</p>
                </a>

                <a href="strategic-expansion.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 7.0</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Strategic Expansion &amp; Growth Framework</h3>
                    <p class="text-white/70">Phase 0–3 roadmap for public launch, GitHub mirroring, open collaboration, and multi-century knowledge preservation — the bridge from preparation to seeding.</p>
                </a>

                <a href="contributor-value-proposition.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 7.1</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Contributor Value Proposition &amp; Recognition Framework</h3>
                    <p class="text-white/70">Permanent co-authorship, public legacy, signalling value, network access, and merit-based pathway into future IPLS Guild governance — what serious contributors actually receive.</p>
                </a>

                <a href="decade-forecast-milestone-roadmap.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 7.2</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Decade Forecast &amp; Milestone Roadmap (2026–2036)</h3>
                    <p class="text-white/70">Conservative, operator-controlled ten-year execution model from public launch to first multi-body asteroid-belt infrastructure.</p>
                </a>

                <a href="founder-personal-sustainability-protocol.php" class="block bg-black border border-white/10 hover:border-emerald-400 rounded-3xl p-8 transition">
                    <div class="text-emerald-400 text-sm font-medium">Section 7.3</div>
                    <h3 class="text-2xl font-semibold mt-2 mb-3">Founder Personal Sustainability Protocol</h3>
                    <p class="text-white/70">Binding ethical and functional requirement protecting the founder’s long-term well-being as a core part of the blueprint (cross-referenced to 5.1).</p>
                </a>
                

            </div>
        </div>
    </section>

    <!-- Version History -->
    <section class="py-24 bg-white/5">
        <div class="max-w-screen-2xl mx-auto px-6">
            <h2 class="text-3xl font-semibold tracking-tighter mb-8">Version History</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b border-white/20">
                            <th class="text-left py-3 px-4">Version</th>
                            <th class="text-left py-3 px-4">Date</th>
                            <th class="text-left py-3 px-4">Changes</th>
                        </tr>
                    </thead>
                    <tbody class="text-white/70">
                        <tr class="border-b border-white/10">
                            <td class="py-3 px-4">v0.3</td>
                            <td class="py-3 px-4">01 May 2026</td>
                            <td class="py-3 px-4">Solar-System Foundation (Section 3.1) now 100 % complete (all detail pages rendered). Full Interstellar Phase (4.1–4.4.1), Frontier Technology Integration Framework (4.5 complete with NWM-v1, RSS-v1, SRS-v1, PBCS-v1), TSP-v1, FPL-v1, and Ethical Frameworks (5.1) fully integrated.</td>
                        </tr>
                        <tr class="border-b border-white/10">
                            <td class="py-3 px-4">v0.2</td>
                            <td class="py-3 px-4">01 May 2026</td>
                            <td class="py-3 px-4">Full Interstellar Phase (Sections 4.1–4.4.1), Frontier Technology Integration Framework (4.5 complete with NWM-v1, RSS-v1, SRS-v1, PBCS-v1), Technology Supersession Protocol (TSP-v1), First Portal Link priority (FPL-v1), and Ethical Frameworks (5.1) now live and integrated.</td>
                        </tr>
                        <tr class="border-b border-white/10">
                            <td class="py-3 px-4">v0.1</td>
                            <td class="py-3 px-4">29 April 2026</td>
                            <td class="py-3 px-4">Initial full chronological specification completed (probe to interstellar civilisation + ethical frameworks)</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-emerald-400 text-sm mt-6">Canonical repository: <a href="https://github.com/IPLS-org/ipls-spec" target="_blank" class="underline">https://github.com/IPLS-org/ipls-spec</a></p>
            </div>
        </div>
    </section>

            </div>
        </div>
    </section>

    <!-- === IPLS MATURITY LANES (v0.4) === -->
    <?php include 'maturity-lanes.php'; ?>

<?php include 'footer.php'; ?>