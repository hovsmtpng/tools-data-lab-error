<?php

if(isset($_POST['waktu_input']) || isset($_POST['id'])){
   $waktu_input = $_POST['waktu_input'];
   $id = $_POST['id'];
  

$db = pg_connect("host=localhost port=5432 dbname=pmo user=postgres password=T4rutun9");

$scan = pg_query($db,"UPDATE transaksi_invoice_detail SET waktu_input='$waktu_input' WHERE id = '$id'");



if($scan){
    echo("sukses");
}


}

?>