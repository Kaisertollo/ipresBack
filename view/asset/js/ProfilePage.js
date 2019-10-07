
//fill the table with the fetched data by using the DataTable plugin
function fillTable(data)
{
  $(document).ready(function() 
  {
    $('#example1').DataTable( 
    {
      data:data,
      columns: [
                { title: "Nom Entreprise",data:"nomEtrp" },
                { title: "caisseID",data:"caisseID" },
                { title: "ipresID",data:"ipresID" },
                { title: "Profil",},
                { title: "Données",data:'id',"render":function ( data, type, row, meta ) 
                  {
                    return "<button type='button' class='btn btn-danger'><a style='color:inherit;' href='listDonnees.php?id="+data+"'>Voir Données</a></button>";
                  } 
                }
              ],
      "pageLength": 100
    });
    
});
  
}


function cleanTable()
{
  var table = $('#example1').DataTable();
  table.destroy();
}



//Fetch the companies from the server with a GET request based on 2 arguments
//the agency 
//and the profile
//once the request Load the table by calling the fillTable function
/**taskList:
 * 1-onprogress method 
 * 2-find other optimization possibility*/
function getEmployeur(agence,filtre="")
{
  var request = new XMLHttpRequest()
  let url = filtre===''?
  'http://localhost/ipres/view/index.php?view=selection&adresse='+agence
  :'http://localhost/ipres/view/index.php?view=selection&adresse='+agence+'&filtre='+filtre
  request.onload = function()
  {
    if(this.status == 200)
      fillTable(JSON.parse(this.responseText)); 
    else
      console.log(this.error);
  }
  request.open('GET',url,true);
  request.send();
}

