<?php
session_start();
//if user saved password and close browser, view message
if(isset($_COOKIE['id'])) {
    $id = $_COOKIE['id'];
    $last_visit = $_COOKIE['last_visit'];
    $msg = "ID $id last visit $last_visit";
    $con = mysqli_connect("localhost", "seiz", "rhtvtyxeu", "practice_db") or die("Error " . mysqli_error($con));
    mysqli_query($con, "UPDATE users SET last_visit=now() WHERE id = '{$id}'");
    $row = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE id = '{$id}'"));
    $_COOKIE['last_visit'] = strval($row['last_visit']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Login Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Simple Authentication Form</a>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="login.php" method="post" name="loginform" id="searchForm">
                <fieldset>
                    <legend>Login</legend>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Your Password" required class="form-control" />
                    </div>
                    <div class="form-group">
                        <label><input type="checkbox" name="save" value="1"> Remember me</label>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php if (isset($msg)) :?>
<script>alert("<?= $msg ?>");</script>
<?php endif; ?>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    // Attach a submit handler to the form
    $( "#searchForm" ).submit(function( event ) {

        // Stop form from submitting normally
        event.preventDefault();

        // Get some values from elements on the page:

        var $form = $( this ),
            par1 = $form.find( "input[name='email']" ).val(),
            par2 = $form.find( "input[name='password']" ).val(),
            par3 = $form.find('input:checkbox:checked').val(),
            url = $form.attr( "action" );

        if ($( "#save" ).prop( "checked" )){
            par3 = 1;
        }

        // Send the data using post
        var posting = $.post( url, { email: par1, password: par2, save: par3} );

        // Put the results in a div
        posting.done(function( data ) {
            alert(data);
        });
    });
</script>
</body>
</html>
