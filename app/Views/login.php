<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Set website title for your website. Default: Document -->
        
            <title>📫 Login • Kitsumyuzu Production</title>

        <!-- Links -->
            
            <link rel="icon" href="<?= base_url('images') ?>/kmz-icon.ico" type="image/x-icon">

            <link rel="stylesheet" href="<?= base_url('admin-panel/login.css') ?>">
            <link rel="stylesheet" href="<?= base_url('vendor') ?>/plugins/fontawesome-free/css/all.min.css">

    </head>

    <body>

        <div class="box">

            <span class="borderline"></span>

            <form action="<?= base_url('/home/login') ?>" method="post">
        
                <div class="logo">

                    <img src="<?= base_url('images') ?>/kmz-icon.ico" alt="icon">

                </div>
                
                <h2>Login</h2>

                <div class="inputBox">

                    <input type="text" name="authentication_username" maxlength="75" required autofocus>
                    <span>Username</span>
                    <i></i>

                </div>

                <div class="inputBox">

                    <input type="password" name="authentication_password" maxlength="100" required>
                    <span>Password</span>
                    <i></i>

                </div>

                <div class="links">
                    
                    <a href="#">Forgot Password!</a>
                    
                </div>


                <!-- Submit -->

                    <input type="submit" value="Login">
                    
            </form>

        </div>

    </body>

</html>