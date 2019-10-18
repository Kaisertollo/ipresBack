export class ShowData{
    constructor(){
        this.data=[];
        this.table;
        this.url="";
    }
    initTable(columns){
        this.table= $('#example1').DataTable({
            "language": {"emptyTable": "chargement..."},
            columns: columns,
            "pageLength": 25 
        });
    }
    
    getJSON(){
        let request = new XMLHttpRequest();
        let ShowData = this;
        request.onload = function(){
            if(this.status == 200)
                ShowData.setData(JSON.parse(this.responseText));
            else
                console.log(this.error);
        }
        request.open('GET',this.url,true);
        request.send();
    }
    setData(data){
        this.data = data;
        this.table.clear();
        this.table.rows.add(this.data);
        this.table.draw();
    }
}
