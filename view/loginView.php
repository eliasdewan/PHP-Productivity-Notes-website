<!DOCTYPE html>
<html>
<!-- part of the head loaded from header filer -->

<head>
    <title>
        Login
    </title>
</head>

<body>
    <?php if (isset($error_message)) : ?>
        <div class="alert alert-danger"><?= $error_message; ?></div>
    <?php endif; ?>

    <div class="container login">
        <form method="POST" action="../controller/loginController.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" autocomplete="off" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" autocomplete="off" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="login">Login</button>
                <button type="submit" class="btn btn-secondary" name="register">Register</button>
            </div>
        </form>

    </div>
</body>

</html>