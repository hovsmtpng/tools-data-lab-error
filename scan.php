<?php


$db = pg_connect("host=localhost port=5432 dbname=pmo user=postgres password=T4rutun9");


$scan = pg_query($db,"select waktu_input::date FROM transaksi_invoice_detail");
echo pg_last_error($db);

?>