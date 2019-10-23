<?php include 'header.php'?>

  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-slider" data-slide-to="1"></li>
          <li data-target="#carousel-slider" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <img src="/ipres/asset/img/slide1.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <h2><span>Bienvenu dans Ipres</span></h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p id="slogan">Tout travailleur affilié à l'Institution de prévoyance retraite du Sénégal (IPRES)
                     peut demander la délivrance d'une carte prouvant son affiliation à cette institution
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <img src="/ipres/asset/img/slide2.jpg" class="img-responsive" alt="">
            <div class="carousel-caption">
              <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                <h2>IPRES Sénégal</h2>
              </div>
              <div class="col-md-10 col-md-offset-1">
                <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                  <p>IPRES, Tout le monde y Gagne</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
  </div>
  <!--/#slider-->



  <div class="content">
    <h2><span>LETTRE DU PRESIDENT</span></h2>
    <p id="lettre">Chers collaborateurs de l’institution,
        Notre système de retraite par répartition est fondé sur le principe de solidarité 
        entre les générations, et vous salariés de l’Institution, êtes les garants de sa pérennité.
        Retraités, employeurs et salariés actifs, l’IPRES appartient à tous.
        Notre mission de service public implique un comportement exemplaire en matière 
        de gouvernance et de  qualité des prestations offertes à nos concitoyens
        La communication représente pour notre Institution, une priorité 
        <a id="lire-suite" href="http://www.ipres.sn/institut/index.php?option=com_content&view=article&id=7:lorum-ipsum8&catid=1:latest-news&Itemid=112">Lire la suite</a> 
    </p>
  </div>
  <hr>

  <?php include 'footer.php'?>
  <script>
    wow = new WOW({}).init();
  </script>
  </body>

</html>
