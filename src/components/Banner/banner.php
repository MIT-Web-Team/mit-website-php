<head>
    <link rel="stylesheet" href="src/components/Banner/banner.css">
</head>
<?php
// $NoOfDays = 5;
// $url = "/DB/Query"; // Replace with your actual API endpoint
// $data = array(
//     "tag" => "getAnnouncementCount",
//     "param" => array($NoOfDays),
// );

// $options = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data),
//     ),
// );
// $context  = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// if ($result === FALSE) { /* Handle error */ }

// $res = json_decode($result, true);
// $announcementCount = $res[0]['COUNT'];

$AnnaLogo = "src/assets/anna_logo_grey.png";
$MITFrontGate = "src/assets/mit-front.jpg";

echo '<div class="banner noselect">';
echo '<div class="left">';
echo '<div class="logo-container">';
echo '<img src="' . $AnnaLogo . '"/>';
echo '<h1><p>Anna University</p></h1>';
echo '</div>';
echo '<p class="campus-container">Madras Institute of Technology Campus</p>';
echo '<div class="description">';
echo '<p>Established in 1949, by Shri C. Rajam</p>';
echo '<p>Merged in 1978 with Anna University</p>';
echo '<p>A Benchmarked Institution for Engineering and Technology</p>';
echo '<p>with alumni footprints in all domains across the globe</p>';
echo '</div>';
echo '<div class="flex-row">';
echo '<a class="announcements-button" href="/announcements">';
echo '<i class="fa fa-bell"></i> Announcements</a>';
// if ($announcementCount > 0) {
//     echo '<p>' . $announcementCount . ' new in last 7 days</p>';
// }
echo '</div></div>';
echo '<div class="right">';
echo '<img src="' . $MITFrontGate . '" class="banner-image" />';
echo '</div></div>';
?>