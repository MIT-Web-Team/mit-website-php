<?php
$facilitiesData = [
    [
        "title" => "Hostel",
        "img" => "src/assets/FacilitiesIcons/hostel.png",
        "link" => "https://www.hostel.mitindia.edu/",
    ],
    [
        "title" => "NSS",
        "img" => "src/assets/FacilitiesIcons/nss.png",
        "link" => "https://mitindia.edu/en/nss",
    ],
    [
        "title" => "NSO",
        "img" => "src/assets/FacilitiesIcons/nso.png",
        "link" => "https://mitindia.edu/en/nso",
    ],
    [
        "title" => "YRC",
        "img" => "src/assets/FacilitiesIcons/yrc.png",
        "link" => "http://yrc.mitindia.edu/",
    ],
    [
        "title" => "Athenaeum",
        "img" => "src/assets/FacilitiesIcons/athaneum.png",
        "link" => "https://mitindia.edu/en/athenaeum",
    ],
    [
        "title" => "PDA",
        "img" => "src/assets/FacilitiesIcons/pda.png",
        "link" => "https://pda.mitindia.edu/",
    ],
    [
        "title" => "Tamil Mandram",
        "img" => "src/assets/FacilitiesIcons/tamil_mandram.png",
        "link" => "http://www.tamilmandram.mitindia.edu/",
    ],
    [
        "title" => "Rotaract Club",
        "img" => "src/assets/FacilitiesIcons/rotaract_club.png",
        "link" => "http://www.rotaract.mitindia.edu/",
    ],
    [
        "title" => "Computer Society",
        "img" => "src/assets/FacilitiesIcons/csmit.png",
        "link" => "http://www.csmit.mitindia.edu/#/home",
    ],
    [
        "title" => "TBO",
        "img" => "src/assets/FacilitiesIcons/tbo.png",
        "link" => "http://www.tbo.mitindia.edu/",
    ],
    [
        "title" => "MIT Quill",
        "img" => "src/assets/FacilitiesIcons/mit_quill.png",
        "link" => "http://www.themitquill.mitindia.edu/",
    ],
    [
        "title" => "Variety Team",
        "img" => "src/assets/FacilitiesIcons/variety_team.png",
        "link" => "http://www.varietyteam.mitindia.edu/",
    ],
    [
        "title" => "Museum",
        "img" => "src/assets/FacilitiesIcons/museum.png",
        "link" => "http://www.museum.mitindia.edu/",
    ],
    [
        "title" => "MITRA",
        "img" => "src/assets/FacilitiesIcons/mitra.png",
        "link" => "http://www.mitra.mitindia.edu/",
    ],
    [
        "title" => "TEDC",
        "img" => "src/assets/FacilitiesIcons/tedc.png",
        "link" => "http://www.tedc.mitindia.edu/",
    ],
];
?>

<div class="categories-container noselect">
    <div class="description">
        <h1>Facilities</h1>
    </div>
    <div class="categories-cards-container">
        <div class="categories-wrapper" id="category-wrapper">
            <?php foreach ($facilitiesData as $index => $data): ?>
                <div class="category-card" onclick="window.open('<?php echo $data['link']; ?>', '_blank')">
                    <img src="<?php echo $data['img']; ?>" />
                    <div class="content">
                        <h1><?php echo $data['title']; ?></h1>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php foreach ($facilitiesData as $index => $data): ?>
                <div class="category-card" onclick="window.open('<?php echo $data['link']; ?>', '_blank')">
                    <img src="<?php echo $data['img']; ?>" />
                    <div class="content">
                        <h1><?php echo $data['title']; ?></h1>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>