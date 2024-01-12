<head>
    <link rel="stylesheet" href="src\components\Facilities\categoryCards.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="src\components\Facilities\categoryCards.js"></script>
</head>
<div class="categories-container noselect">
    <div class="description">
        <h1>Facilities Available at MIT</h1>
        <p>
            Here are some of the facilities that we provide to our students to
            help them grow and learn. We have a lot of facilities that we provide.
        </p>
    </div>
    <div class="categories-cards-container">
        <button class="scroll-button" onclick="handleScroll(-300)">
            <i id="left" class="fa-solid fa-angle-left" style="color:white;"></i>
        </button>
        <div class="categories-wrapper" id="wrapper">
            <!-- Cards will be inserted here by JavaScript -->
        </div>
        <button class="scroll-button" onclick="handleScroll(300)">
            <i id="right" class="fa-solid fa-angle-right" style="color:white;"></i>
        </button>
    </div>
</div>