<!DOCTYPE html>
<html>
<head>
    <title>Stock Management System - Register</title>
    <!-- Include your CSS and JavaScript dependencies -->
    <!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">	

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>
    <style>
    body {
        background-image: url('https://www.singerslfiles.com/images/singer-logos/singer_website_logo.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .panel {
        background-color: rgba(255, 255, 255, 0.15);
        border: none;
        width: 100%;
        max-width: 600px;
        padding: 40px;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 100px auto; /* Center the panel vertically */
    }

    .panel-title {
        font-size: 24px;
        margin-bottom: 15px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .alert {
        margin-bottom: 15px;
        border-radius: 5px;
        font-size: 14px;
        background-color: rgba(255, 255, 255, 0.5);
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        border: none;
        border-radius: 5px;
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
        padding: 10px;
        margin-bottom: 10px;
        box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.1);
        width: 100%;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        color: #fff;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .glyphicon-user {
        margin-right: 5px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .form-group .btn-primary {
        margin: 0 auto;
    }
</style>

    </style>
</head>
<body>
    <div class="container">
        <div class="row vertical">
            <div class="col-md-5 col-md-offset-4">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register New User</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="php_action/register_process.php" method="post" id="registerForm">
                            <fieldset>
                                <div class="form-group">
                                    <label for="newUsername" class="col-sm-2 control-label">New Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="newUsername" name="newUsername" placeholder="" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="newPassword" class="col-sm-2 control-label">New Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword" class="col-sm-2 control-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="" autocomplete="off" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="glyphicon glyphicon-user"></i> Register User
                                        </button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
