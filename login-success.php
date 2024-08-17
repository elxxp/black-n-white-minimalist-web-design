<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="success.css">
    <div class="web-header">
        <header>
            <div class="head-logo">
                <p><a href="index.html"><b>YourWeb</b></a></p>
            </div>

            <div class="head-fill">
                <ul>
                    <il><a href="#home">Home</a></il>
                    <il><a href="#about">About</a></il>
                    <il><a href="#contact">Contact</a></il>
                    <il><a href="https://github.com/elxxp">GitHub</a></il>
                </ul>
            </div>

            <div class="head-account">
                <ul>
                    <il><a class="login-btn" href="login.html">Login</a></il>
                    <il><a class="started" href="create.html">Get Started</a></il>
                </ul>
            </div>
        </header>
    </div>
</head>
<body>
    <?php
        $usn=$_POST["usn"];
    ?>
    <center>
        <div class="success-content">
            <div>
                <h2>Welcome back!</h2>
            </div>

            <div class="success-back">
                <p>Yooo its been a year <b><?php echo $usn?>!</b> how are you?</p>
            </div>
        </div>
    </center>
</body>
</head>