<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="div1">
      <br />
      <p>Customer Portal For Supermarket</p>
      <br />
      <form action="customer.html">
        <button type="submit" onclick="customer.html">Check Info</button>
      </form>
    </div>

    <div class="div2">
      <h1>Admin Login</h1>
      <br />
      <form action="manage.php" onsubmit="return myfunc()">
        <input
          id="un"
           name="uname"
          type="text"
          size="32"
          placeholder="Username"

        /><br />

        <input
          id="psw"
          style="margin-bottom: 7px"
          type="text"
          size="32"
          placeholder="Password"
          name="pass"
        /><br /><br />

        <button>Sign in</button>
      </form>
    </div>
  </body>
  <script>
    function myfunc() {
      var a = document.getElementById("un").value;
      var b = document.getElementById("psw").value;
      if (!(a == "admin" && b == "abc")) {
        alert("Invalid password or Username");
        return false;
      } else {
        return true;
      }
    }
  </script>
</html>
