<?php
    require_once __DIR__ . '/../includes/load_data.php';
    $characterDataset = load_data();

    // Opdracht 4: Toon alle personages die een man zijn, kaal zijn en een bril hebben.
    // Tip: Combineer meerdere voorwaarden in je if-statement.

foreach ($characterDataset as $name => $data) {
    $f = $data['features'];
    if ($f['man'] === 1 && $f['glasses'] === 1 && $f['bald'] === 1) {
        echo $name . ' is een kale man met een bril.<br>';
    }
}