<?php
include 'header.php';
include '../config.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Submission </li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Submission </h2>
            </div>
            
            <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> User Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered excelDownload" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>User Id</th>
                  <th>Jury Id</th>
                  <th>Round Name</th>
                  <th>Total Marks Statement</th>
                  <th>m1</th>
                  <th>m2</th>
                  <th>m3</th>
                  <th>m4</th>
                  <th>m5</th>
                  <th>m6</th>
                  <th>m7</th>
                  <th>m8</th>
                  <th>m9</th>
                  <th>m10</th>
                  <th>m11</th>
                  <th>m12</th>
                  <th>Time And Date of Submission</th>
                 
                  
                </tr>
              </thead>
              <tfoot>
              <tr>
              <th>User Id</th>
                  <th>Jury Id</th>
                  <th>Round Name</th>
                  <th>Total Marks Statement</th>
                  <th>m1</th>
                  <th>m2</th>
                  <th>m3</th>
                  <th>m4</th>
                  <th>m5</th>
                  <th>m6</th>
                  <th>m7</th>
                  <th>m8</th>
                  <th>m9</th>
                  <th>m10</th>
                  <th>m11</th>
                  <th>m12</th>
                  <th>Time And Date of Submission</th>
                </tr>
              </tfoot>
              <tbody>
              <?php  
    
    // echo "SELECT * FROM gall_lab where lab=$deptrow1[id]";
    $data6 = mysqli_query($con,"SELECT * FROM marks")or die(mysqli_error());
                 $rownum6 = mysqli_num_rows($data6); 
                //  $rownumimg=mysqli_fetch_array($data5) ;
                 if($rownum6){
                    while( $rownumpaper=mysqli_fetch_array($data6)){ 
                        $dataroundsel= mysqli_query($con,"SELECT * FROM round where id=$rownumpaper[roundmarks]")or die(mysqli_error());
                        $rownumslernd=mysqli_fetch_array($dataroundsel);
                        // $username= mysqli_query($con,"SELECT * FROM usr where uid= '$rownumpaper[juryid]'")or die(mysqli_error());
                        // $rowusername=mysqli_fetch_array($username);
                        // $marksdoneornot= mysqli_query($con,"SELECT * FROM marks where submission_id= $rownumpaper[id]")or die(mysqli_error());
                        // $markscount=mysqli_num_rows($marksdoneornot);
                        // echo "SELECT * FROM usr where uid= '$rownumpaper[juryid]'";
                        // exit();
                        
                        ?>
                         
                       
                <tr>
                  <td><?php echo $rownumpaper['usrid'];  ?> </td>
                  <td><?php echo $rownumpaper['juryid'];  ?> </td>
                  <td><?php  echo $rownumslernd['name'];  ?> </td>
                  <td><?php echo $rownumpaper['total'];  ?> </td>
                  <td><?php echo $rownumpaper['m1'];  ?> </td>
                  <td><?php echo $rownumpaper['m2'];  ?> </td>
                  <td><?php echo $rownumpaper['m3'];  ?> </td>
                  <td><?php echo $rownumpaper['m4'];  ?> </td>
                  <td><?php echo $rownumpaper['m5'];  ?> </td>
                  <td><?php echo $rownumpaper['m6'];  ?> </td>
                  <td><?php echo $rownumpaper['m7'];  ?> </td>
                  <td><?php echo $rownumpaper['m8'];  ?> </td>
                  <td><?php echo $rownumpaper['m9'];  ?> </td>
                  <td><?php echo $rownumpaper['m10'];  ?> </td>
                  <td><?php echo $rownumpaper['m11'];  ?> </td>
                  <td><?php echo $rownumpaper['m12'];  ?> </td>
                  <td><?php echo $rownumpaper['timesubmit'];  ?> </td>
                  
                </tr>
                <?php }}  ?>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
           <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show </button> -->
      </div>
      <br>
      
        </div>
  </div>

<?php include 'footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script> 
<!-- <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script> 
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script> 
<script type="text/javascript">
$(document).ready(function() {

    $('.excelDownload').DataTable({
        dom: 'Bfrtip',
        buttons: ['excel'],
        title: 'All Submission',
        "bDestroy": true
    });
});
</script>