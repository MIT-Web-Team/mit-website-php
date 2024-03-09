<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php
$AnnaLogo = "src/assets/anna_logo_grey.png";
$MITFrontGate = "src/assets/mit-front.jpg";
?>

<div class="banner noselect">
    <div class="left">
        <div class="logo-container">
            <img src="<?php echo $AnnaLogo; ?>" />
            <h1>
                <p>Anna University</p>
            </h1>
        </div>
        <p class="campus-container">Madras Institute of Technology Campus</p>
        <div class="description">
            <p>Established in 1949, by Shri C. Rajam</p>
            <p>Merged in 1978 with Anna University</p>
            <p>A Benchmarked Institution for Engineering and Technology</p>
            <p>with alumni footprints in all domains across the globe</p>
        </div>
        <div class="rank">
            <p class="rank-tag" id="accredit">Accreditaion</p>
            <p class="campus-container" id="accredit">NBA & NAAC</p>
            <p class="rank-tag">NIRF Rank</p>
            <p class="campus-container">21</p>
            <p class="rank-tag">QS Rank </p>
            <p class="campus-container">35</p>
        </div>
        <div class="flex-row">
            <a class="announcements-button" href="/announcements">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22zm7-7.414V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v4.586l-1.707 1.707A.996.996 0 0 0 3 17v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-1a.996.996 0 0 0-.293-.707L19 14.586z"></path>
                </svg> Announcements
            </a>
            <p id="announcementCount"></p>
        </div>
    </div>
    <div class="right">
        <!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img class="d-block w-100 banner-image" src="src/assets/mit-front.jpg">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="d-block w-100 banner-image" src="src/assets/mit-road.jpg">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="d-block w-100 banner-image" src="src/assets/qs-ranking.jpg">
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img class="d-block w-100 banner-image" src="src/assets/rajam.jpeg">
                </div>
            </div>
        </div> -->
        <img class="banner-image" src="src/assets/mit-front.jpg">
    </div>
</div>
<script>
    $.ajax({
        url: 'src/apiservices/announcement_count.php',
        type: 'POST',
        success: function(data) {
            data = JSON.parse(data);
            if (data > 0) {
                document.getElementById('announcementCount').innerText = data + " new in last 7 days";
            }
        }
    });
    window.onload = function() {
        var accreditaionElements = document.querySelectorAll('#accredit');
        accreditaionElements.forEach(function(element) {
            element.addEventListener('click', function() {
                window.open('https://www.mitindia.edu/en/accreditation', '_blank');
            });
        });
    };
</script>