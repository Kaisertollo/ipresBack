class Donnees {
    
    constructor(id){
        this.id=id;
        this.url="http://localhost/ipres/json/donnee/showByID/"+this.id;
        this.data=[];
        let anomalies=[
          "<button type='button' class='btn btn-success'>Aucune anomalie</button>",
          "<button type='button' class='btn btn-danger'>versement et declaration absent</button>",
          "<button type='button' class='btn btn-primary'>declaration sans versment</button>",
          "<button type='button' class='btn btn-warning'>montant declaration et versement différent </button>",
          "<button type='button' class='btn btn-info'>versement sans declaration</button>"
        ]
        this.columns =[
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
          ]
        this.table = initTable(this.columns);
    }
    setData(data){
        this.data = data;
        this.table.clear();
        this.table.rows.add(this.data);
        this.table.draw();
    }
}