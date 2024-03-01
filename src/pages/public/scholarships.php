<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarships</title>
    <link rel="stylesheet" href="/src/index.css">
    <link rel="stylesheet" href="/src/App.css">
    <link rel="stylesheet" href="/src/pages/public/scholarships.css">
    <link rel="stylesheet" href="/src/components/Header/header.css">
    <link rel="stylesheet" href="/src/components/Footer/footer.css">
    <link rel="stylesheet" href="/src/components/Modal/modal.css">
    <link rel="stylesheet" href="/src/components/TextInput/textinput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<html>
<div id="root">
    <section class="app-container">
        <?php include '../../components/Modal/modal.php'; ?>
        <?php include '../../components/Header/header.php'; ?>
        <section class="page-container">
            <?php include '../../components/Footer/footer.php'; ?>
        </section>
    </section>
</div>
<script>
    var imgElement = document.querySelector('.HeaderLogo img');
    imgElement.setAttribute('src', '/src/assets/mit_logo.png');

    var scholarshipType = true; // Set this to false for archived scholarships

    var scholarshipContainer = document.createElement('div');
    scholarshipContainer.className = 'scholarshipContainer noselect';
    var recentTextContainer = document.createElement('div');
    recentTextContainer.className = 'recentTextContainer';
    var scholarshipTypeDiv = document.createElement('div');
    scholarshipTypeDiv.className = 'scholarshipType';
    var activeButton = document.createElement('div');
    activeButton.id = 'active';
    activeButton.className = scholarshipType ? 'active' : 'passive';
    activeButton.textContent = 'Active';
    var archiveButton = document.createElement('div');
    archiveButton.id = 'archive';
    archiveButton.className = !scholarshipType ? 'active' : 'passive';
    archiveButton.textContent = 'Archive';
    activeButton.addEventListener('click', function() {
        scholarshipType = true;
        activeButton.className = 'active';
        archiveButton.className = 'passive';
        renderScholarships();
    });
    archiveButton.addEventListener('click', function() {
        scholarshipType = false;
        activeButton.className = 'passive';
        archiveButton.className = 'active';
        renderScholarships();
    });
    scholarshipTypeDiv.appendChild(activeButton);
    scholarshipTypeDiv.appendChild(archiveButton);
    recentTextContainer.appendChild(scholarshipTypeDiv);
    scholarshipContainer.appendChild(recentTextContainer);
    var pageContainer = document.querySelector('.page-container');
    var footer = document.querySelector('.footer-container');
    pageContainer.insertBefore(scholarshipContainer, footer);

    function renderScholarshipCard(data, scholarshipType) {
        var scholarshipDate = new Date(data.scholarshipDate);
        var formattedDate = scholarshipDate.getDate() + "-" + (scholarshipDate.getMonth() + 1) + "-" + scholarshipDate.getFullYear();
        var outerContainer = document.createElement('div');
        outerContainer.className = 'outerContainer';
        outerContainer.onclick = function() {
            window.open(data.viewmore, '_blank');
        };
        var textContainer = document.createElement('div');
        textContainer.className = 'textContainer';
        var headContainer = document.createElement('div');
        headContainer.className = 'HeadConatiner';
        var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
        svg.setAttribute('stroke', 'currentColor');
        svg.setAttribute('fill', 'currentColor');
        svg.setAttribute('stroke-width', '0');
        svg.setAttribute('viewBox', '0 0 20 20');
        svg.setAttribute('aria-hidden', 'true');
        svg.setAttribute('height', '1em');
        svg.setAttribute('width', '1em');
        var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path.setAttribute('fill-rule', 'evenodd');
        path.setAttribute('d', 'M18 3a1 1 0 00-1.447-.894L8.763 6H5a3 3 0 000 6h.28l1.771 5.316A1 1 0 008 18h1a1 1 0 001-1v-4.382l6.553 3.276A1 1 0 0018 15V3z');
        path.setAttribute('clip-rule', 'evenodd');
        svg.appendChild(path);
        headContainer.appendChild(svg);
        if (scholarshipType) {
            var blinkingDiv = document.createElement('div');
            blinkingDiv.className = 'blinking-div';
            headContainer.appendChild(blinkingDiv);
        }
        var title = document.createElement('div');
        title.className = 'title';
        title.textContent = data.scholarshipTitle;
        headContainer.appendChild(title);
        var description = document.createElement('div');
        description.className = 'description';
        description.textContent = 'Dated ' + formattedDate;
        headContainer.appendChild(description);
        textContainer.appendChild(headContainer);
        outerContainer.appendChild(textContainer);
        return outerContainer;
    }

    function getAllScholarshipTypes(array) {
        var scholarshipTypes = [];
        array.forEach(function(item) {
            if (!scholarshipTypes.includes(item.scholarshipType)) {
                scholarshipTypes.push(item.scholarshipType);
            }
        });
        return scholarshipTypes;
    }

    function filterScholarship(scholarships, scholarshipType) {
        return scholarships.filter(function(scholarship) {
            return scholarship.scholarshipType === scholarshipType;
        });
    }

    function separateScholarships(array) {
        var today = new Date();
        var recentScholarships = [];
        var otherScholarships = [];
        array.forEach(function(item) {
            var timestamp = new Date(item.scholarshipValidity);
            if (timestamp >= today) {
                recentScholarships.push(item);
            } else {
                otherScholarships.push(item);
            }
        });
        return {
            'recent': recentScholarships,
            'other': otherScholarships
        };
    }

    function renderScholarships() {
        // Fetch data from the server
        $.ajax({
            url: '/src/apiservices/fetch_scholarships.php',
            type: 'POST',
            success: function(data) {
                data = JSON.parse(data);
                console.log(data);
                var separatedScholarships = separateScholarships(data);
                var possibleScholarshipTypes = getAllScholarshipTypes(data);
                // Remove the current recentContainer
                var recentContainer = document.querySelector('.recentContainer');
                if (recentContainer) {
                    recentContainer.remove();
                }
                // Create a new recentContainer
                recentContainer = document.createElement('div');
                recentContainer.className = 'recentContainer';
                possibleScholarshipTypes.forEach(function(possibleScholarshipType) {
                    var scholarshipTypeContainer = document.createElement('div');
                    scholarshipTypeContainer.className = 'scholarshipTypeContainer';
                    var scholarshipCardContainer = document.createElement('div');
                    scholarshipCardContainer.className = 'scholarshipCardContainer';
                    var separatedScholarshipsList = scholarshipType ? separatedScholarships.recent : separatedScholarships.other;
                    var filteredScholarships = filterScholarship(separatedScholarshipsList, possibleScholarshipType);
                    filteredScholarships.forEach(function(scholarship) {
                        var scholarshipCard = renderScholarshipCard(scholarship, scholarshipType);
                        scholarshipCardContainer.appendChild(scholarshipCard);
                    });
                    scholarshipTypeContainer.appendChild(scholarshipCardContainer);
                    recentContainer.appendChild(scholarshipTypeContainer);
                });
                var pageContainer = document.querySelector('.page-container');
                var footer = document.querySelector('.footer-container');
                pageContainer.insertBefore(recentContainer, footer);
            }
        });
    }
    renderScholarships();
</script>

</html>