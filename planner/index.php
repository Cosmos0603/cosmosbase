<?php include 'authorization.php' ?>
<!DOCTYPE html>
<html>
<head>
<!-- 最新版本的 Bootstrap 文件 -->
<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./css/style.css">
<title>Planner</title>
</head>
<body>
    <div class="header">
        <p>Important!</p>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a>Important!</a></li>
            <li role="presentation" class="dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Memo<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="uftask.php">Unfinished Tasks</a></li>
                    <li><a href="ftask.php">Finished Tasks</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="atask.php">Add Task</a></li>
                </ul>
            </li>
            <!--    <li role="presentation"><a href="./schedule.php">Schedule</a></li>   -->
            <a type="button" class="btn btn-default logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></a>
            <label class="username"><?php echo $_SESSION['username'] ?></label>
        </ul>
        <div class="task-container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-danger task-box">
                    <div class="panel-heading">Time: <span>15:00</span>~<span>18:00</span></div>
                    <div class="panel-body">
                        <ul>
                            <li>Task Name:</li>
                            <li>Location:</li>
                            <li>Description:</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>
