<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'mrvape'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * FROM katalok ORDER BY nama ASC';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>KATALOK PRODUM MR.VAPE INDO DISTRIBURION</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 12px;
			min-width: 537px;
			text-align: left;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid   ;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			/*background-color: #508abb;*/
			/*color: #FFFFFF;*/
			/*border-color: #6ea1cc !important;*/
			text-transform: uppercase;
			text-align: center;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1 >KATALOK PRODUM MR.VAPE INDO DISTRIBURION</h1>
	<br>
	<table class="data-table">
		<!-- <caption class="title">Minggu Pertama</caption> -->
		<thead>
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<!-- <th>SKU</th> -->
				<th>Nama</th>
				<th>Deskripsi</th>
				<th>Harga WS</th>
				<th>Harga Mrsp</th>

			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 0;
		while ($row = mysqli_fetch_array($query)){
		$no++;
		?>
			<tr>
					<td><?php echo $no?></td>
					<td><?php echo "<img src='img/$row[sku].jpg' width='150' height='150'/>"?></td>
					
					<td style="text-align: left;"><p style="text-transform: uppercase;"><?php echo $row['nama']?></p></td>
					<td style="text-align: left;"><?php echo $row['des']?></td>
					<td style="text-align: center;"><?php echo $row['price_ws']?></td>
					<td style="text-align: center;"> <p style="color: red;"><?php echo $row['price_mrsp']?></p></td>
				</tr>
			
		<?php
		}
		
		?>
		</tbody>
	</table>
</body>
</html>