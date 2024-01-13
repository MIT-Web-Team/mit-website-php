<head>
    <link rel="stylesheet" href="src/components/Centres/centre.css">
</head>
<?php
$centersData = [
    [
        "title" => "Computer Center",
        "img" => "src\assets\Facilities\computer_center.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "AUKBC - MIT",
        "img" => "src\assets\Facilities\aukbc.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Center for Aerospace",
        "img" => "src\assets\Facilities\centre_for_aerospace.jpeg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Center for IoT",
        "img" => "src\assets\Facilities\center_for_iot.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Library",
        "img" => "src\assets\Facilities\library.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Placement",
        "img" => "src\assets\Facilities\placement.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Sports",
        "img" => "src\assets\Facilities\sports.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Health Center",
        "img" => "src\assets\Facilities\health_centre.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "SCoE",
        "img" => "src\assets\Facilities\scoe.jpg",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "CEAT",
        "img" => "src\assets\Facilities\ceat.png",
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