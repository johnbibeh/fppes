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
                          <th>Report ID</th>
                          <th>Report Date</th>
                           <th>Report By</th>
                          <th>Report</th>
                         
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $rep = GetAllReport(); foreach($rep as $reps){$stat=$reps['Status'];?>
                        <tr class="odd gradeX">
                          <td><?= $reps['RID']?> </td>
                          <td><?= $reps['created_date']?> </td>
                            <td><?= $reps['ReportBy']?> </td>
                          <td><?= $reps['Mess']?> </td>
                          <?php
                          if ($stat == 'Approved') {
                          echo '<td> <span class="fa fa-thumbs-up text-success fa-lg" style="padding: 5px;">&nbsp</span> </td>';
                         }
                          else{
                            echo '<td> <span class="btn-danger" style="padding: 5px;">'.$stat.'</span> </td>';
                         
                          }
                          ?>
                          
                       
                          <td class="center">
                          <a data-toggle="modal" style ="cursor: pointer;" data-target="#app<?= $reps['RID']?>" class="text-success "><span class="fa fa-thumbs-up"> </span> Approval </a> 
                        
                          </td>

                        </tr>
                        
                       
    <div id="app<?= $reps['RID']?>" tabindex="" role="dialog" class="modal fade">
                          <div class="modal-dialog" >
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
                              </div>
                              <div class="modal-body">
                  <style type="text/css">
                    
#invoice-top{border-bottom: 2px solid #00a63f;}
#invoice-mid{padding: 10px;}
#invoice-bottom{padding: 10px;}
.clearfix{padding-top: 10px;}

                  </style>  

<form method="POST">
 <div id="invoice-top">
   <!--    <div class="logo"><img src="/waze/assets/wm.png" alt="Logo" /></div> -->
     
        <h1>Report #<span class="invoiceVal invoice_num"><?= $reps['RID']?></span></h1>
        <br>
        <p>Report Date: <span id="invoice_date"><?= $reps['created_date']?></span><br>
           Update Date: <span id="gl_date"><?= $reps['updated_date']?></span>

        </p>

<br>

    </div><!--End InvoiceTop-->

 <div id="invoice-mid">   
      <div id="message">
        <h2>Hello Administrator,</h2>
        <p>This is report with report number #<span id="invoice_num"><?= $reps['RID']?></span> is created for <span id="supplier_name"><?= $reps['Brgy']?>. </span> <br> <?= $reps['Mess']?>
       <br> Waiting for your approval, Thank you. </p>
      </div>
   <br>
    <hr>
    <h4> REPORT INFORMATION </h4>
    <br>
        <div class="clearfix row">
        <div class="col-md-6" style="border-right: 1px solid green;"> 
        <img src="/waze/ct-forms/include/action/<?= $reps['Proved'] ?>" height="150" style="padding-bottom: 5px;">
        <br><small>I Attach a Image here for your Reference.</small>
        </div>

            <div class="col-right  col-md-6 padding-top">
               <span><b>Sender ID: </b></span><label id="invoice_total">&nbsp #CT-<?= $reps['ReportBy'] ?></label><br>
               <?php  $acc = GetAccountByAID($reps['ReportBy']);foreach ($acc as $accs) {}?>

                <span><b>Sender Name: </b></span><label id="invoice_total">&nbsp <?= $accs['Fname']." ".$accs['Mname']." ".$accs['Lname'] ?></label><br>
                 <span><b>Address: </b></span><label id="payment_term">&nbsp <?= $accs['Brgy'].", ".$accs['Address']?> </label><br>
                   <span><b>Email Address: </b></span><label id="invoice_type">&nbsp  <?= $accs['Email']?></label><br>
                     <span><b>Report Status: </b></span><label id="note">&nbsp <?= $reps['Status'] ?></label><br>
            </div>
        </div>       
    </div><!--End Invoice Mid-->

     <div id="invoice-bottom">   

    <hr>
    <h4> APPROVING AND ASSIGN OFFICER</h4>
    <br>
    <label>*Assign to Officer</label>
<select class="form-control">

<?php $of = GetAllOfficer(); foreach ($of as $ofs) {
  # code...
 ?>
  <option><?= $ofs['Name'] ?></option>
<?php }?>
</select>
         <br>  
             <label>*Assign Drivers</label>
<select class="form-control">

<?php $drs = GetAllDriver(); foreach ($drs as $dr) {
 $DID= $dr['DID'];

 $drac = GetAccountByAID($DID);foreach ($drac as $drinfo) {}?>

  <option><?= $drinfo['Fname']." ".$drinfo['Mname']." ".$drinfo['Lname'] ?></option>
<?php }?>
</select>
         <br>  
          <div class="col-md-6">
  <input type="submit" class="btn-danger form-control" value="Reject" name="">
  </div>
  <div class="col-md-6">
  <input type="submit" class="btn-primary form-control" value="Approved" name="">
  </div>

    </div><!--End Invoice Mid-->
</form>


                              </div>
                              </div>
                            </div>
                            <div class="modal-footer"></div>
                          </div>
                       


                      
                    <?php } ?>
                    </tbody>
                  </table>
             
