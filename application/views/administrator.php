<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrator</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/myCss.css"; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/sweetalert/dist/sweetalert.css"; ?>">
    <script type="text/javascript" src="<?php echo base_url()."assets/sweetalert/dist/sweetalert.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery-3.2.1.min.js"; ?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.validate.min.js"; ?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
  
    .side{
    margin: 0;
    padding: 0;
    width: 280px;
    height: 100%;
    background-color: #232020;
    position: fixed;
  }

  .sidebar-nav {
    position: absolute;
    top: 0;
    width: 280px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
    padding: 10px;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

.title-admin{
  color: #e3da4e;
}
.hiden1{
  display: none;
  padding-left: 30px; 
}
.hiden2{
  display: none;
  padding-left: 30px; 
}
.merah:hover{
  border-right: 5px solid #dc2c3d;
}

.kuning:hover{
  border-right: 5px solid #d6dc2c;
}

.hijau:hover{
  border-right: 5px solid #30dc2c;
}
</style>
  
  </head>
  <body>
    <div class="side">
      <ul class="sidebar-nav">
          <li class="sidebar-brand">
              <span class="title-admin">HOME ADMINISTRATOR</span>
          </li>
          <div class="news">
            <li>
                <a href="#">NEWS</a>
            </li>
          </div>
          <div class="hiden1">
            <li>
                <a href="#" class="merah" id="addNew">Input News</a>
            </li>
            <li>
                <a href="#" class="kuning" id="EditNew">Edit News</a>
            </li>
            <li>
                <a href="#" class="hijau" id="ViewNew">View News</a>
            </li>
          </div>
          <div class="account">
          <li>
              <a href="#">Account</a>
          </li>
          </div>
          <div class="hiden2">
          <li>
              <a href="#" class="merah" id="addAccount">Add Account</a>
          </li>
          <li>
              <a href="#" class="kuning" id="EditAccount">Edit Account</a>
          </li>
          </div>
          <li>
              <a href="<?php echo base_url()."auth/logout"; ?>">Log Out</a>
          </li>
      </ul>
    </div>

    <div class="container-fluid col-lg-offset-2" style="padding: 0 0 0 75px;">
      <div id="badan">
        <br><br><br><br><br><br><br><br><br><br>
        <h1 align="center"> WELCOME TO ADMINISTRATOR PAGE </h1>
        <h2 align="center">Hai, <?php echo $this->session->userdata("nama"); ?></h2>
      </div>
      <div id="badanViewNews"></div>
    </div>

    <?php 
  if(isset($_POST['buttonOK'])){
  if($isi==1){?>
       <body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been Saved",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'>

    <?php }elseif($isi==2){?>
       <body onload='swal({title: "SUCCESS!",
                        text: "Data Has Been deleted",
                        timer: 3000,
                        type: "success",
                        showConfirmButton: false });'>

     <?php}else{?>
      <body onload='swal({title: "FAILED!",
                        text: "the Picture does not match the format",
                        timer: 3000,
                        type: "error",
                        showConfirmButton: false });'>
                        
      <?php }} ?>

    <script type="text/javascript">
      $(document).ready(function(){
        $(".news").click(function(){
          $(".hiden1").slideToggle("slow");
        });
        $(".account").click(function(){
          $(".hiden2").slideToggle("slow");
        });
        $("#addNew").click(function(){
          $("#badan").load("<?php echo base_url()."admin/AddNews"; ?>");
        });
        $("#EditNew").click(function(){
          $("#badan").load("<?php echo base_url()."admin/EditNews"; ?>")
        });
        $("#ViewNew").click(function(){
          $("#badan").load("<?php echo base_url()."admin/ViewNews"; ?>")
        });
        $("#addAccount").click(function(){
          $("#badan").load("<?php echo base_url()."admin/AddAdmin"; ?>")
        });
        $("#EditAccount").click(function(){
          $("#badan").load("<?php echo base_url()."admin/EditAdmin"; ?>")
        });
      });
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(). "assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>