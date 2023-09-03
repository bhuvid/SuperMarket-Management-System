<html>
  <head>
    <title>Invoice</title>
  </head>
  <body>
    <?php
   require "invlib/invoicr.php";
    $invoicr->set("company", [
        "",
    "Code Boxx", 
    "Vit Shopping Complex,Vellore Engg College,Vellore,632014",
    "Phone: 9842516843",
    "A2Z@gmail.com"
    ]);
    $date = date('d-m-Y');
    $invoicr->set("head", [
      ["Invoice ID", "CB-123-456"],
      ["Invoice Date", $date]
    ]);
    // $invoicr->set("billto", [
    //   "Customer Name",
    //   "Street Address", 
    //   "City, State, Zip"
    // ]);
    // $invoicr->set("shipto", [
    //     "Customer Name",
    //     "Street Address", 
    //     "City, State, Zip"
    //   ]);
    $items = [
      ];
      $totalprice=0;
    $con = mysqli_connect('localhost','root','','supermarket');
    if (!$con)
    {
        die('Could not connect: ' . mysqli_error());
    }
    else{
    $sql = "SELECT * FROM invoice";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
    {
        $amt=$row[2]*$row[1];
        array_push($items,[$row[0],"",$row[2],$row[1],$amt]);
        $totalprice+=$amt;
    }
}
    mysqli_close($con);
    $invoicr->set("items", $items);

$invoicr->set("totals", [
["GRAND TOTAL", $totalprice]
]);
$invoicr->template("simple");
//$invoicr->outputHTML();
$invoicr->outputPDF();
    ?>
      </body>
  </html>