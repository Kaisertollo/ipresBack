export class EditData{
    constructor(id,url,url2,arr2,arr3){
        this.form = [];
        this.url = url;
        this.url2 = url2;
        this.id = id;
        this.notAllow = ["url","url2","notAllow","typeNumber","id","form",...arr2]
        this.typeNumber =[...arr3];
        //"/ipres/json/employeur/showById/"
    }
    setForm(id_form){
        let request = new XMLHttpRequest();
        let EditData = this;
        request.onload = function(){
            if(this.status == 200){
                let data = JSON.parse(this.responseText);
                Object.assign(EditData,data)
                EditData.createForm(id_form);
            }
      else
        console.log(this.error);
    }
    request.open('GET',this.url+this.id,true);
    request.send();
    }
    notInTheForm(item){
        return this.notAllow.includes(item)
    }
    typeIsNumber(item){
        return this.typeNumber.includes(item);
    }
    createForm(form_id){
        const form = document.getElementById(form_id);
        let arr =[];
        Object.keys(this).forEach((item)=>{
            if(!this.notInTheForm(item)){
                let divElement = document.createElement('div');
                divElement.classList.add('form-group');

                let labelElement = document.createElement('label');
                labelElement.htmlFor= item;
                labelElement.innerHTML = item==='nomEtrp'?"nom Entreprise":item;

                let input = document.createElement('input');
                input.id = item
                input.classList.add('form-control');
                input.name = item;

                if(this.typeIsNumber(item))
                    input.type="number";
                input.value = this[item];

                divElement.append(labelElement);
                divElement.append(input);
                //form.append(divElement);
                form.insertBefore(divElement,form.lastElementChild);
                this.form.push(input);
          }
          });
    }
    submitForm(){
        let request = new XMLHttpRequest();
        var fd = new FormData();
        fd.append("id",this.id);
        this.form.forEach((item)=>{
            fd.append(item.id,item.value);
        })
	    console.log(this.form);
        request.onload = function(){
            if(this.status == 200){
                alert("OK");
                console.log(this.responseText);
            }
        else
            console.log(this.error);
        }
        request.open('POST',this.url2+this.id,true);
        request.send(fd);
    }
}
