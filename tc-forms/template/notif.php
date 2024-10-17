<?php if(isset($_SESSION['success_update_accs'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"UPDATED!",
                text:"Accounts has been successfully updated.",
                image:https://img.icons8.com/?size=100&id=YZHzhN7pF7Dw&format=png&color=000000",
                class_name:"clean",
                time:""
            })'
        
        <?php unset($_SESSION['success_update_accs']); } ?> 

        
           <?php if(isset($_SESSION['success_accounts'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"SUCCESS!",
                text:"Accounts has been successfully added.",
                image:"https://img.icons8.com/?size=100&id=YZHzhN7pF7Dw&format=png&color=000000",
                class_name:"clean",
                time:""
            })'
        <?php unset($_SESSION['success_accounts']); } ?>  


           <?php if(isset($_SESSION['success_logs'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"Oh Yeah!",
                text:"Login Succesfull.",
                image:App.conf.assetsPath+"/"+App.conf.imgPath+"/logo2.png",
                class_name:"clean",
                time:""
            })'
        <?php unset($_SESSION['success_logs']); } ?>  


        
        <?php if(isset($_SESSION['success_deactivated'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"SUCCESS!",
                text:"Account Deactivated.",
                image:"https://img.icons8.com/?size=100&id=gzeZVqbrQKDg&format=png&color=000000",
                class_name:"clean",
                time:""
            })'
        <?php unset($_SESSION['success_deactivated']); } ?>  


        <?php if(isset($_SESSION['success_activated'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"SUCCESS!",
                text:"Accounts has been successfully activated.",
                image:"https://img.icons8.com/?size=100&id=YZHzhN7pF7Dw&format=png&color=000000",
                class_name:"clean",
                time:""
            })'
        <?php unset($_SESSION['success_deactivated']); }?>



        <?php if(isset($_SESSION['err'])){ ?>

            onload='
            $.extend($.gritter.options,{position:"top-right"}), 
            $.gritter.add({
                title:"WARNING!",
                text:"Invalid Credentials",
                image:"https://img.icons8.com/?size=100&id=YZHzhN7pF7Dw&format=png&color=000000",
                class_name:"clean",
                time:""
            })'
            
        <?php unset($_SESSION['err']); }?>