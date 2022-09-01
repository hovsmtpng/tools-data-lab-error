<?php

if(isset($_POST['waktu_input'])){
   $waktu_input = $_POST['waktu_input'];
  

$db = pg_connect("host=localhost port=5432 dbname=pmo user=postgres password=T4rutun9");

$scan = pg_query($db,"SELECT * FROM transaksi_invoice_detail WHERE waktu_input = '$waktu_input'");

$arraykosong = array();
while($a = pg_fetch_assoc($scan)){
    $arraykosong[] = $a;
  
}
echo json_encode($arraykosong);

}

?>