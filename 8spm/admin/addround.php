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
            <li class="breadcrumb-item active">Add Round</li>
        </ol>
        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-user"></i>Round Detail</h2>
            </div>
            <form method="post" enctype="multipart/form-data" action="addinground.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Description of Lab</label>
                            <input class="form-control" type="text" name="title" placeholder="Title of Round like semi-final or final etc." required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Hours</label>
                            <input class="form-control" type="number" name="hours" placeholder="Total hours to complete"  required>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="form-group">
                            <label>Number of Random Questions</label>
                            <input class="form-control" type="number" name="que" placeholder="Total number of Random question to show"  required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Number of Criteria as predifined </label>
                            <select name="criteria" class="form-control" required>
                                <option  value="8">8</option>
                                <option  value="11">11</option>
                                <option  value="12">12</option>
                            </select>
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