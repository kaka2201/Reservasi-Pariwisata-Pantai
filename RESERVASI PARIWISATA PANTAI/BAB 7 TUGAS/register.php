<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <style>
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #00897b;
            color: #e0f7fa;
            padding: 10px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            height: 50px;
            width: auto;
        }

        nav a {
            color: #e0f7fa;
            text-decoration: none;
            margin: 0 10px;
            font-weight: bold;
        }

        main {
            padding: 20px;
            text-align: center;
        }

        .form-login {
            background-color: #fff;
            border-radius: 10px;
            padding: 30px; /* Menyesuaikan padding */
            max-width: 400px; /* Menyesuaikan lebar maksimum */
            margin: 0 auto;
        }

        .form-login h3 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"],
        button {
            width: calc(100% - 22px); /* Menyesuaikan lebar input dengan padding dan border */
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-family: Arial, sans-serif;
        }

        button {
            background-color: #00897b;
            color: #fff;
            cursor: pointer;
        }

        footer {
            background-color: #00897b;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
  <link rel="icon" href="assets/logo.png" />
  <link rel="stylesheet" href="css/style.css" />
<body>
  <div class="container">
	<header>
   	  <nav>
	    <div class="logo">
			<img src="assets/logo.png" alt="" style="width: 70px;"/>
		   </div>
		   <input type="checkbox" id="click" />
		   <label for="click" class="menu-btn">
			  <i class="fas fa-bars"></i>
		   </label>
		   <ul>
		  <li><a href="login.php">Home</a></li>
		  <li><a href="#">Reservasi</a></li>
		  <li><a href="login.php" class="btn_login">Login</a></li>
		</ul>
	   </nav>
      </header>
	<main>
  	  <div class="center">
	     <div class="form-login">
		  <h3>Register</h3>
		  <form action="register-proses.php" method="post">
		    <input class="input" type="email" name="email" placeholder="Email" />
		    <input class="input" type="text" name="username" placeholder="Username"/>
		    <input class="input" type="password" name="password"  placeholder="Password" />
  		    <button type="submit" class="btn_login" name="register" id="register"> Register </button>
		  </form>
	     </div>
	   </div>
	</main>
	<footer>
    <script>
        function register() {
            var email = document.getElementById("email").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            if (email.trim() === "" || username.trim() === "" || password.trim() === "") {
                alert("Please fill in all fields!");
                return;
            }
            alert("Registration successful!");
        }
    </script>
	</footer>
   </div>
</body>
</html>