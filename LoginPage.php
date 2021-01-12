<?php
session_start();
?>
<html>
    <head>
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
                    },
                    messages: {
                        username: {
                            required: "Please enter your username",
                            pattern: "Username is incorrect"
                        },
                        password: {
                            required: "Please enter your password",
                            pattern: "Password is incorrect"
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
        <div class="container">
            <h3>Yishun Community Hospital - Login</h3>
            <form method="post">
                <div class="input-group mb-3">
                    <table>
                    <tr>
                        <td><label for="idUsername">Username:</label></td>
                        <td><input type="text" name="username"
                                   id="idUsername" required/></td>
                    </tr>
                </div>            
                    <tr>
                        <td><label for="idPassword">Password:</label></td>
                        <td><input type="password" name="password"
                                   id="idPassword" required/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login"/></td>
                    </tr>
                </table>
            </form>
        </div>   
    </body>
</html>

