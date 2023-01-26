<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bowling System</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/cd742a0dd6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body style="overflow-x: hidden; padding-top: 5px;">
    <div class="body">
        <div class="form-container sign-up-form">
            <div class="imgBox sign-up-imgbox">
                <div class="sliding-link">
                    <p>Already a member?</p>
                    <span class="sign-in-btn"><a href="login.php"> Sign in</a></span>
                </div>
                <img src="../assets/images/signup-img.png" alt="">
            </div>
            <div class="form-box sign-up-box">
                <h2>Sign Up</h2>
                <form action="register.php" method="post" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="field">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="firstname" placeholder="Enter Your Firstname">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="field">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="middlename" placeholder="Enter Your Middlename">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="field">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="lastname" placeholder="Enter Your Lastname">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="field">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input type="text" name="username" placeholder="Enter Your Username">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="field">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <input type="email" name="email" placeholder="Enter Your Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="field">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <input type="number" name="contactno" placeholder="Enter Your Contactno.">
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <i class="fa-solid fa-unlock"></i>
                        <input type="password" maxlength="8" name="pwd" placeholder="Password">
                    </div>
                    <div class="field">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" maxlength="8" name="cpwd" placeholder="Confirm password">
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="formFile" class="form-label">Profile Image - Must be JPG/PNG with maximum size 500 KB</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                    <input type="hidden" name="user_type" value="customer">
                    <input class="submit-btn" type="submit" value="Sign Up" style="margin-top: 20px;">
                </form>

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