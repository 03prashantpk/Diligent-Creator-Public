<?php $page_code = "messages"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include("includes/head.php");  ?>

<?php

@$message_id =  $_POST['Messageid'];

if ($message_id == "") {
?>
    <script>
        window.location.href = 'messages';
    </script>

<?php
}

$username = $_SESSION['username'];

$read_message_with_messageID = "SELECT * from dev_messages where user_id='$user_id' AND id='$message_id'";
$message_by_ID = mysqli_query($conn, $read_message_with_messageID);

while ($row = mysqli_fetch_assoc($message_by_ID)) {
    $sender_name = $row['sender_name'];
    $sender_email = $row['sender_email'];
    $sender_subject = $row['sender_subject'];
    $sender_message = $row['sender_message'];
    $receiving_date = $row['received_date'];
}

$query = "UPDATE dev_messages SET read_status=1 WHERE id='$message_id' AND username='$username' ";

if (mysqli_query($conn, $query)) {
    //echo "<span style='color: green;'>Archived Successfully!</span>";
} else {
   // echo mysqli_error($conn);
}

?>
<script src="functions/backend.js"></script>

<body class="g-sidenav-show bg-gray-100">
    <!-- Sidebar ---->
    <?php include("includes/sidebar.php");  ?>

    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <?php include("includes/navbar.php");  ?>
        <!-- End Navbar -->
        <?php include("includes/top-bar.php");  ?>

        <div class="container-fluid py-4">
            <div class="row" id="messages">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            <h6>Read Message <span class="message_notification_span"><?php echo $notification_message_on_off ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2" style="<?php if ($dark == '0') { echo "background-color: #fff !important;"; } ?>">
                            <div class="container card-two-message" style="padding: 10px 20px !important;">

                                <div class="row" style="padding: 20px !important;">
                                <div class="col-md-11">
                                    <span style="float:right !important; font-size: 12px" class="text-warning" id="response_message"></span>
                                </div>
                                    <div class="col-md-10">
                                        <h5><?php echo $sender_subject; ?> <span style="font-size: 13px; color: grey;"><?php echo $receiving_date; ?></span></h5>
                                    </div>
                                    <div class="col-md-2">
                                        <input hidden id="Message_id" type="text" value="<?php echo $message_id; ?>">
                                        <span  class="text-warning" style="padding-right: 10px;">Read <i class="fas fa-check-double"></i></span>
                                        <span class="text-warning" onclick="archive_message()"><i class="fas fa-archive" id="archive" onclick="archive_message()" ></i></span>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="text-danger"><?php echo $sender_email; ?></h6>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                    </div>
                                    <div class="col-md-12">
                                        <p><?php echo $sender_message; ?></p>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                    </div>

                                    <div class="col-md-11">
                                        <div class="form-group">
                                            <input class="form-control shadow" type="text" id="reply_message" value="" placeholder="Write a Message" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                        <a class="btn btn-warning btn-sm w-10 mb-3" style="float: right;" onclick="reply()" id="reply_button" type="submit"> <i class="fas fa-paper-plane"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer and right config pannel-->
            <?php include("includes/footer.php");  ?>
        </div>
    </main>

    <!-- Settings --->
    <?php include("includes/settings.php");  ?>
</body>

</html>