const YEAR = new Date().getFullYear();
function setProfil(id,profil)
{
  var request = new XMLHttpRequest();
  request.open('GET',"http://localhost/ipres/view/JSON/setProfil.php?id="+id+"&profil="+profil, true);  
  request.send();
}
function getDonnees(id)
{
  var request = new XMLHttpRequest();
  request.open('GET', 'http://localhost/ipres/view/index.php?view=donnee&id='+id, false);  
  request.send();
  return JSON.parse(request.responseText);
}

function isActif(id)
{
    let data = getDonnees(id);
    for (let index = YEAR; index > YEAR-5; index --) 
    {
      let donnee = data.find(element =>
      {
        return element.annee ==index;
      })
      if( donnee !== undefined)
      {
        if(index >YEAR - 3 && donnee.encReel >0)
          return setProfil(id,"actif");
        else if(donnee.encReel >0)
          return setProfil(id,"semi-Actif");
      }
    }
    return setProfil(id,"inactif");
    
}

function getEmployeur(agence)
{
  var request = new XMLHttpRequest();
  let data;
  request.onload = function() 
  {
    data = JSON.parse(this.responseText);
    /*data.forEach(element =>
      {
        console.log(element);
        isActif(element.id);
      }) */
    fillTable(data);
  };
  request.open('GET', 'http://localhost/ipres/view/index.php?view=selection&adresse='+agence, true);  
  request.send();
}
