<?php $page_code = "messages"; ?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include("includes/head.php");  ?>
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
                            <h6>All Messages <span class="message_notification_span"><?php echo $notification_message_on_off ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container card-two-message">
                                <table>
                                    <tr>
                                        <th>Message</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($show_visitor_messages)) {
                                    ?>
                                        <tr>
                                            <td class="tdmessages"><span style="font-size: small;" class="text-warning"><?php echo $row['sender_subject'];  ?></span><br><?php echo substr($row['sender_message'], 0, 200);  ?>....</td>
                                            <td class="name"><?php echo $row['sender_name'];  ?></td>
                                            <td class="emails"><?php echo $row['sender_email'];  ?></td>
                                            <td><?php echo $row['received_date'];  ?></td>
                                            <td class="action">
                                                <form action="read" method="post">
                                                    <input type="text" hidden name="Messageid" value="<?php echo $row['id'] ?>">
                                                    <input type="submit" class="btn btn-warning btn-sm mb-0 w-100" style="background-color: <?php if($row['read_status'] == 0){echo "#FB6340"; }?><?php if($row['read_status'] == 1){echo "#ccc"; }?>!important;" name="submit" value="Open">
                                                </form>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </table>
                                <br><br>
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