<!DOCTYPE html>
<head>
    <link rel="icon" href="src/assets/mit_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Staff</title>
    <link rel="stylesheet" href="/src/index.css">
    <link rel="stylesheet" href="/src/App.css">
    <link rel="stylesheet" href="/src/components/Header/header.css">
    <link rel="stylesheet" href="/src/pages/public/administration/officestaff.css">
    <link rel="stylesheet" href="/src/components/Footer/footer.css">
    <link rel="stylesheet" href="/src/components/Modal/modal.css">
    <link rel="stylesheet" href="/src/components/TextInput/textinput.css">
</head>    
<html>
    <div id="root">
        <section class="app-container">
            <?php include '../../../components/Modal/modal.php'; ?>
            <?php include '../../../components/Header/header.php'; ?>
            <section class="page-container">

<?php
function renderStaffCard($card) {
    echo '<div class="staff-card-container">';
    echo '<div class="image-wrapper">';
    echo '<div class="image-cover" style="background-image: url(' . $card['image'] . '); background-position: center; background-repeat: no-repeat; background-size: cover; object-fit: contain;"></div>';
    echo '</div>';
    echo '<div class="staff-details">';
    echo '<div class="name">' . $card['name'] . '</div>';
    echo '<div class="designation">' . $card['designation'] . '</div>';
    if (strlen($card['extension']) > 1) {
        echo '<div class="phno">';
        echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z"></path></svg>'; // Replace with your actual call icon path
        echo '<div class="text">' . $card['extension'] . '</div>';
        echo '</div>';
    }
    echo '</div></div>';
}

$src = "/src/assets/Faculty/DeanOffice/";

$officeAdministration = array(
    array(
        "image" => $src . "MrMMaheswaran.png",
        "name" => "Mr. M. Maheswaran",
        "designation" => "Deputy Registrar",
        "extension" => "9962085868/044-22516301"
    ),
    array(
        "image" => $src . "MrsMSrimathi.png",
        "name" => "Ms. M. Srimathi",
        "designation" => "Superintendent",
        "extension" => "9444276725/044-22516000"
    ),
    array(
        "image" => $src . "MrsSAkila.png",
        "name" => "Ms. S. Akila",
        "designation" => "PA to Dean",
        "extension" => "044-22516002"
    ),
    array(
        "image" => $src . "MrSGurunathan.png",
        "name" => "Mr. Gurunathan",
        "designation" => "Office Assistant",
        "extension" => ""
    )
);

$financeSection = array(
    array(
        "image" => $src . "MrsGMuthumeena.png",
        "name" => "Ms. G. Muthumeena",
        "designation" => "Professional Assistant II",
        "extension" => "044-22516026"
    ),
    array(
        "image" => $src . "MrsTSugunaDevi.png",
        "name" => "Ms. T. Suguna Devi",
        "designation" => "Professional Assistant II",
        "extension" => "044-22516026"
    ),
    array(
        "image" => $src . "MsGKrithikasri.png",
        "name" => "Ms. G. Krithikasri",
        "designation" => "Professional Assistant II",
        "extension" => "044-22516026"
    ),
    array(
        "image" => $src . "MrsGAlli.png",
        "name" => "Ms. G. Alli",
        "designation" => "Mrs.G.Alli",
        "extension" => "044-22516026"
    )
);

$studentSection = array(
    array(
        "image" => $src . "MrsFathima.png",
        "name" => "Ms. H. Sayed Ali Rasul Fathima",
        "designation" => "Assistant",
        "extension" => "044-22516003"
    ),
    array(
        "image" => $src . "MrsRAnandhi.png",
        "name" => "Ms. R. Anandhi",
        "designation" => "Assistant",
        "extension" => "044-22516004"
    ),
    array(
        "image" => $src . "MrsKSasikumari.png",
        "name" => "Ms. K. Sasikumari",
        "designation" => "Lab Assistant",
        "extension" => "044-22516005"
    ),
    array(
        "image" => $src . "MrTJohnson.png",
        "name" => "Mr. T. Johnson",
        "designation" => "Lab Assistant",
        "extension" => ""
    ),
    array(
        "image" => $src . "MsSDivya.png",
        "name" => "Ms. S. Divya",
        "designation" => "Professional Assistant II",
        "extension" => "044-22516003"
    ),
    array(
        "image" => $src . "MrPMRobin.png",
        "name" => "Mr. P. M. Robin",
        "designation" => "Professional Assistant II",
        "extension" => "044-22516003"
    ),
    array(
        "image" => $src . "MrSRajesh.png",
        "name" => "Mr. S. Rajesh",
        "designation" => "Clerical Assistant",
        "extension" => "044-22516004"
    ),
    array(
        "image" => $src . "MrRKathiravan.png",
        "name" => "Mr. R. Kathiravan",
        "designation" => "Peon",
        "extension" => ""
    )
);

echo '<div class="office-staff-container">';

echo '<div class="section-title">Admin Section</div>';
echo '<div class="staff-card-wrapper">';
foreach ($officeAdministration as $item) {
    renderStaffCard($item);
}
echo '</div>';

echo '<div class="section-title">Finance Section</div>';
echo '<div class="staff-card-wrapper">';
foreach ($financeSection as $item) {
    renderStaffCard($item);
}
echo '</div>';

echo '<div class="section-title">Student Section</div>';
echo '<div class="staff-card-wrapper">';
foreach ($studentSection as $item) {
    renderStaffCard($item);
}
echo '</div>';

echo '</div>';
?>

                <?php include '../../../components/Footer/footer.php'; ?>
            </section>
        </section>
    </div>
    <script>
        var imgElement = document.querySelector('.HeaderLogo img');
        imgElement.setAttribute('src', '/src/assets/mit_logo.png');
    </script>
</html>