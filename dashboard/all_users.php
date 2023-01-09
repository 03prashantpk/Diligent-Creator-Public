
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?php include("includes/head.php");  ?>


<?php

//error_reporting(0);
// Extra security--> If user is not Admin redirect on index page
if($IsAdmin != 1){
    ?>
    <script>
        window.location.href='./';
    </script>
    <?php
}

$page_code = "users_profile"; 

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
                            <h6>Users Data <span class="message_notification_span"><?php if($IsAdmin == 1)echo "Admin Mode"; ?></span></h6>
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="container card-two-message pb-4">
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Joined Date</th>
                                        <th>Mode</th>
                                        <th style="text-align: center;">Block Status</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($fatch_user_data)) {
                                    ?>
                                        <tr>
                                            <td ><span class="text-warning"><?php echo $row['fname'] ." ". $row['lname'] ;  ?></td>
                                            <td><?php echo $row['email'];  ?></td>
                                            <td class="emails"><?php echo $row['username'];  ?></td>
                                            <td><?php echo $row['joined_on'];  ?></td>
                                            <td><?php if($row['public'] == 1){echo "<span style='color:#FB6340; font-weight: 600;'>Public</span>"; $color_btn_bg = '#FB6340';}else{echo "<span style='color:#344767; font-weight: 600;'>Hidden</span>"; $color_btn_bg = '#344767';}  ?></td>
                                            <td style="text-align: center;"><?php if($row['block'] == 1){echo "<span style='color:red; font-weight: 600;'>Blocked</span>";}else{echo "<span style='color:green; font-weight: 600;'>OK</span>";}  ?></td>
                                            <td class="action">
                                                <form action="user_action" method="post">
                                                    <input type="text" hidden name="usersId" value="<?php echo $row['id'] ?>">
                                                    <input type="submit" class="btn btn-warning btn-sm mb-0 w-100" style="background-color: <?php echo $color_btn_bg; ?>!important;" name="submit" value="Details">
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