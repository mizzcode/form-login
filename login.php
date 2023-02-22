<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Eksternal Css -->
    <link rel="stylesheet" href="assets/style.css">
    <title>Login Page</title>
</head>

<body>
    <main>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php">
                    <h2>Login</h2>
                    <div class="inputBox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="inputBox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="forget">
                        <input type="checkbox">
                        <label>Remember Me <a href="forget.php">Lupa Password?</a></label>
                    </div>
                    <button>Log In</button>
                    <div class="register">
                        <p>Belum Punya Akun? <a href="register.php">Daftar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>