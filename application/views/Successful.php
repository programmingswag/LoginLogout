<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
        <tbody>
        <tr class="active">
        <H3>Admin Panel</H3>
    </tr>
    </ul>

  </div>
</nav>

    <div class= "alert  alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">close</a>
    <div class="container jumbotron page-header well well-lg">

    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <div class="container">
            <div class="col-lg-12">
           <?php echo "Welcome Mr. ".$this->session->userdata('name')." You're Currently in ".$this->session->userdata('city')?>
            <?php echo form_open('Loginout/logout',['class'=>'form-horizontal']);?>
           <?php echo form_submit(['value'=>'Logout','class'=>'btn btn-primary'])?>
    </tbody>
    </table>
    </div>
    </div>
  </body>
</html>