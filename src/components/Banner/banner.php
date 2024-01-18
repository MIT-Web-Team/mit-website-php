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
echo '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg"><path d="M12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z"></path></svg> Announcements</a>';
// if ($announcementCount > 0) {
//     echo '<p>' . $announcementCount . ' new in last 7 days</p>';
// }
echo '</div></div>';
echo '<div class="right">';
echo '<img src="' . $MITFrontGate . '" class="banner-image" />';
echo '</div></div>';
?>