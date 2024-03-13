<!DOCTYPE html>

<head>
    <link rel="icon" href="src/assets/mit_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anna University Policies</title>
    <link rel="stylesheet" href="/src/index.css">   
    <link rel="stylesheet" href="/src/App.css"> 
    <link rel="stylesheet" href="/src/pages/public/policy.css">
    <link rel="stylesheet" href="/src/components/Header/header.css">
    <link rel="stylesheet" href="/src/components/Footer/footer.css">
    <link rel="stylesheet" href="/src/components/Modal/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<?php
$departmentsData = array(
    array(
        "name" => "Green Campus Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/1_Green.pdf",
        "iconFillColor" => "#9848FF",
        "description" => "Anna University",
    ),
    array(
        "name" => "Environment and Energy Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/2_Environment.pdf",
        "iconFillColor" => "red",
        "description" => "Anna University",
    ),
    array(
        "name" => "e-Governance Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/3_Egovernance.pdf",
        "iconFillColor" => "#F94C10",
        "description" => "Anna University",
    ),
    array(
        "name" => "Information Technology Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/4_IT.pdf",
        "iconFillColor" => "#F31559",
        "description" => "Anna University",
    ),
    array(
        "name" => "Gender and Social Non-discrimination Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/5_Non_Discrimination.pdf",
        "iconFillColor" => "#F8DE22",
        "description" => "Anna University",
    ),
    array(
        "name" => "Gender Empowerment and Social Equity Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/6_Social.pdf",
        "iconFillColor" => "#0D1282",
        "description" => "Anna University",
    ),
    array(
        "name" => "Scholarships / Freeships Policy",
       "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
       "link" => "/src/assets/Policy/7_Scholarships.pdf",
        "iconFillColor" => "#FE7BE5",
        "description" => "Anna University",
    ),
    array(
        "name" => "Code of Conduct Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/8_Conduct.pdf",
        "iconFillColor" => "#0096FF",
        "description" => "Anna University",
    ),
    array(
        "name" => "Faculty Incentive Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/9_Incentive.pdf",
        "iconFillColor" => "#38E54D",
        "description" => "Anna University",
    ),
    array(
        "name" => "Resource Mobilization and Funding Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/10_Resource.pdf",
        "iconFillColor" => "#0D1282",
        "description" => "Anna University",
    ),
    array(
        "name" => "Grievance Redressal Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/11_Grievance.pdf",
        "iconFillColor" => "#0D1282",
        "description" => "Anna University",
    ),
    array(
        "name" => "Research Promotion Policy",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "/src/assets/Policy/12_Research.pdf",
        "iconFillColor" => "#0D1282",
        "description" => "Anna University",
    ),
);
?>

<div id="root">
    <section class="app-container">
        <?php include '../../components/Modal/modal.php'; ?>
        <?php include '../../components/Header/header.php'; ?>
        <section class="page-container">
            <div class="dept-container">
                <div class="title">Anna University Policies</div>
                <div class="dept-wrapper">
                    <?php foreach ($departmentsData as $index => $card) : ?>
                        <div class="dept-card noselect" onclick="window.open('<?php echo $card['link']; ?>', '_blank')">
                            <div class="svg-container" style="background-color: <?php echo $card['iconFillColor']; ?>">
                                <?php echo $card['icon']; ?>
                            </div>
                            <div class="details">
                                <div class="dept-name"><?php echo $card['name']; ?></div>
                                <div class="description"><?php echo $card['description']; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php include '../../components/Footer/footer.php'; ?>
        </section>
    </section>
</div>