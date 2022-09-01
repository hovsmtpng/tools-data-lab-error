<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<h1>Format Tgl Yg Benar = 2020-11-22 21:59:19 </h1>
<div id="hasil"></div>

<button style="background-color:red;color:white;" onclick="myFunction()">Scan Error Lab Traking</button>

<p id="demo"></p>
<div id="update">
<input type="text" name="waktu" id="waktu">
<button onclick="perbaruhi()" style="background-color:yellow;color:black;">cari</button>




</div>
</br>

<div id="update1">
<input type="text" name="id" id="id">
<input type="text" name="waktu1" id="waktu1">
<button onclick="lagi()" style="background-color:green;color:white;">Update</button>




</div>


<script>
function myFunction() {

document.getElementById("demo").innerHTML = "Paima jo,loading..."
   
$.ajax({
type : "GET",
url :"scan.php",
success : function(result){

document.getElementById("demo").innerHTML = "";
var hasi = "";

var mie = `<p style="color:red;">${result}</p>`;
hasi += mie;



document.getElementById("hasil").innerHTML = hasi;

}





})
}

function perbaruhi(){
    var wkt = document.getElementById("waktu").value;
    $.ajax({
        type : "POST",
        url : "scann.php",
        data : {'waktu_input' : wkt},
        success : function(result){
         
           var data =  JSON.parse(result);
          
           document.getElementById("id").value = data[0]['id'];
           document.getElementById("waktu1").value = data[0]['waktu_input'];
        }

    })
}


function lagi(){
    var wkt1 = document.getElementById("waktu1").value;
    var id = document.getElementById("id").value;
    $.ajax({
        type : "POST",
        url : "lagi.php",
        data : {'waktu_input' : wkt1,
                'id' : id
        
        },
        success : function(result){
            alert(result);
        }

    })
}
</script>

</body>
</html>