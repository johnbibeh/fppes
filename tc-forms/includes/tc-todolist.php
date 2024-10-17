<form>
    <div class="">
        <div class="row">
            <div class="col-md-12">

            <label >Student Name: </label>
            <select class="form-control" name="brgy">
            <option name="st_fullname" ></option>
                <?php $studs = GetAccountByUserType('Student');
                            foreach ($studs as $stud) {
                                $fname = $stud['Fname'];
                                $mname = $stud['Mname'];
                                $lname = $stud['Lname'];
                                $fullname = $fname .' '.$mname.' '.$lname; 
                    ?>
                            <option name="st_fullname" ><?= $fullname ?></option>
                    <?php  } 
                    ?>
                    
                </select>
            </div>
        
        </div>
    </div>
</form>



<script>




</script>