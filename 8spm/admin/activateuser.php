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
            <li class="breadcrumb-item active">Activate User </li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Activate User </h2>
            </div>
            
            <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> User Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>UID</th>
                  <th>Login Done Or Not</th>
                  <th>Operations</th>
                </tr>
              </thead>
              <tfoot>
              <tr>
                  <th>UID</th>
                  <th>Login Done Or Not</th>
                  <th>Operations</th>
                </tr>
              </tfoot>
              <tbody>
              <?php  
    
    // echo "SELECT * FROM gall_lab where lab=$deptrow1[id]";
    $data6 = mysqli_query($con,"SELECT * FROM usr where type=1")or die(mysqli_error());
                 $rownum6 = mysqli_num_rows($data6); 
                //  $rownumimg=mysqli_fetch_array($data5) ;
                 if($rownum6){
                    while( $rownumpaper=mysqli_fetch_array($data6)){ ?>
                        <?php if($rownumpaper['login_before']==2){
                            $aaa= "<td class='text-warning'>Already Login</td>";
                           }  
                           else{
                             $aaa="<td class='text-success'>Not Login</td>";
                           }
                        ?>
                <tr>
                  <td><?php echo $rownumpaper['uid'];  ?> </td>
                  <?php echo $aaa;  ?>
                  <td><a href="updstatus.php?id=<?php echo $rownumpaper['id'];  ?>" class="btn_1 gray approve"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a></td>
                </tr>
                <?php }}  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
           <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show </button> -->
      </div>
      <br>
      
        </div>
  </div>
<?php include 'footer.php'; ?>