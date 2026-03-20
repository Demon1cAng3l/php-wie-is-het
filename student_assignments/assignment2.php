<?php
    require_once __DIR__ . '/../includes/load_data.php';
    $characterDataset = load_data();

    // Opdracht 2: Kies één personage en toon al zijn/haar kenmerken (features).
    // Tip: Haal eerst de features op en loop er doorheen.
    // Toon per feature of het 'JA' (true) of 'NEE' (false) is.

foreach ($characterDataset as $name => $data) {
    if ($name === '_feature_order') {
        continue;
    }
    if ($name === 'Anita') {
        echo "Dit is personage: " . $name . "\n";
        echo '<pre>';
        var_dump($data['features']);
        echo '</pre>';
    }
    foreach ($data['features'] as $feature => $value) {
        echo '<pre>';
        echo "Kenmerk: " . $feature . " - " . "\n";
        if ($value === 1) {
            echo "Ja\n";
            }
            else {
                echo "Nee\n";
        }
        echo '</pre>';
    }
}