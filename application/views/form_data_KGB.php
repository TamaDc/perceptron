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
				<li class="active">Pegawai Negeri Sipil</li>
			</ol>
		</div><!--/.row-->
		
	<!-- 	<div class="row">
			<div class="col-lg-12">
				<h2 class="page-header">Table</h2>
			</div>
		</div><!--/.row--> 
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Data Siswa IKS PI Kera Sakti</div> 
					<div class="panel-body">

						<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							
						    <thead>
						    <tr>
						        <th data-field="ID" data-sortable="true" width="20">ID</th>
						        <th data-field="nama" data-sortable="true" width="100">Nama</th>
						        <th data-field="data1"  data-sortable="true" width="50">Data 1</th>
						        <th data-field="data2" data-sortable="true" width="50">Data 2</th>
						     	<th data-field="data3"  data-sortable="true" width="50">Data 3</th>
						        <th data-field="data4" data-sortable="true" width="50">Data 4</th>
						        <th data-field="data5"  data-sortable="true" width="50">Data 5</th>
						        <th data-field="data6" data-sortable="true" width="50">Data 6</th>
						        <th data-field="data7"  data-sortable="true" width="50">Data 7</th>
						        <th data-field="data8" data-sortable="true" width="50">Data 8</th>
						        <th data-field="data9"  data-sortable="true" width="50">Data 9</th>
						        <th data-field="data10" data-sortable="true" width="50">Data 10</th>
						        <th data-field="data11" data-sortable="true" width="50">Kuisoner</th>
						        <th data-field="target" data-sortable="true" width="50">Target</th>
						    </tr>
						    </thead>
						    <?php foreach($db_pegawai as $data){ ?>
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
						    	<td><?php echo $data['target']; ?></td>
						    	
						    	
						    </tr>
						    <?php } ?> 
						</table>
						<a class="btn btn-primary" href="<?php echo base_url()."index.php/admin/metode"; ?>" >Eksekusi Data</a>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div><!--/.main-->

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
