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
            <li class="breadcrumb-item active">Add City</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>City Detail</h2>
            </div>
            <form method="post" enctype="multipart/form-data" action="addingcity.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of City</label>
                            <input class="form-control" type="text" name="title" placeholder="Name of City like Ahmedabad, etc." required>
                        </div>
                    </div>

                <div class="col-md-6">
                        <div class="form-group">
                            <label>Shortname of City</label>
                            <input class="form-control" type="text" name="sname" placeholder="Shortname of Ahmedabad like Ahm"  required>
                        </div>
                    </div>

                    <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Number of Criteria as predifined </label>
                            <select name="criteria" class="form-control" required>
                                <option  value="8">8</option>
                                <option  value="11">11</option>
                                <option  value="12">12</option>
                            </select>
                        </div>
                    </div> -->
                    
                    
                  
                    
                </div>
                    
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show City</button>
            </form>
           <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show </button> -->
      </div>
      <br>
      <div class="collapse" id="showfaculty">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> City Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <?php $datafac = mysqli_query($con,"SELECT * FROM city ")or die(mysqli_error());
                            $rowfac = mysqli_fetch_array($datafac)   ?>
                  <th>Name</th>
                  <th>Sname</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
               <?php 
      $j=1; $i=0;
$data = mysqli_query($con,"SELECT * FROM city ")or die(mysqli_error());
          while($row = mysqli_fetch_array($data)){

        ?>
                 <tr>
                 <td> <?php echo   $row['name'];?> </td>
                 <td><?php echo   $row['sname'];?> </td>
              
              
              
                
                <td> <a href="delete.php?id=<?php echo $row['id']?>&table=city&file=addcity.php" onclick="return val()"class="btn_1 gray delete">Delete</a> </td>
                        
                </tr>
        <?php $j++;} ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
      
        </div>
  </div>
<?php include 'footer.php'; ?>