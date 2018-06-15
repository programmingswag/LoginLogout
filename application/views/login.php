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
        <H3> Login</H3>
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
            <?php
                $error = $this->session->flashdata('response');
                if(isset($error) && !empty($error))
                {
                ?>
                <div class="alert alert-dismissible alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $error; ?>
                <?php
                }
                ?>
           </div>
           <?php echo form_open('Loginout/loggedin',['class'=>'form-horizontal']);?>
                <td>
                    Username <?php echo form_input(['name'=>'username','class'=>'form-control']);?>
                    <?php echo form_error('username'); ?>
                </td>

                <td>
                    Password <?php echo form_input(['name'=>'password','class'=>'form-control']);?>
                    <?php echo form_error('password'); ?>
                </td>
                <td>
                    <?php echo form_submit(['value'=>'Login','class'=>'btn btn-primary'])?>
                </td>
            <?php
                echo  form_close();
            ?>


    </tbody>

    </table>
    <div class="col-sm-4">
    </div>
    <div class= "col-sm-4">
    If not registered yet, Kindly <a href="<?php echo site_url('Loginout/index') ?>"><?php echo form_submit(['value'=>'SignUp','class'=>'btn btn-primary'])?></a>
    </div>

    </div>
  </body>
</html>