<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MyNews</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/myCss.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/test.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery-3.2.1.min.js"; ?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.validate.min.js"; ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <!-- ini untuk Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url()."assets/images/logo.png"; ?>">

    <!-- ini untuk icon di HP -->
    <link rel="apple-touch-icon" href="<?php echo base_url()."assets/images/logo.png"; ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      .ft{
        clear: both;
        border-top: 3px solid white;
        background-color: #222222;
        padding: 5px;
        bottom: 0;
        width: 100%;
        margin: 0;
      }
      .name{
        margin-top: 16px;
        color: white;
      }
    </style>
    
  </head>
  <body ng-app="myApp" ng-controller="customersCtrl" style="background-color: #edffe9;">
    <div class="container-fluid">
      <h1 style="font-weight: 50px;font-size: 60px;float: left;">MyNews</h1>
      <br><br><h3 style="float: right;">I JUST DO WHAT I WANT DO</h3>
    </div>

    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="z-index: 9999999999999;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSitePunyaGagah</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#technology">Technology</a></li>
            <li><a href="#sports">Sports</a></li>
            <li><a href="#entertainment">Entertainment</a></li>
            <li><a href="#national">National</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php $aku = $this->session->userdata("nama"); 
                  if ($aku != Null) {?>

                    <li><h4 class="name">Hello, <?php echo $this->session->userdata("nama"); ?></h4></li>
                    <li><a href="<?php echo base_url()."auth/logout"; ?>">LogOut</a></li>
            
                 <?php }else { ?>

                      <li><a href="<?php echo base_url()."welcome/loginUser"; ?>"><span class="glyphicon glyphicon-log-in"></span> Login User</a></li>

                 <?php } ?>

            <li><a href="<?php echo base_url()."admin/index"; ?>"><span class="glyphicon glyphicon-user"></span> Admin </a></li>
            
          </ul>
      </div>
    </nav>

    <div>
      <div class="badan-utama"><br>
    
    <!--untuk slide foto-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
            
            <div class="item active">
              <img src="<?php echo base_url('assets/images/HBG.jpg'); ?>" alt="Los Angeles" style="width:100%;height: 450px;">
            </div>

            <?php foreach ($data as $datas) { ?>  
              <div class="item">
                <img src="<?php echo base_url('assets/images/'); ?><?php echo $datas['gambarNews'] ?>" alt="<?php echo $datas['judulNews']; ?>" style="width:100%;height: 450px;">
                <div class="carousel-caption">
                  <h2 style="color: black;"><?php echo $datas['judulNews']; ?></h2>
                  <h4 style="background-color: red;width: 50px;height: 25px;margin: auto;font-weight: bold;padding: auto;">NEW</h4>
                  </div>
              </div>
              <?php } ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div><br><br><br>
    <!--akhir untuk silde-->

    <!--content New Post-->
      <div class="container-fluid">
        <div class="headTech">
            <h2>&nbsp;&nbsp;TODAY</h2>  
        </div><hr>

        <?php foreach ($data as $datas) { ?>
           <div class="polaroid col-sm-4">
            <h5 style="background-color: red;color: white;float: left;">NEW</h5>
              <img src="<?php echo base_url('assets/images/'); ?><?php echo $datas['gambarNews']; ?>" alt="<?php echo $datas['judulNews']; ?>" style="width:100%;height: 150px;">
              <div class="titleBer">
                <p><?php echo $datas['judulNews']; ?></p>
                <h5 style="font-weight:bold;"><?php echo $datas['typeNews']; ?></h5>
                <a href="<?php echo base_url()."welcome/bukaberita/".$datas['idNews']; ?>">Read More</a>
              </div>
            </div>
        <?php } ?>  

      </div><br><br><br>
      <!--end content New Post-->

   <!--untuk search-->
        <br>
        <form method="Post" action="<?php echo base_url()."welcome/cariData"; ?>">
        <h1 align="center">SEARCH NEWS</h1>
        <p align="center">To Find News Accurately</p>
          <div class="input-group col-sm-12" style="width: 98%;margin: auto; z-index: 1;">
            <input type="text" class="form-control input-lg" placeholder="Search" name="cari" id="cari">
            <div class="input-group-btn">
              <button class="btn btn-default btn-lg" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
          </div>
        </form><br><br>
    <!--akhir search -->

    <!--content technology-->
      <div class="container-fluid">
          <div id="technology">
            <div class="headTech">
              <h2>&nbsp;&nbsp;TECHNOLOGY</h2>  
            </div><hr>
            
            <?php foreach ($dataa as $dataas) { ?>
                 <div class="polaroid col-sm-4">
                    <img src="<?php echo base_url('assets/images/'); ?><?php echo $dataas['gambarNews']; ?>" alt="<?php echo $dataas['judulNews']; ?>" style="width:100%;height: 150px;">
                    <div class="titleBer">
                      <p><?php echo $dataas['judulNews']; ?></p>
                      <h5 style="font-weight:bold;"><?php echo $dataas['typeNews']; ?></h5>
                      <a href="<?php echo base_url()."welcome/bukaberita/"?><?php echo $dataas['idNews']; ?>">Read More</a>
                    </div>
                  </div>
               <?php } ?>

          </div>
      </div><br><br><br>
      <!--end content technolgy-->

      <!--content sports-->
      <div class="container-fluid">
          <div id="sports">
            <div class="headTech">
              <h2>&nbsp;&nbsp;SPORTS</h2>  
            </div><hr>
            
            <?php foreach ($date as $dates) { ?>
                 <div class="polaroid col-sm-4">
                    <img src="<?php echo base_url('assets/images/'); ?><?php echo $dates['gambarNews']; ?>" alt="<?php echo $dates['judulNews']; ?>" style="width:100%;height: 150px;">
                    <div class="titleBer">
                      <p><?php echo $dates['judulNews']; ?></p>
                      <h5 style="font-weight:bold;"><?php echo $dates['typeNews']; ?></h5>
                      <a href="<?php echo base_url()."welcome/bukaberita/"?><?php echo $dates['idNews']; ?>">Read More</a>
                    </div>
                  </div>
            <?php } ?>

          </div>
      </div><br><br><br>
      <!--end content sports-->

      <!--content entertainment-->
      <div class="container-fluid">
          <div id="entertainment">
            <div class="headTech">
              <h2>&nbsp;&nbsp;ENTERTAINMENT</h2>  
            </div><hr>
            
            <?php foreach ($dati as $datis) { ?>
                 <div class="polaroid col-sm-4">
                    <img src="<?php echo base_url('assets/images/'); ?><?php echo $datis['gambarNews']; ?>" alt="<?php echo $datis['judulNews']; ?>" style="width:100%;height: 150px;">
                    <div class="titleBer">
                      <p><?php echo $datis['judulNews']; ?></p>
                      <h5 style="font-weight:bold;"><?php echo $datis['typeNews']; ?></h5>
                      <a href="<?php echo base_url()."welcome/bukaberita/"?><?php echo $datis['idNews']; ?>">Read More</a>
                    </div>
                  </div>
            <?php } ?>

          </div>
      </div><br><br><br>
      <!--end content entertainment-->

      <!--content national-->
      <div class="container-fluid">
          <div id="national">
            <div class="headTech">
              <h2>&nbsp;&nbsp;NATIONAL</h2>  
            </div><hr>
            
            <?php foreach ($datu as $datus) { ?>
                 <div class="polaroid col-sm-4">
                    <img src="<?php echo base_url('assets/images/'); ?><?php echo $datus['gambarNews']; ?>" alt="<?php echo $datus['judulNews']; ?>" style="width:100%;height: 150px;">
                    <div class="titleBer">
                      <p><?php echo $datus['judulNews']; ?></p>
                      <h5 style="font-weight:bold;"><?php echo $datus['typeNews']; ?></h5>
                      <a href="<?php echo base_url()."welcome/bukaberita/"?><?php echo $datus['idNews']; ?>">Read More</a>
                    </div>
                  </div>
            <?php } ?>

          </div>
      </div><br><br><br>
      <!--end content national-->

      </div>
    </div>

    <!--footer-->
    <dir class="ft">
      <p style="color: white;margin: auto;" align="center">Create By Gagah AP &nbsp; powered by CodeIgniter,Bootsrap etc &nbsp; 2017</p>
    </dir>  
    
    <script type="text/javascript">  
        $('form').validate({
          rules: {

              cari:{
                minlength:1,
                required:true
              },
          },
           messages: {
           cari: {
           required: "Search Can't be Null",
           minlength: jQuery.validator.format("Karakter kurang dari {0}"),
           },
         }
      });
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(). "assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>