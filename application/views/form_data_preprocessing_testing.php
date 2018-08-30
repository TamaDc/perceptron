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
<style type="text/css">
.form-controls {
  width: 15%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.form-controlss {
  width: 15%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}

.form-controlss{
	border: 1px solid #2974ce;
	box-shadow: none;
}


.form-controls {
	border: 1px solid #2974ce;
	box-shadow: none;
}

</style>

</head>

<body>
<?php foreach ($db_hasil_data as $datas) {
  # code...
} ?>

	<?php $this->load->view('nav.php'); ?>
	
		
	<?php $this->load->view('sidebar.php'); ?>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Testing</li>
			</ol>
		</div><!--/.row-->
	
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading" align="center">Data Siswa Setelah Proses Preprocessing</div> 
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
						        <th data-field="target" data-sortable="true" width="50">Target</th>
						    </tr>
						    </thead>
						    <?php foreach($db_prepocessing as $data){ ?>
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

						<!-- <h4>Eksekusi Data print</h4> -->
						<!-- <form class="form-horizontal" target="_blank" role="form" method="POST" action="<?php echo base_url()."index.php/admin/metode_testing"; ?>">
									<input type="text"  class="form-controlss" id="w1" name="w1" placeholder="w1" > - 
									<input type="text"  class="form-controlss" id="w2" name="w2" placeholder="w2" > -
									<input type="text"  class="form-controlss" id="w3" name="w3" placeholder="w3" > -
									<input type="text"  class="form-controlss" id="w4" name="w4" placeholder="w4" > - 
									<input type="text"  class="form-controlss" id="w5" name="w5" placeholder="w5" > -
									<input type="text"  class="form-controlss" id="w6" name="w6" placeholder="w6" > 
									<br>
									<br>
									<input type="text"  class="form-controlss" id="w7" name="w7" placeholder="w7" > - 
									<input type="text"  class="form-controlss" id="w8" name="w8" placeholder="w8" > -
									<input type="text"  class="form-controlss" id="w9" name="w9" placeholder="w9" >	-								
									<input type="text"  class="form-controlss" id="w10" name="w10" placeholder="w10" > - 
									<input type="text"  class="form-controlss" id="w11" name="w11" placeholder="w11" > -
									<input type="text"  class="form-controlss" id="b" name="b" placeholder="b" >						
									<br>
									<br>
									<input type="text" class="form-controls" id="epoh" name="epoh" placeholder="Epoh" > - 
									<input type="text"  class="form-controls" id="learning" name="learning" placeholder="Learning" > -
									<input type="text"  class="form-controls" id="ynet" name="ynet" placeholder="Y_net" >
						<input id="submit" name="btnSubmit" type="submit" value="Eksekusi Data" class="btn btn-primary">
						</form> -->
						<h4 align="center">Eksekusi Data Testing</h4>
						<form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()."index.php/admin/metode_testing_save"; ?>">
									<input type="text"  value="<?php echo $datas['w1']; ?>" class="form-controlss" id="w1" name="w1" placeholder="w1" > - 
									<input type="text" value="<?php echo $datas['w2']; ?>"  class="form-controlss" id="w2" name="w2" placeholder="w2" > -
									<input type="text" value="<?php echo $datas['w3']; ?>" class="form-controlss" id="w3" name="w3" placeholder="w3" > -
									<input type="text" value="<?php echo $datas['w4']; ?>" class="form-controlss" id="w4" name="w4" placeholder="w4" > - 
									<input type="text" value="<?php echo $datas['w5']; ?>" class="form-controlss" id="w5" name="w5" placeholder="w5" > -
									<input type="text" value="<?php echo $datas['w6']; ?>" class="form-controlss" id="w6" name="w6" placeholder="w6" > 
									<br>
									<br>
									<input type="text" value="<?php echo $datas['w7']; ?>" class="form-controlss" id="w7" name="w7" placeholder="w7" > - 
									<input type="text" value="<?php echo $datas['w8']; ?>" class="form-controlss" id="w8" name="w8" placeholder="w8" > -
									<input type="text" value="<?php echo $datas['w9']; ?>" class="form-controlss" id="w9" name="w9" placeholder="w9" >	-								
									<input type="text" value="<?php echo $datas['w10']; ?>" class="form-controlss" id="w10" name="w10" placeholder="w10" > - 
									<input type="text" value="<?php echo $datas['w11']; ?>" class="form-controlss" id="w11" name="w11" placeholder="w11" > -
									<input type="text" value="<?php echo $datas['b']; ?>" class="form-controlss" id="b" name="b" placeholder="b" >
									<br>					
									<br>
								<!-- 	<input type="text" class="form-controls" id="epoh" name="epoh" placeholder="Epoh" > - 
									<input type="text"  class="form-controls" id="learning" name="learning" placeholder="Learning" > -
									<input type="text"  class="form-controls" id="ynet" name="ynet" placeholder="Treshold" > -->
						<p align="center"><input id="submit" name="btnSubmit" type="submit" value="Eksekusi Data" class="btn btn-success"></p>

						</form>
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
