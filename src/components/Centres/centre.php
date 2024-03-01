<?php
$centresData = [
    [
        "title" => "Computer Centre",
        "img" => "src/assets/Facilities/computer_centre.jpg",
        "link" => "https://cc.mitindia.edu/",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "AUKBC - MIT",
        "img" => "src/assets/Facilities/aukbc.jpg",
        "link" => "https://www.au-kbc.org/",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Centre for Aerospace",
        "img" => "src/assets/Facilities/centre_for_aerospace.jpeg",
        "link" => "http://www.casr.mitindia.edu/",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Centre for IoT",
        "img" => "src/assets/Facilities/centre_for_iot.jpg",
        "link" => "http://www.ciot.mitindia.edu/",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "SCoE",
        "img" => "src/assets/Facilities/scoe.jpg",
        "link" => "https://mitindia.edu/en/research-centres/mit_scoe",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "CEAT",
        "img" => "src/assets/Facilities/ceat.png",
        "link" => "https://mitindia.edu/en/research-centres/ceat_mit",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "CRA",
        "img" => "src/assets/Facilities/cra.png",
        "link" => "https://cra.mitindia.edu/",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Library",
        "img" => "src/assets/Facilities/library.jpg",
        "link" => "https://library.annauniv.edu/mit_index.php",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Placement",
        "img" => "src/assets/Facilities/placement.jpg",
        "link" => "http://www.placement.mitindia.edu/",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Sports",
        "img" => "src/assets/Facilities/sports.jpg",
        "link" => "",
        // "description" => "2K+ Active Members",
    ],
    [
        "title" => "Health Centre",
        "img" => "src/assets/Facilities/health_centre.jpg",
        "link" => "http://www.health-centre.mitindia.edu/health_centre/",
        // "description" => "2K+ Active Members",
    ],
];
?>

<div class="staggered-cards-container noselect">
    <div class="description">
        <h1>Centres</h1>
    </div>
    <div class="staggered-cards-wrapper">
        <?php foreach ($centresData as $index => $data) : ?>
            <div class="card" onclick="window.open('<?php echo $data['link']; ?>', '_blank')">
                <img src="<?php echo $data['img']; ?>" />
                <div class="content">
                    <h1><?php echo $data['title']; ?></h1>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>