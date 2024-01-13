<head>
    <link rel="stylesheet" href="src/components/Facilities/categoryCards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>
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
echo '<h1>Facilities Available at MIT</h1>';
echo '<p>Here are some of the facilities that we provide to our students to help them grow and learn. We have a lot of facilities that we provide.</p>';
echo '</div>';
echo '<div class="categories-cards-container">';

echo '<button class="scroll-button" onclick="handleScroll(-300)"><i id="left" class="fa-solid fa-angle-left" style="color:white;"></i></button>';

echo '<div class="categories-wrapper" id="category-wrapper">';

foreach ($facilitiesData as $index => $data) {
    echo '<div class="card">';
    echo '<img src="' . $data['img'] . '" />';
    echo '<div class="content">';
    echo '<h1>' . $data['title'] . '</h1>';
    echo '</div>';
    echo '</div>';
}

echo '</div>';

echo '<button class="scroll-button" onclick="handleScroll(+300)"><i id="right" class="fa-solid fa-angle-right" style="color:white;"></i></button>';

echo '</div>';
echo '</div>';
?>

<script>
    function handleScroll(amount) {
    var wrapper = document.getElementById('category-wrapper');
    wrapper.scrollLeft += amount;
    }
</script>