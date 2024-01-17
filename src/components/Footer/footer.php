<?php
$footerContents = [
    [
        "title" => "Academics",
        "url" => "#",
        "content" => [
            [
                "title" => "Academic Courses",
                "url" => "https://mitindia.edu/en/courses",
            ],
            [
                "title" => "ACOE",
                "url" => "https://acoe.annauniv.edu/",
            ],
            [
                "title" => "Academic Schedules",
                "url" => "",
            ],
            [
                "title" => "Centre for Research",
                "url" => "http://ctdt.annauniv.edu/",
            ],
            [
                "title" => "Students Feedback",
                "url" => "http://fbonline.annauniv.edu:8080/fb/fb.jsp",
            ],
        ],
    ],
    [
        "title" => "Administration",
        "url" => "#",
        "content" => [
            [
                "title" => "Dean",
                "url" => "https://annauniv.irins.org/profile/43400",
            ],
            [
                "title" => "People",
                "url" => "https://mitindia.edu/en/administration/office-page",
            ],
            [
                "title" => "Departments",
                "url" => "https://mitindia.edu/en/all-departments",
            ],
            [
                "title" => "Acts & Statues",
                "url" => "https://www.annauniv.edu/pdf/Acts%20&%20Statues-New.pdf",
            ],
            [
                "title" => "Mandatory Disclosure",
                "url" => "https://iqac.annauniv.edu/",
            ],
        ],
    ],
    [
        "title" => "Downloads",
        "url" => "#",
        "content" => [
            [
                "title" => "WiFi Registration",
                "url" => "https://docs.google.com/forms/d/e/1FAIpQLSdfAkiupN8aSNQynN383_njOlsF-E_UWQY50S0DHOGLSzcxBw/viewform",
            ],
            [
                "title" => "Network Issues",
                "url" => "https://docs.google.com/forms/d/e/1FAIpQLSdccEYSatG7fShAYwLMJ0hwvfvtDtW_cc00ZpGliYpfeYzhBA/viewform",
            ],
        ],
    ],
    [
        "title" => "Facilities",
        "url" => "#",
        "content" => [
            [
                "title" => "Computer Centre",
                "url" => "https://cc.mitindia.edu/",
            ],
            [
                "title" => "Library",
                "url" => "",
            ],
            [
                "title" => "Health Centre",
                "url" => "",
            ],
            [
                "title" => "Student Grievance Redressal",
                "url" => "https://docs.google.com/forms/d/e/1FAIpQLScrI2aIZGcv7FyhvQL-0bwJCliULY0dShhKLe7VEQXNT00Bpw/viewform",
            ],
        ],
    ],
];

$latitude = 12.948199763058907;
$longitude = 80.13975384299005;

$googleUrl = "https://www.google.com/maps/place/Madras+Institute+of+Technology,+Anna+University/@12.9474333,80.1403601,16.73z/data=!4m7!3m6!1s0x3a525fac595c29ff:0xb76082ae18b51418!4b1!8m2!3d12.948048!4d80.139742!16zL20vMDFjczgx?entry=ttu";

echo '<div class="footer-container noselect">';
echo '<span>';
echo '<span>';
echo '<h1>Anna University, MIT Campus</h1>';
echo '<p>dean@mitindia.edu | +044 2251 6002</p>';
echo '<div class="map-contact-container">';
echo '<div class="map-container">';
echo '<div class="map-wrapper" style="height: 110%; width: 110%;">';
echo '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.371661499109!2d80.13716707454623!3d12.948053215395197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525fac595c29ff%3A0xb76082ae18b51418!2sMadras%20Institute%20of%20Technology%2C%20Anna%20University!5e0!3m2!1sen!2sin!4v1704879128210!5m2!1sen!2sin" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="copyright">';
echo '© 2023 All Rights Reserved By <a href="#!"> @MIT WebTeam </a>';
echo '</div>';
echo '</span>';
echo '</span>';
echo '<span>';

foreach ($footerContents as $index => $item) {
    echo '<span>';
    echo '<div class="column-title">' . $item['title'] . '</div>';
    echo '<span>';

    if (isset($item['content'])) {
        foreach ($item['content'] as $subItem) {
            echo '<a href="' . $subItem['url'] . '" target="_blank">' . $subItem['title'] . '</a>';
        }
    }

    echo '</span>';
    echo '</span>';
}

echo '</span>';
echo '</div>';
?>