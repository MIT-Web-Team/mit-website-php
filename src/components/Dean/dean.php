<?php
function openLink()
{
  echo 'window.open("https://annauniv.irins.org/profile/43400", "_blank");';
}
?>

<div class="deanMain">
  <div class="deanMask" style="display: flex; flex-direction: row; height: 100%; width: 100%; background-color: rgba(255, 207, 89, 0.60); justify-content: space-between; --darkreader-inline-bgcolor: rgba(199, 156, 99, 0.85);">
    <div class="deanContent">
      <div class="deanTitle">
        <span>Digital Pedagogical Approach in Teaching Learning Process </span>
        <span>Research and Innovations with Social Responsibilities</span>
      </div>
      <div class="deanQuote">
        <span>
          <blockquote class="deanQuoteContent">
            Madras Institute of Technology (MIT) is a pioneering technological institution in India, satiating the technical thirst of many young aspiring professionals through state-of-the-art facilities, excellence infrastructure, high quality Laboratories and Centres of excellence. The institute has received generous funding support from various National and International Funding agencies and its administration ultimately provides a stimulating environment conducive to studies and research.
          </blockquote>
        </span>
        <span></span>
        <span></span>
        <span>Prof. K. Ravichandran, Dean</span>
      </div>
      <div class="flex-row">
        <button class="more-button" onclick="openProfile()">Know More</button>
      </div>
    </div>
    <div class="deanImage">
      <img src='src/components/Dean/dean.png'/>
    </div>
  </div>
</div>

<script>
  function openProfile() {
      var websiteURL = 'https://vidwan.inflibnet.ac.in/profile/117989';
      window.open(websiteURL, '_blank');
  }
</script>