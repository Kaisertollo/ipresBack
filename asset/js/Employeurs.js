class Employeurs {
    
    constructor(){
        this.agence="";
        this.url="/ipres/json/employeur/show/";
        this.profile="";
        this.data=[];
        this.columns =[{ title: "Nom Entreprise",data:"nomEtrp" },
            { title: "caisseID",data:"caisseID" },
            { title: "ipresID",data:"ipresID" },
            { title: "Profil",data:"profil"},
            { title: "Données",data:'id',"render":function ( data, type, row, meta ) 
              {
                return "<button type='button' class='btn btn-danger'><a style='color:inherit;' href='/ipres/employeurs/donnees/"+data+"'>Voir Données</a></button>";
              } 
            }
        ]
        this.table = initTable(this.columns);
    }
    setAgence (agence){
        this.agence = agence;
        this.url = "/ipres/json/employeur/show/"+agence+"_"+this.profile;
        setJSON(this);
    }
    setProfile (profile){
        this.profile = profile;
        this.url = "/ipres/json/employeur/show/"+this.agence+"_"+this.profile; 
        setJSON(this);
    }
    setData(data){
        this.data = data;
        this.table.clear();
        this.table.rows.add(this.data);
        this.table.draw();
    }
}