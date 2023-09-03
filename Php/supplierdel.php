<html>
    <head>
        <title>supplier del</title>
</head>
<body>
<?php 
	$connect = mysqli_connect('localhost','root','','supermarket');
	if(!$connect){
		die("Database connection Error".mysqli_error());
		}
?>
<div id="body">

       <?php
        if(isset($_GET['name'])&isset($_GET['id'])&isset($_GET['deal'])){
            if(!strcmp(strtolower($_GET['name']),"supplier")) {
              $result= mysqli_query($connect,"DELETE FROM supplier where sname='{$_GET['id']}' and sdealer='{$_GET['deal']}'");
              if(!$result)echo "Deletion of supplier is not successful".mysqli_error();
              else echo "<script>window.open('supplierview.php','_self')</script>";
            }
        }
?>
    </div>
</div>
<?php 
if(isset($connect))
mysqli_close($connect);
?>
</body>
</html>