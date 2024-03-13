<!DOCTYPE html>

<head>
    <link rel="icon" href="src/assets/mit_logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Head of the Departments</title>
    <link rel="stylesheet" href="/src/index.css">   
    <link rel="stylesheet" href="/src/App.css"> 
    <link rel="stylesheet" href="/src/pages/public/hod.css">
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
        "name" => "Dr. K. M. Parammasivam",
        "icon" => '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M381 114.9L186.1 41.8c-16.7-6.2-35.2-5.3-51.1 2.7L89.1 67.4C78 73 77.2 88.5 87.6 95.2l146.9 94.5L136 240 77.8 214.1c-8.7-3.9-18.8-3.7-27.3 .6L18.3 230.8c-9.3 4.7-11.8 16.8-5 24.7l73.1 85.3c6.1 7.1 15 11.2 24.3 11.2H248.4c5 0 9.9-1.2 14.3-3.4L535.6 212.2c46.5-23.3 82.5-63.3 100.8-112C645.9 75 627.2 48 600.2 48H542.8c-20.2 0-40.2 4.8-58.2 14L381 114.9zM0 480c0 17.7 14.3 32 32 32H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H32c-17.7 0-32 14.3-32 32z"/></svg>',
        "link" => "https://mitindia.edu/en/aero-home",
        "iconFillColor" => "#9848FF",
        "description" => "Aeronautical Engineering",
    ),
    array(
        "name" => "Dr. K. Annamalai",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M499.99 176h-59.87l-16.64-41.6C406.38 91.63 365.57 64 319.5 64h-127c-46.06 0-86.88 27.63-103.99 70.4L71.87 176H12.01C4.2 176-1.53 183.34.37 190.91l6 24C7.7 220.25 12.5 224 18.01 224h20.07C24.65 235.73 16 252.78 16 272v48c0 16.12 6.16 30.67 16 41.93V416c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h256v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-54.07c9.84-11.25 16-25.8 16-41.93v-48c0-19.22-8.65-36.27-22.07-48H494c5.51 0 10.31-3.75 11.64-9.09l6-24c1.89-7.57-3.84-14.91-11.65-14.91zm-352.06-17.83c7.29-18.22 24.94-30.17 44.57-30.17h127c19.63 0 37.28 11.95 44.57 30.17L384 208H128l19.93-49.83zM96 319.8c-19.2 0-32-12.76-32-31.9S76.8 256 96 256s48 28.71 48 47.85-28.8 15.95-48 15.95zm320 0c-19.2 0-48 3.19-48-15.95S396.8 256 416 256s32 12.76 32 31.9-12.8 31.9-32 31.9z"/></svg>',
        "link" => "https://mitindia.edu/en/auto-home",
        "iconFillColor" => "red",
        "description" => "Automobile Engineering",
    ),
    array(
        "name" => "Dr. P. Indumathi",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M413.72 19.395v98.64l-46.116 46.117-34.198-34.2-6.607 6.61-141.52 141.516 113.513 113.51-52.775 52.773.002 50.31h18.687v-42.568l47.3-47.3 21.4 21.4 148.122-148.124-60.165-60.164 67.447-67.45V19.395h-18.687v123.33l-61.975 61.975-27.332-27.333 51.59-51.59V19.395H413.72zM19.36 30.303V48.99h186.607l44.254 44.254c-2.56 4.393-4.032 9.496-4.032 14.947 0 16.422 13.312 29.736 29.732 29.736s29.732-13.314 29.732-29.735c0-16.42-13.312-29.73-29.732-29.73-4.143 0-8.088.85-11.672 2.382l-50.54-50.54H19.36zm0 55.478v18.69l131.126.003 44.254 44.254c-2.56 4.392-4.035 9.496-4.035 14.947 0 16.42 13.312 29.732 29.732 29.732s29.733-13.312 29.733-29.732-13.312-29.733-29.732-29.733c-4.144 0-8.088.85-11.672 2.382l-50.54-50.54H19.362zm83.386 55.482l-83.385.002v18.69l75.646-.003 44.254 44.26c-2.56 4.39-4.033 9.496-4.033 14.946 0 16.42 13.312 29.733 29.732 29.733s29.73-13.313 29.73-29.734c0-16.42-13.31-29.734-29.73-29.734-4.145 0-8.09.85-11.675 2.383l-50.54-50.543zm230.66 15.12L455.1 278.08 333.406 399.77 211.71 278.08l121.696-121.695zm-1.254 27.388l-94.574 94.574 95.012 95.015 13.215-13.214-81.797-81.8 81.36-81.362-13.216-13.214zm-312.79 21.558v51.207l160.13 160.13v78.005h18.69V384.146L19.362 205.328zm346.51 8.397L352.66 226.94l51.48 51.482-51.77 51.77 13.218 13.214 64.982-64.984-64.695-64.697zm-29.93 33.16c-17.45 0-31.592 14.147-31.592 31.594 0 17.445 14.143 31.59 31.59 31.59 17.45 0 31.593-14.145 31.593-31.59 0-17.45-14.143-31.595-31.592-31.595zM19.36 295.35v51.207l94.886 94.88v53.233h18.688v-85.75L19.362 295.35zm427.378 73.154c-16.42 0-29.732 13.312-29.732 29.732s13.312 29.735 29.732 29.735c3.994 0 7.802-.794 11.28-2.222l36.62 36.615v-26.427l-22.402-22.4c2.688-4.47 4.237-9.704 4.237-15.3 0-16.42-13.314-29.732-29.735-29.732zM19.36 386.19V437.4l31.294 31.29-.002 25.982H69.34l.006-58.496L19.36 386.19zm371.902 37.796c-16.42 0-29.733 13.312-29.733 29.733 0 16.42 13.31 29.73 29.732 29.73 3.513 0 6.882-.612 10.01-1.73l12.955 12.95h26.43l-24.58-24.578c3.104-4.697 4.917-10.322 4.917-16.373 0-16.422-13.312-29.734-29.732-29.734z"></path></svg>',
        "link" => "https://mitindia.edu/en/ece-home",
        "iconFillColor" => "#F94C10",
        "description" => "Electronics Engineering",
    ),
    array(
        "name" => "DR. S. Srinivasan",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" aria-hidden="true" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M14 6H6v8h8V6z"></path><path fill-rule="evenodd" d="M9.25 3V1.75a.75.75 0 011.5 0V3h1.5V1.75a.75.75 0 011.5 0V3h.5A2.75 2.75 0 0117 5.75v.5h1.25a.75.75 0 010 1.5H17v1.5h1.25a.75.75 0 010 1.5H17v1.5h1.25a.75.75 0 010 1.5H17v.5A2.75 2.75 0 0114.25 17h-.5v1.25a.75.75 0 01-1.5 0V17h-1.5v1.25a.75.75 0 01-1.5 0V17h-1.5v1.25a.75.75 0 01-1.5 0V17h-.5A2.75 2.75 0 013 14.25v-.5H1.75a.75.75 0 010-1.5H3v-1.5H1.75a.75.75 0 010-1.5H3v-1.5H1.75a.75.75 0 010-1.5H3v-.5A2.75 2.75 0 015.75 3h.5V1.75a.75.75 0 011.5 0V3h1.5zM4.5 5.75c0-.69.56-1.25 1.25-1.25h8.5c.69 0 1.25.56 1.25 1.25v8.5c0 .69-.56 1.25-1.25 1.25h-8.5c-.69 0-1.25-.56-1.25-1.25v-8.5z" clip-rule="evenodd"></path></svg>',
        "link" => "https://mitindia.edu/en/instrumentation-home",
        "iconFillColor" => "#F31559",
        "description" => "Instrumentation Engineering",
    ),
    array(
        "name" => "Dr. A. Siddharthan",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M179.625 22.313L163.22 58.937c-3.258-.384-6.498-.604-9.72-.624-10.577-.066-20.857 1.808-30.47 5.28L99.78 31.032 55.75 63.188l24.063 33.657c-7.21 10.412-12.3 22.5-14.5 35.75l-42.72 4.687 5.345 54.25 45.468-5c5.082 10.2 12.078 19.372 20.594 26.97l-19.406 43.375 49.375 22.094 19.5-43.564c11.656 1.242 23.08.128 33.75-3l28.124 38.53 31.72-23.186 11.655 20.156C234.014 279.138 220.873 292.3 209.624 307l-49.22-28.344-25.718 46.72 48.125 27.937c-7.068 16.934-11.967 34.975-14.343 53.812H112.5v53.72h56.22c1.66 12.053 4.372 23.753 8.03 35.06h169.312c-23.915-10.758-40.562-34.788-40.562-62.717 0-37.964 30.754-68.75 68.72-68.75 37.963 0 68.75 30.786 68.75 68.75 0 27.93-16.67 51.96-40.595 62.718h91.5V200.375l-11.688-6.406L454.594 242c-16.842-7.204-34.808-12.234-53.594-14.72v-55.53h-53.72v55.47c-18.303 2.377-35.83 7.183-52.31 14.03l-27.126-47.28-36 20.25-9.25-12.97c7.08-9.223 12.43-19.93 15.5-31.72l44.437-4.843-5.342-54.25-42.25 4.157c-4.92-12.618-12.648-23.953-22.563-33.094L229 44.406l-49.375-22.093zm-27.344 84.25c23.3-.24 42.94 17.827 44.376 41.343 1.48 24.275-17.004 45.144-41.28 46.625-24.278 1.483-45.145-16.974-46.626-41.25-1.48-24.274 16.973-45.142 41.25-46.624.76-.046 1.53-.086 2.28-.094z"></path></svg>',
        "link" => '"https://mitindia.edu/en/pt-home"',
        "iconFillColor" => "#F8DE22",
        "description" => "Production Technology",
    ),
    array(
        "name" => "Dr. L. S. Jayakumari",
        "icon" => '<img src="src/assets/rpt.png" style="width: 70%;">',
        "link" => "https://mitindia.edu/en/rpt-home",
        "iconFillColor" => "#0D1282",
        "description" => "Rubber and Plastics Technology",
    ),
    array(
        "name" => "Dr. M. R. Sumalatha",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M189.1 18l14.5 14.47 14.1-14.11-.4-.36zm54.3 0l-.3.31 21.3 21.26 17-16.99-4.6-4.58zm-73.8 6.01l-11.7 11.67 14.2 28.28 18.7-18.72zm60.8 7.06l-14.1 14.11 21.2 21.25 14.1-14.1zm-26.9 26.89l-18.7 18.73 28.3 14.16 11.7-11.66zM163.2 72.8L147 89l12.8 12.8L176 85.52zm-50.1 7.77L80.61 113.1l58.79 58.8h32.5v-32.6zm101.7 52.03c-1.4 19.6-11.8 39.7-27.2 55-15.3 15.4-35.4 25.8-55 27.2l3.5 17.8c24.1-2.3 46.8-14.8 64.3-32.2 17.4-17.5 29.9-40.2 32.2-64.3zm47.5 9.5c-6.4 63.8-56.4 113.7-120.2 120.2l3.5 17.7c70.6-8 126.4-63.8 134.4-134.4zM89.03 147l-16.22 16.2L85.54 176l16.26-16.3zM340 157.6c-7.4 37.9-28.2 78.8-58.7 112.3-32.2 35.5-74.9 62.6-123.6 70.6l3.5 17.7c53.1-8.9 99.1-38.4 133.5-76.1 32.5-35.9 55-79.2 63-121zm-304.21.3l-11.66 11.7 21.23 21.2 18.71-18.7zM434 176.4C422.9 231.5 393.8 285 353.7 329l16 9.2c40.7-45.7 70.5-100.7 82-158.3zm-357.2 8.4l-18.73 18.7 21.22 21.3 11.66-11.7zM18 189v28.2l.46.5 14.13-14.1zm27.3 27.3l-14.11 14.1 21.26 21.2 14.09-14.1zm-26.88 26.8l-.42.4v33.2l4.7 4.7 16.99-17zm418.38 95.4l-98.3 98.3c11.4 6.5 30.5 12.6 49.5 14.8 24.1 2.6 47.8-1.7 54.8-8.8 7.1-7 11.4-30.7 8.8-54.8-2.2-19-8.3-38.1-14.8-49.5zm-92.4 5.9l22.3 38.8 16.5-16.5zm-15.4 9.2c-44 40.2-97.5 69.3-152.6 80.4l3.5 17.7c57.6-11.5 112.6-41.3 158.3-82zM469.4 425c-1.8 12.1-6.1 22.8-13.8 30.6-7.8 7.7-18.5 12-30.6 13.8V487h62v-62z"></path></svg>',
        "link" => "http://www.it.mitindia.edu/",
        "iconFillColor" => "#FE7BE5",
        "description" => "Information Technology",
    ),
    array(
        "name" => "Dr. P. Jayashree",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M384 96V320H64L64 96H384zM64 32C28.7 32 0 60.7 0 96V320c0 35.3 28.7 64 64 64H181.3l-10.7 32H96c-17.7 0-32 14.3-32 32s14.3 32 32 32H352c17.7 0 32-14.3 32-32s-14.3-32-32-32H277.3l-10.7-32H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm464 0c-26.5 0-48 21.5-48 48V432c0 26.5 21.5 48 48 48h64c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48H528zm16 64h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16s7.2-16 16-16zm-16 80c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H544c-8.8 0-16-7.2-16-16zm32 160a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path></svg>',
        "link" => "http://www.ct.mitindia.edu/dct/#/home",
        "iconFillColor" => "#0096FF",
        "description" => "Computer Technology",
    ),
    array(
        "name" => "Dr. V. Ponnusamy",
        "icon" => '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M256 21.17c-2.8 0-5.6 1.38-8.1 4.71-2.6 3.32-4.5 8.47-4.5 14.34 0 5.87 1.9 11.02 4.5 14.34 2.5 3.33 5.3 4.71 8.1 4.71s5.6-1.38 8.1-4.71c2.6-3.32 4.5-8.47 4.5-14.34 0-5.87-1.9-11.02-4.5-14.34-2.5-3.33-5.3-4.71-8.1-4.71zm-80 23.25v16.1l58 28v45.98l-9.4 75.6h-23c-4.8 4.1-10.9 6.7-17.6 6.7-7 0-13.4-2.9-18.4-7.3L104 194.1v16.1l58 18v46l-9.1 72.4h-23c-4.9 4.3-11.1 7-17.9 7-7 0-13.3-2.9-18.2-7.3L32 338.6v16.2l58 10v46l-10 80h16l12-70h8l12 70h16l-10-80v-46l50-1.7 50 1.7v46l-10 80h16l12-70h8l12 70h16l-10-80v-46l50-1.7 50 1.7v46l-10 80h16l12-70h8l12 70h16l-10-80v-46l58-10v-16.2l-61.8 7.8c-5 4.4-11.3 7.2-18.2 7.2-6.8 0-13-2.7-17.9-7h-23l-9.1-72.5v-46l58-18V194l-61.5 15.4c-5 4.6-11.4 7.5-18.5 7.5-6.8 0-13-2.7-17.9-6.9h-22.7l-9.4-75.5V88.52l58-28v-16.1l-61 24.85c-5 4.81-11.7 8-19 8-7.5 0-14.2-3.31-19.3-8.27zm76 100.08h8l11.2 65.5H248v.1h-7.2zm-68 16.2c-2.8 0-5.6 1.4-8.1 4.8-2.6 3.3-4.5 8.4-4.5 14.3s1.9 11 4.5 14.3c2.5 3.4 5.3 4.7 8.1 4.7s5.6-1.3 8.1-4.7c2.6-3.3 4.5-8.4 4.5-14.3s-1.9-11-4.5-14.3c-2.5-3.4-5.3-4.8-8.1-4.8zm144 .1c-2.8 0-5.6 1.4-8.1 4.8-2.6 3.3-4.5 8.4-4.5 14.3s1.9 11 4.5 14.3c2.5 3.4 5.3 4.7 8.1 4.7s5.6-1.3 8.1-4.7c2.6-3.3 4.5-8.4 4.5-14.3s-1.9-11-4.5-14.3c-2.5-3.4-5.3-4.8-8.1-4.8zm-70.6 65.6l48.6 1.7v46l-9.1 72.6h-23.1c-4.9 4.2-11 6.9-17.8 6.9-6.8 0-12.9-2.7-17.8-6.9h-23.1l-9.1-72.5v-46zm66.6 57.7h8l10.7 62.5H320v.1h-6.7zm-144 .1h8l10.7 62.5H192v-.1h-22.7zm-68 13.2c-2.8 0-5.6 1.4-8.1 4.8-2.6 3.3-4.5 8.4-4.5 14.3s1.9 11 4.5 14.3c2.5 3.4 5.3 4.8 8.1 4.8s5.6-1.4 8.1-4.8c2.6-3.3 4.5-8.4 4.5-14.3s-1.9-11-4.5-14.3c-2.5-3.4-5.3-4.8-8.1-4.8zm288 0c-2.8 0-5.6 1.4-8.1 4.8-2.6 3.3-4.5 8.4-4.5 14.3s1.9 11 4.5 14.3c2.5 3.4 5.3 4.8 8.1 4.8s5.6-1.4 8.1-4.8c2.6-3.3 4.5-8.4 4.5-14.3s-1.9-11-4.5-14.3c-2.5-3.4-5.3-4.8-8.1-4.8zm-144 .1c-2.8 0-5.6 1.4-8.1 4.7-2.6 3.3-4.5 8.5-4.5 14.4 0 5.8 1.9 11 4.5 14.3 2.5 3.3 5.3 4.7 8.1 4.7s5.6-1.4 8.1-4.7c2.6-3.3 4.5-8.5 4.5-14.3 0-5.9-1.9-11.1-4.5-14.4-2.5-3.3-5.3-4.7-8.1-4.7z"></path></svg>',
        "link" => "http://www.dash.mitindia.edu/",
        "iconFillColor" => "#38E54D",
        "description" => "Applied Science and Humanities",
    ),
);
?>

<div id="root">
    <section class="app-container">
        <?php include '../../components/Modal/modal.php'; ?>
        <?php include '../../components/Header/header.php'; ?>
        <section class="page-container">
            <div class="dept-container">
                <div class="title">Head of the Departments</div>
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