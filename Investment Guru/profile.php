<?php
    session_start();
?>

<html>

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/profile_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/sidebar_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">
</head>

<body>
    <?php
        require_once('navbar.php');
    ?>

    <?php
        require_once('sidebar.php');
    ?>

    <section class="main-section">

        <section class="profile-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Details</h4>
                                </div>
                                <div class="card-form">
                                    <form class="form-horizontal">
                                        <div class="form-group">                                           
                                            <div class="col-md-6">
                                                <label>First name</label>
                                                <input type="text" class="form-control margin-bottom" placeholder="eg: Sachin">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Last name</label>
                                                <input type="text" class="form-control" placeholder="eg: Tendulkar">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="eg: example@company.com">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Date of birth</label>
                                            <input type="date" class="form-control" value="2000-01-01">  
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>City</label>
                                                <input type="text" class="form-control margin-bottom" placeholder="eg: Mumbai">
                                            </div>
                                            <div class="col-md-6">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="eg: India">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-3 col-md-offset-9 col-xs-6 col-xs-offset-6">
                                                <button type="button" class="btn btn-primary btn-main">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Job Details</h4>
                                </div>
                                <div class="card-form">
                                    <form class="form-horizontal">
                                        <div class="form-group col-md-12">
                                            <label>Company name</label>
                                            <input type="text" class="form-control" placeholder="eg: Reliance">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>City</label>
                                            <input type="text" class="form-control" placeholder="eg: Mumbai">
                                        </div>

                                        <div class="form-group col-md-12">  
                                            <label>Designation</label>
                                            <input type="text" class="form-control" placeholder="eg: Manager">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Annual salary</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input type="number" class="form-control" placeholder="eg: 4,00,000">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-6 col-xs-6 col-xs-offset-6">
                                                <button type="button" class="btn btn-primary btn-main">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Financial Details</h4>
                                </div>
                                <div class="card-form">
                                    <form class="form-horizontal">
                                        <div class="form-group col-md-12">
                                            <label>Monthly income</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input type="number" class="form-control" placeholder="eg: 25,000">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Expenses</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input type="number" class="form-control" placeholder="eg: 20,000">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">  
                                            <label>Savings</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input type="number" class="form-control" placeholder="eg: 4,000">
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Other</label>
                                            <div class="input-group">
                                                <span class="input-group-addon">₹</span>
                                                <input type="number" class="form-control" placeholder="eg: 1,000">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-6 col-xs-6 col-xs-offset-6">
                                                <button type="button" class="btn btn-primary btn-main">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <?php
            require_once('footer.php');
        ?>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/footer_script.js"></script>
    <script src="js/sidebar_script.js"></script>
    <script src="js/navbar_script.js"></script>
</body>

</html>