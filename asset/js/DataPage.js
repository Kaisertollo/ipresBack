let anomalies=[
  "<button type='button' class='btn btn-success'>Aucune anomalie</button>",
  "<button type='button' class='btn btn-danger'>versement et declaration absent</button>",
  "<button type='button' class='btn btn-primary'>declaration sans versment</button>",
  "<button type='button' class='btn btn-warning'>montant declaration et versement différent </button>",
  "<button type='button' class='btn btn-info'>versement sans declaration</button>"
]
//fill the table with the fetched data by using the DataTable plugin
function fillTable(data)
{
  $(document).ready(function() 
  {
    $('#example1').DataTable( 
    {
      data:data,
      columns: [
                { title: "Année",data:"annee" },
                { title: "Somme Declarée",data:"somDec" },
                { title: "Somme Estimée",data:"somEst" },
                { title: "encaissement Réel",data:"encReel"},
                { title: "Solde",data:"solde"},
                { title: "Effectif",data:"effectif"},
                { title: "Anomalies",data:'anomalie',"render":function ( data, type, row, meta ) 
                  {
                    return anomalies[data];
                  } 
                }
              ],
      "pageLength": 10
    });
    
});
  
}

//Fetch the Data of a company from the server with a GET request based on the company id
//once the request Load the table by calling the fillTable function
/**taskList:
 * 1-onprogress method 
 * 2-find other optimization possibility*/
function getData(id)
{
  var request = new XMLHttpRequest();
  request.onload = function()
{
  if(this.status == 200)
  {
    let data = JSON.parse(this.responseText);
    fillTable(data);
    console.log(data[0]);
  }
  else
  {
    console.log(this.status);
  }
  
}
  request.open('GET', 'http://localhost/ipres/json/donnee/showByID/'+id, true);  
  request.send();
}

