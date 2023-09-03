 <html>
  <head>
    <title>View Portal</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
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
  width: 40%;
  right: 500px;
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
}
      </style>
  </head>
  <body >
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
  </div>
</nav>
<br>
<center><h1 style="color:white">Details of the products which are currently available in our supermarket</h1></center>
<br>
<br>
<div class="row">
        
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-shopping-cart"></i>
            </div>
            <?php
 $con = mysqli_connect('localhost','root','','supermarket');
  if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }

    else{

      echo"<center>";
    echo "<table class='phptable'> 

    <tr>
    <th>Product Name</th>
    <th>Product Section</th>
    <th>Product Row</th>
    <th>Floor</th>
    <th>Stock Availability</th>
    <th>Price</th>
    </tr>";
        

    $sql = "SELECT * FROM product";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>".$row[0]."</td>" . "<td>" . $row[1]."</td>". "<td>" . $row[2]. "</td>"."<td>" . $row[4]. "</td>"."<td>" . $row[3]."</td>"."<td>" . $row[5]."</td>";
        echo "</tr>";
        echo "<br>";
    }
}
echo "</table>";
echo"</center>";
    mysqli_close($con);
?>
            </p>
          </div>
        </div>
   
  </body>
  </html>
