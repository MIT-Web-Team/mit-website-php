<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="src/index.css">   
    <link rel="stylesheet" href="src/App.css">   
    <div id="root">
        <section class="app-container">
            <?php include './src/components/Header/header.php'; ?>
            <section class="page-container">
                <?php include './src/components/Banner/banner.php'; ?>
                <?php include './src/components/NumberCount/numbercount1.php'; ?>
                <?php include './src/components/HorizontalCards/horizontalcards.php'; ?>
                <?php include './src/components/NumberCount/numbercount2.php'; ?>
                <?php include './src/components/Centres/centre.php'; ?> 
                <?php include './src/components/Dean/dean.php'; ?> 
                <?php include './src/components/VisionMission/vision_mission.php'; ?> 
                <?php include './src/components/Facilities/categoryCards.php'; ?>
                <?php include './src/components/Footer/footer.php'; ?>
            </section>
        </section>
    </div>
</html>