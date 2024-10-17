<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../st-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>


  <body >
    <div class="be-wrapper">
      <?php include '../st-forms/template/nav.php';?>
      <?php include '../st-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Register Children'; include '../st-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">SCHEDULE</div> -->
                        <div class="panel-body">
                            <?php 
                             $is_have_kids = CheckParentKids($_SESSION['b80bb7740288fda1f201890375a60c8f']);

                             if($is_have_kids){
                            ?>
                            <h3>Children Lists</h3>
                            <hr>
                            
                            <table id="table1" class="table table-striped table-hover table-fw-widget">
                                <thead>
                                    <tr>
                                    <th>NAME</th>
                                    <th>HEIGHT</th>
                                    <th>WEIGHT</th>
                                    <th>BMI RESULT </th>
                                    <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                    <?php $kids = Getkids($_SESSION['b80bb7740288fda1f201890375a60c8f']); 
                                     foreach ($kids as $kid) { $name = $kid['fname'].' '.$kid['mname'].' '.$kid['lname']; ?>
                                     <td><?= $name ?></td>
                                     <td><?= $kid['height']; ?></td>
                                     <td><?= $kid['weight']; ?></td>
                                     <td>No result</td>
                                     <td>View </td>
                                    <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                            <?php } ?>
                            <br>
                            <h3>Add New Child</h3>
                            <hr>
                            
                            <form class="kids-reg-form" action="include/action/add-kids.php" method="POST">
                                <input type="hidden" name="parent_id" value="<?php echo $_SESSION['b80bb7740288fda1f201890375a60c8f'];?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">First Name:</label>
                                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Middle Name:</label>
                                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Last Name:</label>
                                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Grade:</label>
                                            <input type="text" class="form-control" id="grade" name="grade" placeholder="Grade">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Section:</label>
                                            <input type="text" class="form-control" id="section" name="section" placeholder="Section">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Address:</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="dob">Date of Birth:</label>
                                            <input type="date" class="form-control" id="dob" name="bday" placeholder="Enter Date of Birth">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Age:</label>
                                            <input type="text" class="form-control" id="age" name="age" placeholder="Age">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Height:</label>
                                            <input type="text" class="form-control" id="height" name="height" placeholder="Height">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Weight:</label>
                                            <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Gender:</label>
                                    <select name="gender" class="form-control"  >
                                        <option></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <input type="submit" class="form-control btn-primary">
                                </div>
                                
                               
                            </form>

                        </div>
                    </div>
                </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'template/script.php';?>
    
    </body>
  </html>