import {EditData} from './EditData.js';
var editData;
window.closeM =function (){
    document.getElementById('id01').style.display='none';
    document.getElementById('form_test').innerHTML="<button type='submit' class='btn btn-success'>Validez</button>";
  }
window.openM = function (id){
  document.getElementById('id01').style.display='block'
  editData = new EditData(id,"/ipres/json/employeur/showById/",
    "/ipres/json/employeur/edit/",[""],
    ["caisseID","ipresID"]);    
  editData.setForm("form_test");
  document.getElementById('form_test').addEventListener('submit',(e)=>{
    e.preventDefault();
    alertify.confirm("Souhaitez vous valider les modifications",
    function(){
     editData.submitForm();
     closeM();
    },
    function(){
      
    });
  })
}
    
    
