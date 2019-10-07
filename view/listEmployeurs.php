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
<!-- DataTables
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">  -->
  <!-- DataTables-->
  <link rel="stylesheet" href="asset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>

<body>
  <header>
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <div class="navbar-brand">
                <a href="index.html"><h1>IPRES</h1></a>
              </div>
            </div>
            <div class="menu">
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="accueil.php">Accueil</a></li>
                <li role="presentation"><a href="listEmployeurs.php">Employeurs</a></li>
                <li role="presentation"><a href="#">Employée</a></li>

              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="form-row">
	<div class="form-group col-md-6">
      <select  class="form-control" id="agence">
        <option value="POINT E">POINT E</option>
        <option value="DIOURBEL">DIOURBEL</option>
        <option value="KAOLACK">KAOLACK</option>
        <option value="KEDOUGOU">KEDOUGOU</option>
        <option value="KOLDA">KOLDA</option>
        <option value="LOUGA">LOUGA</option>
        <option value="MATAM">MATAM</option>
        <option value="FATICK">FATICK</option>
        <option value="MBOUR">MBOUR</option>
        <option value="PLATEAU">PLATEAU</option>
        <option value="PIKINE">PIKINE</option>
        <option value="PODOR">PODOR</option>
        <option value="SAINT LOUIS">SAINT LOUIS</option>
        <option value="RUFISQUE">RUFISQUE</option>
        <option value="RICHARD TOLL">RICHARD TOLL</option>
        <option value="TAMBA">TAMBA</option>
        <option value="THIES">THIES</option>
        <option value="ZIGUINCHOR">ZIGUINCHOR</option>
      </select>
	</div>
	<div class="form-group col-md-6">
      <select class="form-control" id="profil">
          <option value="test">Tous</option>
          <option value="actif">Actif</option>
          <option value="semi-Actif">Semi-Actif</option>
          <option value="inactif">Inactif</option>
      </select>
	</div>
    </div>
  </div>
  <br/>
  <div class="container">
      <table class="table" id="example1">
        <thead>
          <tr></tr>
      </thead>
	  </table>
  </div>
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
                <!--
                  All the links in the footer should remain intact. 
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=IPRES
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
  <!-- DataTables -->
<script src="asset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="asset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script> -->


  <script src="asset/js/responsive-slider.js"></script>
  <script src="asset/js/wow.min.js"></script>
  <script src="asset/js/ProfilePage.js"></script>
  <script>
  
  const agence = document.getElementById("agence");
  const profil = document.getElementById("profil");
  
  agence.addEventListener("change",changeAgence);
  profil.addEventListener("change",changeProfil);
  
  //Callback function for updating the table 
  //after a change event on the agence select element
  function changeAgence()
  {
    cleanTable();
    getEmployeur(agence.value,"");
    profil.selectedIndex = 0;
  }
  
  //Callback function for updating the table 
  //after a change event on the profil select element
  function changeProfil()
  {
    if(profil.value != "test")
    {
      cleanTable();
      getEmployeur(agence.value,profil.value);
    }
  }
  
  //Load the table with the Company in the POINT E Agence
  //function definiton on  ProfilePage.js
  getEmployeur("POINT E","");
  
  
</script>


</body>

</html>
