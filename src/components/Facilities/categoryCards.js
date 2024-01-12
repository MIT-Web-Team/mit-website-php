var facilitiesData = [
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/hostel.png',
        title: 'Hostel',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/nss.png',
        title: 'NSS',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/nso.png',
        title: 'NSO',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/yrc.png',
        title: 'YRC',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/athaneum.png',
        title: 'Athenaeum',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/pda.png',
        title: 'PDA',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/tamil_mandram.png',
        title: 'tamil mandram',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/rotaract_club.png',
        title: 'rotaract club',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/hostel.png',
        title: 'Hostel',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/csmit.png',
        title: 'Computer Society',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/tbo.png',
        title: 'TBO',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/mit_quill.png',
        title: 'MIT Quill',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/variety_team.png',
        title: 'variety team',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/museum.png',
        title: 'Museum',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/mitra.png',
        title: 'mitra',
    },
    {
        img: 'C:/xampp/htdocs/mit-website-php/src/assets/FacilitiesIcons/tedc.png',
        title: 'tedc',
    }
];

function handleScroll(amount) {
    var wrapper = document.getElementById('wrapper');
    wrapper.scrollLeft += amount;
}

window.onload = function() {
    var wrapper = document.getElementById('wrapper');
    facilitiesData.forEach(function(data, index) {
        var card = document.createElement('div');
        card.className = 'card';

        var img = document.createElement('img');
        img.src = data.img;
        card.appendChild(img);

        var content = document.createElement('div');
        content.className = 'content';

        var h1 = document.createElement('h1');
        h1.textContent = data.title;
        content.appendChild(h1);

        card.appendChild(content);
        wrapper.appendChild(card);
    });
};