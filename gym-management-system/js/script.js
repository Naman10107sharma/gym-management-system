function confirmDelete(){
return confirm("Are you sure you want to delete?");
}

function searchMember(){

let input=document.getElementById("search");
let filter=input.value.toLowerCase();

let table=document.getElementById("memberTable");
let tr=table.getElementsByTagName("tr");

for(let i=1;i<tr.length;i++){

let td=tr[i].getElementsByTagName("td")[1];

if(td){

let txtValue=td.textContent;

if(txtValue.toLowerCase().indexOf(filter)>-1){

tr[i].style.display="";

}else{

tr[i].style.display="none";

}

}

}

}

function searchTrainer(){

let input=document.getElementById("trainerSearch");
let filter=input.value.toLowerCase();

let table=document.getElementById("trainerTable");
let tr=table.getElementsByTagName("tr");

for(let i=1;i<tr.length;i++){

let td=tr[i].getElementsByTagName("td")[1];

if(td){

let txtValue=td.textContent;

if(txtValue.toLowerCase().indexOf(filter)>-1){

tr[i].style.display="";

}else{

tr[i].style.display="none";

}

}

}

}