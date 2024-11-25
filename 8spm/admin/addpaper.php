<?php
include 'header.php';
include 'config.php';
?>
<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Team</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Member Detail</h2>
            </div>
            <form method="post" enctype="multipart/form-data" action="addingpaper.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description of Lab</label>
                            <textarea  class="form-control" placeholder="Add Paper" name="name" required autofocus> </textarea>
                            <small>NOTE:-Dubey, N., Thakore, M., & Patel D. (2019). A Survey on New paradigm of Display Using Virtual and Augmented Reality. Asian Journal For Convergence In Technology (AJCT). Retrieved from <a href="link"> anchor tag href=link   link.</a></small>
                        </div>
                    </div>
                    
                  
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Lab</label>
                            <input list="listEvent" name="event_id" class="form-control" placeholder="Select Category From List. If not available then please add event first then try to add images." required autocomplete="off">
        </div>
        <datalist id="listEvent">
            <?php
                  $eventsList = mysqli_query($con, "SELECT * FROM labs")or die(mysqli_error());
                  while ($single = mysqli_fetch_array($eventsList)) {
                      ?>
            <option value="<?php echo $single['id']; ?>"><?php echo $single['name'];?></option>
              <?php
                  }
                ?>
          </datalist>
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
           <button type="button" class="btn btn-success" data-toggle="collapse" data-target="#showfaculty">Show Team</button>
      </div>
      <br>
      <div class="collapse" id="showfaculty">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Faq Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>skills</th>
                  <th>description</th>
                  <th>Position</th>
                  <th>Operation</th>
                </tr>
              </thead>
              <tbody>
               <?php 
      $j=1; $i=0;
$data = mysqli_query($con,"SELECT * FROM team_asso ")or die(mysqli_error());
          while($row = mysqli_fetch_array($data)){
        ?>
                 <tr>
                 <td> <?php echo   $row['name'];?> </td>
                 <td>
                                        <img
                                            src="../images/teamasso/<?php echo   $row['image']; ?> "
                                            class="img-fluid">
                                    </td>
                <td> <?php echo $row['skills']; ?> </td>
                <td> <?php echo $row['description']; ?> </td>
                <td> <?php echo $row['position']; ?> </td>
              
                <td>
                  <a href="deleteassoc.php?id=<?php echo $row['id'];?>" onclick="return val()" class="btn_1 gray delete">Delete</a>
               </td>          
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