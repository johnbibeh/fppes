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
                          <th>Scheduled ID</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                         
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $sched = GetAllSchedule(); foreach($sched as $scheds){?>
                        <tr class="odd gradeX">
                          <td><?= $scheds['SID']?> </td>
                          <td><?= $scheds['Start_at']?></td>
                          <td><?= $scheds['End_at']?></td>
                          <td><?= $scheds['Status']?></td>
                       
                          <td class="center">
                          <a href="" class="text-warning fa fa-eye fa-lg">&nbsp </a> 
                           <a href="" class="text-success fa fa-edit fa-lg">&nbsp </a> 
                          </td>

                        </tr>
                        
                       



                         <div id="app<?= $gets['TID']?>" tabindex="-1" role="dialog" class="modal fade">
                          <div class="modal-dialog modal-sm" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                              </div>
                              <div class="modal-body">
                                
  <article>
    <section>
      <h2>Summary of Schedule</h2>
    </section>
    <strong>Shipment Start:</strong> <?= $gets['SStart']?>
    <br>
    <strong>Shipment End:</strong> <?= $gets['SEnd']?>
    <br>
    <strong>Location:</strong> <?= $gets['Location']?>
    <br>
    <strong>Assigned Officer:</strong> <?= $gets['DriverName']?>
    <br>
    <strong>Contact:</strong> <?= $gets['Contact']?>
  <br>
  <hr><form method="POST">
    <nav class="btn-bar nav-dark">
    <a href="includes/actions/approvedsched.php?id=<?= $gets['TID']?>" class="btn btn-glass btn-success">
      <i class="fa fa-fw fa-lg fa-check"></i> Approve
    </a>
    <a href="includes/actions/reject.php?id=<?= $gets['TID']?>" class="btn btn-glass btn-danger">
      <i class="fa fa-fw fa-lg fa-times"></i> Reject
    </a>
    <a href="includes/actions/pending.php?id=<?= $gets['TID']?>" class="btn btn-glass btn-info">
      <i class="fa fa-fw fa-lg fa-code"></i> Diff
    </a>
    </form>
  </nav>
</article>

                              </div>
                              </div>
                            </div>
                            <div class="modal-footer"></div>
                          </div>
                        </div>
                      </div>

                      
                    <?php } ?>
                    </tbody>
                  </table>
                  <div id="mod-add" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
                      <div class="modal-dialog custom-width">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
                            <h3 class="modal-title">Add New Scheduled</h3>
                          </div>
                          <form method="POST" action="includes/actions/addsched.php">
                          <div class="modal-body">
                        
      <h1>Should you have any questions, please do not hesitate to contact me :</h1>
      
    <div class="contentform">
      <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


      <div class="leftcontact">
            <div class="form-group">
              <p>Schedule id<span>*</span></p>
              <span class="icon-case"><i class="fa fa-male"></i></span>
                <input type="text" name="TID" id="nom" value="<?= generateRandomString() ?>" readonly data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                <div class="validation"></div>
       </div> 

            <div class="form-group">
            <p>Shift type <span>*</span></p>
            <span class="icon-case"><i class="fa fa-user"></i></span>
        <input type="text" name="Stype" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Day <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                <input type="email" name="Day" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
                <div class="validation"></div>
      </div>  


      <div class="form-group">
      <p>Truck Type <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" name="ttype" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Location <span>*</span></p>
      <span class="icon-case"><i class="fa fa-home"></i></span>
        <input type="text" name="Location" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
      </div>




  </div>

  <div class="rightcontact">  

      <div class="form-group">
      <p>Driver Name <span>*</span></p>
      <span class="icon-case"><i class="fa fa-building-o"></i></span>
        <input type="text" name="Drivername" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
      </div>  

      <div class="form-group">
      <p>Contact <span>*</span></p>  
      <span class="icon-case"><i class="fa fa-phone"></i></span>
        <input type="text" name="contact" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Shift start <span>*</span></p>
      <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
        <input type="text" name="Sstart" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
      </div>

      <div class="form-group">
      <p>Shift end <span>*</span></p>
      <span class="icon-case"><i class="fa fa-map-marker"></i></span>
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