<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Adventure Works</title>

    <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/styleGraph.css">
    
</head>

<body id="page-top" style="margin-top:60px;">

<?php 
//data barchart
include 'data4.php';

$data4 = json_decode($data4, TRUE);

?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "sidebar.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <script src="https://code.highcharts.com/highcharts.js"></script>
			<script src="https://code.highcharts.com/modules/series-label.js"></script>
			<script src="https://code.highcharts.com/modules/exporting.js"></script>
			<script src="https://code.highcharts.com/modules/export-data.js"></script>
			<script src="https://code.highcharts.com/modules/accessibility.js"></script>

			<figure class="highcharts-figure">
				<div id="container"></div>
				<center>
				<p class="highcharts-description">
					Grafik tersebut berguna  untuk menampilkan Penjualan Barang terpopuler dari tahun 2001-2003,
					dimana dapat dilihat bahwa pada tahun 2001 terdapat 7 barang terpopuler, sedangkan pada tahun 
					2002 terdapat 4 barang terpopuler dan pada tahun 2003 terdapat 3 barang terpopuler
					</p>
					</center>
			</figure>
			
			<script type ="text/javascript">
			Highcharts.chart('container', {

    title: {
        text: 'Grafik Penjualan Barang Terpopuler dari tahun 2001-2003',
        align: 'center'
    },

    subtitle: {
        text: 'Source: Database Adventure Works',
        align: 'left'
    },

    yAxis: {
        title: {
            text: 'Total Penjualan'
        }
    },

    xAxis: {
        type:'category'
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    

    series: [{
        name: '2001',
        data: [
		<?php
		$conn = mysqli_connect("localhost","root","","awolap");
		$sql = "select nama,total from penjualan1";
		$query = mysqli_query($conn,$sql) or die (mysqli_error());
		
		while ($temp = mysqli_fetch_array($query))
		{
			$nama = $temp['nama'];
			$total = $temp['total'];
			echo "['".$nama."',".$total."],";
		}
		?>
		]
    },{
        name: '2002',
        data: [
		<?php
		$conn = mysqli_connect("localhost","root","","dwo");
		$sql = "select nama,total from penjualan2";
		$query = mysqli_query($conn,$sql) or die (mysqli_error());
		
		while ($temp = mysqli_fetch_array($query))
		{
			$nama = $temp['nama'];
			$total = $temp['total'];
			echo "['".$nama."',".$total."],";
		}
		?>
		]
    },{
        name: '2003',
        data: [
		<?php
		$conn = mysqli_connect("localhost","root","","dwo");
		$sql = "select nama,total from penjualan3";
		$query = mysqli_query($conn,$sql) or die (mysqli_error());
		
		while ($temp = mysqli_fetch_array($query))
		{
			$nama = $temp['nama'];
			$total = $temp['total'];
			echo "['".$nama."',".$total."],";
		}
		?>
		]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
			
			</script>
    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>


</body>

</html>