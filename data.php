<?php
require('koneksi.php');

$sql = "SELECT product_purchase.Name as Nama, 
        SUM(fact_purchasing.StockedQty) as Total_Barang
        FROM product_purchase join fact_purchasing";
		
$result = mysqli_query($conn,$sql);

$Total_Barang = array();

while ($row = mysqli_fetch_array($result)) {
    array_push($Total_Barang,array(
        "Nama"=>$row['Nama'],
        "Total_Barang"=>$row['Total_Barang']
    ));
}

$data = json_encode($Total_Barang);

?>