var facilitiesData = [
    {
        img: 'src/assets/FacilitiesIcons/hostel.png',
        title: 'Hostel',
    },
    {
        img: 'src/assets/FacilitiesIcons/nss.png',
        title: 'NSS',
    },
    {
        img: 'src/assets/FacilitiesIcons/nso.png',
        title: 'NSO',
    },
    {
        img: 'src/assets/FacilitiesIcons/yrc.png',
        title: 'YRC',
    },
    {
        img: 'src/assets/FacilitiesIcons/athaneum.png',
        title: 'Athenaeum',
    },
    {
        img: 'src/assets/FacilitiesIcons/pda.png',
        title: 'PDA',
    },
    {
        img: 'src/assets/FacilitiesIcons/tamil_mandram.png',
        title: 'tamil mandram',
    },
    {
        img: 'src/assets/FacilitiesIcons/rotaract_club.png',
        title: 'rotaract club',
    },
    {
        img: 'src/assets/FacilitiesIcons/hostel.png',
        title: 'Hostel',
    },
    {
        img: 'src/assets/FacilitiesIcons/csmit.png',
        title: 'Computer Society',
    },
    {
        img: 'src/assets/FacilitiesIcons/tbo.png',
        title: 'TBO',
    },
    {
        img: 'src/assets/FacilitiesIcons/mit_quill.png',
        title: 'MIT Quill',
    },
    {
        img: 'src/assets/FacilitiesIcons/variety_team.png',
        title: 'variety team',
    },
    {
        img: 'src/assets/FacilitiesIcons/museum.png',
        title: 'Museum',
    },
    {
        img: 'src/assets/FacilitiesIcons/mitra.png',
        title: 'mitra',
    },
    {
        img: 'src/assets/FacilitiesIcons/tedc.png',
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