
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
                { title: "Somme Dec",data:"somDec" },
                { title: "SommeEst",data:"somEst" },
                { title: "encReel",data:"encReel"},
                { title: "Solde",data:"solde"},
                { title: "Effectif",data:"effectif"},
              ],
      "pageLength": 10
    });
    
});
  
}





//Fetch the companies from the server with a GET request based on 2 arguments
//the agency 
//and the profile
//once the request Load the table by calling the fillTable function
/**taskList:
 * 1-onprogress method 
 * 2-find other optimization possibility*/
function getData(id)
{
   var request = new XMLHttpRequest();
  request.onload = function()
{
	fillTable(JSON.parse(this.responseText));
}
  request.open('GET', 'http://localhost/ipres/view/index.php?view=donnee&id='+id, true);  
  request.send();
}

