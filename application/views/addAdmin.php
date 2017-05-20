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
    <!--<link rel="stylesheet" type="text/css" href="<?php// echo base_url()."assets/css/myCss.css"; ?>">-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/sweetalert/dist/sweetalert.css"; ?>">
    <script type="text/javascript" src="<?php echo base_url()."assets/sweetalert/dist/sweetalert.min.js"; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery-3.2.1.min.js"; ?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.validate.min.js"; ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url()."assets/Datepicker/css/bootstrap-datepicker3.css"; ?>"/>
    <script src="<?php echo base_url()."assets/Datepicker/js/bootstrap-datepicker.js"; ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3"><br>
        <h1 align="center">FORM ADD ADMIN</h1><br>
        <div class="thumbnail">
        <form action="<?php echo base_url()."Welcome/insertAdmin"; ?>" method="post" enctype="multipart/form-data">

          <div class="form-group form-group-lg has-feedback">
          <label for="nama">Name</label>
          <input type="text" name="namaa" id="namaa" class="form-control textbox">
          </div>

          <div class="form-group form-group-lg has-feedback">
          <label for="user">Username</label>
          <input type="text" name="username" id="username" class="form-control textbox">
          </div>

          <div class="form-group form-group-lg has-feedback">
          <label for="pass">Password</label>
          <input type="password" name="password" id="password" class="form-control textbox">
          </div>

          <div class="form-group form-group-lg has-feedback">
          <label for="ttgl">Date of Birth</label>
          <input type="text" name="birth" id="birth" class="form-control textbox">
          </div>

          <div class="form-group form-group-lg has-feedback">
          <label for="pass">Gender</label><br>
            <div class="thumbnail" style="padding: 10px;">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="jender" value="Laki-Laki">  Male</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label><input type="radio" name="jender" value="Perempuan">  Female</label>    
            </div>
          </div>

          <div class="form-group form-group-lg has-feedback">
            <label for="add">Address</label>
            <textarea class="form-control" rows="7" id="alamat" name="alamat"></textarea>
          </div>

          <div class="form-group form-group-lg has-feedback">
          <label for="maili">Email</label>
          <input type="email" name="mail" id="mail" class="form-control textbox">
          </div>

          <div class="form-group form-group-lg has-feedback">
          <label for="st">Status</label>
          <select class="form-control" id="stt" name="stt">
            <option>Active</option>
            <option>Not Active</option>
          </select>
          </div>

          <button type="submit" name="buttonOK" class="btn btn-primary btn-block">SAVE</button>
        </form>
      </div>

      <script type="text/javascript">
            $(document).ready(function () {
                $('#birth').datepicker({
                    format: "dd-mm-yyyy",
                    autoclose:true
                });
            });
        </script>

      <script type="text/javascript">  
        $('form').validate({
          rules: {

              namaa:{
                minlength:3,
                required:true
              },
              username: {
                minlength:3,
                required: true
              },
              password: {
                minlength:3,
                required: true
              },
              birth: {
                  required: true
              },
              jender: {
                 required: true
              },
              alamat: {
                minlength:10,
                required: true
              },
              mail: {
                  required: true,
                  email:true
              },
          },
           messages: {
           namaa: {
           required: "Name Can't be Null",
           minlength: jQuery.validator.format("Karakter kurang dari {0}"),
           },
           username:{
            required:"Username Can't be Null",
            minlength: jQuery.validator.format("Karakter kurang dari {0}"),
           },
           password:{
            required:"Password Can't be Null",
            minlength: jQuery.validator.format("Karakter kurang dari {0}"),
           },
           birth:{
            required:"Image Can't be Null",
           },
           jender:{
            required:"Gender Can't be Null",
           },
           alamat:{
            required:"Address Can't be Null",
            minlength: jQuery.validator.format("Karakter kurang dari {0}"),
           },
           mail:{
            required:"Email Can't be Null",
           },
         }
      });
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>