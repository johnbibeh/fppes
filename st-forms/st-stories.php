<!DOCTYPE html>
<html lang="en">
 <?php require '../forms/php/app.php';?>
 <?php if(!loggedIn()){ header('Location: login.php'); } ?>
 <?php include '../st-forms/template/head.php';?>
 <?php header("Cache-Control: no-cache, must-revalidate");
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");?>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

    <style>

        
        #myCarousel .carousel-caption {
            left:0;
            right:0;
            bottom:0;
            text-align:left;
            padding:10px;
            background:rgba(0,0,0,0.6);
            text-shadow:none;
        }

        #myCarousel .list-group {
            position:absolute;
            top:0;
            right:0;
        }
        #myCarousel .list-group-item {
            border-radius:0px;
            cursor:pointer;
        }
        #myCarousel .list-group .active {
            background-color:#eee;	
        }

        .list-group {
            overflow: scroll;
            max-height: 420px;
        }

        .item img {
            width: 100%;
            max-height: 420px;
        }

        @media (min-width: 992px) { 
            #myCarousel {padding-right:33.3333%;}
            #myCarousel .carousel-controls {display:none;} 	
        }
        @media (max-width: 991px) { 
            .carousel-caption p,
            #myCarousel .list-group {display:none;} 
        }
        
    </style>


  <body >
    <div class="be-wrapper">
      <?php include '../st-forms/template/nav.php';?>
      <?php include '../st-forms/template/sidebar.php';?>
      <div class="be-content">
      <?php $title = 'Articles'; include '../st-forms/template/page-title.php';?>
        
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-sm-12">
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">SCHEDULE</div> -->
                    <div class="panel-body">

                    <h3>Did you know ?</h3>
                    <hr>


                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                        
                        <div class="item active">
                            <img src="../assets/user/tr1.jpg">
                            <div class="carousel-caption">
                            <h4><a href="#">Replacing TV time with light activity or sleep boosts healthy aging odds</a></h4>
                            <p>Sedentary behavior reduces the odds of healthy aging, while light physical activity increases them. Replacing TV time with light activity, exercise, or sleep improves healthy aging odds.</a></p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="../assets/user/tr2.jpg">
                            <div class="carousel-caption">
                            <h4><a href="#">Sugary drinks disrupt the salivary microbiome</a></h4>
                            <p>A study in Scientific Reports found that high-sugar beverage consumption can lead to pathogenic changes in the oral microbiota, reducing bacterial diversity and increasing acid-producing bacteria.</a></p>
                            </div>
                        </div><!-- End Item -->
                        
                        <div class="item">
                            <img src="../assets/user/tr3.jpg">
                            <div class="carousel-caption">
                            <h4><a href="#">Natural antioxidants could delay age-related decline in male testosterone production</a></h4>
                            <p>Natural polyphenolic compounds to enhance testosterone production and prevent age-related hypogonadism in aging males.</a></p>
                            </div>
                        </div><!-- End Item -->
                        
                        <div class="item">
                            <img src="../assets/user/tr4.jpg">
                            <div class="carousel-caption">
                            <h4><a href="#">Antioxidants combat high-fat diet-induced female reproductive issues, study reveals</a></h4>
                            <p>Researchers in Italy review how antioxidants from biological matrices can protect against reproductive issues caused by high-fat diets in women.</a></p>
                            </div>
                        </div><!-- End Item -->

                        <div class="item">
                            <img src="../assets/user/tr5.jpg">
                            <div class="carousel-caption">
                            <h4><a href="#">Planetary health diet may substantially lower risk of premature death and environmental impact</a></h4>
                            <p>People who eat a healthy, sustainable diet may substantially lower their risk of premature death in addition to their environmental impact, according to a new study led by Harvard T.H. Chan School of Public Health.</a></p>
                            </div>
                        </div><!-- End Item -->
                                
                        </div><!-- End Carousel Inner -->


                        <ul class="list-group col-sm-4">
                            <li data-target="#myCarousel" data-slide-to="0" class="list-group-item "><h4>Replacing TV time with light activity or sleep boosts healthy aging odds</h4></li>
                            <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>Sugary drinks disrupt the salivary microbiome</h4></li>
                            <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>Natural antioxidants could delay age-related decline in male testosterone production</h4></li>
                            <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>Antioxidants combat high-fat diet-induced female reproductive issues, study reveals</h4></li>
                            <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>Planetary health diet may substantially lower risk of premature death and environmental impact</h4></li>
                        </ul>

                        <!-- Controls -->
                        <div class="carousel-controls">
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>

                    </div><!-- End Carousel -->
                    



                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>

    <script>
        jQuery(document).ready(function () {
        $('#myCarousel').carousel({
            interval: 10000
        })
        jQuery('.fdi-Carousel .item').each(function () {
            var next = jQuery(this).next();
            if (!next.length) {
                next = jQuery(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo(jQuery(this));

            if (next.next().length > 0) {
                next.next().children(':first-child').clone().appendTo(jQuery(this));
            }
            else {
                jQuery(this).siblings(':first').children(':first-child').clone().appendTo(jQuery(this));
            }
        });
        });
        </script>
      <?php include '../forms/template/script.php';?>
    
  </body>
</html>