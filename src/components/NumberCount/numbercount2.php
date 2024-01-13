<head>
    <link rel="stylesheet" href="src/components/NumberCount/numbercount.css">
</head>

<?php
$numberCountsData2 = array(
    array("count" => "210/124", "description" => "Faculty/Staff"),
    array("count" => "49Cr+", "description" => "R & D Grants"),
    array("count" => "588", "description" => "Publications"),
    array("count" => "14/6", "description" => "Patents Published/Granted"),
    array("count" => "95.6K+", "description" => "Books RF ID - Automation"),
    array("count" => "23", "description" => "Student Clubs"),
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