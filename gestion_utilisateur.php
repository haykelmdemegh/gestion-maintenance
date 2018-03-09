<!DOCTYPE html>
<html lang="en">
    <head> 
		 <meta charset="utf-8" />
    <title>inscription utilisateurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>	</head>
	<body>

<div class="container">

<div class="page-header">
    <h1>inscription </h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form method="post" action="ajoute.php">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>champ obligatoire</strong></div>
                <div class="form-group">
                    <label for="InputName"> Name</label>
                   <div class="input-group">					
                   <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="name" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">username</label>
                    <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" id="InputEmailFirst" name="username" placeholder="Enter username" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				                <div class="form-group">
                    <label for="InputEmail">Password</label>
                    <div class="input-group">
					<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" id="InputEmailSecond" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
            </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>