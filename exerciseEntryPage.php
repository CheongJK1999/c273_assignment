<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function () {
             $("#slider").slider({
                    value: 5,
                    min: 5,
                    max: 120,
                    step: 1,
                    slide: function (event, ui) {
                        $("#idMinute").val(ui.value);
                    }
                });
                $("#idMinute").val($("#slider").slider("value"));
        });
        </script>
    </head>
    <body>
        <h1>Yishun Community hospital</h1>
        <h2>Type your Exercise type and duration below:</h2>
        <div class="container">
            <form name="exerciseEntry" method="post" action="doExerciseEntryPage.php.php.php" class="form-horizontal">
                <select name="exerciseType" id="idType">
                    <option value="">Exercises</option>
                    <option value="">Walk</option>
                    <option value="">Run</option>
                    <option value="">Cycle</option>
                </select>
                <br>
                <br>
                <div class="minDuration">
                    <label for="minSlider">Duration of Exercise
                        <input name="exerciseSlider" type="text" id="idMinute" readonly style="border:0; color:#f6931f; font-weight:bold; text-align:right" size="1">
                    </label>
                    <div id="slider"></div>
                </div>
            </form> 
        </div>   
    </body>
</html>

