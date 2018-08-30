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
	 
   <?php foreach ($db_pegawai as $data) {
      # code...
    } ?>  




	<?php $this->load->view('nav.php'); ?>
	
		
	<?php $this->load->view('sidebar.php'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">kuisoner / Edit</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			     <br><br>
			</div>
		</div><!--/.row-->		

			
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						

						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Input Kuisoner</a></li>
						</ul>
		        <div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
									<table border="0" style="width: 800px"; align="center">

                          <div align="center">
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()."index.php/admin/update_data_testing"; ?>">
                                <tr>  
                                  <th width="300">
                                  <div class="form-group">
                                    <label  for="NIP" class="col-sm-2 control-label">ID</label>
                                  </th>
                                  <th width="400">
                                    <div class="col-sm-10">
                                      <input type="text" autocomplete="off" required="required" class="form-control" id="ID" name="ID" value="<?php echo $data['ID'];  ?>">
                                    </div>
                                  </div>
                                  </th>
                                </tr>

                                <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Apakah_olahraga_yang_saudara_sukai?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="1" id="1" class="form-control">
                                        <option value="0">Sepak Bola</option>>
                                        <option value="1">Pencak Silat</option>
                                        <option value="0">Bola Basket</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Atlet_Favorit_?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="2" id="2" class="form-control">
                                        <option value="0">C. Ronaldo</option>>
                                        <option value="1">Bruclie</option>
                                        <option value="0">Taufik</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Olahraga_yang_sering_dilakukan_di_rumah?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="3" id="3" class="form-control">
                                        <option value="0">Bulu Tangkis</option>>
                                        <option value="0">Sepak Bola</option>
                                        <option value="1">Pencak Silat</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Olahraga_apa_yang_sering kamu_tonton_ditelevisi?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="4" id="4" class="form-control">
                                        <option value="0">Bulu Tangkis</option>>
                                        <option value="1">Pencak Silat</option>
                                        <option value="0">Sepak Bola</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Alat_olahraga_apa_yang_saudara_sukai?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="5" id="5" class="form-control">
                                        <option value="0">Bola basket</option>>
                                        <option value="0">Bola Sepak</option>
                                        <option value="1">Tongkat</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Teknik_dasar_dalam_olah_raga_Pencak_Silat?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="6" id="6" class="form-control">
                                        <option value="1">Sangat Tinggi</option>>
                                        <option value="1">Tinggi</option>
                                        <option value="0">Rendah</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Kebutuhan_Olahraga_pencak_silat_dalam_keseharian?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="7" id="7" class="form-control">
                                        <option value="1">Sangat Tinggi</option>>
                                        <option value="1">Tinggi</option>
                                        <option value="0">Rendah</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Seberapa_besar_keinginan_untuk_meningkatkan_kegiatan_pencak_silat?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="8" id="8" class="form-control">
                                        <option value="1">Sangat Tinggi</option>>
                                        <option value="1">Tinggi</option>
                                        <option value="0">Rendah</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Dukungan_Keluarga_dalam_Pencak_Silat?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="9" id="9" class="form-control">
                                        <option value="1">Sangat Tinggi</option>>
                                        <option value="1">Tinggi</option>
                                        <option value="0">Rendah</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Sarana_Dan_prasarana_dalam_olah_raga_Pencak_Silat?</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="10" id="10" class="form-control">
                                        <option value="1">Sangat Tinggi</option>>
                                        <option value="1">Tinggi</option>
                                        <option value="0">Rendah</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>


                                
                                  

                                  <tr><th colspan="2" >
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <a class="btn btn-danger" href="<?php echo base_url()."index.php/admin/pegawai/"; ?>">Cancel</a> 
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
