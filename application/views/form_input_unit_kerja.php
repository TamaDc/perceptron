<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Perceptron</title>

<link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/"; ?>datepicker3.css" rel="stylesheet">
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
				<li class="active">Form Input</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
				<h2>Alerts</h2>
				
			</div>
		</div><!--/.row-->		

			
		<div class="row">
			<div class="col-lg-12">
				<h2>Tab Panels</h2>
			</div>
			
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						

						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Data Unit Kerja</a></li>
							
							
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
									<table border="0" style="width: 978px"; align="center">

                          <div align="center">
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()."index.php/admin/insert_unit_kerja"; ?>">
                                <tr>  
                                  <th width="150">
                                  <div class="form-group">
                                    <label  for="NIP" class="col-sm-2 control-label">Unit Kerja</label>
                                  </th>
                                  <th width="750">
                                    <div class="col-sm-10">
                                      <input type="text" autocomplete="off" required="required" class="form-control" id="nama_unit_kerja" name="nama_unit_kerja" placeholder="Ur. Perencanaan &Keu" value="">
                                    </div>
                                  </div>
                                  </th>
                                </tr>

                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="eselon" class="col-sm-2 control-label">Eselon</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <!-- <input type="text" class="form-control" id="Golongan" name="Golongan" placeholder="*IIA" value="">-->
                                      <select name="eselon" id="eselon" class="form-control">
                                      <option value="">-Level-</option>>
                                        <option value="I.a">I.a</option>
                                        <option value="II.a">II.a</option>
                                        <option value="III.a">III.a</option>
                                        <option value="IV.a">IV.a</option>
                                        <option value="V.a">V.a</option>
                                        <option value="VI.a">VI.a</option>
                                        <option value="VII.a">VII.a</option>
                                        <option value="VIII.a">VIII.a</option>
                                        <option value="IX.a">IX.a</option>
                                        <option value="X.a">X.a</option>
                                           
                                      </select>
                                    </div>
                                  </td>
                                  </tr>
                                  <tr><th colspan="2" >
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <a class="btn btn-danger" href="<?php echo base_url()."index.php/admin/ unit_kerja/"; ?>">Cancel</a> 
                                      <input id="submit" name="btnSubmit" type="submit" value="Simpan" class="btn btn-primary">
                                    </div>
                                  </div>
                                  </th>
                                  </tr>

                                  
                                </form>
                            </div>
                    </div>
                    </table>             
							</div>
						
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
			
			
			
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>chart.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>chart-data.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>easypiechart.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>easypiechart-data.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap-datepicker.js"></script>
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
