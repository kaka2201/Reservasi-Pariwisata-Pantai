<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="assets/icon.png" />
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
            padding: 30px; 
            max-width: 400px; 
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
            width: calc(100% - 22px); 
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
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/logo.png" alt="" />
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">Categories</a>
            <a href="login.php">Login</a>
        </nav>
    </header>
    <main>
        <div class="form-login">
            <h3>Register</h3>
            <form id="registerForm">
                <input type="email" id="email" name="email" placeholder="Email" />
                <input type="text" id="username" name="username" placeholder="Username" />
                <input type="password" id="password" name="password" placeholder="Password" />
                <button type="button" onclick="register()">Register</button>
            </form>
        </div>
    </main>
    <footer>
        <h4>&copy; Ingin Liburann Nyaman Dan Tenang? Sama Kami Aja !!!</h4>
    </footer>

    <script>
        function register() {
            var email = document.getElementById("email").value;
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            if (email.trim() === "" || username.trim() === "" || password.trim() === "") {
                alert("Please fill in all fields!");
                return;
            }

            // Simpan data pengguna ke localStorage
            var user = {
                email: email,
                username: username,
                password: password
            };

            localStorage.setItem("user", JSON.stringify(user));
            alert("Registration successful!");

            // Redirect ke halaman login
            window.location.href = "login.php";
        }
    </script>
</body>
</html>
