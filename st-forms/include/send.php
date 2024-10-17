 <style type="text/css">
 	 *{
	 font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
	 -webkit-font-smoothing: antialiased;
	 -moz-font-smoothing: antialiased;
	 font-smoothing: antialiased;
	 font-family: 'Quicksand', sans-serif;
	 font-weight:700;
	 font-size:12px;
	 color:#333;
	 padding:0px;
	 margin:0px;
	 border:0;
	 -moz-box-sizing: border-box;
	 -webkit-box-sizing: border-box; box-sizing: border-box;
 }
 
	 ::selection
	{
		color:inherit;
	}
	::-moz-selection
	{
		color:inherit;
	} 
 
  body{
	width:100%;
	margin:0 auto;
	background:#ccc;
	background: #fff url(https://www.olliehusbanddesign.co.uk/form/images/slice.jpg) repeat top left;
}
  
 h1{
	color:#ccc;
    margin-bottom: 0;
	text-align:center;
	 font: 70px Tahoma,Helvetica,Arial,Sans-Serif;
	position:relative;
	width:90%;
	margin:2% auto 0%;
 }
 
.contact{
	position:relative;
	width:60%;
	max-width:700px;
	margin:0 auto 0%;
	padding:10px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-o-border-radius: 5px;
	-ms-border-radius: 5px;
	border-radius: 5px; 
	background:rgba(0,0,0,0.05);
}

.three_col , .one_col{
	float:left;
	width:100%;
	position:relative;
}
 
.three_col input, .one_col input, .three_col select, .one_col textarea, .one_col  #file {
	position:relative;
	padding:5px 5px;
	margin:1% 2%;
	float:left;
	z-index:10;
	border:1px solid #ccc;
	background:url(https://www.olliehusbanddesign.co.uk/form/images/tick.jpg) 120% 0 no-repeat #fff;	
}

.three_col span.error, .one_col span.error{
	background: none repeat scroll 0 0 rgba(0, 0, 0, 0.6);
    border-radius: 5px 5px 5px 5px;
    color: #FFFFFF;
    display: block;
    font-size: 10px;
    height: 35px;
    left: 0;
    padding: 10px 15px;
    position: absolute;
    top: -33px;
	left:25%;
    width: auto;
	z-index:999999999;
	display:none;
}

.three_col span.error:nth-child(5){
	left:65%;
}

.three_col span.error:after, .one_col span.error:after{
	background: url("https://www.olliehusbanddesign.co.uk/form/images/popup_arrow.png") repeat scroll 0 0 transparent;
    bottom: -7px;
    content: "";
    height: 7px;
    left: 47%;
    position: absolute;
    width: 17px;
}	
.three_col select{
	width:16%;
	background:#fff;
	padding:4px;
}
.three_col input{
	width:36%;
}	

.one_col input, .one_col textarea, .one_col  #file {
	width:96%;
}

.one_col  #file {
  background: url("https://www.olliehusbanddesign.co.uk/form/images/Camera_icon.png") no-repeat scroll center 35px transparent;
    border: 1px dotted #CCCCCC;
    cursor: pointer;
    display: none;
    float: right;
    position: relative;
    text-align: center;
    width: 96%;	
}

.one_col  #file p{
padding: 95px 0 0;
line-height: 40px;
}

.one_col #image-list li{
	list-style:none;	
	border:1px solid #ccc;	
	margin: 2%;
	background:#fff;
}

.one_col #image-list li img{
	width:98%;
	height:98%;
	margin: 1% !important;
}

.one_col #submit{
	border-top-color: #4d4d4d;
   background: #4d4d4d;
   color: #d6d6d6;
   cursor:pointer;
}

.one_col #submit:hover{
	background: #333;
   color: #d6d6d6;
}	

.clear{
	clear:both;
	content:"";
	line-height:0px;
	display: block;
}

/* old browser fixed */

.no-rgba .contact,  .no-rgba .three_col span.error,  .no-rgba .one_col span.error{
	background:url(https://www.olliehusbanddesign.co.uk/form/images/norgba_bg.png) !important;
}

.no-canvas .one_col, .no-canvas .three_col, .no-canvas .one_col input, .no-canvas .three_col input{
	float:right !important;	
	margin-right:0;
	margin-bottom:0;
}

.no-canvas .three_col input{
	width:34% !important;
	margin-right:0;
	margin-bottom:0;
	float:right;
}


.no-canvas .file-upload  div{
	display:block !important;
	height:auto !important;
	width: 45% !important;
	float:right;
}

.no-canvas .one_col  #file{
	display:none !important;
}

/* animations */


@-moz-keyframes default-to-error {
	0%{
        background-position:120% -28px;
    }
	50%{
        background-position:right -28px;
    }
}

@-moz-keyframes default-to-success {
   0%{
        background-position:120% 0px;
    }
	50%{
        background-position:right 0px;
    }
}

@-moz-keyframes error-to-success {
    0%{
        background-position:right -28px;
    } 
	50%{
        background-position:120% -28px;
    } 
	60%{
        background-position:120% 0px;
    }
	100%{
        background-position:right 0px;
    }
}

@-moz-keyframes success-to-error {
    0%{
        background-position:right 0px;
    } 
	50%{
        background-position:120% 0px;
    } 
	60%{
        background-position:120% -28px;
    }
	100%{
        background-position:right -28px;
    }
}
@-webkit-keyframes default-to-error {
	0%{
        background-position:120% -28px;
    }
	50%{
        background-position:right -28px;
    }
}

@-webkit-keyframes default-to-success {
   0%{
        background-position:120% 0px;
    }
	50%{
        background-position:right 0px;
    }
}

@-webkit-keyframes error-to-success {
    0%{
        background-position:right -28px;
    } 
	50%{
        background-position:120% -28px;
    } 
	60%{
        background-position:120% 0px;
    }
	100%{
        background-position:right 0px;
    }
}

@-webkit-keyframes success-to-error {
    0%{
        background-position:right 0px;
    } 
	50%{
        background-position:120% 0px;
    } 
	60%{
        background-position:120% -28px;
    }
	100%{
        background-position:right -28px;
    }
}


input.default-to-error{
	-webkit-animation: default-to-error 0.5s;
	-moz-animation: default-to-error 0.5s;
	-animation: default-to-error 0.5s;
	  background-position:right -28px;	  
	  -webkit-box-shadow:0 0 7px rgba(243,38,36, 0.6); 
	-moz-box-shadow: 0 0 7px rgba(243,38,36, 0.6); 
	box-shadow:0 0 7px rgba(243,38,36, 0.6); 
}

input.default-to-success{
	-webkit-animation: default-to-success 0.5s;
	-moz-animation: default-to-success 0.5s;
	-animation: default-to-success 0.5s;
	  background-position:right 0px;	  	
	-webkit-box-shadow:0 0 7px rgba(161,199,54, 0.6); 
	-moz-box-shadow: 0 0 7px rgba(161,199,54, 0.6); 
	box-shadow:0 0 7px rgba(161,199,54, 0.6); 
}


@media handheld, only screen and (max-width: 580px) {
	
	.contact{
		width:90%;
	}
	
	.one_col  #file{
		width:96%;
	}
	
	.three_col input, .one_col input, .three_col select, .one_col textarea{
		width:96%;
		margin:2% 2%;
	}
	
	.three_col input, .one_col input{
		padding-right: 21px;
	}	
	
	.three_col span.error, .one_col span.error{
		display:none !Important;
	}
}


 </style>
  <div class="contact">
  <form method="post" enctype="multipart/form-data"  action="#" id="image-form">
		<div class="three_col">
			<select>
			  <option value="title">Title</option>
			  <option value="mr">MR</option>
			  <option value="mrs">MRS</option>
			  <option value="ms">MS</option>
			  <option value="dr">DR</option>
			</select>
			<input type="text" name="fname" placeholder="First Name" class="default" msg="Error for First name">
			<span class="error"></span>
			<input type="text" name="lname" placeholder="Last Name" class="default" msg="Error for Last name">
			<span class="error"></span>
		</div>
		<div class="one_col email">
			<input type="text" name="email" placeholder="Email Address" class="default" msg="Please enter a valid email">
			<span class="error"></span>
		</div>
		<div class="one_col">
			<input type="text" name="website" placeholder="Website" class="default" msg="Error for website">
			<span class="error"></span>
		</div>
		<div class="one_col">
			<textarea rows="4" cols="20" placeholder="Message"></textarea>
			<span class="error"></span>
		</div>
		<div class="one_col file-upload">
			<div id="file"><ul id="image-list"><p>Click or Drag in an image to upload</p></ul></div>
			<input type="file" class="file" name="images" id="images"/>
			<span class="error"></span>
		</div>
		<div class="one_col">
			<input id="submit" type="submit" value="Submit" />
		</div>
		<span class="clear"></span>
	</form>
</div>

<script type="text/javascript">
	
	$(document).ready(function(){
			
		file_style();
		
  $('form').bind("submit", function(e){
      e.preventDefault();
  });
  
		$(".contact input").keyup(function() {
			var value =$(this).val();
      var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
      
       if($(this).parent().hasClass("email")){
         if(!reg.test($(this).val())){
           validate_animation($(this), "error");
					 error_message($(this), "error");
         }
         else{
           validate_animation($(this), "success");
					 error_message($(this), "success");
         }
         exit;
        }
				if(value.length > 0){
					validate_animation($(this), "success");
					error_message($(this), "success");
				}
        else if(value.length == 0){
					validate_animation($(this), "blank");
					error_message($(this), "blank");
			  }
				else
				{
					validate_animation($(this), "error");
					error_message($(this), "error");
				}
		});
		
		$(".contact input").blur(function(){
			error_message($(this), "blank");
		});

}); 

function validate_animation(elem, is_valid){

	if(is_valid != "blank"){
		var elem_class = elem.attr("class").split("-");
		elem.attr("class",elem_class[0] + "-to-" + is_valid);
	}
	else{
		elem.attr("class", "default");
	}
	
}

function error_message(elem, is_valid){
	if(is_valid == "error"){
		var msg = elem.attr("msg");	
		elem.next().text(msg).show();
	}
	else{
		elem.next().hide();
	}
}

function file_style(){

	var wrapper = $('<div/>').css({height:0,width:0,'overflow':'hidden'});
	var fileInput = $(':file').wrap(wrapper);

	fileInput.change(function(){
		$this = $(this);
	})

	$('#file').click(function(){
		fileInput.click();
	}).show();
}


(function () {
	var input = document.getElementById("images"), 
		   form = document.getElementById("image-form"),
		   dropbox = document.getElementById("file"),
		formdata = false;

	function showUploadedItem (source) {
  		$("#image-list").html("<li><img src='"+source+"' />");
	}   
	
	function dragEnter(evt) {
	  evt.stopPropagation();
	  evt.preventDefault();
	}

	function dragOver(evt) {
	  evt.stopPropagation();
	  evt.preventDefault();
	   $('#file').css("background-position" , "center -140px");
	  $('#file p').text("Release to add image").css("cursor" , "alias");
	}
	
	function dragExit(evt) {
	  evt.stopPropagation();
	  evt.preventDefault();
	  $('#file').css("background-position" , "center 35px");
	  $('#file p').text("Click or Drag in an image to upload").css("cursor" , "pointer");
	}
	
	function handleFiles(files) {
		var file = files[0]; 
		if (!!file.type.match(/image.*/)) {
			if ( window.FileReader ) {
						reader = new FileReader();
						reader.onloadend = function (e) { 
							showUploadedItem(e.target.result, file.fileName);
						};
						reader.readAsDataURL(file);
					}
			}
	}
	
	function drop(evt){
		evt.stopPropagation();
		evt.preventDefault();
		 
		var files = evt.dataTransfer.files;
		var count = files.length;	
		// Only call the handler if 1 or more files was dropped.
		if (count > 0){
			handleFiles(files);
		}
	}
	
	if (window.FormData) {
  		formdata = new FormData();
	}
	
	// init event handlers
	dropbox.addEventListener("dragenter", dragEnter, false);
	dropbox.addEventListener("dragexit", dragExit, false);
	dropbox.addEventListener("dragover", dragOver, false);
	dropbox.addEventListener("drop", drop, false);
	
	
 	input.addEventListener("change", function (evt) {
 		//document.getElementById("response").innerHTML = "Uploading . . ."
 		var i = 0, len = this.files.length, img, reader, file;
	
		for ( ; i < len; i++ ) {
			file = this.files[i];
	
			if (!!file.type.match(/image.*/)) {
				if ( window.FileReader ) {
					reader = new FileReader();
					reader.onloadend = function (e) { 
						showUploadedItem(e.target.result, file.fileName);
					};
					reader.readAsDataURL(file);
				}
				if (formdata) {
					formdata.append("images[]", file);
				}
			}	
		}
	}, false);
			
}());

</script>