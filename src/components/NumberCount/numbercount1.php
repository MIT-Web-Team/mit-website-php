<head>
    <link rel="stylesheet" href="src/components/NumberCount/numbercount.css">
</head>

<?php
$numberCountsData = array(
    array("count" => "2.8K+", "description" => "Undergraduates"),
    array("count" => "216", "description" => "Postgraduates"),
    array("count" => "306", "description" => "PhD Scholars"),
    array("count" => "06", "description" => "Research Centres"),
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