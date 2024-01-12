<head>
    <link rel="stylesheet" href="src\components\VisionMission\vision_mission.css">
</head>
<div class="mi-vi-wrapper">
    <div class="vi-wrapper">
        <div class="vision-main-card">
            <div class="vheading">Vision</div>
            <div class="body">
                <div>
                    The vision of Anna University is to be a
                    <b> world class institution </b>by producing professionals with high
                    technical knowledge, professional skills and ethical values, and
                    remain as a preferred partner to the industry and community for their
                    economic and social development through excellence in teaching,
                    research and consultancy.
                    Anna University shall be recognized as a point of reference, a
                    catalyst, a facilitator, a trend setter and a leader in technical
                    education
                </div>
            </div>
        </div>
    </div>
    <div class="mi-wrapper">
        <?php
        $viewMore = true;
        $MissionContent = [
            "Producing students who are intellectually and technically equipped with well defined knowledge, skills and ethics who are creative thinkers, inspiring leaders and contributing citizens",
            "Introducing high quality academic and research programmes and providing extension services in cutting edge technologies",
            "Ensuring a supportive campus climate with dynamic leadership and development opportunities to meet the needs of the students, faculty and staff",
            "Enhancing academic productivity through induction of quality faculty, accelerated graduation, credit banking, augmented continuing education opportunities and adoption of current technology",
            "Sharing the intellectual resources and the infrastructural facilities among the academia from other institutions and among the industrial society, funding agencies and government",
            "Enhancing the collaborative partnership between Industry and Institute for commercializing and transferring the latest technological know-how towards societal development",
            "Setting up a Global University Network Campus that embodies the ideals of an open, democratic and global society catering to the needs of the global community and satisfying cultural, ethnic and racial diversity",
            "Expanding global participation spread across continents with the aid of interactive satellite based education and the usage of digital library",
            "Enriching the national and international character of the University",
            "Ensuring efficient administrative coordination and effective decision making through necessary reforms and by strategically allocating resources",
            "Benchmarking against technologically sound global leaders with a view towards continuous improvement",
        ];
        ?>

        <div class="mission-main-card noselect">
            <div class="heading">Mission</div>
            <div class="intro">
                Anna University shall contribute to the educational, economic and social
                development by
            </div>
            <ul class="mi-content" style="<?php echo $viewMore ? 'overflow: auto; scrollbar-color: inherit;' : ''; ?>">
                <?php foreach ($MissionContent as $index => $item) : ?>
                    <?php if (!$viewMore && $index < 4) : ?>
                        <li><?php echo $item; ?></li>
                    <?php elseif ($viewMore) : ?>
                        <li><?php echo $item; ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <div class="login-container <?php echo $viewMore ? 'open' : ''; ?>">
                <!-- Button functionality is not available in this PHP script -->
            </div>
        </div>
    </div>
</div>