<div class="row"> 


   <form class="form-email" method="POST" action="include/action/request.php" enctype="multipart/form-data">
<div class="col-md-4 ">
<br>
<br>
<br>
<br>
 <img id="blah"  class="form-group" src="/WAZE/assets/image/q.png" alt="IMAGE" width="330px" height="330px" />
   <input type="file" onchange="readURL(this);" name="file" id="fileToUpload" class="form-control"> 
  <small class="help-block text-muted">Evidence for your Report (Optional)</small>
       
</div>

<br>
<div class="col-md-8" style="border-left: 1px solid black;">

  <div class="container-inner">
 
      <div class="form-group">
        <div class="input-group col-md-12">

          <input type="text" class="form-control" placeholder="To" value="Administrator" readonly="">
   <small class="help-block text-muted">This Report is for Administrator Approval Only.</small>
        
        </div>
     
       <div class="input-group col-md-12">

          <select class="form-control" name="brgy">
            <?php $b = GetAllBrgy(); foreach ($b as $bs){?>
                                    <option name="brgy" ><?= $bs['Brgy'] ?></option>
                      <?php }?>
          </select>
   <small class="help-block text-muted">Barangay want you to Report</small>
        
        </div>
      </div>

    
      <div class="col-md-12 " style="margin-top: -15px;" >


     <h3><span class="fa fa-pencil"> </span> WRITE REPORTS</h3>

      <hr>
        <div class="tab-pane active" id="write">
          <textarea class="form-control" rows="8" name="mess"></textarea>
          <div class="attachment">
            <small>Attach files or images by dragging & dropping,  <a href="#">selecting them</a>, or pasting from the clipboard.</small>
          </div>
        </div>  
        <hr>
         <div class="text-right">

        <button class="btn btn-success" type="submit">
          <i class="fa fa-send"></i> &nbsp; Send Request Report
        </button>
      </div>  
      </div>
     
    </form>
  </div>

 

 
</div>


</div>

<script>




  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#blah')
                  .attr('src', e.target.result)
                  .width(347)
                  .height(350);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>