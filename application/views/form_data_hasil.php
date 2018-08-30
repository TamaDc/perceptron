<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Perceptron</title>

<link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/"; ?>datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/"; ?>bootstrap-table.css" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/"; ?>styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url()."assets/js/"; ?>lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>


	<?php $this->load->view('nav.php'); ?>
	
		
	<?php $this->load->view('sidebar.php'); ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Hasil Pelatihan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">Data Akhir Pengujian Pada Data Siswa</div> 
					<div class="panel-body">
						

						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							
						    <thead>
						    <tr>
						         <th data-field="ID" data-sortable="true" width="20">ID</th>
						        <th data-field="nama" data-sortable="true" width="100">Nama</th>
						        <th data-field="data1"  data-sortable="true" width="50">x1</th>
						        <th data-field="data2" data-sortable="true" width="50">x2</th>
						     	<th data-field="data3"  data-sortable="true" width="50">x3</th>
						        <th data-field="data4" data-sortable="true" width="50">x4</th>
						        <th data-field="data5"  data-sortable="true" width="50">x5</th>
						        <th data-field="data6" data-sortable="true" width="50">x6</th>
						        <th data-field="data7"  data-sortable="true" width="50">x7</th>
						        <th data-field="data8" data-sortable="true" width="50">x8</th>
						        <th data-field="data9"  data-sortable="true" width="50">x9</th>
						        <th data-field="data10" data-sortable="true" width="50">x10</th>
						        <th data-field="data11" data-sortable="true" width="50">Kuisoner</th>
						        <th data-field="output" data-sortable="true" width="50">Output</th>
						        <th data-field="target" data-sortable="true" width="50">Target</th>
						        <th data-field="status" data-sortable="true" width="50">Status</th>
						    </tr>
						    </thead>
						    <?php foreach($db_hasil as $data){ ?>
						    <tr>
						    	<td><?php echo $data['ID']; ?></td>
						    	<td><?php echo $data['nama']; ?></td>
						    	<td><?php echo $data['data1']; ?></td>
						    	<td><?php echo $data['data2']; ?></td>
						    	<td><?php echo $data['data3']; ?></td>
						    	<td><?php echo $data['data4']; ?></td>
						    	<td><?php echo $data['data5']; ?></td>
						    	<td><?php echo $data['data6']; ?></td>
						    	<td><?php echo $data['data7']; ?></td>
						    	<td><?php echo $data['data8']; ?></td>
						    	<td><?php echo $data['data9']; ?></td>
						    	<td><?php echo $data['data10']; ?></td>
						    	<td><?php echo $data['data11']; ?></td>
						    	<td><?php echo $data['output']; ?></td>
						    	<td><?php echo $data['target']; ?></td>
						    	<td><?php echo $data['status']; ?></td>
						    	
						    	
						    </tr>
						    <?php } ?> 
						</table>
						
						
					</div>
				</div>
			</div>
		</div><!--/.row-->	


	<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">Hasil Pelatihan Bobot</div> 
					<div class="panel-body">
						

						<table data-toggle="table" data-url="tables/data1.json"  >
							
						    <thead>
						    <tr>
						         <th data-field="w1" data-sortable="true" width="20">w1</th>
						        <th data-field="w2" data-sortable="true" width="100">w2</th>
						        <th data-field="w3"  data-sortable="true" width="50">w3</th>
						        <th data-field="w4" data-sortable="true" width="50">w4</th>
						     	<th data-field="w5"  data-sortable="true" width="50">w5</th>
						        <th data-field="w6" data-sortable="true" width="50">w6</th>
						        <th data-field="w7"  data-sortable="true" width="50">w7</th>
						        <th data-field="w8" data-sortable="true" width="50">w8</th>
						        <th data-field="w9"  data-sortable="true" width="50">w9</th>
						        <th data-field="w10" data-sortable="true" width="50">w10</th>
						        <th data-field="w11"  data-sortable="true" width="50">w11</th>
						        <th data-field="b" data-sortable="true" width="50">bias</th>
						    </tr>
						    </thead>
						    <?php foreach($db_hasil_data as $data){ ?>
				                <tr align="center">
				                  
				                  <td><?php echo $data['w1']; ?></td>
				                  <td><?php echo $data['w2']; ?></td>
				                  <td><?php echo $data['w3']; ?></td>
				                  <td><?php echo $data['w4']; ?></td>
				                  <td><?php echo $data['w5']; ?></td>
				                  <td><?php echo $data['w6']; ?></td>
				                  <td><?php echo $data['w7']; ?></td>
				                  <td><?php echo $data['w8']; ?></td>
				                  <td><?php echo $data['w9']; ?></td>
				                  <td><?php echo $data['w10']; ?></td>
				                  <td><?php echo $data['w11']; ?></td>
				                  <td><?php echo $data['b']; ?></td>
				                </tr>
				                <?php } ?> 
						</table>
						
						
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>

	<script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>chart.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>chart-data.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>easypiechart.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>easypiechart-data.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap-table.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
