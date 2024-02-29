<?php session_start(); ?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Madras Institute of Technology</title>
    <link rel="stylesheet" href="src/index.css">
    <link rel="stylesheet" href="src/App.css">
    <link rel="stylesheet" href="src/components/Header/header.css">
    <link rel="stylesheet" href="src/components/Banner/banner.css">
    <link rel="stylesheet" href="src/components/Modal/modal.css">
    <link rel="stylesheet" href="src/components/NumberCount/numbercount.css">
    <link rel="stylesheet" href="src/components/HorizontalCards/horizontalcards.css">
    <link rel="stylesheet" href="src/components/Centres/centre.css">
    <link rel="stylesheet" href="src/components/Dean/dean.css">
    <link rel="stylesheet" href="src/components/VisionMission/vision_mission.css">
    <link rel="stylesheet" href="src/components/Facilities/categoryCards.css">
    <link rel="stylesheet" href="src/components/Footer/footer.css"> 
    <link rel="stylesheet" href="src/components/TextInput/textinput.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>    
<html>
    <div id="root">
        <section class="app-container">
            <?php include './src/components/Modal/modal.php'; ?>
            <?php include './src/components/Header/header.php'; ?>
            <section class="page-container">
                <?php include './src/components/Banner/banner.php'; ?>
                <?php include './src/components/NumberCount/numbercount1.php'; ?>
                <?php include './src/components/Dean/dean.php'; ?> 
                <?php include './src/components/NumberCount/numbercount2.php'; ?>
                <?php include './src/components/VisionMission/vision_mission.php'; ?> 
                <?php include './src/components/HorizontalCards/horizontalcards.php'; ?>
                <?php include './src/components/Centres/centre.php'; ?> 
                <?php include './src/components/Facilities/categoryCards.php'; ?>
                <?php include './src/components/Footer/footer.php'; ?>
            </section>
        </section>
    </div>
</html>