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
<!-- process data -->
<?php
$taskname = $starttime = $endtime = $location = $description = $important = "";
$err_taskname = $err_starttime = $err_endtime = "";
$success = 0;

if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(empty($_POST["taskname"])){
		$err_taskname = "error: task name is required";
	}else{
		$taskname = $_POST["taskname"];
		$success++;
	}
}


?>
    <div class="header">
        <p>Add Tasks</p>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li role="presentation" ><a href="index.php">Important!</a></li>
            <li role="presentation" class="active dropdown">
	        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Memo<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="uftask.php">Unfinished Tasks</a></li>
                    <li><a href="ftask.php">Finished Tasks</a></li>
                    <li role="seperator" class="divider"></li>
                    <li><a href="atask.php">Add Task</a></li>
                </ul>
            </li>
                <!--<li role="presentation"><a href="./schedule.php">Schedule</a></li>-->
            <a type="button" class="btn btn-default logout" href="logout.php"><span class="glyphicon glyphicon-log-out"></a>
            <label class="username"><?php echo $_SESSION['username'] ?></label>
        </ul>
        <div class="task-container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="panel panel-info task-box">
		<div class="panel-heading">User: <?php echo $_SESSION['username'] ?></div>
                    <div class="panel-body">
			<form class-"form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<div class="form-group">
					<label for="taskname" class="col-md-3 control-label">Taskname</label>
					<div class="col-md-7 control-label">
						<input type="text" class="form-control" name="taskname" placeholder="Taskname">
						<p class="text-danger"><?php echo $err_taskname ?>
					</div>
				</div>
				<div class="form-group">
					<label for="starttime" class="col-md-3 control-label">Start Time</label>
					<div class="col-md-7 control-label">
						<input type="datetime-local" class="form-control" name="starttime">
						<p class="text-danger"><?php echo $err_starttime ?>
					</div>
				</div>
				<div class="form-group">
					<label for="endtime" class="col-md-3 control-label">End Time</label>
					<div class="col-md-7 control-label">
						<input type="datetime-local" class="form-control" name="endtime">
						<p class="text-danger"><?php echo $err_endtime ?>
					</div>
				</div>
				<div class="form-group">
					<label for="location" class="col-md-3 control-label">Location</label>
					<div class="col-md-7 control-label">
						<input type="text" class="form-control" name="location" placeholder="Location">
						<p class="text-danger">
					</div>
				</div>
				<div class="form-group">
					<label for="description" class="col-md-3 control-label">Description</label>
					<div class="col-md-7 control-label">
						<input type="text" class="form-control" name="description" placeholder="Description">
						<p class="text-danger">
					</div>
				</div>
				<div class="form-group">
					<label for="important" class="col-md-3 control-label">Important</label>
					<div class="col-md-7 control-label">
						<input type="checkbox" class="form-control" name="important">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-3">
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</div>
			</form>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>
