<?php require('includes/settings_inc.php')?>

<html>

<head>
    <title>Settings</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/settings_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <?php require_once('sidebar.php'); ?>

    <section class="main-section">
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="card-form">
                                <form class="form-horizontal">
                                    <div class="form-group col-md-12">
                                        <label>Current</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" placeholder="eg: current123" value="<?php echo $current_pass ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>New</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" placeholder="eg: new123" value="<?php echo $new_pass ?>">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Confirm new</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" placeholder="eg: new123" value="<?php echo $new_confirmpass ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-6 col-xs-6 col-xs-offset-6">
                                            <button name="btn_change" type="button" class="btn btn-primary btn-main">Change</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/sidebar_script.js"></script>
</body>

</html>