    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login || Instagram</title>
        <link rel="shortcut icon" href="public/images/favicon/instagram.ico" type="image/x-icon">
    </head>
    <body>
        <section class="pageContainer">
            <main class="row"> 
                    <div class="col-1">
                        <div class="heroImg"></div>
                    </div>  
                    <article class="col-2">
                        <form class="form">
                            <div class="siteLogoContainer">
                                <img src="public/images/logo/instagram.png" alt="Instagram Logo">
                            </div>
                            <input type="text" placeholder="Email or Username" class="form--input" name="email_username">
                            <div class="passwordContainer">
                                <input type="password" placeholder="Password" class="form--input" name="password" id="password">
                                <span class="show_hide_text cursor-pointer" id="show_hide_password">Show </span>    
                            </div>
                            <button class="button cursor-pointer" type="submit" name="submitButton">Log In</button>
                            <span class="separator">Or</span>
                            <a href="#" class="password_reset">Forgot Password</a>
                        </form>
                        <footer class="form--footer">
                            Don't have an account? <a href="register.php">Sign up</a>
                        </footer>
                    </article>
            </main>
        </section>
        
    </body>
    </html>