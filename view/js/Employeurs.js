import {ShowData} from './ShowData.js';
export class Employeurs extends ShowData{
  constructor(){
    super();
    this.agence="";
    //this.url="/ipres/json/employeur/show/";
    this.profile="";
    //this.data=[];
    this.columns =[{ title: "Nom Entreprise",data:"nomEtrp" },
    { title: "caisseID",data:"caisseID" },
    { title: "ipresID",data:"ipresID" },
    { title: "Profil",data:"profil"},
    { title: "Données",data:'id',"render":this.renderButtonData},
    { title: "Editer",data:'id',"render":this.renderEditButton}];
    super.initTable(this.columns);
  }
  setAgence (agence){
    this.agence = agence;
    super.url = "/ipres/json/employeur/show/"+this.agence+"_"+this.profile;
    //setJSON(this);
    super.getJSON();
  }
  renderButtonData ( data, type, row, meta ){
    return "<button type='button' class='btn btn-danger'>"+
    "<a style='color:inherit;' href='/ipres/employeurs/donnees/"+data+"'>"+
    "Voir Données</a>"
    +"</button>";
  }
  renderEditButton( data, type, row, meta ){
    return `<button type='button' class='btn btn-success' 
    onclick='openM(${data});'>Editer</button>`;
  }      
  setProfile (profile){
    this.profile = profile;
    super.url = "/ipres/json/employeur/show/"+this.agence+"_"+this.profile; 
    //setJSON(this);
    super.getJSON();
  }

}
window.employeurs = new Employeurs();
const agence = document.getElementById("agence");
const profile = document.getElementById("profil");
agence.addEventListener("change",()=>employeurs.setAgence(agence.value));
profile.addEventListener("change",()=>employeurs.setProfile(profile.value));
employeurs.setAgence("POINT E");