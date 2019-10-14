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
        "pageLength": 25
    });
}