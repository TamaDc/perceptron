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
      
    </div><!--/.row-->    

      
    <div class="row">
      <div class="col-lg-12">
        <h2></h2>
      </div>
      
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-body tabs">
            

            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab1" data-toggle="tab">Input Peserta IKS</a></li>
              
              
            </ul>
    
            <h1 align="center">Input data siswa</h1>

            <div class="tab-content">
              <div class="tab-pane fade in active" id="tab1">
                  <table border="0" style="width: 500px"; align="center">

                          <div align="center">
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()."index.php/admin/prediksi_proses"; ?>">
                                <tr>  
                                  <th width="200">
                                  <div class="form-group">
                                    <label  for="NIP" class="col-sm-2 control-label">Nama_Pesilat</label>
                                  </th>
                                  <th width="250">
                                    <div class="col-sm-10">
                                      <input type="text" autocomplete="off" required="required" class="form-control" id="nama" name="nama"  value="">
                                    </div>
                                  </div>
                                  </th>
                                </tr>

                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="nama" class="col-sm-2 control-label">Pukulan</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="data1" required="required" name="data1"  value="">
                                      </div>
                                  </td>
                                  </tr>
                                  
                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Tendangan</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data2" required="required" name="data2"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Tangkisan</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data3" required="required" name="data3"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Hindaran</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data4" required="required" name="data4"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Jatuhan</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data5" required="required" name="data5"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Tekik_Bertarung</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data6" required="required" name="data6"  value="">
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Weijen_1</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data7" required="required" name="data7"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Weijen_2</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data8" required="required" name="data8"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Teknik_kuda_kuda</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data9" required="required" name="data9"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                  <tr>
                                   <td>  
                                      <div class="form-group">
                                       <label for="nama" class="col-sm-2 control-label">Teknik_Tongkat</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="data10" required="required" name="data10"  value="">
                                      </div>
                                    </td>
                                  </tr>

                                

                                  <tr>
                                    <td>
                                      <div class="form-group">
                                        <label for="Golongan" class="col-sm-2 control-label">Kuisoner</label>
                                      </div>
                                    </td>
                                    <td>
                                      <div class="col-sm-10">
                                       <select name="data11" id="data11" class="form-control">
                                        <option value="1">Berminat</option>>
                                        <option value="0">Tidak Berminat</option>
                                      </select>
                                      </div>
                                    </td>
                                  </tr>


                                <!--  -->

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
