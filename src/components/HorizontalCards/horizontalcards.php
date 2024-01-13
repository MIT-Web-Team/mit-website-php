<head>
    <link rel="stylesheet" href="src/components/HorizontalCards/horizontalcards.css">
</head>

<?php
$departmentsData = array(
    array(
        "name" => "Aeronautical Engineering",
        "icon" => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2H248.4c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48H542.8c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z"/></svg>',
        "link" => "https://mitindia.edu/en/aero-home",
        "iconFillColor" => "#9848FF",
        "description" => "Established - 1949",
    ),
    array(
        "name" => "Automobile Engineering",
        "icon" => "path/to/icon2.svg",
        "link" => "https://mitindia.edu/en/auto-home",
        "iconFillColor" => "red",
        "description" => "Established - 1949",
    ),
    array(
        "name" => "Electronics Engineering",
        "icon" => "path/to/icon3.svg",
        "link" => "https://mitindia.edu/en/ece-home",
        "iconFillColor" => "#F94C10",
        "description" => "Established - 1949",
    ),
    array(
        "name" => "Instrumentation Engineering",
        "icon" => "path/to/icon4.svg",
        "link" => "https://mitindia.edu/en/instrumentation-home",
        "iconFillColor" => "#F31559",
        "description" => "Established - 1949",
    ),
    array(
        "name" => "Production Technology",
        "icon" => "path/to/icon5.svg",
        "link" => "https://mitindia.edu/en/pt-home",
        "iconFillColor" => "#F8DE22",
        "description" => "Established - 1977",
    ),
    array(
        "name" => "Rubber and Plastics Technology",
        "icon" => "path/to/icon6.svg",
        "link" => "https://mitindia.edu/en/rpt-home",
        "iconFillColor" => "#0D1282",
        "description" => "Established - 1988",
    ),
    array(
        "name" => "Information Technology",
        "icon" => "path/to/icon7.svg",
        "link" => "http://www.it.mitindia.edu/",
        "iconFillColor" => "#FE7BE5",
        "description" => "Established - 2001",
    ),
    array(
        "name" => "Computer Technology",
        "icon" => "path/to/icon8.svg",
        "link" => "http://www.ct.mitindia.edu/dct/#/home",
        "iconFillColor" => "#0096FF",
        "description" => "Established - 2010",
    ),
    array(
        "name" => "Applied Science and Humanities",
        "icon" => "path/to/icon9.svg",
        "link" => "http://www.dash.mitindia.edu/",
        "iconFillColor" => "#38E54D",
        "description" => "Established - 2021",
    ),
);
?>

<div class="dept-container">
    <div class="title">Departments</div>
    <div class="dept-wrapper">
        <?php foreach ($departmentsData as $index => $card): ?>
            <div class="dept-card noselect" onclick="window.open('<?php echo $card['link']; ?>', '_blank')">
                <div class="svg-container" style="background-color: <?php echo $card['iconFillColor']; ?>">
                    <?php echo $card['icon']; ?>
                </div>
                <div class="details">
                    <div class="dept-name"><?php echo $card['name']; ?></div>
                    <div class="description"><?php echo $card['description']; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>