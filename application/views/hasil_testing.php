<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <center><h1>DAFTAR KENAIKAN GAJI</h1></center>
  <hr>
  <table width="1000" align="center">  
    <tr >
      <td >
        <tr style="background:#3f8fb7;" align="center">

                    <th data-field="nama" data-sortable="true" width="50">w1</th>
                    <th data-field="data1"  data-sortable="true" width="50">x2</th>
                    <th data-field="data2" data-sortable="true" width="50">w3</th>
                  <th data-field="data3"  data-sortable="true" width="50">w4</th>
                    <th data-field="data4" data-sortable="true" width="50">xw5</th>
                    <th data-field="data5"  data-sortable="true" width="50">w6</th>
                    <th data-field="data6" data-sortable="true" width="50">w7</th>
                    <th data-field="data7"  data-sortable="true" width="50">w8</th>
                    <th data-field="data8" data-sortable="true" width="50">w9</th>
                    <th data-field="data9"  data-sortable="true" width="50">w10</th>
                    <th data-field="data10" data-sortable="true" width="50">w11</th>
                    <th data-field="data11" data-sortable="true" width="50">epoh</th>
                    <th data-field="output" data-sortable="true" width="50">TP</th>
                    <th data-field="target" data-sortable="true" width="50">TN</th>
                    <th data-field="status" data-sortable="true" width="50">FP</th>
                    <th data-field="target" data-sortable="true" width="50">FN</th>
                    <th data-field="status" data-sortable="true" width="50">hasil</th>
                                     
                                    </tr>
                                    <?php foreach($db_hasil as $data){ ?>
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
                  <td><?php echo $data['epoh']+1; ?></td>
                  <td><?php echo $data['TP']; ?></td>
                  <td><?php echo $data['TN']; ?></td>
                  <td><?php echo $data['FP']; ?></td>
                  <td><?php echo $data['FN']; ?></td>
                  
                  <td><?php echo $data['hasil']; ?></td>
                  
                  
                </tr>
                <?php } ?> 
                                    
                                  
      </td>
    </tr>
  </table>
</body>
</html>