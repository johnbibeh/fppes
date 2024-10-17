<style type="text/css">
  
  @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Roboto:900,400);
@import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);




.bg-image {
  background-position: top center;
  background-size: cover;
}
.bg-image.aspect-square:before {
  content: "";
  display: block;
  padding-top: 100%;
}

[data-droppable] * {
  pointer-events: none;
}

.panel {
  background: #f0f0f0;
  color: #454547;
  margin: 0 auto;
  min-width: 250px;
  width: 33.333%;
}
.panel-head {
  background-color: #5b7da2;
  color: #fff;
  font-variant: small-caps;
  margin: 0;
  padding: 0 1em 0.2em;
}
.panel-content {
  padding: 2em 1em;
}

.image-select {
  margin: 0 auto;
  position: relative;
  overflow: hidden;
  width: 100%;
}
.image-select input[type="file"] {
  position: absolute;
  left: 0;
  width: 100%;
  bottom: 0;
  top: 0;
  cursor: pointer;
  display: block;
  opacity: 0;
  z-index: 15;
}
.image-select__message:after {
  position: absolute;
  left: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.75);
  bottom: 0;
  color: #fff;
  content: "Browse for file...";
  display: block;
  font-weight: bold;
  height: 3em;
  line-height: 3em;
  opacity: 0;
  padding: 0 1em;
  transition: transform 0.3s ease, opacity 0.3s ease;
  transform: translateY(100%);
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
  z-index: 5;
}
.image-select:hover .image-select__message:after {
  opacity: 1;
  transform: translateY(0);
}
.image-select__icon {
  bottom: .25em;
  color: #fff;
  position: absolute;
  right: .5em;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.3);
  transition: transform 0.3s ease, opacity 0.3s ease;
  z-index: 10;
}
.image-select:hover .image-select__icon {
  transform: scale(0.8, 0.8);
}

.file-hover {
  position: relative;
}
.file-hover:before {
  position: absolute;
  left: 0;
  width: 100%;
  bottom: 0;
  top: 0;
  background-color: rgba(0, 0, 0, 0.5);
  content: "";
  display: block;
  z-index: 30;
}
.file-hover:after {
  font-family: FontAwesome;
  animation: 1.5s bounce infinite;
  color: #fff;
  content: "";
  font-size: 5em;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -0.5em 0 0 -0.5em;
  z-index: 35;
}

@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(25%);
  }
  100% {
    transform: translateY(0);
  }
}
*{
  font-family: Century Gothic;
}

input, textarea {
  width:100%;
  margin-bottom:10px;
  border-radius:3px;
  border:solid 1px #ccc;
  padding:4px 7px;
}
#eml, #tel {
  width:49%;
}
#tel {
  float:right;
}
button{
  width:120px;
  float:right;
  margin-left:15px;
  border-radius:3px;
  border: solid 1px #ccc;
  padding:4px 7px;
}
button:hover {
  background-color:white;
  border:#333;
}

</style>

<body>
<br>
  <hr>

    
  

<div class="container">
 
<div class="table-responsive"> 
  <table class="table table-bordered">
<form method="post" action"process.php">
    <tbody>

      <tr>
        <td><div class="panel">
      <h2 class="panel-head">click or drag file</h2>
      <div class="panel-content">
        <label for="image">
          <form action="" class="image-select" data-droppable="">
            <input id="image" type="file" data-droppable-input=""/>
            <i class="fa fa-camera fa-2x image-select__icon"></i>
            <div class="image-select__message"></div>
            <div class="bg-image aspect-square"
                 style="background-image: url('http://s1.iconbird.com/ico/2013/12/505/w450h4001385925290Camera.png');" data-droppable-image=""></div>
          </form>
        </label>
      </div>
    </div></td>
        <td>


  <h2>Please fill in the form below</h2>
<!--   <label for="first name">First Name</label> -->
  <input id="first-name" type="text" required placeholder="First name" name="First-Name">
<!--   <label for="last name">Last Name</label> -->
  <input id="last-name" type="text" required placeholder="Last name" name="Last-Name">
<!--   <label for="email">Email</label> -->
  <input id="eml" type="email" required placeholder="Email@" name="Email">
<!--   <label for="tel">Phone number</label> -->
  <input id="tel" type="tel" placeholder="Phone number" name="Phone-Number">
<!--   <label for="message">Message</label> -->
  <textarea rows="6" required placeholder="Message" name="Message"></textarea>
  <button type="reset">Reset</button><button type="submit">Submit</button>
  
</form></td>
       
      </tr>
    
    </tbody>
  </table>
</div>

  
  <hr>
  </div>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>


<script type="text/javascript">
  
  var hoverCls = "file-hover";
var $fileDrop = $('[data-droppable=""]');
var $fileInput = $('[data-droppable-input=""]');
var $fileImage = $('[data-droppable-image=""]');

var fileHover = function (ev) {
  ev.stopPropagation();
  ev.preventDefault();
  if (ev.type === "dragover") {
    $fileDrop.addClass(hoverCls);
  } else {
    $fileDrop.removeClass(hoverCls);
  }
};

var fileSelect = function (ev) {
  fileHover(ev);
  var files = ev.target.files || ev.dataTransfer.files;
  var reader = new FileReader();
  
  reader.onload = function (ev) {
    $fileImage.css("background-image", "url("+ev.target.result+")");
  };
  reader.readAsDataURL(files[0]);
};

$fileDrop[0].ondragover = fileHover;
$fileDrop[0].ondragleave = fileHover;
$fileDrop[0].ondrop = fileSelect;
$fileInput[0].onchange = fileSelect;
</script>