<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <script src="../functions/user-not-found.js"></script>
    <link rel="stylesheet" href="../functions/usernot-found.css">
    <style>
        .search_input {
            padding: 8px;
            width: 100%;
        }

        .search {
            padding: 10px;
        }
    </style>
</head>

<body>
    <!-- using RainEffect.js -->
    <canvas id="cv_raineffect"></canvas>
    <div id='letter'>
        <div>
            <p class="bold">User</p>
            <p>Not Found.</p>
            <center>
                <span style="text-align: center !important; font-size: 22px;">Maybe we do not have account with
                    <span style="color: yellow; font-weight: 600;"> '<?php echo $_REQUEST['username']; ?>' </span> username. Or, the account is in hidden mode.</span> <br>
                <div class="search">
                    <button class="search_input" onclick="location.href='../'">Home</button>
                </div>
            </center>
        </div>
    </div>

</body>

</html>