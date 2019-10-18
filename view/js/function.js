function setJSON(object)
{
  let request = new XMLHttpRequest()
  request.onload = function()
  {
      if(this.status == 200)
        object.setData(JSON.parse(this.responseText));
      else
        console.log(this.error);
  }
    request.open('GET',object.url,true);
    request.send();
}
function initTable(columns){
    
    return $('#example1').DataTable({
        columns: columns,
        'processing': true,
        "pageLength": 25, 
    });
}

function createForm(object,form_id){
  const form = document.getElementById(form_id);
  let arr =[];
  nom==
  Object.keys(object).forEach((item)=>{
    if(item!=='id'){
      let divElement = document.createElement('div');
      divElement.classList.add('form-group');
      
      let labelElement = document.createElement('label');
      labelElement.htmlFor= item;
      labelElement.innerHTML = item==='nomEtrp'?"nom Entreprise":item;
      
      let input = document.createElement('input');
      input.id = item
      input.classList.add('form-control');
      input.name = item;
      input.value = object[item];

      divElement.append(labelElement);
      divElement.append(input);
      //form.append(divElement);
      form.insertBefore(divElement,form.lastElementChild);
      arr.push(input);
  }
  });
  object.form = arr;
  //console.log(object.form)
}
function json(){
  
}
