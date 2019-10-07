/*function recherche() {
	var num = document.getElementById("numeroDonnee").value;
	console.log(num);
    window.location.href = "/ipres/controller/donneeController.php?num="+num;
}*/
function rechercheEmployer() {
	var nomEtrp = document.getElementById("nomEtrp").value;
    window.location.href = "/ipres/view/indexIpres.php?view=rechEtrp&nomEtrp="+nomEtrp;
}
let btnDonne = document.getElementById('submitDonne');
if(btnDonne !== null)
{
    var sommeDec = document.getElementById('sommeDec');
    var encReel = document.getElementById('encReel');
    var champSolde = document.getElementById('soldeDonnee');
    encReel.onkeypress, encReel.onkeydown, encReel.onkeyup = function()
    {
        var solde = sommeDec.value - encReel.value;
        console.log(solde);
        champSolde.value = solde;
    }
    sommeDec.onkeypress,  sommeDec.onkeydown, sommeDec.onkeyup = function()
    {
        var solde = sommeDec.value - encReel.value;
        console.log(solde);
        champSolde.value = solde;
    }
}
function afficherActif(){
    var x = document.getElementsByClassName('anomalie');
    var inactifs = document.getElementsByName('td-inactif');
    var semiActifs = document.getElementsByName('td-semi-actif');
    var actifs = document.getElementsByName('td-actif');
    for (i of x) {i.style.display="block"}
    for(td of inactifs){
        td.parentElement.style.display = "none"; 
    }for(td of semiActifs){
        td.parentElement.style.display = "none"; 
    }
    for(td of actifs){
        td.parentElement.style.display = ""; 
    }
}
function afficherSemiActif(){
    var x = document.getElementsByClassName('anomalie');
    var inactifs = document.getElementsByName('td-inactif');
    var semiActifs = document.getElementsByName('td-semi-actif');
    var actifs = document.getElementsByName('td-actif');
    for (i of x) {i.style.display="block"}
    for(td of inactifs){
        td.parentElement.style.display = "none"; 
    }for(td of semiActifs){
        td.parentElement.style.display = ""; 
    }
    for(td of actifs){
        td.parentElement.style.display = "none"; 
    }
}
function afficherInactif(){
    var x = document.getElementsByClassName('anomalie');
    var inactifs = document.getElementsByName('td-inactif');
    var semiActifs = document.getElementsByName('td-semi-actif');
    var actifs = document.getElementsByName('td-actif');
    for (i of x) {i.style.display="none"}
    for(td of inactifs){
        td.parentElement.style.display = ""; 
    }for(td of semiActifs){
        td.parentElement.style.display = "none"; 
    }
    for(td of actifs){
        td.parentElement.style.display = "none"; 
    }
}
function afficherTout(){
    var x = document.getElementsByClassName('anomalie');
    var inactifs = document.getElementsByName('td-inactif');
    var semiActifs = document.getElementsByName('td-semi-actif');
    var actifs = document.getElementsByName('td-actif');
    for (i of x) {i.style.display="none"}
    for(td of inactifs){
        td.parentElement.style.display = ""; 
    }for(td of semiActifs){
        td.parentElement.style.display = ""; 
    }
    for(td of actifs){
        td.parentElement.style.display = ""; 
    }
}
/*var fieldset = document.getElementById("nouveauCompteF");
var btn = document.getElementsByName("nouveauCompteBtn");
for(let i=0; i<btn.length; i++){
	btn[i].onclick = function()
	{
		fieldset.removeAttribute("hidden");
		var id = btn[i].attributes[1].value;
		var btnAjout = document.getElementById("btnAjoutCompte");
		btnAjout.setAttribute('value',id);		
	}
}*/
