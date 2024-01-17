<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office Staff</title>
    <link rel="stylesheet" href="../../../index.css">
    <link rel="stylesheet" href="../../../App.css">
    <link rel="stylesheet" href="../../../components/Header/header.css">
    <link rel="stylesheet" href="officestaff.css">
    <link rel="stylesheet" href="../../../components/Footer/footer.css">
</head>    
<html>
    <div id="root">
        <section class="app-container">
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
        echo '<div class="icon"><img src="path/to/call-icon.png" /></div>'; // Replace with your actual call icon path
        echo '<div class="text">' . $card['extension'] . '</div>';
        echo '</div>';
    }
    echo '</div></div>';
}

$src = "../../../assets/Faculty/DeanOffice/";

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
</html>