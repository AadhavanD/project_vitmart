<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form - VITMart</title>
    <link rel="stylesheet" href="./src/main.css">
</head>
<body>
    <div class="container">
        <!-- Login Form -->
        <form class="form" id="login" action="login.php" method="POST">
            <h1 class="form__title">Login to VITMart</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="email" class="form__input" autofocus placeholder="VIT Student Mail">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" id="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a class="form__link" href="#" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>

        <!-- Create Account Form -->
        <form class="form form--hidden" id="createAccount" method="post" action="send.php">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" id="signupUsername" name="regno" class="form__input" autofocus placeholder="VIT Register Number">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" id="email" name="email" class="form__input" autofocus placeholder="VIT Student Mail">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" id="password" name="pass" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" id="confirmPassword" name="c_pass" class="form__input" autofocus placeholder="Confirm password">
                <div class="form__input-error-message"></div>
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a class="form__link" href="#" id="linkLogin">Already have an account? Sign in</a>
            </p>
        </form>
    </div>
    <script src="./src/main.js"></script>
</body>
</html>
