<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <header class="header container">
        <a class="logo link" href="login.php">ConnectCo</a>
        <nav class="navigation">
            <button type="button" class="login link" href="login.php">Login</button>
            <button type="button" class="signup link" href="">Sign Up</button>
        </nav>

    </header>

    <main class="main main-container">
        <div class="center">
            <div class="form-container">
                <h1 class="welcome">Welcome</h1>
                <p class="description">We are glad to see you back with us</p>
                <form autocomplete>
                    <div class="input-container">
                        <div class="input-icon">
                            <svg width="24.638" height="24">
                                <use href="icons.svg#username" />
                            </svg>
                        </div>
                        <input class="form-input" type="text" required name="username" id="username" placeholder="Username">
                    </div>

                    <div class="input-container">
                        <div class="input-icon">
                            <svg width="24.638" height="24">
                                <use href="icons.svg#password" />
                            </svg>
                        </div>
                        <input class="form-input" type="password" required name="username" id="username" placeholder="Password">
                    </div>
                    <button type=button class="submit">Next</button>

                </form>
            </div>
            <div>
                <img src="office.png" alt="office" width="702" height="700" />
            </div>
        </div>

    </main>
</body>

</html>