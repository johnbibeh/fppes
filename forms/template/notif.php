<?php if(isset($_SESSION['success_update_accs'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"Thank You !",
                text:"Accounts has been successfully updated.",
                image:App.conf.assets+"/"+App.conf.img+"/logo.png",
                class_name:"clean",
                time:""
            })'
        
        <?php unset($_SESSION['success_update_accs']); } ?> 

        
           <?php if(isset($_SESSION['success_accounts'])){?>
            onload='
            $.extend($.gritter.options,{position:"bottom-right"}), 
            $.gritter.add({
                title:"Oh Yeah!",
                text:"Accounts has been successfully added.",
                image:App.conf.assetsPath+"/"+App.conf.imgPath+"/logo2.png",
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