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
            <li class="breadcrumb-item active">Add  User</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Add User</h2>
            </div>
            <form method="post" enctype="multipart/form-data" action="addingusrf.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Round (Select The First Round Where all User can Participate)</label>
                            <select class="form-control" name="actround">
                            <?php
                  $selrnd = mysqli_query($con, "SELECT * FROM round")or die(mysqli_error());
                  while ($single = mysqli_fetch_assoc($selrnd)) {
                      
                      ?>        
                            <option value="<?php echo $single['id'];  ?>"><?php echo $single['name'];  ?></option>
                           <?php } ?> 
                        </select>
                        </div>
                    </div>
               <div class="col-md-6">
                   <div class="form-group">
                   <label class="control-label">Choose CSV File For User</label>
                        <input type="file" name="file" id="file" accept=".csv" class="form-control">
                        <a href="format.csv" download>Download Sample Format</a>
                   </div>
               </div>
                </div>
                
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </form>
           <!-- <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show </button> -->
      </div>
      <br>
      
        </div>
  </div>
<?php include 'footer.php'; ?>