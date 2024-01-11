<?php
function openLink() {
    echo 'window.open("https://annauniv.irins.org/profile/43400", "_blank");';
}
?>
<link rel="stylesheet" type="text/css" href="src\components\Dean\dean.css">
<div class="deanMain">
      <div class="deanMask" style="display: flex; flex-direction: row; height: 100%; width: 100%; background-color: rgba(82, 95, 225, 0.85); justify-content: space-between; --darkreader-inline-bgcolor: rgba(26, 37, 147, 0.85);">
        <div class="deanContent">
          <div class="deanTitle">
            <span>Limitless Learning, </span>
            <span>Limitless Oppurtunities!</span>
          </div>
          <div class="deanQuote">
            <span>
              <blockquote>
              Madras Institute of Technology (MIT) is a pioneering technological institution in India, satiating the technical thirst of many young aspiring professionals through state-of-the-art facilities, excellence infrastructure, high quality Laboratories and Centres of excellence.  The institute has received generous funding support from various National and International Funding agencies and its administration ultimately provides a stimulating environment conducive to studies and research.
              </blockquote>
            </span>
            <span>Prof. J. Prakash, Dean</span>
          </div>
          <div class="flex-row">
          <button class="more-button" onclick="<?php openLink(); ?>">Know More</button>
          </div>
        </div>
        <div class="deanImage">
          <img src='src\components\Dean\dean.png' />
        </div>
      </div>
    </div>