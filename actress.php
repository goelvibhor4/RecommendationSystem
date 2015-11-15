<?php
// Start the session
session_start();

error_reporting(0);

/*$name = $_GET['q1'];
$age = $_GET['q2'];
$type = $_GET['q3'];
$genre = $_GET['q4'];
$actor= $_GET['q5'];
$actress = $_GET['q6'];
echo $name;
echo $age;
echo $type;
echo $genre;
echo $actor;
echo $actress;

$_SESSION["name"] = $name;
$_SESSION["age"] =$age;
$_SESSION["type"] =$type;
$_SESSION["genre"]=$genre;
$_SESSION["actor"]=$actor;
$_SESSION["actress"]=$actress;
echo "Session variables are set.";
*/
$actress = $_GET['actress'];
$url = "http://158.85.122.170:81/mongo_api/search_call.php?q=".$actress;
$json = file_get_contents($url);
$data = json_decode($json,true);
$Geonames = $data['trailers'];
$arrlength = count($Geonames);


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Movie Recommendation system</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
<?php

include('header.php');
?>
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  
                      <div class="row mt">

                      <!-- SERVER STATUS PANELS -->
                        

<?php 
for ($x = 0; $x <=2; $x++) {?>
                        <div class="col-md-4 col-sm-4 mb">
                        <div class="content-panel pn">
                <div id="blog-bg">
                  <img src="<?php echo $Geonames[$x]['guid']; ?> "alt="Smiley face" height="150" width="295">
                  
                  <div class="blog-title"><?php echo $Geonames[$x]['movie']; ?></div>
                </div>
                <div class="blog-text">
                  <p><b>Release date: </b><?php echo $Geonames[$x]['release_date']; ?> </p>
                  <p><b>Director: </b><?php echo $Geonames[$x]['director']; ?> </p>
                 <p><a href="recommended.php?id=<?php echo $Geonames[$x]['ID']; ?> ">GET RECOMMENDATIONS</a></p>
                </div>
              </div>
                        </div><!-- /col-md-4-->
                        
                        <?php }
?>

                     
            
                        

                    </div>
                    
                            
        
          
          
                  </div>
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
       <?php 
       include('trending.php');?>
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
  <script src="assets/js/zabuto_calendar.js"></script>  
  

  
  <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
