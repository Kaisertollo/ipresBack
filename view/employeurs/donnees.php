<?php include '../header.php'?>
  <h1 id="title"></h1>
  <div class="container">
      <table class="table" id="example1">
        <thead>
          <tr></tr>
      </thead>
	  </table>
  </div>
	<?php echo "<div id='id' style='display:none;'>".$_GET['args']."</div>" ;?>
  <?php include '../footer.php'?>
<script>
  let donnees = new Donnees(document.getElementById("id").innerHTML);
  setJSON(donnees);
</script>


</body>

</html>
