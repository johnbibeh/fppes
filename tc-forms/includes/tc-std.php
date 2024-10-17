<style type="text/css">
body {
  margin: auto;
  background: #eaeaea;  
  font-family: 'Open Sans', sans-serif;
}

.info p {
  text-align:center;
  color: #999;
  text-transform:none;
  font-weight:600;
  font-size:15px;
  margin-top:2px
}

.info i {
  color:#F6AA93;
}
form h1 {
  font-size: 18px;
  background: #F6AA93 none repeat scroll 0% 0%;
  color: rgb(255, 255, 255);
  padding: 22px 25px;
  border-radius: 5px 5px 0px 0px;
  margin: auto;
  text-shadow: none; 
  text-align:left;
}

form {
  border-radius: 5px;
  max-width:700px;
  width:100%;
  margin: 0 auto;
  background-color: #FFFFFF;
  overflow: hidden;
}

p span {
  color: #F00;
}

p {
  margin: 0px;
  font-weight: 500;
  line-height: 2;
  color:#333;
  font-size: 15px;
}

h1 {
  text-align:center; 
  color: #666;
  text-shadow: 1px 1px 0px #FFF;
  margin:50px 0px 0px 0px
}

input {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #eee;
  margin-bottom: 15px;
  width: 92%;
  height: 42px;
  float: left;
  padding: 0px 15px;
}

a {
  text-decoration:inherit
}

textarea {
  border-radius: 0px 5px 5px 0px;
  border: 1px solid #EEE;
  margin: 0;
  width: 92%;
  height: 130px; 
  float: left;
  padding: 0px 15px;
}

.form-group {
  overflow: hidden;
  clear: both;
}

.icon-case {
  width: 35px;
  float: left;
  border-radius: 5px 0px 0px 5px;
  background:#eeeeee;
  height:42px;
  position: relative;
  text-align: center;
  line-height:40px;
}

i {
  color:#555;
}

.contentform {
  padding: 40px 30px 0 30px;
}

.bouton-contact{
  background-color: #81BDA4;
  color: #FFF;
  text-align: center;
  width: 100%;
  border:0;
  padding: 17px 25px;
  border-radius: 0px 0px 5px 5px;
  cursor: pointer;
  margin-top: 40px;
  font-size: 18px;
}

.leftcontact {
  width:49.5%; 
  float:left;
  border-right: 1px dotted #CCC;
  box-sizing: border-box;
  padding: 0px 15px 0px 0px;
}

.rightcontact {
  width:49.5%;
  float:right;
  box-sizing: border-box;
  padding: 0px 0px 0px 15px;
}

.validation {
  display:none;
  margin: 0 0 10px;
  font-weight:400;
  font-size:13px;
  color: #DE5959;
}

#sendmessage {
  border:1px solid #fff;
  display:none;
  text-align:center;
  margin:10px 0;
  font-weight:600;
  margin-bottom:30px;
  background-color: #EBF6E0;
  color: #5F9025;
  border: 1px solid #B3DC82;
  padding: 13px 40px 13px 18px;
  border-radius: 3px;
  box-shadow: 0px 1px 1px 0px rgba(0, 0, 0, 0.03);
}

#sendmessage.show,.show  {
  display:block;
}   
</style>
  <table id="table1" class="table table-striped table-hover table-fw-widget">
                      <thead>
                        <tr>
                          <!-- <th>STUDENT ID</th> -->
                          <th>BMI RESULT</th>
                          <th>FIRSTNAME</th>
                          <th>MIDDLENAME</th>
                          <th>LASTNAME</th>
                          <th>ADDRESS</th>
                          <th>BIRTHDAY</th>
                          <th>STATUS </th>
                          <th>ACTIONS</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                      
                      $studs = GetAccountByUserType('Student');
                      foreach ($studs as $stud) {
                          
                          $id = $stud['AID'];
                          $stat = $stud["Status"];
                          ?>
                        <tr class="odd gradeX">
                         
                    
                          
 
<?php

    $result = GetBMIbyId($id);
    
        foreach ($result as $res) {

        $age = $res["st_age"];
        $weight = $res["st_weight"];
        $height = $res["st_height"];
        $bmi = $res['st_bmi'];
        $bmistatus = $res["st_status"];
        

        if($bmistatus == 'Underweight'){
          $color = 'blue';
          $class = 'btn-primary';
        }elseif($bmistatus == 'Normal weight'){
          $color = 'green';
          $class = 'btn-success';
        }elseif($bmistatus == 'Overweight'){
          $color = 'yellow';
          $class = 'btn-warning';
        }else{
          $color = 'red';
          $class = 'btn-danger';
        }

?>

 <td> 




                           <button  type="button" title="<strong>BMI Information</strong>" data-container="body" data-toggle="popover" data-html="true" data-placement="bottom" 
                          data-content="
                            <strong>Age: </strong> <?= $age ?>
                            <br>
                            <strong>Weight:</strong> <?= $weight ?>
                            <br> 
                            <strong>Height:</strong> <?= $height ?>
                            <br>
                            <strong>BMI:</strong> <?= $bmi ?>
                            <br>"
                            class="<?= $class ?> ">
                            <?= $bmistatus ?>
                          </button>
                        </td>
                        <?php
 }
 ?>
                        <td><?= $stud["Fname"] ?></td>
                        <td><?= $stud["Mname"] ?></td>
                        <td><?= $stud["Lname"] ?></td>
                        <td><?= $stud["Address"] ?></td>
                        <td><?= $stud["Bday"] ?></td>
                          
                         <?php if ($stat == "Active") {
                             echo '<td> <span class="btn-success" style="padding: 5px;">' .
                                 $stat .
                                 "</span> </td>";
                         } else {
                             echo '<td> <span class="btn-danger" style="padding: 5px;">' .
                                 $stat .
                                 "</span> </td>";
                         } ?>
                          <td class="center">
                         <!--  <button data-toggle="modal" data-target="#appmo<?= $gets[
                             "TID"
                         ] ?>" type="button" class="btn btn-space btn-primary btn-sm md-trigger">Update</button>
                          -->
                          


                          <?php if($stud['Status'] == 'Active'): ?>
                          <a data-toggle="modal" data-target="#edit<?= $stud['AID'] ?>" class="text-success fa fa-edit fa-lg">&nbsp </a> 
                          <a data-toggle="modal" data-target="#delmo<?= $stud["AID"] ?>" class="text-danger fa fa-minus-square fa-lg">&nbsp </a> 
                          
                          <?php else: ?>

                            <a data-toggle="modal" data-target="#activate<?= $stud["AID"] ?>" class="text-success fa fa-plus-circle fa-lg">&nbsp </a> 

                          <?php endif; ?>
                        
                        </td>
                        </tr>
                        
                        <div id="delmo<?= $stud["AID"] ?>" tabindex="-1" role="dialog" class="modal fade">
                          <div class="modal-dialog modal-sm" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                              </div>
                              <div class="modal-body">
                                <div class="text-center">
                                  <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                  <h3>Warning!</h3>
                                  <p>Are you sure you want to deactivate this account 
                                  <div class="xs-mt-10">
                                  <form method="POST" action="includes/actions/deactstudent.php" >
                                    <input type="hidden" value="<?= $stud["AID"] ?>" name="student_id">
                                    <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-space btn-danger">Proceed</button>
                                  </form>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer"></div>
                            </div>
                          </div>
                        </div>

                        <div id="activate<?= $stud["AID"] ?>" tabindex="-1" role="dialog" class="modal fade">
                          <div class="modal-dialog modal-sm" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                              </div>
                              <div class="modal-body">
                                <div class="text-center">
                                  <div class="text-danger"><span class="modal-main-icon mdi mdi-close-circle-o"></span></div>
                                  <h3>Warning!</h3>
                                  <p>Are you sure you want to reactivate this account 
                                  <div class="xs-mt-10">
                                  <form method="POST" action="includes/actions/reactivatestudent.php" >
                                    <input type="hidden" value="<?= $stud["AID"] ?>" name="student_id">
                                    <button type="button" data-dismiss="modal" class="btn btn-space btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-space btn-success">Proceed</button>
                                  </form>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer"></div>
                            </div>
                          </div>
                        </div>

                        <div id="edit<?= $stud["AID"] ?>" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
                          <div class="modal-dialog custom-width modal-xl">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                                <h3 class="modal-title">Edit Student Information</h3>
                              </div>
                              <form method="POST" action="includes/actions/updatestudent.php">
                                <div class="modal-body">
                                    <!-- <h1 style="margin-top: -35px; background: #81BDA4; ">Please input the student information here:</h1> -->
                                  <div class="contentform">
                                  
                                    <div class="form-group">
                                            <p>Student id<span>*</span></p>
                                            <span class="icon-case"><i class="fa fa-barcode"></i></span>
                                              <input type="text" name="student_id" id="nom" value="<?= $stud['AID'] ?>" />
                                              <div class="validation"></div>
                                    </div> 

                                    <div class="form-group">
                                          <p>First name<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-user"></i></span>
                                      <input type="text" name="st_fname" id="st_fname" value="<?= $stud['Fname'] ?>"  required  />
                                              <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                          <p>Middle name<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-user"></i></span>
                                      <input type="text" name="st_mname" id="st_mname" value="<?= $stud['Mname'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                          <p>Last name<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-user"></i></span>
                                      <input type="text" name="st_lname" id="st_lname" value="<?= $stud['Lname'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                      <p>Address <span>*</span></p>  
                                    <span class="icon-case"><i class="fa fa-home"></i></span>
                                              <textarea name="st_address" id="st_address" required> <?= $stud['Address'] ?> </textarea>
                                              <div class="validation"></div>
                                    </div>  

                                    <div class="form-group">
                                          <p>Birthdate<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-calendar"></i></span>
                                      <input type="date" name="st_bdate" id="st_bdate" value="<?= $stud['Bday'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                          <p>Gender<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-male"></i></span>
                                      <input type="text" name="st_gender" id="st_gender" value="<?= $stud['Gender'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>

                                    
                                    <div class="form-group">
                                          <p>Age<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-male"></i></span>
                                      <input type="text" name="st_age" id="st_age" value="<?= $stud['Age'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                          <p>Weight (pound)<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-male"></i></span>
                                      <input type="text" name="st_weight" id="st_weight" value="<?= $stud['Weight'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>

                                    <div class="form-group">
                                          <p>Height (cm)<span>*</span></p>
                                          <span class="icon-case"><i class="fa fa-male"></i></span>
                                      <input type="text" name="st_height" id="st_height" value="<?= $stud['Height'] ?>" required/>
                                              <div class="validation"></div>
                                    </div>


                                  </div>
                                </div>
                                  <div class="modal-footer">
                                    <button type="submit" class="bouton-contact">Save</button>
                                    <button type="button" data-dismiss="modal" class="bouton-contact">Cancel</button>
                                  
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>


                         
                      </div>

                      
                    <?php
                      }
                      ?>
                    </tbody>
                  </table>

                    <div id="add-student" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
                      <div class="modal-dialog custom-width modal-xl">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                            <h3 class="modal-title">Add New Student</h3>
                          </div>
                          <form method="POST" action="includes/actions/addstudent.php">
                            <div class="modal-body">
                                <h1 style=" background: #81BDA4; ">Please input the student information here:</h1>
                              <div class="contentform">
                                <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

                                <div class="form-group">
                                        <p>Student id<span>*</span></p>
                                        <span class="icon-case"><i class="fa fa-barcode"></i></span>
                                          <input type="text" name="student_id" id="nom" value="<?= generateRandomString() ?>" readonly data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                                          <div class="validation"></div>
                                </div> 

                                <div class="form-group">
                                      <p>First name<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-user"></i></span>
                                  <input type="text" name="st_fname" id="st_fname" required/>
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Middle name<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-user"></i></span>
                                  <input type="text" name="st_mname" id="st_mname" required />
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Last name<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-user"></i></span>
                                  <input type="text" name="st_lname" id="st_lname" required />
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                  <p>Address <span>*</span></p>  
                                <span class="icon-case"><i class="fa fa-home"></i></span>
                                          <textarea name="st_address" id="st_address" required></textarea>
                                          <div class="validation"></div>
                                </div>  

                                <div class="form-group">
                                      <p>Birthdate<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-calendar"></i></span>
                                  <input type="date" name="st_bdate" id="st_bdate" required/>
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Gender<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-male"></i></span>
                                  <input type="text" name="st_gender" id="st_gender" required/>
                                          <div class="validation"></div>
                                </div>

                                
                                <div class="form-group">
                                      <p>Age<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-male"></i></span>
                                  <input type="text" name="st_age" id="st_age" required/>
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Weight (pound)<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-male"></i></span>
                                  <input type="text" name="st_weight" id="st_weight" required/>
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Height (cm)<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-male"></i></span>
                                  <input type="text" name="st_height" id="st_height" required/>
                                          <div class="validation"></div>
                                </div>


                            

                                <h3><i> Credentials Information </i></h3>

                                <hr>

                                <div class="form-group">
                                      <p>Email<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-envelope"></i></span>
                                  <input type="text" name="st_email" id="st_email" required/>
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Username<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-shield"></i></span>
                                  <input type="text" name="st_username" id="st_username" required/>
                                          <div class="validation"></div>
                                </div>

                                <div class="form-group">
                                      <p>Password<span>*</span></p>
                                      <span class="icon-case"><i class="fa fa-lock"></i></span>
                                  <input type="password" name="st_password" id="st_password" required/>
                                          <div class="validation"></div>
                                </div>
                                




                              </div>
                            </div>
                              <div class="modal-footer">
                                <button type="submit" class="bouton-contact">Save</button>
                                <button type="button" data-dismiss="modal" class="bouton-contact">Cancel</button>
                              
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>