<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>IPRES Bootstrap Template</title>

  <!-- Bootstrap -->
  <link href="asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/animate.css">
  <link rel="stylesheet" href="asset/css/font-awesome.min.css">
  <link href="asset/css/style.css" rel="stylesheet">

</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="navbar-brand">
                <a href="#"><h1>IPRES</h1></a>
              </div>
            </div>
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="accueil.php">Accueil</a></li>
                <li role="presentation"><a href="listEmployeurs.php">Employeurs</a></li>
                <li role="presentation"><a href="blog.html">Employée</a></li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>

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
            <img src="asset/img/slide1.jpg" class="img-responsive" alt="">
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
            <img src="asset/img/slide2.jpg" class="img-responsive" alt="">
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

  <!--start footer-->
  <footer>

    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="social-network">
              <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest fa-1x"></i></a></li>
              <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright">
              <p>&copy;IPRES Theme - All right reserved.</p>
              <div class="credits">
                Designed by <a href="#">D-D-S</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer>
  <!--end footer-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="asset/js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="asset/js/bootstrap.min.js"></script>
  <script src="asset/js/responsive-slider.js"></script>
  <script src="asset/js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>

</body>

</html>
