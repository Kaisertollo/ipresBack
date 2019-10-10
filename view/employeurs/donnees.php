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
  <script src="/ipres/view/asset/js/DataPage.js"></script>
<script>
	getData(document.getElementById("id").innerHTML);
</script>


</body>

</html>
