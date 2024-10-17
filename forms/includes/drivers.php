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
  text-align:left
}

form {
  border-radius: 5px;
  max-width:700px;
  width:100%;
  margin: 5% auto;
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
  width: 75%;
  height: 40px;
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
  width: 75%;
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
  padding: 40px 30px;
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
                          <th>TID</th>
                          <th>Name</th> 
                          <th>Address</th>
                          <th>Email</th>
                          <th>Age</th>
                          <th>Gender</th>
                          <th>Birthday</th>
                          <th>Status</th>
                          <th>Options</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $ofacc = GetAllDriver(); foreach ($ofacc as $ofaccs) {
                        $OFID = $ofaccs['DID'];  
                        $gof = GetAccountByAID($OFID); foreach($gof as $gofs){
                         $spc= " ";
                         $fname =  $gofs['Fname'];
                         $mname =  $gofs['Mname'];
                         $lname =  $gofs['Lname']; 
                         $name = $fname.$spc.$mname.$spc.$lname;
                         $stat = $gofs['Status'];

                        ?>
                        <tr class="odd gradeX">
                          
                          <td><?= $gofs['AID']?></td>
                          <td><?= $name ?></td>
                          <td><?= $gofs['Address']?></td>
                          <td><?= $gofs['Email']?></td>
                          <td><?= $gofs['Age']?></td>
                          <td><?= $gofs['Gender']?></td>
                          <td><?= $gofs['Bday']?></td>
                          
                          <?php
                          if ($stat == 'Active') {
                           echo '<td> <span class="btn-success" style="padding: 5px;">'.$stat.'</span> </td>';
                          }
                          else{
                            echo '<td> <span class="btn-danger" style="padding: 5px;">'.$stat.'</span> </td>';
                         
                          }
                          ?>
                          <td class="center">
                          <a href="" class="text-success fa fa-edit fa-lg">&nbsp </a> 
                          <a data-toggle="modal" data-target="#<?= $gofs['AID']?>" class="text-danger fa fa-minus-circle fa-lg">&nbsp </a> 
                          </td>

                           </tr>
                          <div id="<?= $gofs['AID']?>" tabindex="-1" role="dialog" class="modal fade">
                          <div class="modal-dialog modal-sm" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                              </div>
                              <div class="modal-body">
                                <div class="text-center">
                                  <div class="text-danger"><span class="modal-main-icon mdi mdi-minus-circle"></span></div>
                                  <h3>DEACTIVATION !</h3>
                                  <p>Are you sure you want to Deactivate <?= $name?> Officer?.<br>This action cannot be undone.</p>
                                  <div class="xs-mt-10">
                                  <form action="includes/actions/deletetruck.php" method="POST">
                                    <input type="hidden" value="<?= $gets['TID']?>" name="sid">
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

                      
                    <?php } 
                        } ?>
                    </tbody>
                  </table>
                  <div id="add-user" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
                      <div class="modal-dialog custom-width">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                            <h3 class="modal-title">Assign New Scheduled</h3>
                          </div>
                          <form method="POST" action="includes/actions/addsched.php">
                          <div class="modal-body">
                        
      <h1>Should you have any questions, please do not hesitate to contact me :</h1>
      
    <div class="contentform">
      <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


      <div class="leftcontact">
            <div class="form-group">
              <p>TID<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="TID" id="nom" value="<?= generateRandomString() ?>" readonly data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Full Name <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
        <input type="text" name="Stype" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Age <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="age" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
      </div>  


      <div class="form-group">
      <p>Address <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" name="addres" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
      </div>

  </div>

  <div class="rightcontact">  


      <div class="form-group">
      <p>Contact <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" name="con" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
      </div>


      <div class="form-group">
      <p>Birthday <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-calendar"></i></span>
        <input type="text" name="bday" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Status <span>*</span></p>
      <span class="icon-case"><i class="fa fa-female"></i></span>
        <input type="text" name="Sstart" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Activation<span>*</span></p>
      <span class="icon-case"><i class="fa fa-lock"></i></span>
        <input type="text" name="Send" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                <div class="validation"></div>
      </div>  

  </div>
  </div>

  
</body>
</html>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="bouton-contact">Save</button>
                             <button type="button" data-dismiss="modal" class="bouton-contact">Cancel</button>
                           
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>