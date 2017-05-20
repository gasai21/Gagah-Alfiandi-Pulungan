	  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/myCss.css"; ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/sweetalert/dist/sweetalert.css"; ?>">
    <script type="text/javascript" src="<?php echo base_url()."assets/sweetalert/dist/sweetalert.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery-3.2.1.min.js"; ?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.validate.min.js"; ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url()."assets/Datepicker/css/bootstrap-datepicker3.css"; ?>"/>
    <script src="<?php echo base_url()."assets/Datepicker/js/bootstrap-datepicker.js"; ?>"></script>

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
    	
	.badan{
   		 width: 1050px;
      	 margin: auto;
      	 padding: 2px;
      	 background-color: white;
 	}

  	.headTech{
	    border-left: 15px solid #068f06;
    	height: 30px; 
    	font-style: bold;
  	}

    div.polaroid {
    	width: 250px;
    	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    	text-align: center;
    	margin: 2px;
    	padding: 0;
  	}

    div.titleBer {
        padding: 10px;
    }

    .affix {
    	top: 0;
      	width: 100%;
  	}

    .affix + .container-fluid {
    	padding-top: 70px;
  	}

  	.ft{
        clear: both;
        border-top: 3px solid white;
        background-color: #222222;
        padding: 5px;
        bottom: 0;
        width: 100%;
        margin: 0;
    }

    </style>
  </head>
  <body style="background-color: #edffe9;">

  <!--ini bagian header-->
  <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="z-index: 9999999999999;">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSitePunyaGagah</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url()."welcome/index"; ?>">Home</a></li>
         </ul>
      </div>
    </nav>

    <!--ini bagian hasil search-->
  	<div class="badan">
  		<div class="container-fluid">
          <div class="headTech">
              <h2>&nbsp;&nbsp;RESULT SEARCH</h2>  
            </div><hr>
			<?php foreach ($aku as $datas) { ?>
				<div class="polaroid col-sm-4">
	              <img src="<?php echo base_url('assets/images/'); ?><?php echo $datas->gambarNews; ?>" alt="<?php echo $datas->judulNews; ?>" style="width:100%;height: 150px;">
	              <div class="titleBer">
	                <p><?php echo $datas->judulNews; ?></p>
	                <h5 style="font-weight:bold;"><?php echo $datas->typeNews; ?></h5>
	                <a href="<?php echo base_url()."welcome/bukaberita/".$datas->idNews; ?>">Read More</a>
	              </div>
	            </div>
			<?php } ?>   		
	    </div>
  	</div>
    
    
    <!--footer-->
    <dir class="ft">
      <p style="color: white;margin: auto;" align="center">Create By Gagah AP &nbsp; powered by CodeIgniter,Bootsrap etc &nbsp; 2017</p>
    </dir>  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>