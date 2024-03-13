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
                "title" => "Feedback Portal",
                "url" => "https://fb.annauniv.edu/fbreport/index.php",
            ],
        ],
    ],
    [
        "title" => "Anna University",
        "url" => "#",
        "content" => [
            [
                "title" => "Acts & Statues",
                "url" => "https://www.annauniv.edu/pdf/Acts%20&%20Statues-New.pdf",
            ],
            [
                "title" => "Mandatory Disclosure",
                "url" => "https://iqac.annauniv.edu/",
            ],
            [
                "title" => "Genuineness Verification",
                "url" => "https://gverify.annauniv.edu/",
            ],
            [
                "title" => "NIRF",
                "url" => "https://mitindia.edu/en/administration/office-page",
            ],
            [
                "title" => "University Departments",
                "url" => "https://www.annauniv.edu/univdept.php",
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
                "title" => "MS Teams ID Requisition Form",
                "url" => "https://www.annauniv.edu/rcc/pdf/form%20creating%20MS%20teams.pdf",
            ],
            [
                "title" => "Internet Complaint Booking",
                "url" => "http://bit.ly/mitcccbf",
            ],
            [
                "title" => "More",
                "url" => "/downloads",
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
                "title" => "Payslip",
                "url" => "http://10.11.80.135/onlinepayslip/",
            ],
            [
                "title" => "POSH",
                "url" => "https://www.annauniv.edu/POSH/index.php",
            ],
            [
                "title" => "Student Grievance Redressal",
                "url" => "https://docs.google.com/forms/d/e/1FAIpQLScrI2aIZGcv7FyhvQL-0bwJCliULY0dShhKLe7VEQXNT00Bpw/viewform",
            ],
        ],
    ],
];
?>

<footer class="footer-container">
    <div class="footer-div">
        <?php foreach ($footerContents as $section) : ?>
            <div class="footer-div-box footer-left">
                <h3><?php echo $section['title']; ?><br /></h3>
                <p class="footer-links">
                    <?php foreach ($section['content'] as $link) : ?>
                        <a class="footer-link" target="_blank" rel="noreferrer" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
                    <?php endforeach; ?>
                </p>
            </div>
        <?php endforeach; ?>
        <div class="footer-div-box footer-right">
            <div>
                <i class="footer-address-icon"></i>
                <p>
                    Anna University,<br> MIT Campus
                    <span>Chromepet, Chennai 
                        600044</span>
                </p>
            </div>
            <div>
                <i class="footer-address-icon footer-phone"></i>
                <p>044 2251 6002</p>
            </div>
            <div>
                <i class="footer-address-icon footer-mail"></i>
                <p>dean@mitindia.edu</p>
            </div>
        </div>
    </div>
    <p class="footer-team-name">
        Copyright © 2024 Dr. Kalam Computing Centre, MIT Campus | Developed and Maintained by Web Team, MIT Campus, Anna University
    </p>
</footer>