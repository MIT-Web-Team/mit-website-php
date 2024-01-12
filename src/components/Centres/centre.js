var centersData = [
    {
        title: "Computer Center",
        img: 'src\assets\Facilities\computer_center.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "AUKBC - MIT",
        img: 'src\assets\Facilities\aukbc.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "Center for Aerospace",
        img: 'src\assets\Facilities\center_for_aerospace.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "Center for IoT",
        img: 'src\assets\Facilities\center_for_iot.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "Library",
        img: 'src\assets\Facilities\library.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "Placement",
        img: 'src\assets\Facilities\placement.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "Sports",
        img: 'src\assets\Facilities\sports.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "Health Center",
        img: 'src\assets\Facilities\health_center.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "SCoE",
        img: 'src\assets\Facilities\scoe.jpg',
        // description: "2K+ Active Members",
    },
    {
        title: "CEAT",
        img: 'src\assets\Facilities\ceat.jpg',
        // description: "2K+ Active Members",
    }
];

// window.onload = function () {
//     var wrapper = document.getElementById('centre-wrapper');
//     centersData.forEach(function (data, index) {
//         var card = document.createElement('div');
//         card.className = 'card';

//         var img = document.createElement('img');
//         img.src = data.img;
//         card.appendChild(img);

//         var content = document.createElement('div');
//         content.className = 'content';

//         var h1 = document.createElement('h1');
//         h1.textContent = data.title;
//         content.appendChild(h1);

//         card.appendChild(content);
//         wrapper.appendChild(card);
//     });
// };

window.onload = function () {
    var wrapper = document.getElementById('centre-wrapper');
    console.log(wrapper); // Check if wrapper is found
    centersData.forEach(function (data, index) {
        console.log(data); // Check each data object
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