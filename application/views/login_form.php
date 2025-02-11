<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
</head>
<body class="login">
   
        <h2 class="h2">Login</h2>
        <form class="index" method="post" action="<?php echo site_url('auth/do_login'); ?>">
            <input type="text" name="username" placeholder="Username" class="input" required>
            <input type="password" name="password" placeholder="Password" class="input" required>
            <button type="submit" id="login">Login</button>
        </form>
    
</body>
</html>
