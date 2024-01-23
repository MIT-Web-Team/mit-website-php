<?php
$numberCountsData = array(
    array("count" => "2.8K+", "description" => "Undergraduates"),
    array("count" => "216", "description" => "Postgraduates"),
    array("count" => "306", "description" => "PhD Scholars"),
    array("count" => "09", "description" => "UG Programs"),
    array("count" => "10", "description" => "PG Programs"),
    array("count" => "210/124", "description" => "Faculty/Staff"),
);
?>

<div class="numbers-count-container noselect">
    <?php foreach ($numberCountsData as $index => $item): ?>
        <span key="<?php echo $index; ?>" class="number-count">
            <h2><?php echo $item['count']; ?></h2>
            <p><?php echo $item['description']; ?></p>
        </span>
    <?php endforeach; ?>
</div>