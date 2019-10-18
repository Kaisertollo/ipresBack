<?php include '../header.php'?>

<div class='container'>
    <form action="/html/tags/html_form_tag_action.cfm" id="form_test">

        <button type="submit" class="btn btn-success">Validez</button>
    </form>
</div>

<?php include '../footer.php'?>
<script>
    employeur = new Employeur("<?php echo $_GET['args']?>");
    employeur.setForm("form_test");
    document.getElementById('form_test').addEventListener('submit',(e)=>{
        e.preventDefault();
        employeur.submitForm();
    })
    //employeur.submitForm();
</script>
</body>

</html>

