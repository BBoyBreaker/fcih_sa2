<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- IE meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <!-- Mobile meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>main</title>
        <link rel="stylesheet" href="../css/bootstrap.css"/>

        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        
    </head>
<body>

<div class="container">
    <div class="row centered-form">
    <div class="col-md-12">
        <div class="panel panel-default" style="max-width: 600px">
            <div class="panel-heading">
                <h3 class="panel-title"> ADD NEW Appointement</h3>
            </div>
            <div class="panel-body">
                <form action="" method="post" style="max-width: 500px ;"> 
                    <div class="row" >
                        <div class="col-xs-12 col-sm-12 col-md-12" style=" margin:2px;">
                            <div class="form-group-lg">
                                <input type="time" name="start_time" class="form-control input-sm floatlabel" placeholder="Time of resevation"required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style=" margin:2px;">
                            <div class="form-group-lg">
                                <input type="date" name="date" id="email" class="form-control input-sm" placeholder="Date of resevation" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style=" margin:2px;">
                            <div class="form-group-lg">
                                <input type="number" name="user_id" id="password" class="form-control input-sm" placeholder="User ID" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style=" margin:2px;">
                            <div class="form-group-lg">
                                <input type="number" name="place_id" id="password" class="form-control input-sm" placeholder="Place ID" required>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Add" class="btn btn-info btn-block">
                </form>
                    </div>
                </div>
            </div>
    	</div>
    </div>
</body>
</html>
