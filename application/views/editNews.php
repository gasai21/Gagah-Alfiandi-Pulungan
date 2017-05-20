<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page Edit News</title>

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
      <div class="">
        <h1 align="center">Edit News</h1><br>
          <div class="thumbnail">
            <table class="table">
              <thead>
                <tr>
                  <th>Title News</th>
                  <th>Content News</th>
                  <th>Type News</th>
                  <th>Images</th>
                  <th>Date Realease</th>
                  <th>Admin Work</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php foreach ($data as $datas) { ?>
              <tbody>
                <tr>
                  <td><?php echo $datas['judulNews']; ?></td>
                  <td><?php echo $datas['isiNews']; ?></td>
                  <td><?php echo $datas['typeNews']; ?></td>
                  <td><?php echo $datas['gambarNews']; ?></td>
                  <td><?php echo $datas['tanggalNews']; ?></td>
                  <td><?php echo $datas['admin']; ?></td>
                  <td>
                    <a name="buttonOK" href="<?php echo base_url()."Welcome/deleteNews/".$datas['idNews']; ?>">Delete</a> //
                    <a href="<?php echo base_url()."welcome/updateNews/".$datas['idNews']; ?>">Update</a>
                  </td>
                </tr>
              </tbody>
              <?php } ?>
          </table>
          </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js"; ?>"></script>
  </body>
</html>