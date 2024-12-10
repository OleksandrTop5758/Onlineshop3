<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <span class="singup-tab" onclick="showRegisterForm()">Sign up</span>
            <span class="login-tab" onclick="showLoginForm()">Log in</span>
        </div>
        <div class="form-body">
            <?php if (isset($_GET ['form']) && $_GET['form'] === 'register'): ?>
                <div id="register-form" style="display: block;">
                    <form action="register_process.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="surname" placeholder="Smith" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="● ● ● ● ● ● ● ●" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" name="confirm_password" placeholder="● ● ● ● ● ● ● ●" required>
                        </div>
                        <button type="submit" class="btn-register">Register</button>
                        <div class="divider"></div>
                        <button type="button" class="btn-google">
                            <span class="google-icon"></span>
                            <span>Sign up with Google</span>
                        </button>
                    </form>
                </div>
            <?php else: ?>
                <div id="login-form" style="display: block;">
                    <form action="login_process.php" method="post">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="● ● ● ● ● ● ● ●" required>
                        </div>
                        <button type="submit" class="btn-login">Log in</button>
                        <div class="divider"></div>
                        <button type="button" class="btn-google">
                            <span class="google-icon"></span>
                            <span>Continue with Google</span>
                        </button>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <script src="./js/register.js" defer></script>
</body>

</html>
