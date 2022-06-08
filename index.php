	<?php 
include('koneksi.php');
$sql = 'SELECT * FROM katalok WHERE sts = 1 ORDER BY nama ASC  ';		
$query = mysqli_query($koneksi, $sql);
// if (!$query) {
// 	die ('SQL Error: ' . mysqli_error($koneksi));
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Katalok Produk Mr Vape Indo Distribution</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div style="text-align: center; padding: 50px">
	<img src="img/mr vape logo square.png" width='650' height='650'>
	<h1 style="font-size: 100px">Katalok Produk</h1>
	<h4 style="font-size: 60px">Mr.Vape Indo Distribution</h3>
		<br><br>
	<h3 style="font-size: 30px">Sales Kontak Profile</h3>
	<br>
		<div style="text-align: left;margin-left: 39%">
			<div style="font-size: 20px; margin : 2px">Sales 1 : Vartin    (08111-622-933)</div>
			<div style="font-size: 20px; margin : 2px">Sales 2 : Rizky     (0877-8197-6548)</div>
			<div style="font-size: 20px; margin : 2px">Sales 3 : Fajar     (0857-7182-6126)</div>
			<div style="font-size: 20px; margin : 2px">Sales 4 : Joe       (0895-0350-6249)</div>
			<div style="font-size: 20px; margin : 2px">Sales 5 : Vincent   (0882-1104-8599)</div>
			<div style="font-size: 20px; margin : 2px">Sales 6 : Handika   (0851-5697-4681)</div>
			<div style="font-size: 20px; margin : 2px">Sales 7 : Aditya    (0856-0043-5113)</div>
		</div>
	</div>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">No</th>
									<th class="cell100 column2">Gambar</th>
									<!-- <th>sku</th> -->
									<th class="cell100 column3">Nama</th>
									<th class="cell100 column4">Deskripsi</th>
									<th class="cell100 column5">Harga Ws</th>
									<th class="cell100 column6">Harga Mrsp</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<?php
									$no = 0;
									while ($row = mysqli_fetch_array($query)){
									$no++;
								?>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo $no?></td>
									<td class="cell100 column2"><?php echo "<img src='img/$row[sku].jpg' width='150' height='150'/>"?></td>
									<!-- <td><?php echo $row['sku']?></td>   -->
									<td style="text-transform: uppercase;text-align: left;" class="cell100 column3"><?php echo $row['nama']?></td>
									<td class="cell100 column4"><?php echo $row['des']?></td>
									<td class="cell100 column5"><?php echo $row['price_ws']?></td>
									<td class="cell100 column6"><p style="color: red"><?php echo $row['price_mrsp']?></p></td>
								</tr>
								<?php
								}		
								?>	
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>