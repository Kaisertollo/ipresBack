import {ShowData} from './ShowData.js';
export class Donnees extends ShowData{
  constructor(id){
    super();
    this.id=id;
    super.url="http://localhost/ipres/json/donnee/showByID/"+this.id;
    this.columns =[{ title: "Année",data:"annee" },{ title: "Somme Declarée",data:"somDec" },{ title: "Somme Estimée",data:"somEst" },
      { title: "encaissement Réel",data:"encReel"},
      { title: "Solde",data:"solde"},
      { title: "Effectif",data:"effectif"},
      { title: "Anomalies",data:'anomalie',"render":this.renderAnomalie }];
      super.initTable(this.columns);
    }
  renderAnomalie ( data, type, row, meta ){
    let anomalies=["<button type='button' class='btn btn-success'>Aucune anomalie</button>",
    "<button type='button' class='btn btn-danger'>versement et declaration absent</button>",
    "<button type='button' class='btn btn-primary'>declaration sans versment</button>",
    "<button type='button' class='btn btn-warning'>montant declaration et versement différent </button>",
    "<button type='button' class='btn btn-info'>versement sans declaration</button>"];
    return anomalies[data];
  }

}
let donnees = new Donnees(document.getElementById("id").innerHTML);
donnees.getJSON();