<?php
$numberCountsData2 = array(
    array("count" => "06", "description" => "Research Centres"),
    array("count" => "61Cr+", "description" => "R & D Grants"),
    array("count" => "3615+", "description" => "Publications"),
    array("count" => "18/8", "description" => "Patents Published/Granted"),
    array("count" => "95.6K+", "description" => "Books RF ID - Automation"),
    array("count" => "32", "description" => "Student Clubs"),
);
?>

<div class="numbers-count-container noselect">
    <?php foreach ($numberCountsData2 as $index => $item): ?>
        <span key="<?php echo $index; ?>" class="number-count">
            <h2><?php echo $item['count']; ?></h2>
            <p><?php echo $item['description']; ?></p>
        </span>
    <?php endforeach; ?>
</div>