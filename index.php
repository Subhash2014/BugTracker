<?php
    if ($_REQUEST['login']) {
        include('inc/authentication.php');
        $auth = new Authentication();
        $uid = $auth->login($_REQUEST['username'], $_REQUEST['password']);
        if ($uid) {
            header('Location: user/index.php');
            $_SESSION['uid'] = $uid;
        }
    }
?>
<!doctype html>
<html>
<head><title>BugTracker - Login</title></head>
<body>
<h1>Login</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Username</label>
<input type="text" name="username" />
<label>Password</label>
<input type="password" name="password" />
<input type="submit" name="login" value="Log In" />
</form>
</body>
</html>