<?php
//database and emails
include('connection.inc.php');

// Error, connection and other
include('MainFunctions.php');
//email pass and salt code
include("confidentials.php");


session_start();

if (!isset($_SESSION['USER_LOGIN'] )) {
?>
    <script>
        window.location.href = 'login';
    </script>
<?php
}

if (isset($_SESSION['USER_LOGIN'])) {
	$username = $_SESSION['username'];
}
