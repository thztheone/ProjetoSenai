let dataTable;
let dataTableIsInitialized=false;

const dataTableOptions={
    pageLength:1,
    autoWidth:true,
    destroy:true,
    language:{
        search:         "Buscar",
        info:           "Mostrando _START_ a _END_ de um total de _TOTAL_  entradas",
        infoEmpty:      "Mostrando 0 a 0 de um total 0 entradas",
        infoFiltered:   "(filtrando from _MAX_ total entries)",
        lengthMenu:     "_MENU_ do total de entradas", 
        loadingRecords: "Carregando...",
        zeroRecords:    "No matching records found",
        paginate:{
            first:      "Primeiro",
            last:       "Ultimo",
            next:       "Proximo",
            previous:   "Anterior"
    }
  },
}

const initDateTable=async()=>{
    if (dataTableIsInitialized){
       dataTable.destroy(); 
    }
    await listUsers();
    dataTable=$("#datatable_users").DataTable(dataTableOptions);
    dataTableIsInitialized=true;
};

const listUsers=async()=>{
  try{
      const response=await fetch("banco.json");
      const users= await response.json();
      
      let content='';
      users.forEach((user,index)=>{
        content+= "<tr>" +
            "<td>" + (index + 1)  + "</td>" +
            "<td>" + (user.nome)  + "</td>" +
            "<td>" + (user.cpf)  + "</td>" +
            "<td>" + (user.carro)  + "</td>" +
            "<td>" + (user.placa)  + "</td>" +
        "</tr>";
      });
      tableBody_users.innerHTML=content;
  }catch(ex){
    alert(ex);
  }  
};

window.addEventListener("load", async () => {
    
});