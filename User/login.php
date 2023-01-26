<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/cd742a0dd6.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="body">
        <div class="form-container sign-in-form">
            <div class="form-box sign-in-box">
                <h2> Login </h2>
                <form action="" method="POST">
                    <div class="field">
                        <i class="fa-solid fa-at"></i>
                        <input type="email" name="email" placeholder="Email ID">
                       
                    </div>
                    <div class="field">
                        <i class="fa-solid fa-unlock"></i>
                        <input class="password-input" name="pwd" type="password" placeholder="Password">
                        <div class="eye-btn"><i class="fa-solid fa-eye-slash"></i></div>
                    </div>
                    <div class="forgot-link">
                        <a href="forgetemail.php">Forget Password?</a>
                    </div>
                    <input class="submit-btn" type="submit" value="Login">
                </form>
            </div>
            <div class="imgBox sign-in-imgbox">
                <div class="sliding-link">
                    <p>Don't have an account?</p>
                    <span class="sign-up-btn"><a href="registration.php"> Sign Up</a></span>
                </div>
                <img src="../assets/images/signin-img.png" alt="">
            </div>
        </div>
    </div>
    <script>
    const textInputs = document.querySelectorAll("input");

    textInputs.forEach(textInput => {
        textInput.addEventListener("focus", () => {
            let parent = textInput.parentNode;
            parent.classList.add("active");
        });
        textInput.addEventListener("blur", () => {
            let parent = textInput.parentNode;
            parent.classList.remove("active");
        });
    });

    const passwordInput = document.querySelector(".password-input");
    const eyeBtn = document.querySelector(".eye-btn");
    eyeBtn.addEventListener("click", () => {
        if (passwordInput.type == "password") {
            passwordInput.type = "text";
            eyeBtn.innerHTML = "<i class='fa-solid fa-eye'></i>";
        } else {
            passwordInput.type = "password";
            eyeBtn.innerHTML = "<i class='fa-solid fa-eye-slash'></i>";
        }
    })
    </script>
</body>

</html>