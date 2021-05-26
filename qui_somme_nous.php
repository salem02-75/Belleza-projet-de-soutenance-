<?php
$page = 'Belleza Qui somme_nous';
include 'parts/header.php';

?>






<div class="container">
  <div>
    <h1>
      <a href="" class="typewrite" data-period="2000" data-type='[ "bienvenu dans , a propos.", "choisisez le profil.", "De votre choix." ]'>
        <span class="wrap"></span>
      </a>
    </h1>
  </div>
  <!-- espacer le a propos de top et du bottom et le centrer -->
  <div>
    <div class="col-12 col-sm-8 col-lg-6">

      <div>
        <!-- <h3>A <span> propos</span></h3>-->
        <div class="line"></div>
      </div>
    </div>
  </div>
  <div class="row me-md-3">


    <!-- GUILLAUME PARTIE  -->

    <div class="col-12 col-sm-6 col-lg-3">
      <div>

        <div> <a href="qui_somme_nous_guillaume.php"><img src="images/face_co(5).png" class="img-thumbnail" alt=""></a>

          <div class="social-info"><a href="https://www.facebook.com/belleza.france"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/belleza42020217"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/belleza_france/">
              <i class="fab  fa-instagram "></i>
            </a></div>
        </div>

        <div class="single_advisor_details_info">
          <h6>Guillaume</h6>
          <p class="designation">FRONT &amp; END</p>
        </div>
      </div>
    </div>


    <!-- SALIMA PARTIE  -->

    <div class="col-12 col-sm-6 col-lg-3">
      <div>

        <div><a href="qui_somme_nous_salima.php"> <img src="images/face_co(4).png" class="img-thumbnail " alt=""></a>

          <div class="social-info"><a href="https://www.facebook.com/belleza.france"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/belleza42020217"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/belleza_france/">
              <i class="fab  fa-instagram "></i>
            </a></div>
        </div>

        <div class="single_advisor_details_info">
          <h6>Salima</h6>
          <p class="designation">FRONT</p>
        </div>
      </div>
    </div>



    <!-- AIDA PARTIE  -->


    <div class="col-12 col-sm-6 col-lg-3">
      <div>

        <div> <a href="qui_somme_nous_aida.php"><img src="images/face_co(3).png" class="img-thumbnail" alt=""></a>

          <div class="social-info"><a href="https://www.facebook.com/belleza.france"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/belleza42020217"><i class="fa fa-twitter"></i></a><a href="https://www.instagram.com/belleza_france/">
              <i class="fab  fa-instagram "></i>
            </a></div>
        </div>

        <div class="single_advisor_details_info">
          <h6>Aida</h6>
          <p class="designation">FRONT &amp; END </p>
        </div>
      </div>
    </div>



    <!-- BELLEZA PARTIE  -->

    <div class="col-12 col-sm-6 col-lg-3">
      <div>

        <div> <a href="qui_somme_nous_belleza.php"><img src="images/Capture d’écran (2).png" class="img-thumbnail" alt=""></a>


          <div class="single_advisor_details_info">
            <h6>Belleza</h6>
            <p class="designation">Site</p>
          </div>
        </div>
      </div>
    </div>
  </div>






  <script>
    var TxtType = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) {
        delta /= 2;
      }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
      }

      setTimeout(function() {
        that.tick();
      }, delta);
    };

    window.onload = function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
      document.body.appendChild(css);
    };
  </script>


  <?php
  include 'parts/footer.php';
  ?>