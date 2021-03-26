<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>
    <body>
    <?php echo validation_errors(); ?>
        <div class="container">
<br />

<br />
<div class="row">
    <h2>Welcome User, You are successfully logged in. </h2>
    <div class="col-sm-4">
        <a class="btn btn-danger" href="<?=base_url().'login/logout';?>">Logout</a>
    </div>
</div>

</div>
    </body>
</html>

