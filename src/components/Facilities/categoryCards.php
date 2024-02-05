<?php
$facilitiesData = [
    [
        "title" => "Hostel",
        "img" => "src/assets/FacilitiesIcons/hostel.png",
    ],
    [
        "title" => "NSS",
        "img" => "src/assets/FacilitiesIcons/nss.png",
    ],
    [
        "title" => "NSO",
        "img" => "src/assets/FacilitiesIcons/nso.png",
    ],
    [
        "title" => "YRC",
        "img" => "src/assets/FacilitiesIcons/yrc.png",
    ],
    [
        "title" => "Athenaeum",
        "img" => "src/assets/FacilitiesIcons/athaneum.png",
    ],
    [
        "title" => "PDA",
        "img" => "src/assets/FacilitiesIcons/pda.png",
    ],
    [
        "title" => "Tamil Mandram",
        "img" => "src/assets/FacilitiesIcons/tamil_mandram.png",
    ],
    [
        "title" => "Rotaract Club",
        "img" => "src/assets/FacilitiesIcons/rotaract_club.png",
    ],
    [
        "title" => "Computer Society",
        "img" => "src/assets/FacilitiesIcons/csmit.png",
    ],
    [
        "title" => "TBO",
        "img" => "src/assets/FacilitiesIcons/tbo.png",
    ],
    [
        "title" => "MIT Quill",
        "img" => "src/assets/FacilitiesIcons/mit_quill.png",
    ],
    [
        "title" => "Variety Team",
        "img" => "src/assets/FacilitiesIcons/variety_team.png",
    ],
    [
        "title" => "Museum",
        "img" => "src/assets/FacilitiesIcons/museum.png",
    ],
    [
        "title" => "MITRA",
        "img" => "src/assets/FacilitiesIcons/mitra.png",
    ],
    [
        "title" => "TEDC",
        "img" => "src/assets/FacilitiesIcons/tedc.png",
    ],
];

echo '<div class="categories-container noselect">';
echo '<div class="description">';
echo '<h1>Facilities</h1>';
echo '</div>';
echo '<div class="categories-cards-container">';

echo '<div class="categories-wrapper" id="category-wrapper">';

foreach ($facilitiesData as $index => $data) {
    echo '<div class="category-card">';
    echo '<img src="' . $data['img'] . '" />';
    echo '<div class="content">';
    echo '<h1>' . $data['title'] . '</h1>';
    echo '</div>';
    echo '</div>';
}
foreach ($facilitiesData as $index => $data) {
    echo '<div class="category-card">';
    echo '<img src="' . $data['img'] . '" />';
    echo '<div class="content">';
    echo '<h1>' . $data['title'] . '</h1>';
    echo '</div>';
    echo '</div>';
}

echo '</div>';
echo '</div>';
echo '</div>';
?>
<!-- 
<script>
    var copy = document.querySelector(".categories-wrapper").cloneNode(true);
    document.querySelector(".card").appendChild(copy);
</script> -->