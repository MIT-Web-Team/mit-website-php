<!DOCTYPE html>

<head>
    <link rel="icon" href="src/assets/mit_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <link rel="stylesheet" href="/src/index.css">
    <link rel="stylesheet" href="/src/App.css">
    <link rel="stylesheet" href="/src/pages/public/announcements.css">
    <link rel="stylesheet" href="/src/components/Header/header.css">
    <link rel="stylesheet" href="/src/components/Footer/footer.css">
    <link rel="stylesheet" href="/src/components/Modal/modal.css">
    <link rel="stylesheet" href="/src/components/TextInput/textinput.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

    var announcementType = true; // Set this to false for archived announcements

    var announcementContainer = document.createElement('div');
    announcementContainer.className = 'anouncementContainer noselect';

    var recentTextContainer = document.createElement('div');
    recentTextContainer.className = 'recentTextContainer';

    var announcementTypeDiv = document.createElement('div');
    announcementTypeDiv.className = 'announcementType';

    var activeButton = document.createElement('div');
    activeButton.id = 'active';
    activeButton.className = announcementType ? 'active' : 'passive';
    activeButton.textContent = 'Active';

    var archiveButton = document.createElement('div');
    archiveButton.id = 'archive';
    archiveButton.className = !announcementType ? 'active' : 'passive';
    archiveButton.textContent = 'Archive';

    activeButton.addEventListener('click', function() {
        announcementType = true;
        activeButton.className = 'active';
        archiveButton.className = 'passive';
        renderAnnouncements();
    });

    archiveButton.addEventListener('click', function() {
        announcementType = false;
        activeButton.className = 'passive';
        archiveButton.className = 'active';
        renderAnnouncements();
    });

    announcementTypeDiv.appendChild(activeButton);
    announcementTypeDiv.appendChild(archiveButton);
    recentTextContainer.appendChild(announcementTypeDiv);
    announcementContainer.appendChild(recentTextContainer);
    var pageContainer = document.querySelector('.page-container');
    var footer = document.querySelector('.footer-container');
    pageContainer.insertBefore(announcementContainer, footer);

    function renderAnnouncementCard(data, announcementType) {
        var announcementDate = new Date(data.announcementDate);
        var formattedDate = announcementDate.getDate() + "-" + (announcementDate.getMonth() + 1) + "-" + announcementDate.getFullYear();

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

        if (announcementType) {
            var blinkingDiv = document.createElement('div');
            blinkingDiv.className = 'blinking-div';
            headContainer.appendChild(blinkingDiv);
        }

        var title = document.createElement('div');
        title.className = 'title';
        title.textContent = data.announcementTitle;
        headContainer.appendChild(title);

        var description = document.createElement('div');
        description.className = 'description';
        description.textContent = 'Dated ' + formattedDate;
        headContainer.appendChild(description);

        textContainer.appendChild(headContainer);
        outerContainer.appendChild(textContainer);

        return outerContainer;
    }

    function getAllAnnouncementTypes(array) {
        var announcementTypes = [];
        array.forEach(function(item) {
            if (!announcementTypes.includes(item.announcementType)) {
                announcementTypes.push(item.announcementType);
            }
        });
        return announcementTypes;
    }

    function filterAnnouncement(announcements, announcementType) {
        return announcements.filter(function(announcement) {
            return announcement.announcementType === announcementType;
        });
    }

    function separateAnnouncements(array) {
        var today = new Date();
        var recentAnnouncements = [];
        var otherAnnouncements = [];
        array.forEach(function(item) {
            var timestamp = new Date(item.announcementValidity);
            if (timestamp >= today) {
                recentAnnouncements.push(item);
            } else {
                otherAnnouncements.push(item);
            }
        });
        return {
            'recent': recentAnnouncements,
            'other': otherAnnouncements
        };
    }

    function renderAnnouncements() {
        // Fetch data from the server
        $.ajax({
            url: '/src/apiservices/fetch_announcements.php',
            type: 'POST',
            success: function(data) {
                data = JSON.parse(data);

                var separatedAnnouncements = separateAnnouncements(data);
                var possibleAnnouncementTypes = getAllAnnouncementTypes(data);

                // Remove the current recentContainer
                var recentContainer = document.querySelector('.recentContainer');
                if (recentContainer) {
                    recentContainer.remove();
                }

                // Create a new recentContainer
                recentContainer = document.createElement('div');
                recentContainer.className = 'recentContainer';

                possibleAnnouncementTypes.forEach(function(possibleAnnouncementType) {
                    var announcementTypeContainer = document.createElement('div');
                    announcementTypeContainer.className = 'announcementTypeContainer';

                    var announcementCardContainer = document.createElement('div');
                    announcementCardContainer.className = 'announcementCardContainer';

                    var separatedAnnouncementsList = announcementType ? separatedAnnouncements.recent : separatedAnnouncements.other;
                    var filteredAnnouncements = filterAnnouncement(separatedAnnouncementsList, possibleAnnouncementType);
                    filteredAnnouncements.forEach(function(announcement) {
                        var announcementCard = renderAnnouncementCard(announcement, announcementType);
                        announcementCardContainer.appendChild(announcementCard);
                    });

                    announcementTypeContainer.appendChild(announcementCardContainer);
                    recentContainer.appendChild(announcementTypeContainer);
                });

                var pageContainer = document.querySelector('.page-container');
                var footer = document.querySelector('.footer-container');
                pageContainer.insertBefore(recentContainer, footer);
            }
        });
    }
    renderAnnouncements();
</script>

</html>