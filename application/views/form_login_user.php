<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Form</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/myCss.css'); ?>" rel="stylesheet">
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
   
      .kotak-login{
          padding: 5%;
          margin: auto;
          width: 35%;
          height: 480px;
          margin-top: 70px;
          border-radius: 20px;
          border-collapse: collapse;
          border: 0px solid black;
          background-color: white;

        }

     .masukan-login{
          width: 90%;
        }

      .gede{
          width: 50px;
          height: 50px;
      }

      body {
         background-image: url("<?php echo base_url()."assets/images/bg2.jpg"; ?>");
    }
      .bawah{
        margin-top: 25px;
        float: left; 
      }

    </style>
  </head>
  <body>

    <div class="kotak-login" align="center">
        <h1><span class="glyphicon glyphicon-user gede"></span>LOGIN FORM USER</h1><br>
        <form class="form-horizontal" method="post" action="<?php echo base_url()."auth/loginusr"; ?>">
          <div class="form-group has-feedback">
            <div>
              <input type="text" class="form-control input-lg masukan-login" id="usernamee" name="usernamee" placeholder="Enter username">
              <i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
          </div>
          <div class="form-group has-feedback">
            <div >          
              <input type="password" class="form-control input-lg masukan-login" id="passwordd" name="passwordd" placeholder="Enter password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
          </div><br>
          <div class="form-group">        
            <div >
              <button type="submit" class="btn btn-success btn-lg masukan-login" name="ok" id="ok">LOGIN</button>
            </div>
          </div>
        </form>
        <div class="bawah">
          <a href="<?php echo base_url()."Welcome/viewUsrForm"; ?>">Do not you have an account ?</a>
        </div>
    </div>

  <?php 
  if(isset($_POST['ok'])){
  if($isi==0){?>
       <body onload='swal({title: "Login Gagal!",
                        text: "Silakan coba lagi",
                        timer: 3000,
                        type: "error",
                        showConfirmButton: false });'>
    <?php }} ?>

<script type="text/javascript">  
  $('form').validate({
        rules: {

            usernamee:{
              minlength:3,
              maxlength:15,
              required:true
            },
            passwordd: {
                minlength: 3,
                maxlength: 15,
                required: true
            },
        },
         messages: {
         passwordd: {
         required: "Password tidak boleh kosong",
         maxlength: jQuery.validator.format("Karakter tidak boleh lebih {0} "),
         minlength: jQuery.validator.format("Karakter kurang dar {0}"),
         },
         usernamee:{
          required:"Username tidak boleh kosong",
          maxlength: jQuery.validator.format("Karakter tidak boleh lebih {0} "),
          minlength: jQuery.validator.format("Karakter tidak boleh kurang dari {0}"),
         }
       }
    });
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>