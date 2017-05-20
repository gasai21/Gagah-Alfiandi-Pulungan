<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add News</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"; ?>" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/myCss.css"; ?>">-->
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
  </head>
  <body>
  <div class="container-fluid">
    <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3"><br>
      <h1 align="center">FORM ADD NEWS</h1><br>
      <div class="thumbnail">
      <form action="<?php echo base_url()."Welcome/insertNews"; ?>" method="post" enctype="multipart/form-data">

        <div class="form-group form-group-lg has-feedback">
        <label for="nama">Title</label>
        <input type="text" name="judul" id="judul" class="form-control textbox">
        </div>

        <div class="form-group form-group-lg has-feedback">
          <label for="isiCOntent">Content</label>
          <textarea class="form-control" rows="15" id="isii" name="isii"></textarea>
        </div>

        <div class="form-group form-group-lg has-feedback">
        <label for="type">Type News</label>
        <select class="form-control" id="tipe" name="tipe">
          <option>Technology</option>
          <option>Sports</option>
          <option>Entertainment</option>
          <option>National</option>
        </select>
        </div>

        <div class="form-group form-group-lg has-feedback">
          <label for="gambar">Image</label>
          <input type="file" name="berkas" id="berkas">
        </div>

        <button type="submit" name="buttonOK" class="btn btn-primary btn-block">SAVE</button>
      </form>
      </div>  
    </div>
  </div>
    

<script type="text/javascript">  
  $('form').validate({
        rules: {

            judul:{
              minlength:3,
              required:true
            },
            isii: {
                required: true
            },
            tipe: {
                required: true
            },
            berkas: {
                required: true
            },
        },
         messages: {
         judul: {
         minlength: jQuery.validator.format("Karakter kurang dar {0}"),
         required: "Title Can't be Null",
         },
         isii:{
          required:"Content Can't be Null",
         },
         tipe:{
          required:"Type Can't be Null",
         },
         berkas:{
          required:"Image Can't be Null",
         },
       }
    });
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>