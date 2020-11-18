<?php
  $title = "Profile";
  include_once 'header.php';
?>
<div class="headerPatient">
  <header>
    <div class="options3">
      <!--- TABLINKS -->
      <span class="tablinks dataP1" onclick="openType(event, 'dataPatient')" id="defaultOpen"></span>
      <span class="tablinks dataP2" onclick="openType(event, 'data2Patient')"></span>
      <span class="tablinks dataP3" onclick="openType(event, 'data3Patient')"></span>
      <!--- TABLINKS -->
    </div>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <div class="wrap_dateDisplay">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">Hoy, 01/Junio/2020</div>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <script>
        var swiper = new Swiper('.swiper-container', {
          slidesPerView: 1,
          spaceBetween: 20,
          centeredSlides: true,
          pagination: false,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
        });
      </script>
    </div>

    <span class="back2Patients"></span>
  </header>
</div>

<div class="wrap_admin col">
  <!--- TABCONTENT -->
  <div id="dataPatient" class="tabcontent dataPatient">
    <?php include_once 'patient2Info.php';?>
  </div>
  <div id="data2Patient" class="tabcontent data2Patient">
      <?php include_once 'patientDiet.php';?>
  </div>
  <div id="data3Patient" class="tabcontent data3Patient">
      <?php include_once 'patient2Measure.php';?>
  </div>
  <!--- TABCONTENT -->
  <script>
    document.getElementById("defaultOpen").click();
  </script>
  <div class="wrap_controls">
    <button class="center center-x">GUARDAR</button>
  </div>
</div>

<?php include_once 'footer.php';?>
