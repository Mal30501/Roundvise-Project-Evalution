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
            <li class="breadcrumb-item active">Add Questions</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Question Detail</h2>
            </div>
            <form method="post" enctype="multipart/form-data" action="addingquestion.php">
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Select Round</label>
                            <select class="form-control" name="round">
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
                            <label>Select Tools</label>
                            <select class="form-control" name="tool">
                            <?php
                  $selrnd = mysqli_query($con, "SELECT * FROM tools")or die(mysqli_error());
                  while ($single = mysqli_fetch_assoc($selrnd)) {
                      
                      ?>        
                            <option value="<?php echo $single['id'];  ?>"><?php echo $single['name'];  ?></option>
                           <?php } ?> 
                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Question 1</label>
                            <input class="form-control" type="text" name="que1" placeholder="Enter Question 1"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Question 2</label>
                            <input class="form-control" type="text" name="que2" placeholder="Enter Question 2"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Question 3</label>
                            <input class="form-control" type="text" name="que3" placeholder="Enter Question 3"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Question 4</label>
                            <input class="form-control" type="text" name="que4" placeholder="Enter Question 4"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Question 5</label>
                            <input class="form-control" type="text" name="que5" placeholder="Enter Question 5"  required>
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