<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About MIT</title>
    <link rel="stylesheet" href="/src/index.css">   
    <link rel="stylesheet" href="/src/App.css"> 
    <link rel="stylesheet" href="/src/pages/public/about.css">
    <link rel="stylesheet" href="/src/components/Header/header.css">
    <link rel="stylesheet" href="/src/components/Footer/footer.css">
    <link rel="stylesheet" href="/src/components/Modal/modal.css">
    <link rel="stylesheet" href="/src/components/TextInput/textinput.css">
</head>  

<div id="root">
  <section class="app-container">
    <?php include '../../components/Modal/modal.php'; ?>
    <?php include '../../components/Header/header.php'; ?>
    <section class="page-container">
      <div class="outer-about-container noselect">
        <div class="about-header-container">History - MIT</div>
        <div class="history-container">
          <div class="head-text-container">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path d="M12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C10.298 22 8.69525 21.5748 7.29229 20.8248L2 22L3.17629 16.7097C2.42562 15.3063 2 13.7028 2 12C2 6.47715 6.47715 2 12 2ZM13 7H11V14H17V12H13V7Z"/>
            </svg>
            <div class="head-text">History</div>
          </div>
          <div class="about-content">
            With the dawn of Independence, the need for establishing a sound
            technological basis for proper industrial advancement of the country
            was realised. Towards the fulfilment of this need, a number of
            Engineering Institutions were established by several State
            Governments. It was at this juncture that Mr.C.Rajam, with his
            characteristic pioneering spirit, patriotic fervor and unwavering
            enthusiasm came up with a munificent donation of Rs. 5 lakhs through
            the sale of his house and founded the MIT, with the blessings of the
            Sage of Kanchi, the Jagadguru Sankaracharya Swamigal. In this noble
            effort, Mr.Rajam enjoyed the inspired assistance of a few
            distinguished citizens, notably Subbaraya Aiyar, M.K. Ranganathan,
            L.Venkatakrishna Iyer, K.Srinivasan and C.R. Srinivasan and also
            generous donations from the public and industries. Thus in July 1949,
            the MIT was established as an All India Technological Institution with
            the two-fold objectives of providing
            <ul class="about-history-list">
              <li>
                Engineering education of University standard in specialised fields

              </li>
              <li>
                Facilities for research in these and allied fields, free from
                regional limitations both in regard to its staff and students.
              </li>
            </ul>
          </div>
        </div>
        <div class="life-container">
          <div class="head-text-container">
          <svg class="svg-icon" style="width: 1em; height: 1em;vertical-align: middle;fill: currentColor;overflow: hidden;" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 597.994667q108.010667 0 225.002667 46.997333t116.992 123.008l0 85.994667-684.010667 0 0-85.994667q0-76.010667 116.992-123.008t225.002667-46.997333zM512 512q-69.994667 0-120-50.005333t-50.005333-120 50.005333-121.002667 120-51.008 120 51.008 50.005333 121.002667-50.005333 120-120 50.005333z"  /></svg>
            <div class="head-text">Life of Shri. C. Rajam</div>
          </div>
          <div class="about-content">
          Shri Chinnaswami Rajam was described as a "pioneer in the Industrial Field" 
          by the late Dr.C.P.Ramaswami Iyer. It is normally a fact that an enterprising 
          person becomes an entrepreneur, leading himself to the path of being crowned 
          as an Industrial Magnate. Until the first half of his life time Shri Rajam, 
          even though youthful, dynamic, aspiring and hard-working, did not get his break.
          <br><br>
          He was born on 28th Nov. 1882, in the village of Swamimalai, near Kumbakonam. 
          He had his High School education at the Town High School, Kumbakonam. Till 1904, 
          he was staying at Kumbakonam, searching for a job. In 1904, he joined the Salem 
          Government Weaving School, and learnt the art of weaving. Then he started his own 
          handloom factory at Salem with a capital of Rs.1,000/- and manufactured dhoties, 
          towels, shirtings etc, with fly-shuttle looms. After that, Shri Rajam tried out 
          his hand in many jobs like grocery shop, canvassed orders for a tannery firm, 
          managed a leather goods show room etc.
          <br><button class="read-more" onclick="expand()">Read More</button><button class="read-less" style="display: None;" onclick="shrink()">Read Less</button>
          <br><div class="book" style="color: red;"><a href="https://drive.google.com/open?id=1SaDpUFyzUMkzsKDt2Ju-a9PSNtTZMrgE" target="_blank" rel="noopener noreferrer">A Visionary's Reach  compiled by Dr. Prema Srinivasan</a></div>
          </div>
        </div>
        <div class="unique-experiment-container">
          <div class="head-text-container">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M149.7 85.6c-1.2 0-2.5 0-3.7.1-33.9.8-75.5 10.7-127.3 33.7v243.4c60.8-28.8 106.7-37.1 144.2-33.1 13.7 1.4 26.3 4.5 37.9 8.6l-45.1-78.8c-8.6 3.5-17.9 5.5-27.7 5.5-40.21 0-73-32.8-73-73s32.79-73 73-73c40.2 0 73 32.8 73 73 0 24-11.7 45.3-29.7 58.7l57.3 100c6.2 3.2 12.1 6.7 17.9 10.2v-243c-23.2-17.7-50.2-30-86-32-3.5-.2-7.1-.3-10.8-.3zm212 0c-3.7 0-7.4.1-10.9.3-35.8 2-62.7 14.3-86 32v243c23.9-14.6 50.1-27.7 83.6-31.2 37.5-4 83.5 4.3 144.2 33.1V119.4c-51.7-23-93.3-32.9-127.2-33.7-1.3 0-2.5-.1-3.7-.1zM128 137c-30.48 0-55 24.5-55 55s24.52 55 55 55c30.5 0 55-24.5 55-55s-24.5-55-55-55zm2.3 13.9h2.8C109 169.1 98.32 193 99.73 221.1c-26.06-38.8 1.27-69.4 30.57-70.2zm13.1 196.5c-32 .3-71.8 9.8-124.7 36v42.5c60.8-28.8 106.7-37.1 144.2-33.1 18.6 2 34.9 6.9 49.8 13.3-4.7 6.1-9.3 13.3-13.9 21.7h53.3l-36-62.7c-16.6-8.3-34.3-14.6-55.1-16.8-5.6-.6-11.5-.9-17.6-.9zm220.9 0c-4.8.1-9.4.4-13.9.9-34 3.6-59.6 18-85.6 34.4v.3c-6.1-1.9-12.3-2.3-18.3-1.2l26.3 46H316c-6-8.2-11.8-15.4-17.7-21.6 15-6.5 31.4-11.4 50.1-13.4 37.5-4 83.5 4.3 144.2 33.1v-42.5c-53.1-26.3-93.1-35.9-125.2-36h-3.1z"></path></svg>
            <div class="head-text">Unique Experiment</div>
          </div>
          <div class="about-content">
            At a time when all other Engineering Institutions were offering
            conventional courses in Civil, Mechanical and Electrical Engineering
            at the Under-graduate level, it was the rare innovation and foresight
            of Mr. Rajam that impelled him in the eve of his life to launch on a
            bold experiment of introducing for the first time in our country,
            totally new areas of specialisation in Engineering, viz. Aeronautical
            Engineering, Automobile Engineering, Electronics Engineering and
            Instrumentation Technology, the entrants to these disciplines being
            Science graduates. This was a pioneering step in engineering education
            in India. How wise and foreseeing this selection was, is shown by the
            striking growth that India has made in road transport and in the
            manufacture of road vehicles of all types; in the progress of civil
            and military aviation and the manufacture of military aircraft; and in
            the enormous growth in the applications of electronics and the
            electronics manufacturing industry. Instrumentation and Control which
            form the bedrock of industry did not exist in India as a subject of
            study in 1949; even the name was still below the horizon. Now this
            branch of applied science and technology has become all important in
            every industry, small or big, light or heavy. How useful and relevant
            the trained manpower in these fields has been, is borne out by the
            fact that a significantly large number of the past students of MIT are
            now holding key positions in research and development organisations,
            manufacturing industries and educational institutions within the
            country and abroad. The broad-based curriculum at the MIT has indeed
            proved to be particularly advantageous with the ever-increasing need
            for engineers adequately equipped to handle a wide range of problems.
          </div>
        </div>
        <div class="about-efforts-container">
          <div class="head-text-container">
            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m21.857 8.485-3-5A.997.997 0 0 0 18 3h-4.586l-.707-.707a.999.999 0 0 0-1.414 0L10.586 3H6a.997.997 0 0 0-.857.485l-3 5A1.001 1.001 0 0 0 2.002 9H2v10a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9h-.002c0-.178-.046-.356-.141-.515zM20 18h-6v-4h-4v4H4v-8h2.414l.293-.293 2-2L12 4.414l4.293 4.293 1 1 .293.293H20v8z"></path><circle cx="11.895" cy="9.895" r="2.105"></circle><path d="M6 12h2v3H6zm10 0h2v3h-2z"></path></svg>
            <div class="head-text">Humble Beginnings and Herculean Efforts</div>
          </div>
          <div class="about-content">
            The Institute owes its present stature to the unstinted efforts and
            dynamic leadership of its Founders, Chairmen and Members of the
            Governing Council, Directors, Staff and Alumni and also, in no small
            measure, to the quality and character of its students during the last
            50 years.
          </div>
        </div>
      </div>
      <div>
        <div class="list-text-container">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 36 36" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="92-Arrow Right"><path d="M16 32a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm0-30a14 14 0 1 0 14 14A14 14 0 0 0 16 2z"/><path d="M13.71 24.71 12.3 23.3l7.29-7.3-7.3-7.29L13.7 7.3l8 8a1 1 0 0 1 0 1.41z"/></g></svg>
          <div class="head-text"><a href="https://www.annauniv.edu/Strategic_plan_roadmap.pdf" target="_blank" rel="noopener noreferrer">Strategic Plan with Road Map</a></div>
        </div>
      </div>
      <div>
        <div class="list-text-container">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 36 36" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="92-Arrow Right"><path d="M16 32a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm0-30a14 14 0 1 0 14 14A14 14 0 0 0 16 2z"/><path d="M13.71 24.71 12.3 23.3l7.29-7.3-7.3-7.29L13.7 7.3l8 8a1 1 0 0 1 0 1.41z"/></g></svg>
          <div class="head-text"><a href="https://www.annauniv.edu/core_values.pdf" target="_blank" rel="noopener noreferrer">Core Values</a></div>
        </div>
      </div>
      <div>
        <div class="list-text-container">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 36 36" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="92-Arrow Right"><path d="M16 32a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm0-30a14 14 0 1 0 14 14A14 14 0 0 0 16 2z"/><path d="M13.71 24.71 12.3 23.3l7.29-7.3-7.3-7.29L13.7 7.3l8 8a1 1 0 0 1 0 1.41z"/></g></svg>
          <div class="head-text"><a href="/src/assets/MIT_Brochure.pdf" target="_blank" rel="noopener noreferrer">MIT Brochure</a></div>
        </div>
      </div>
      <div>
        <div class="list-text-container">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 36 36" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="92-Arrow Right"><path d="M16 32a16 16 0 1 1 16-16 16 16 0 0 1-16 16zm0-30a14 14 0 1 0 14 14A14 14 0 0 0 16 2z"/><path d="M13.71 24.71 12.3 23.3l7.29-7.3-7.3-7.29L13.7 7.3l8 8a1 1 0 0 1 0 1.41z"/></g></svg>
          <div class="head-text"><a href="http://www.mitindia.edu/Mit_Codes_custom/Virtual_Tour/mit-Campus_tour/" target="_blank" rel="noopener noreferrer">360 MIT Campus Tour</a></div>
        </div>
      </div>
      <?php include '../../components/Footer/footer.php'; ?>
    </section>
  </section>
</div>
<script>
  var imgElement = document.querySelector('.HeaderLogo img');
  imgElement.setAttribute('src', '/src/assets/mit_logo.png');

  function expand() {
    var aboutContentDiv = document.querySelector('.life-container .about-content');

    aboutContentDiv.innerHTML = `
      Shri Chinnaswami Rajam was described as a "pioneer in the Industrial Field" 
      by the late Dr.C.P.Ramaswami Iyer. It is normally a fact that an enterprising 
      person becomes an entrepreneur, leading himself to the path of being crowned 
      as an Industrial Magnate. Until the first half of his life time Shri Rajam, 
      even though youthful, dynamic, aspiring and hard-working, did not get his break.
      <br><br>
      He was born on 28th Nov. 1882, in the village of Swamimalai, near Kumbakonam. 
      He had his High School education at the Town High School, Kumbakonam. Till 1904, 
      he was staying at Kumbakonam, searching for a job. In 1904, he joined the Salem 
      Government Weaving School, and learnt the art of weaving. Then he started his own 
      handloom factory at Salem with a capital of Rs.1,000/- and manufactured dhoties, 
      towels, shirtings etc, with fly-shuttle looms. After that, Shri Rajam tried out 
      his hand in many jobs like grocery shop, canvassed orders for a tannery firm, 
      managed a leather goods show room etc.
      <br><br>
      Then he started an Indian Company with a meager capital of Rs.1700/- which manufactured 
      Coal Tar and was very successful. The India Company Ltd., Madras, took up the agency 
      for Tata Steel in 1923, and for about ten years it was selling nearly 2,000 tons of 
      steel per month on a small commission. This enhanced his reputation very much in Madras 
      city, and he became one of the important business magnates which is similar to Indian 
      online casino sites.
      <br><br>
      He started the Kumbakonam Electric Supply Corporation Ltd. in 1932, and the Negapatam 
      Electric Supply Company Ltd. and Indian Steel Rolling Mills Ltd. in the year 1933, 
      and these companies had flourished very well. The paid-up capital of these companies 
      exceeded Rs.50 lakhs. He had been leading a princely life throughout. In 1944, when 
      his wife died, he made up his mind to minimize his comforts and sold his two bungalows, 
      and gave a donation of Rs.5 lakhs to start "THE MADRAS INSTITUTE OF TECHNOLOGY." For the 
      Rolling Mills and Electric Supply Companies, he had to get foreigners even for erection 
      work and therefore immediately made up his mind to produce practical Engineers and 
      Scientists in India, for starting industrial concerns, or for taking up posts in the 
      Defence departments and replace foreigners in due course. This has become a 'fait accompli' 
      and the Institute has flourished very well during the past years. And many of the students 
      have been absorbed in the Defence services, and in big industrial establishments.
      <br><button class="read-more" style="display: None;" onclick="expand()">Read More</button><button class="read-less" onclick="shrink()">Read Less</button>
      <br><div class="book" style="color: red;"><a href="https://drive.google.com/open?id=1SaDpUFyzUMkzsKDt2Ju-a9PSNtTZMrgE" target="_blank" rel="noopener noreferrer">A Visionary's Reach  compiled by Dr. Prema Srinivasan</a></div>
    `;
  };

  function shrink() {
    var aboutContentDiv = document.querySelector('.life-container .about-content');

    aboutContentDiv.innerHTML = `
      Shri Chinnaswami Rajam was described as a "pioneer in the Industrial Field" 
      by the late Dr.C.P.Ramaswami Iyer. It is normally a fact that an enterprising 
      person becomes an entrepreneur, leading himself to the path of being crowned 
      as an Industrial Magnate. Until the first half of his life time Shri Rajam, 
      even though youthful, dynamic, aspiring and hard-working, did not get his break.
      <br><br>
      He was born on 28th Nov. 1882, in the village of Swamimalai, near Kumbakonam. 
      He had his High School education at the Town High School, Kumbakonam. Till 1904, 
      he was staying at Kumbakonam, searching for a job. In 1904, he joined the Salem 
      Government Weaving School, and learnt the art of weaving. Then he started his own 
      handloom factory at Salem with a capital of Rs.1,000/- and manufactured dhoties, 
      towels, shirtings etc, with fly-shuttle looms. After that, Shri Rajam tried out 
      his hand in many jobs like grocery shop, canvassed orders for a tannery firm, 
      managed a leather goods show room etc.
      <br><button class="read-more" onclick="expand()">Read More</button><button class="read-less" style="display: None;" onclick="shrink()">Read Less</button>
      <br><div class="book" style="color: red;"><a href="https://drive.google.com/open?id=1SaDpUFyzUMkzsKDt2Ju-a9PSNtTZMrgE" target="_blank" rel="noopener noreferrer">A Visionary's Reach  compiled by Dr. Prema Srinivasan</a></div>
    `;
  };
</script>