<head>
    <link rel="stylesheet" href="src/components/Centres/centre.css">
</head>
<?php
$centersData = [
    [
        "title" => "Computer Center",
        "img" => "path_to_ComputerCenterImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "AUKBC - MIT",
        "img" => "path_to_AUKBCImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Center for Aerospace",
        "img" => "path_to_CentreForAerospaceImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Center for IoT",
        "img" => "path_to_CenterForIoTImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Library",
        "img" => "path_to_LibraryImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Placement",
        "img" => "path_to_PlacementImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Sports",
        "img" => "path_to_SportsImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Health Center",
        "img" => "path_to_HealthCentreImage",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "SCoE",
        "img" => "path_to_Scoe",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "CEAT",
        "img" => "path_to_CeatImage",
        // "description" => "2K+ Active Members",
    ],
];

echo '<div class="staggered-cards-container noselect">';
echo '<div class="description">';
echo '<h1>Centres</h1>';
echo '</div>';
echo '<div class="staggered-cards-wrapper">';

foreach ($centersData as $index => $data) {
    echo '<div class="card">';
    echo '<img src="' . $data['img'] . '" />';
    echo '<div class="content">';
    echo '<h1>' . $data['title'] . '</h1>';
    echo '</div>';
    echo '</div>';
}

echo '</div>';
echo '</div>';
?>