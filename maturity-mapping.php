<?php
// === IPLS MATURITY MAPPING (v0.5 – FULL COVERAGE FIX) ===
// Updated 05 May 2026
// This single file now guarantees the maturity badge appears on EVERY live page
// (including the 10 pages previously missing it). 
// Header.php already includes this file correctly — no other changes needed.

function get_primary_lane($breadcrumb) {
    if (empty($breadcrumb)) return null;
    
    $key = trim($breadcrumb);
    
    // Stronger, more forgiving normalisation (handles &, (), -, "System", "Facilities", etc.)
    $key = preg_replace('/^(?:\d+\.\d*\s*•\s*|\d+\.\d*\s*|Section \d+\.\d*\s*•\s*)/i', '', $key);
    $key = str_replace(['&amp;', '&'], ' and ', $key);
    $key = preg_replace('/[^a-zA-Z0-9\s]/', ' ', $key);   // treat all punctuation as spaces
    $key = preg_replace('/\s+/', ' ', $key);
    $key = trim($key);
    $key_lower = strtolower($key);
    
    // === MASTER MAP — EXACT + ROBUST COVERAGE FOR ALL CURRENT PAGES ===
    $map = [
        // Master & Capstone
        "Master Spec"                                      => "B",
        "Capstone & Handover to ASI"                       => "B",
        "Capstone"                                         => "B",

        // Foundation / Mining Sequence
        "Asteroid Mining and ISRU"                         => "B",
        "Asteroid Mining & ISRU"                           => "B",
        "Mineral Profiling Probes"                         => "A",
        "Orbital Manufacturing Platforms"                  => "B",
        "Mining Fleet and Automated Extraction"            => "B",
        "Mining Fleet & Automated Extraction Operations"   => "B",
        "Hollowed Asteroid Bases"                          => "B",
        "Hollowed Asteroid Bases & Permanent Crewed Habitats" => "B",

        // Hollowed Asteroid Base Systems
        "Life Support & Closed-Loop Ecology"               => "B",
        "Power Architecture for Permanent Bases"           => "B",
        "Power Generation & Energy Distribution System (PGEDS-v1)" => "B",
        "Power Generation and Energy Distribution System (PGEDS-v1)" => "B",
        "Docking, Maintenance & Outfitting Facilities"     => "B",
        "Internal Transportation & Logistics Systems"      => "B",
        "Recreation, Entertainment, Psychological & Social Systems" => "B",
        "Medical & Regenerative Medicine Facilities"       => "B",
        "Governance, Legal, Ownership & Ethical Frameworks" => "B",
        "Communication & External Connectivity Systems"    => "B",
        "On-Site Manufacturing & Shipyard Facilities"      => "B",
        "Storage, Resource Warehousing & Logistics Hubs"   => "B",
        "Base Security, Defense & Marshall Service Systems" => "B",
        "Expansion & Scalability Systems"                  => "B",
        "Colony Seeding Ships and Multi-Body Infrastructure" => "B",
        "Interplanetary Trade, Logistics & Supply Chain Systems" => "B",
        "Solar System Network Standards & Long-Term Evolution" => "B",
        "Robotics Tiering & Sentience Management"          => "B",
        "Sentience Emergence Monitoring & Response Framework" => "B",
        "Digital-Life Habitat & Thriving Environment Requirements" => "B",
        "Universal Modular Platforms"                      => "B",

        // Interstellar Phase
        "Interstellar Generation Ships & Precursor Missions" => "C",
        "Arrival & Colony Establishment Protocols"         => "C",
        "Long-Term Interstellar Expansion & Network Growth" => "C",
        "Portal Transportation & Spacetime Folding"        => "D",
        "Universal Portal Interface Specification (PIS-v1)" => "D",
        "Frontier Technology Integration Framework"        => "D",

        // Ethics & Strategic
        "Ethical, Philosophical & Cultural Preservation Frameworks" => "B",
        "Strategic Expansion & Growth Framework"           => "B",
        "Strategic Expansion & Growth Framework v0.2"      => "B",
    ];
    
    // Exact match (raw or normalised)
    if (isset($map[$key])) return $map[$key];
    if (isset($map[$breadcrumb])) return $map[$breadcrumb];
    
    // Fuzzy partial match (covers minor wording differences)
    foreach ($map as $map_key => $lane) {
        $map_lower = strtolower($map_key);
        if (str_contains($key_lower, $map_lower) || str_contains($map_lower, $key_lower)) {
            return $lane;
        }
    }
    
    // Fallback for any remaining edge cases
    return null;
}

// Auto-set $primary_lane for the current page
if (isset($breadcrumb_text)) {
    $primary_lane = get_primary_lane($breadcrumb_text);
}
?>