<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
        <link href="css/all.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                rules: {
                        username: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{6,}$/
                        },
                        password: {
                            required: true,
                            pattern: /^[0-9a-zA-Z]{6,}$/
                        },
                        height: {
                            required: true
                        },
                        weight: {
                            required: true
                        },
                        dob: {
                            required: true,
                            pattern: /^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/
                        },
                        activeLevel: {
                            required: true
                    },
                    messages: {
                        username: {
                            required: "Please enter your username",
                            pattern: "Username reqirement is not met"
                        },
                        password: {
                            required: "Please enter your password",
                            pattern: "Password length is not met"
                        },
                        height: {
                            required: "Put in your height"
                        },
                        weight: {
                            required: "Put in your weight"
                        },
                        dob: {
                            required: "Date of birth should not leave blank",
                        },
                        activeLevel: {
                            required: "Please choose an active level",
                        },
                    },
                    submitHandler: function () {
                        return true;
                    }
                });

            });
        </script>
    </head>
    <body>
        <h1>Yishun Community hospital - Sign up</h1>
        <div class="container">
            <form name="yhsignup" method="post" action="doSignUp.php.php" class="form-horizontal">
                <div class="signup">
                    <label for="idUsername">Username:</label>
                    <input name="username" type="text" id="idUsername" class="form-control" required/>
                </div>
                <div class="signup">
                    <label for="idPassword">Password:</label>
                    <input name="password" type="text" id="idPassword" class="form-control" required/>
                </div>
                <div class="signup">
                    <label for="idHeight">Height:</label>
                    <input name="height" type="text" id="idHeight" class="form-control" required/>
                </div>
                <div class="signup">
                    <label for="idWeight">Weight:</label>
                    <input name="weight" type="text" id="idWeight" class="form-control" required/>
                </div>
                <div class="signup">
                    <label for="idDob">Date of Birth:</label>
                    <input name="dob" type="text" id="idDob" class="form-control" required/>
                </div>
                <div class="signup">
                    <label for="idDob">Active Level:</label>
                    <select name="activeLevel" id="idActive">
                        <option value="">Sedentary</option>
                        <option value="">Moderate</option>
                        <option value="">Active</option>
                    </select>
                </div>
                <input value="SignUp" type="submit">
            </form> 
        </div>   
    </body>
</html>

