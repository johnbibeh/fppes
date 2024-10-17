 



<div class="container">
  <div class="container-inner">
   

  <div class="form-group">
        <div style="width: 80%;" class="input-group">
          <input  type="text" class="form-control"  value="Administrator" readonly="" style="background-color: transparent;">
           
        </div>
        <small class="help-block text-muted">You can't add multiple email addresses </small>
      </div>
 <form method="POST" action="../forms/actions/addemail.php" enctype="multipart/form-data">
      <div style="width: 80%;"  class="form-group">
        <input type="text" class="form-control" name="subj" placeholder="Subject" required="">
        <?php $dt = date('Y-m-d h:i:s'); ?>
          <input type="hidden" class="form-control" value="<?php echo $dt;?>" name="dts" placeholder="Subject"  required="">
      </div>

      <ul style="width: 80%;"  class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#write">Write</a></li>
        <li><a data-toggle="tab" href="#preview">Inbox</a></li>
      
      </ul>

      <div class="tab-content" style="width: 82%;" >
        <div class="tab-pane active" id="write">
       
        <div class="col-md-9" style="padding-bottom: 5px;">
          <textarea name="mess" id="mess" placeholder="Write Report Here ..." class="form-control" rows="10" onload="autofocus"></textarea>
 </div>
 <div id="imgs" class="col-md-3">
   <img id="blah" class="form-group" src="/NBCCTVS/image/img.png" alt="IMAGE" width="170px" height="150px" />
   <input type="file" onchange="readURL(this);" name="fileToUpload" id="fileToUpload" class="form-control"> 
 </div>   

          <div class="col-md-12 attachment">
        
                   
                    <small>Attach images <a href="#">selecting them</a>, or pasting from the clipboard.</small>

          </div>

           <br>

          <div class="col-md-12 text-right">
        <button class="btn btn-success" name="go" type="submit">
          <i class="fa fa-send"></i> &nbsp; Send
        </button>

          </form>
      </div>
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
                  .width(230)
                  .height(230);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
</script>