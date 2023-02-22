<?php
$con = mysqli_init(); 
mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL); 
mysqli_real_connect($con, 
"tarald.mysql.database.azure.com", 
"T_mann_69", 
"Produkt_69", 
"speed", 3306, MYSQLI_CLIENT_SSL);
?>