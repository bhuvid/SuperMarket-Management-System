<html>
  <head>
    <title>Invoice Portal</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <style>
      /* body
      {
        background-image:url("back10.png");
        background-size:1710px 900px;
      } */
      body
      {
        background-image:url("back10.png");
        background-size:1930px 900px;
      }
.row {
  display: flex;
  flex-wrap: wrap;
  width: 40%;

  right: 570px;
  position: absolute;
}
      .button-65 {
  appearance: none;
  backface-visibility: hidden;
  background-color: #2f80ed;
  border-radius: 10px;
  border-style: none;
  box-shadow: none;
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-family: Inter,-apple-system,system-ui,"Segoe UI",Helvetica,Arial,sans-serif;
  font-size: 15px;
  font-weight: 500;
  height: 50px;
  letter-spacing: normal;
  line-height: 1.5;
  outline: none;
  overflow: hidden;
  padding: 14px 30px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transform: translate3d(0, 0, 0);
  transition: all .3s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  vertical-align: top;
  white-space: nowrap;
}

.button-65:hover {
  background-color: #1366d6;
  box-shadow: rgba(0, 0, 0, .05) 0 5px 30px, rgba(0, 0, 0, .05) 0 1px 4px;
  opacity: 1;
  transform: translateY(0);
  transition-duration: .35s;
}

.button-65:hover:after {
  opacity: .5;
}

.button-65:active {
  box-shadow: rgba(0, 0, 0, .1) 0 3px 6px 0, rgba(0, 0, 0, .1) 0 0 10px 0, rgba(0, 0, 0, .1) 0 1px 4px -1px;
  transform: translateY(2px);
  transition-duration: .35s;
}

.button-65:active:after {
  opacity: 1;
}

@media (min-width: 768px) {
  .button-65 {
    padding: 14px 22px;
    width: 176px;
  }
}
      .phptable
      {
        background:white;
        border: 1;
        align
      }
      table,th,td {
  border: 1px solid;
  width: 30%;
  height:50%;
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
section {
  height: 100vh;
  width: 100%;
  display: grid;
  place-items: center;
}
/* .row {
  display: flex;
  flex-wrap: wrap;
  width: 50%;
  right: 400px;
  position: absolute;
} */
.column {
  width: 40%;
  padding: 0 1em 1em 1em;
  text-align: center;
}
.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
}
h3 {
  font-size: 20px;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
}
p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
}
.icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
}

@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}  </style>
  </head>
  <body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="manage.php">A2Z SUPERMARKET</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="addpro.php">ADD PRODUCT</a></li>
      <li><a href="edit.php">EDIT</a></li>
      <li><a href="del.php">DELETE</a></li>
      <li><a href="invoice.php">INVOICE</a></li>
      <li><a href="view.php">VIEW</a></li>
   </ul>
   <ul class="nav navbar-nav navbar-right">
     <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
   </ul>
    </ul>
  </div>
</nav><br>
<br>
<br>
<div class="row">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-shopping-cart"></i>
            </div>
            
            <center> <h1>Enter product to Add in the Bill</h1><br>
    <form method="POST" action="invoice.php">
    <label for="txt1">PRODUCT:</label><input type="text" id="txt1" name="txt1"/><br><br>
    <label for="txt2">QUANTITY:</label><input type="text" id="txt2" name="txt2"/><br><br>
    <input type="submit" name="btn"class="button-65" value="Add" /><br><br>
  
<!-- <input type="submit" name="confirm" value="Confirm Purchase">   -->
</form>  
    <?php
   $con = mysqli_connect('localhost','root','','supermarket');
   $tot=0;
   echo"<center>";
    echo "<table class='phptable' border='1'>
    <tr>
    <th>Product Name</th>
    <th>Price</th>
    <th>Quantity</th>
    </tr>";
 if(isset($_POST["btn"])){
  
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }

    else{
    $a=$_POST["txt1"];
    $sql = "Select Pname,Price FROM product where Pname='$a';";
    
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)){
      $b=$_POST["txt2"];
      mysqli_query($con,"INSERT INTO invoice (Pname,Pprice,Pquantity) VALUES ('$row[0]','$row[1]','$b')");
    }
}
 }
 
 $result = mysqli_query($con,"SELECT * FROM invoice");

 while($row = mysqli_fetch_array($result))
 {
     echo "<tr>";
     echo "<td>".$row[0]."</td>" . "<td>" . $row[1]."</td>"."<td>" . $row[2]."</td>";
     echo "</tr>";
     $tot=$tot+($row[1]*$row[2]);
 } 
 echo "<td></td><td>Total</td>" . "<td>" . $tot."</td>";
   echo "</table>";
   echo"</center>";

//    if(isset($_POST["confirm"])){
//     if (!$con)
//     {
//         die('Could not connect: ' . mysqli_error());
//     }
//     else{
//     $a=$_POST["txt1"];
//     $quant=(int)$_POST["txt2"];
//     $sql1="select Stock from product where Pname='$a'";
//     $result1 =mysqli_query($con,$sql1);
//     $finres=0;
//     while($row1 = mysqli_fetch_array($result1))
//  {
//   $finres=$row1[0];
//  }
//     //$finres=$finres-$quant;
//     echo "<script>window.alert($result1)</script>";  
//     $sql = "Update product set Stock=$finres where Pname='$a';";
//     $result = mysqli_query($con,$sql);
//    }
//   }
   mysqli_close($con);
?>
 <form method="post" action="invoice.php">
    <br><br><input type='submit' name='invoice'class="button-65" value='Generate Invoice' >
</form>   
</center>
<?php
   if(isset($_POST["invoice"])){
    $con = mysqli_connect('localhost','root','','supermarket');
      if (!$con)
      {
          die('Could not connect: ' . mysqli_error());
      }
      else{
      $result = mysqli_query($con,"Select Pname,Pquantity FROM invoice;");
      while($row = mysqli_fetch_array($result)){
        $sql1="select Stock from product where Pname='$row[0]'";
        $result1 =mysqli_query($con,$sql1);
        $finres=0;
      while($row1 = mysqli_fetch_array($result1))
      {
      $finres=$row1[0];
      }
      $finres=$finres-$row[1];
      // echo "<script>window.alert($finres)</script>"; 
        $sql = "Update product set Stock=$finres where Pname='$row[0]';";
        $result2 = mysqli_query($con,$sql);
     }
     echo "<script>window.open('invoicepage.php')</script>";
  }
   }
   
    
    ?>
</div>
        </div>
  </body>
  </html>
  