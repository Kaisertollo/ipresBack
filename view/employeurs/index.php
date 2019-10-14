<?php include '../header.php'?>
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
          <option value="">Tous</option>
          <option value="actif">Actif</option>
          <option value="semi-Actif">Semi-Actif</option>
          <option value="inactif">Inactif</option>
      </select>
	</div>
    </div>
  </div>
  <br/>
  <div class="container" id="extest">
      <table class="table" id="example1">
	  </table>
  </div>


  <?php include '../footer.php'?>
  <script>
  let employeurs = new Employeurs();

  const agence = document.getElementById("agence");
  const profile = document.getElementById("profil");
  agence.addEventListener("change",()=>employeurs.setAgence(agence.value));
  profile.addEventListener("change",()=>employeurs.setProfile(profile.value));
  employeurs.setAgence("POINT E");
  
  
</script>


</body>

</html>
