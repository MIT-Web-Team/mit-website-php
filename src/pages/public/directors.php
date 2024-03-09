<!DOCTYPE html>

<head>
    <link rel="icon" href="src/assets/mit_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre Directors</title>
    <link rel="stylesheet" href="../../index.css">   
    <link rel="stylesheet" href="../../App.css"> 
    <link rel="stylesheet" href="../../pages/public/directors.css">
    <link rel="stylesheet" href="../../components/Header/header.css">
    <link rel="stylesheet" href="../../components/Footer/footer.css">
    <link rel="stylesheet" href="../../components/Modal/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<?php
$directorData = array(
    array(
        "name" => "Dr. P. Jayashree",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" width="1em" height="1em"><path d="M8.85 4.85c.14-.14.19-.36.11-.54S8.7 4 8.5 4h-3C4.67 4 4 4.67 4 5.5v11c0 .83.67 1.5 1.5 1.5h4c.28 0 .5-.22.5-.5s-.22-.5-.5-.5h-4c-.28 0-.5-.22-.5-.5V8.71l3.85-3.85ZM5 5.5c0-.28.22-.5.5-.5h1.79L5 7.29zm12 4v-4c0-.28-.22-.5-.5-.5h-2.17c-.39 0-.78.16-1.06.44L9.44 9.27c-.28.28-.44.66-.44 1.06v2.17c0 .28.22.5.5.5h1c.28 0 .5.22.5.5s-.22.5-.5.5h-1c-.83 0-1.5-.67-1.5-1.5v-2.17c0-.67.26-1.3.73-1.77l3.83-3.83c.47-.47 1.1-.73 1.77-.73h2.17c.83 0 1.5.67 1.5 1.5v4c0 .28-.22.5-.5.5s-.5-.22-.5-.5ZM13.5 9c.28 0 .5.22.5.5v1c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-1c0-.28.22-.5.5-.5ZM12 21.5c0 .28-.22.5-.5.5h-7C2.02 22 0 19.98 0 17.5v-13C0 2.02 2.02 0 4.5 0h13C19.98 0 22 2.02 22 4.5v7c0 .28-.22.5-.5.5s-.5-.22-.5-.5v-7C21 2.57 19.43 1 17.5 1h-13C2.57 1 1 2.57 1 4.5v13C1 19.43 2.57 21 4.5 21h7c.28 0 .5.22.5.5Zm11.85 1.65-2.98-2.98A4.94 4.94 0 0 0 22 17.01c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.2 0 2.3-.42 3.16-1.13l2.98 2.98a.485.485 0 0 0 .7 0c.2-.2.2-.51 0-.71ZM17 21c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4Z" stroke="none"/></svg>',
        "link" => "https://www.au-kbc.org/",
        "iconFillColor" => "#FE7BE5",
        "description" => "AU-KBC Research Centre",
    ),
    array(
        "name" => "Dr. K. Senthil Kumar",
        "icon" => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2H248.4c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48H542.8c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z"/></svg>',
        "link" => "http://www.casr.mitindia.edu/",
        "iconFillColor" => "#9848FF",
        "description" => "Centre for Aerospace Research",
    ),
    array(
        "name" => "Dr. P. T. V. Bhuvaneswari",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M14 6H6v8h8V6z"></path><path fill-rule="evenodd" d="M9.25 3V1.75a.75.75 0 011.5 0V3h1.5V1.75a.75.75 0 011.5 0V3h.5A2.75 2.75 0 0117 5.75v.5h1.25a.75.75 0 010 1.5H17v1.5h1.25a.75.75 0 010 1.5H17v1.5h1.25a.75.75 0 010 1.5H17v.5A2.75 2.75 0 0114.25 17h-.5v1.25a.75.75 0 01-1.5 0V17h-1.5v1.25a.75.75 0 01-1.5 0V17h-1.5v1.25a.75.75 0 01-1.5 0V17h-.5A2.75 2.75 0 013 14.25v-.5H1.75a.75.75 0 010-1.5H3v-1.5H1.75a.75.75 0 010-1.5H3v-1.5H1.75a.75.75 0 010-1.5H3v-.5A2.75 2.75 0 015.75 3h.5V1.75a.75.75 0 011.5 0V3h1.5zM4.5 5.75c0-.69.56-1.25 1.25-1.25h8.5c.69 0 1.25.56 1.25 1.25v8.5c0 .69-.56 1.25-1.25 1.25h-8.5c-.69 0-1.25-.56-1.25-1.25v-8.5z" clip-rule="evenodd"></path></svg>',
        "link" => "http://www.ciot.mitindia.edu/",
        "iconFillColor" => "#F31559",
        "description" => "Centre for Internet of Things",
    ),
    array(
        "name" => "DR. S. Srinivasan",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M413.72 19.395v98.64l-46.116 46.117-34.198-34.2-6.607 6.61-141.52 141.516 113.513 113.51-52.775 52.773.002 50.31h18.687v-42.568l47.3-47.3 21.4 21.4 148.122-148.124-60.165-60.164 67.447-67.45V19.395h-18.687v123.33l-61.975 61.975-27.332-27.333 51.59-51.59V19.395H413.72zM19.36 30.303V48.99h186.607l44.254 44.254c-2.56 4.393-4.032 9.496-4.032 14.947 0 16.422 13.312 29.736 29.732 29.736s29.732-13.314 29.732-29.735c0-16.42-13.312-29.73-29.732-29.73-4.143 0-8.088.85-11.672 2.382l-50.54-50.54H19.36zm0 55.478v18.69l131.126.003 44.254 44.254c-2.56 4.392-4.035 9.496-4.035 14.947 0 16.42 13.312 29.732 29.732 29.732s29.733-13.312 29.733-29.732-13.312-29.733-29.732-29.733c-4.144 0-8.088.85-11.672 2.382l-50.54-50.54H19.362zm83.386 55.482l-83.385.002v18.69l75.646-.003 44.254 44.26c-2.56 4.39-4.033 9.496-4.033 14.946 0 16.42 13.312 29.733 29.732 29.733s29.73-13.313 29.73-29.734c0-16.42-13.31-29.734-29.73-29.734-4.145 0-8.09.85-11.675 2.383l-50.54-50.543zm230.66 15.12L455.1 278.08 333.406 399.77 211.71 278.08l121.696-121.695zm-1.254 27.388l-94.574 94.574 95.012 95.015 13.215-13.214-81.797-81.8 81.36-81.362-13.216-13.214zm-312.79 21.558v51.207l160.13 160.13v78.005h18.69V384.146L19.362 205.328zm346.51 8.397L352.66 226.94l51.48 51.482-51.77 51.77 13.218 13.214 64.982-64.984-64.695-64.697zm-29.93 33.16c-17.45 0-31.592 14.147-31.592 31.594 0 17.445 14.143 31.59 31.59 31.59 17.45 0 31.593-14.145 31.593-31.59 0-17.45-14.143-31.595-31.592-31.595zM19.36 295.35v51.207l94.886 94.88v53.233h18.688v-85.75L19.362 295.35zm427.378 73.154c-16.42 0-29.732 13.312-29.732 29.732s13.312 29.735 29.732 29.735c3.994 0 7.802-.794 11.28-2.222l36.62 36.615v-26.427l-22.402-22.4c2.688-4.47 4.237-9.704 4.237-15.3 0-16.42-13.314-29.732-29.735-29.732zM19.36 386.19V437.4l31.294 31.29-.002 25.982H69.34l.006-58.496L19.36 386.19zm371.902 37.796c-16.42 0-29.733 13.312-29.733 29.733 0 16.42 13.31 29.73 29.732 29.73 3.513 0 6.882-.612 10.01-1.73l12.955 12.95h26.43l-24.58-24.578c3.104-4.697 4.917-10.322 4.917-16.373 0-16.422-13.312-29.734-29.732-29.734z"></path></svg>',
        "link" => "https://mitindia.edu/en/research-centres/mit_scoe",
        "iconFillColor" => "#F94C10",
        "description" => "Siemens Centre of Excellence",
    ),
    array(
        "name" => "Dr. A. Siddharthan",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"/></svg>',
        "link" => "https://mitindia.edu/en/research-centres/ceat_mit",
        "iconFillColor" => "red",
        "description" => "Centre for Excellence in Automobile Technology",
    ),
    array(
        "name" => "Dr. K. Latha",
        "icon" => '<svg fill="currentColor" width="1em"  height="1em" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" ><path d="M21 21v3h-2v-3c0-1.103-.897-2-2-2H7c-1.103 0-2 .897-2 2v3H3v-3c0-2.206 1.794-4 4-4h10c2.206 0 4 1.794 4 4m1-15v5h-2v4H4v-4H2V6h2V5c0-1.654 1.346-3 3-3h4V0h2v2h4c1.654 0 3 1.346 3 3v1zm-4-1c0-.552-.449-1-1-1H7c-.551 0-1 .448-1 1v8h12zM9.5 7a1.5 1.5 0 1 0 .001 3.001A1.5 1.5 0 0 0 9.5 7m5 0a1.5 1.5 0 1 0 .001 3.001A1.5 1.5 0 0 0 14.5 7"/></svg>',
        "link" => "https://cra.mitindia.edu/",
        "iconFillColor" => "#0D1282",
        "description" => "Centre for Robotics and Automation",
    ),
);
?>

<div id="root">
    <section class="app-container">
        <?php include '../../components/Modal/modal.php'; ?>
        <?php include '../../components/Header/header.php'; ?>
        <section class="page-container">
            <div class="dept-container">
                <div class="title">Centre Directors</div>
                <div class="dept-wrapper">
                    <?php foreach ($directorData as $index => $card) : ?>
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
            <?php include '../../components/Footer/footer.php'; ?>
        </section>
    </section>
</div>