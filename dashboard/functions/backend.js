// Admin Panel backend Js //

/*

** Do not modify anything One single function is linked with various functions
and it can modify or make disable various features.

*/

// Profile || Message || Settings Switchers //
function messages() {
    $('#profile').attr('hidden', true);
    $('#hobbies_interests').attr('hidden', true);
    $('#skills').attr('hidden', true);
    $('#Experiences').attr('hidden', true);
    $('#settings').attr('hidden', true);
    $('#resume_pdf').attr('hidden', true);
    $('#social_media').attr('hidden', true);
    $('#messages').attr('hidden', false); // Messages Unhide hide
    $('#reset_password').attr('hidden', true); // reset password unhide
    $('#email_notifications').attr('hidden', true); // email settings unhide
    $('#mode_status_setting').attr('hidden', true); // mode settings unhide
}

// by default hidden
function default_hidden() {
    $('#messages').attr('hidden', true); // Message hide
    $('#settings').attr('hidden', true); // Settings hide 
    $('#resume_pdf').attr('hidden', true); // Settings hide
    $('#reset_password').attr('hidden', true); // reset password unhide
    $('#email_notifications').attr('hidden', true); // email settings unhide 
    $('#mode_status_setting').attr('hidden', true); // email settings unhide
    // other
    $("#email").attr("disabled", true);
    $("#social_media").attr("hidden", true);
    $("#fname").attr("disabled", true);
    $("#lname").attr("disabled", true);
    $("#dob").attr("disabled", true);
    $("#phone").attr("disabled", true);
    $("#language").attr("disabled", true);
    $("#master_skill").attr("disabled", true);
    $("#year_of_experience").attr("disabled", true);
    $("#project_completed").attr("disabled", true);
    $("#happy_customers").attr("disabled", true);
    $("#award").attr("disabled", true);
    $("#address").attr("disabled", true);
    $("#theme").attr("disabled", true);
    $("#about").attr("disabled", true);
    $("#country").attr("disabled", true);
    $("#city").attr("disabled", true);
    $("#pcode").attr("disabled", true);
    $("#education").attr("disabled", true);
    $("#currentstatus").attr("disabled", true);
    $("#update_profile").attr("hidden", true); // button

}

function disable_edit() {
    $("#email").attr("disabled", true);
    $("#fname").attr("disabled", true);
    $("#lname").attr("disabled", true);
    $("#dob").attr("disabled", true);
    $("#phone").attr("disabled", true);
    $("#language").attr("disabled", true);
    $("#master_skill").attr("disabled", true);
    $("#year_of_experience").attr("disabled", true);
    $("#project_completed").attr("disabled", true);
    $("#happy_customers").attr("disabled", true);
    $("#award").attr("disabled", true);
    $("#address").attr("disabled", true);
    $("#theme").attr("disabled", true);
    $("#about").attr("disabled", true);
    $("#country").attr("disabled", true);
    $("#city").attr("disabled", true);
    $("#pcode").attr("disabled", true);
    $("#education").attr("disabled", true);
    $("#currentstatus").attr("disabled", true);
    $("#update_profile").attr("hidden", true); // button
    $("#enable_edit").attr("hidden", false); //buttons
}

function enable_edit() {
    $("#fname").attr("disabled", false);
    $("#lname").attr("disabled", false);
    $("#dob").attr("disabled", false);
    $("#phone").attr("disabled", false);
    $("#language").attr("disabled", false);
    $("#master_skill").attr("disabled", false);
    $("#year_of_experience").attr("disabled", false);
    $("#project_completed").attr("disabled", false);
    $("#happy_customers").attr("disabled", false);
    $("#award").attr("disabled", false);
    $("#address").attr("disabled", false);
    $("#theme").attr("disabled", false);
    $("#about").attr("disabled", false);
    $("#country").attr("disabled", false);
    $("#city").attr("disabled", false);
    $("#pcode").attr("disabled", false);
    $("#education").attr("disabled", false);
    $("#currentstatus").attr("disabled", false);
    $("#update_profile").attr("hidden", false); //buttons
    $("#enable_edit").attr("hidden", true); //buttons
}

function profiles() {
    $('#profile').attr('hidden', false);
    $('#hobbies_interests').attr('hidden', false);
    $('#skills').attr('hidden', false);
    $('#Experiences').attr('hidden', false);
    $('#social_media').attr('hidden', true); // Settings hide
    $('#settings').attr('hidden', true); // Settings hide 
    $('#resume_pdf').attr('hidden', true); // Settings hide
    $('#messages').attr('hidden', true); // Messages hide
    $('#reset_password').attr('hidden', true); // reset password unhide
    $('#email_notifications').attr('hidden', true); // email settings unhide
    $('#mode_status_setting').attr('hidden', true); // email settings unhide
}

function settings() {
    $('#profile').attr('hidden', true);
    $('#hobbies_interests').attr('hidden', true);
    $('#skills').attr('hidden', true);
    $('#Experiences').attr('hidden', true);
    $('#messages').attr('hidden', true);
    $('#settings').attr('hidden', false); // Profile unhide   
    $('#resume_pdf').attr('hidden', false); // Profile unhide 
    $('#social_media').attr('hidden', false); // Profile unhide
    $('#reset_password').attr('hidden', false); // reset password unhide
    $('#email_notifications').attr('hidden', false); // email settings unhide
    $('#mode_status_setting').attr('hidden', false); // email settings unhide
}



// Profile Update Functions starts//
function update_profile() {
    // Clear response before printing new response
    jQuery('#response').html('');

    // Assigning field variables
    var username = jQuery('#username').val();
    var email = jQuery('#email').val();
    var fname = jQuery('#fname').val();
    var lname = jQuery('#lname').val();
    var dob = jQuery('#dob').val();
    var phone = jQuery('#phone').val();
    var language = jQuery('#language').val();
    var master_skill = jQuery('#master_skill').val();
    var year_of_experience = jQuery('#year_of_experience').val();
    var project_completed = jQuery('#project_completed').val();
    var happy_customers = jQuery('#happy_customers').val();
    var award = jQuery('#award').val();
    var address = jQuery('#address').val();
    var about = jQuery('#about').val();
    var theme = jQuery('#theme').val();
    var country = jQuery('#country').val();
    var city = jQuery('#city').val();
    var pcode = jQuery('#pcode').val();
    var education = jQuery('#education').val();
    var currentstatus = jQuery('#currentstatus').val();

    // Check if input is empty and response
    if (username == '') {
        jQuery('#response').html('* Username is Required!');
    } else if (email == '') {
        jQuery('#response').html('* We need Your Email!');
    } else if (fname == '') {
        jQuery('#response').html('* Whats your good name?');
    } else if (lname == '') {
        jQuery('#response').html('* Can we know your surname name?');
    } else if (dob == '') {
        jQuery('#response').html("* What's your date of birth?");
    } else if (phone == '') {
        jQuery('#response').html('* Whats your phone number?');
    } else if (language == '') {
        jQuery('#response').html('* How many languages do you know?');
    } else if (master_skill == '') {
        jQuery('#response').html('* And you are Master at?');
    } else if (year_of_experience == '') {
        jQuery('#response').html('* How Experienced are you?');
    } else if (project_completed == '') {
        jQuery('#response').html('* And you have done how many projects exactly?');
    } else if (happy_customers == '') {
        jQuery('#response').html('* How many Customers you have handled');
    } else if (award == '') {
        jQuery('#response').html('* Any award?');
    } else if (address == '') {
        jQuery('#response').html('* Ok, Tell me your address?');
    } else if (about == '') {
        jQuery('#response').html('* Give me a short intro?');
    } else if (theme == '') {
        jQuery('#response').html('* Please Select a new theme');
    } else if (country == '') {
        jQuery('#response').html('* And You are from?');
    } else if (city == '') {
        jQuery('#response').html('* Which City?');
    } else if (pcode == '') {
        jQuery('#response').html('* Your Postal Code Please?');
    } else if (education == '') {
        jQuery('#response').html('* Tell Me about your Education?');
    } else if (currentstatus == '') {
        jQuery('#response').html('* And Currently You are Student, HR, Founder or ?');


        // If all inputs are filled, send it to php page 
    } else {
        jQuery('#update_profile').html('Please Wait...');
        jQuery('#update_profile').attr('disabled', true);

        jQuery.ajax({
            url: "./functions/profile_update.php",
            type: "POST",
            data: 'username=' + username +
                '&email=' + email +
                '&fname=' + fname +
                '&lname=' + lname +
                '&dob=' + dob +
                '&phone=' + phone +
                '&language=' + language +
                '&master_skill=' + master_skill +
                '&year_of_experience=' + year_of_experience +
                '&project_completed=' + project_completed +
                '&happy_customers=' + happy_customers +
                '&award=' + award +
                '&address=' + address +
                '&about=' + about +
                '&theme=' + theme +
                '&country=' + country +
                '&city=' + city +
                '&pcode=' + pcode +
                '&education=' + education +
                '&currentstatus=' + currentstatus,

            success: function(result) {
                jQuery('#response').html(result);

                if (result == "success") {
                    jQuery('#update_profile').html('Update');
                    jQuery('#update_profile').attr('disabled', false);
                    disable_edit();
                    jQuery('#response').html("<span style='font-size: 13px;color: green;'>Updated! Reload to change the theme.</span>");
                }
            }
        });
    }
}
// Profile Update Functions Ends //


// Add skills Functions Starts//
function add_skill() {
    // Clear response before printing new response
    jQuery('#response').html('');

    // Assigning field variables
    var skill = jQuery('#skill').val();
    var skill_level = jQuery('#skill_level').val();


    // Check if input is empty and response
    if (skill == '') {
        jQuery('#response').html('What new skill you have got?');
    } else if (skill_level == '') {
        jQuery('#response').html('Choose skill level out of 10');
    }

    // If all inputs are filled, send it to php page 
    else {
        jQuery('#add_skill_btn').html('Working...');
        jQuery('#add_skill_btn').attr('disabled', true);
        jQuery('#skill').attr('disabled', true);

        jQuery.ajax({
            url: "./functions/add_skill.php",
            type: "POST",
            data: 'skill=' + skill +
                '&skill_level=' + skill_level,

            success: function(result) {
                jQuery('#response').html(result);
                jQuery('#add_skill_btn').html('<i class="fas fa-save"></i> <span style="padding-left: 5px;">Save</span> ')
                jQuery('#add_skill_btn').attr('disabled', false);
                if (result == "success") {
                    jQuery('#skill').val("");
                    jQuery('#skill_level').val("");
                    jQuery('#skill').attr('disabled', false);
                    jQuery('#response').html("<span style='color: green;'>Skill Added Successfully!</span>");
                    $('#show_Skills').load(location.href + ' #skill_list');
                }
            }
        });
    }
}
// Add skills Functions Ends Here //


// Add Experience Functions Start Here //
function add_experience() {
    // Clear response before printing new response
    jQuery('#response').html('');

    // Assigning field variables
    var started_on = jQuery('#started_on').val();
    var job_name = jQuery('#job_name').val();
    var job_location = jQuery('#job_location').val();
    var job_description = jQuery('#job_description').val();
    var ended_on = jQuery('#ended_on').val();
    var job_type = jQuery('#job_type').val();



    // Check if input is empty and response
    if (started_on == '') {
        jQuery('#response').html('When You started your Work?');
    } else if (job_name == '') {
        jQuery('#response').html('And you were working on/As?');
    } else if (job_location == '') {
        jQuery('#response').html('Can you tell me the location?');
    } else if (job_description == '') {
        jQuery('#response').html('Write a short description.');
    } else if (ended_on == '') {
        jQuery('#response').html('When You Ended your Work here?');
    } else if (job_type == '') {
        jQuery('#job_type').html('This is your Academic Experience or work Experience?');
    }


    // If all inputs are filled, send it to php page 
    else {
        jQuery('#add_experiences').html("Wait...");
        jQuery('#add_experiences').attr('disabled', true);

        jQuery.ajax({
            url: './functions/add_experience.php',
            type: 'POST',
            data: 'started_on=' + started_on +
                '&job_name=' + job_name +
                '&job_location=' + job_location +
                '&job_description=' + job_description +
                '&ended_on=' + ended_on +
                '&job_type=' + job_type,

            success: function(result) {
                jQuery('#response').html(result);
                jQuery('#add_experiences').html('Update');
                jQuery('#add_experiences').attr('disabled', false);
                if (result == "success") {
                    jQuery('#job_name').val("");
                    jQuery('#job_location').val("");
                    jQuery('#job_description').val("");
                    jQuery('#response').html("<span style='color: green;'>Skill Added Successfully!</span>");
                    $('#show_experience').load(location.href + ' #skill_experience');
                }
            }
        });
    }

}
// Add Experience Functions Ends Here //


// Sign in functions
function sign_in() {
    // Clear response before printing new response
    jQuery("#response").html('');

    // Assigning field variables
    var email = jQuery("#email").val();
    var password = jQuery("#password").val();

    // Check if input is empty and response
    if (email == "" && password == "") {
        jQuery("#response").html('Email and Password both are required!');
    }

    // If all inputs are filled, send it to php page 
    else {
        jQuery("#response").html("");
        jQuery("#sign_btn").html("Please hold...");
        jQuery("#sign_btn").attr("disabled", true);

        jQuery.ajax({
            url: "./functions/sign_in.php",
            type: "POST",
            data: 'email=' + email +
                '&password=' + password,

            success: function(result) {
                jQuery("#response").html(result);
                jQuery("#sign_btn").html("Sign in");
                jQuery("#sign_btn").attr("disabled", false);
            }
        });
    }
}


// Settings Function //
// Update Profile Image Function
function _(el) {
    return document.getElementById(el);
}

function uploadFile() {
    var Isempty = jQuery("#file1").val();

    if (Isempty == "") {
        jQuery("#response_image").html("Please Select a image.");
    }

    var file = _("file1").files[0];
    var folder = _("folder");

    //alert(file.name + " | " + file.size + " | " + file.type);

    if (file.size > 519142) {
        _("response_image").innerHTML = 'File Size must be less than 501 kb. <sapn style="color:green;">*Recommended: PNG, Convert & compress it <a class="text-danger" href="https://compresspng.com/">here.</a></span> ';
    } else {
        jQuery("#response_image").html("");
        jQuery("#progressBar").attr("hidden", false)
        var formdata = new FormData();
        formdata.append("file1", file);
        var ajax = new XMLHttpRequest();
        ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);
        ajax.open("POST", "./functions/update_profile_image.php");
        ajax.send(formdata);
    }
}

function progressHandler(event) {
    _("loaded_n_total").innerHTML = (event.loaded / 1048576).toFixed(2) + " MB"; + " bytes of " + (event.total / 1048576).toFixed(2) + " MB";;
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = "-" + Math.round(percent) + "% Uploading... Please wait";
}

function completeHandler(event) {
    _("status").innerHTML = " " + event.target.responseText;
    _("progressBar").value = 0;
    _("loaded_n_total").innerHTML = "";
    jQuery("#progressBar").attr("hidden", true)
}

function errorHandler(event) {
    _("status").innerHTML = "Upload Failed";
    jQuery("loaded_n_total").html("");
    jQuery("#progressBar").attr("hidden", true)
}

function abortHandler(event) {
    _("status").innerHTML = "Upload Aborted";
    jQuery("loaded_n_total").html("");
    jQuery("#progressBar").attr("hidden", true)
}
// Update Profile Image Function Ends




// Settings Function //
// Update Profile Image Function
function _(el) {
    return document.getElementById(el);
}

function upload_resume_File() {
    var Isempty = jQuery("#file1").val();

    if (Isempty == "") {
        jQuery("#response_image").html("Please Select a image.");
    }

    var file = _("file1").files[0];
    var folder = _("folder");

    //alert(file.name + " | " + file.size + " | " + file.type);

    if (file.size > 2519142) {
        _("response_image").innerHTML = 'File Size must be less than 2mb.  ';
    } else {
        jQuery("#response_image").html("");
        jQuery("#progressBar").attr("hidden", false)
        var formdata = new FormData();
        formdata.append("file1", file);
        var ajax = new XMLHttpRequest();
        ajax.upload.addEventListener("progress", progressHandler, false);
        ajax.addEventListener("load", completeHandler, false);
        ajax.addEventListener("error", errorHandler, false);
        ajax.addEventListener("abort", abortHandler, false);
        ajax.open("POST", "./functions/update_resume_pdf.php");
        ajax.send(formdata);
    }
}

function progressHandler(event) {
    _("loaded_n_total").innerHTML = (event.loaded / 1048576).toFixed(2) + " MB"; + " bytes of " + (event.total / 1048576).toFixed(2) + " MB";;
    var percent = (event.loaded / event.total) * 100;
    _("progressBar").value = Math.round(percent);
    _("status").innerHTML = "-" + Math.round(percent) + "% Uploading... Please wait";
}

function completeHandler(event) {
    _("status").innerHTML = " " + event.target.responseText;
    _("progressBar").value = 0;
    _("loaded_n_total").innerHTML = "";
    jQuery("#progressBar").attr("hidden", true)
}

function errorHandler(event) {
    _("status").innerHTML = "Upload Failed";
    jQuery("loaded_n_total").html("");
    jQuery("#progressBar").attr("hidden", true)
}

function abortHandler(event) {
    _("status").innerHTML = "Upload Aborted";
    jQuery("loaded_n_total").html("");
    jQuery("#progressBar").attr("hidden", true)
}
// Update Profile Image Function Ends




// Reset password //
function reset_password_btn() {
    jQuery("#response_password").html("");

    var old_password = jQuery("#old_password").val();
    var new_password = jQuery("#new_password").val();
    var confirm_password = jQuery("#confirm_password").val();

    if (old_password == "" || new_password == "" || confirm_password == "") {
        jQuery("#response_password").html("All three field are required!");
    } else if (new_password != confirm_password) {
        jQuery("#response_password").html("New Password & Confirm Password do not match!");
    }

    // If not empty --> Send
    else {
        jQuery("#reset_password_btn").html("Saving..");
        jQuery("#reset_password_btn").attr("disabled", true);

        jQuery.ajax({
            url: "./functions/reset_password.php",
            type: "POST",
            data: "old_password=" + old_password +
                "&new_password=" + new_password +
                "&confirm_password=" + confirm_password,

            success: function(result) {
                jQuery("#response_password").html(result);
                jQuery("#reset_password_btn").attr("disabled", false);
                jQuery("#reset_password_btn").html('<i class="fas fa-key"></i> Save');
                jQuery("#old_password").val("");
                jQuery("#new_password").val("");
                jQuery("#confirm_password").val("");

            }
        });

    }

}


// Show and Hide Password
function show_password() {
    var show_pass = document.getElementById("new_password");
    var new_password = $("#new_password").val();
    //alert(new_password);
    if (new_password == "") {
        $("#response_password").html("Please enter a new password!");
    } else if (new_password == " ") {
        $("#response_password").html("");
    } else {
        if (show_pass.type === "password") {
            show_pass.type = "text";
            $("#password_icon").html('<i class="fas fa-eye-slash"></i>');
        } else {
            show_pass.type = "password";
            $("#password_icon").html('<i class="fas fa-eye"></i>');
        }
    }
}


// Notification settings 
function save_notification_settings() {
    $("#response_email_settings").html('');

    var message_notify = $("#message_notify").val();
    var visit_notify = $("#visit_notify").val();

    if (message_notify == "" || visit_notify == "") {
        $('#response_email_settings').html("Something is broken. Reload the page and try again.");
    } else {

        $("#notification_settings_btn").html("Saving...")
        $("#notification_settings_btn").attr("disabled", true);

        $.ajax({
            url: "./functions/email_settings.php",
            type: "POST",
            data: "message_notify=" + message_notify +
                "&visit_notify=" + visit_notify,

            success: function(result) {
                $("#response_email_settings").html(result);
                $("#notification_settings_btn").attr("disabled", false);
                $("#notification_settings_btn").html('<i class="fas fa-bell"></i> Save');
            }
        });
    }
}

function visibility_settings() {
    $("#response_visibility_settings").html('');

    var profile_status = $("#profile_status").val();
    var hiring_mode = $("#hiring_mode").val();

    if (message_notify == "" || visit_notify == "") {
        $('#response_visibility_settings').html("Something is broken. Reload the page and try again.");
    } else {

        $("#visibility_settings_btn").html("Saving...")
        $("#visibility_settings_btn").attr("disabled", true);

        $.ajax({
            url: "./functions/visibility_settings.php",
            type: "POST",
            data: "profile_status=" + profile_status +
                "&hiring_mode=" + hiring_mode,

            success: function(result) {
                $("#response_visibility_settings").html(result);
                $("#visibility_settings_btn").attr("disabled", false);
                $("#visibility_settings_btn").html('<i class="fas fa-bell"></i> Save');
            }
        });
    }
}


// Register ---> Functions
function hideDiv() {
    $("#enter_otp_div").attr("hidden", true);
    $("#email_div").attr("hidden", true);
    $("#register_btn").attr("disabled", true);
    $("#email").attr("disabled", true);
}

function hide_username_btn() {

}

function check_availability() {
    $("#register_response").html("");
    var username = $("#username").val();

    if (username == "") {
        $("#register_response").html("Please enter a Username");
    } else {
        $("#username").attr("disabled", true)

        $.ajax({
            url: "./functions/check_availability.php",
            type: "POST",
            data: "username=" + username,

            success: function(result) {
                $("#register_response").html(result);

                if (result == "success") {
                    $("#register_response").html("<span style='color: green;'>Username is Available</span>");
                    $("#email").attr("disabled", false);
                    $("#email_div").attr("hidden", false);
                    $("#check_availability").attr("hidden", true);
                    $("#username_success").html('<i style="color: green;" class="fas fa-check"></i>');
                } else {
                    $("#username").attr("disabled", false);
                    $("#email").attr("disabled", true);
                    // $("#register_response").html("Try different Username");
                }
            }
        });
    }
}

function send_otp() {
    $("#register_response").html("");
    var email = $("#email").val();

    if (email == "") {
        $("#register_response").html("Please enter your email");
    } else {
        //$("#enter_otp_div").attr("hidden", false);
        $("#email").attr("disabled", true);
        $("#send_otp").attr("disabled", true);
        $("#register_response").html("Please wait, Sending...");

        $.ajax({
            url: "./functions/send_otp.php",
            type: "POST",
            data: "email=" + email,

            success: function(result) {
                $("#register_response").html(result);
                //$("#enter_otp_div").hide();

                if (result == "success") {
                    $("#enter_otp_div").attr("hidden", false);
                    $("#register_response").html("<span style='color: green;'>Message has been sent!</span>");
                    $("#send_otp").attr("disabled", true);
                    $("#send_otp_success").html('<i style="color: green;" class="fas fa-check"></i>');
                    $("#send_otp").attr("hidden", true);
                } else {
                    $("#email").attr("disabled", false);
                    $("#send_otp").attr("disabled", false);
                }
            }
        });
    }
}

function verify_otp() {
    $("#register_response").html("verify btn working");
    $("#otp").html("");
    var otp = $("#otp").val();

    if (otp == "") {
        $("#register_response").html("Enter OTP Please.");
    } else {
        $("#otp").attr("disabled", true);
        $("#verify_otp").attr("disabled", true);
        $("#register_response").html("Please Wait...");
        //$("#enter_otp_div").attr("hidden", true);

        $.ajax({
            url: "./functions/verify_otp.php",
            type: "POST",
            data: "otp=" + otp,

            success: function(result) {
                $("#register_response").html(result);

                //$("#otp").attr("hidden", true);
                //$("#enter_otp_div").attr("hidden", true);
                if (result == "success") {
                    $("#register_btn").attr("disabled", false);
                    $("#verify_otp").attr("disable", true);
                    $("#verify_otp").attr("hidden", true);
                    $("#enter_otp_div").attr("hidden", true);
                    $("#email").attr("disabled", true);
                    $("#register_response").html("<span style='color: green;'>Verified!</span>");
                    $("#send_otp").attr("disabled", true);
                    $("#verify_otp_success").html('<i style="color: green;" class="fas fa-check"></i>');

                } else {
                    $("#otp").attr("disabled", false);
                    $("#verify_otp").attr("disabled", false);
                }
            }
        });
    }
}

// Register from
function register() {
    $("#register_response").html("");

    var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
    var confirm_password = $("#confirm_password").val();

    if (username == "" || email == "" || password == "") {
        $("#register_response").html("All fields are required!");
    } else if (confirm_password != password) {
        $("#register_response").html("Both password must be same");
    } else {
        $("#username").attr("disabled", true);
        $("#password").attr("disabled", true);
        $("#confirm_password").attr("disabled", true);
        $("#register_response").html('Please wait...');

        $.ajax({
            url: "./functions/register.php",
            type: "POST",
            data: "username=" + username +
                "&email=" + email +
                "&password=" + password,

            success: function(result) {
                $("#register_response").html('Please wait...');


                if (result == "success") {
                    $("register_response").html("Account created successfully!");
                    setTimeout(window.location.href = "login", 5000);

                } else {
                    //$("register_response").html("Failed! try Again");
                    $("#password").attr("disabled", false);
                    $("#confirm_password").attr("disabled", false);
                    $("#register_response").html(result);
                }
            }
        });
    }
}


// add facebook
function facebook() {
    $("#facebook_response").html("");

    var username = $("#facebookusername").val();
    var status = $("#facebook_status").val();
    var type = ("facebook");

    if (username == "") {
        $("#facebook_response").html("Please enter a username");
    } else {
        $("#facebookusername").attr("disabled", true);
        $("#facebook_status").attr("disabled", true);
        $("#facebook_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/social_media.php",
            type: "POST",
            data: "facebookusername=" + username +
                "&facebook_status=" + status +
                "&type=" + type,

            success: function(result) {
                $("#facebook_response").html(result);
                $("#facebookusername").attr("disabled", false);
                $("#facebook_status").attr("disabled", false);
            }
        });
    }
}


// add instagram
function instagram() {
    $("#instagram_response").html("");

    var username = $("#instagramusername").val();
    var status = $("#instagram_status").val();
    var type = ("instagram");

    if (username == "") {
        $("#instagram_response").html("Please enter a username");
    } else {
        $("#instagramusername").attr("disabled", true);
        $("#instagram_status").attr("disabled", true);
        $("#instagram_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/social_media.php",
            type: "POST",
            data: "instagramusername=" + username +
                "&instagram_status=" + status +
                "&type=" + type,

            success: function(result) {
                $("#instagram_response").html(result);
                $("#instagramusername").attr("disabled", false);
                $("#instagram_status").attr("disabled", false);
            }
        });
    }
}


// add github
function github() {
    $("#github_response").html("");

    var username = $("#githubusername").val();
    var status = $("#github_status").val();
    var type = ("github");

    if (username == "") {
        $("#github_response").html("Please enter a username");
    } else {
        $("#githubusername").attr("disabled", true);
        $("#github_status").attr("disabled", true);
        $("#github_response").html("Saving...");

        $.ajax({
            url: "./functions/social_media.php",
            type: "POST",
            data: "githubusername=" + username +
                "&github_status=" + status +
                "&type=" + type,

            success: function(result) {
                $("#github_response").html(result);
                $("#githubusername").attr("disabled", false);
                $("#github_status").attr("disabled", false);
            }
        });
    }
}


// add linkedin
function linkedin() {
    $("#linkedin_response").html("");

    var username = $("#linkedinusername").val();
    var status = $("#linkedin_status").val();
    var type = ("linkedin");

    if (username == "") {
        $("#linkedin_response").html("Please enter a username");
    } else {
        $("#linkedinusername").attr("disabled", true);
        $("#linkedin_status").attr("disabled", true);
        $("#linkedin_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/social_media.php",
            type: "POST",
            data: "linkedinusername=" + username +
                "&linkedin_status=" + status +
                "&type=" + type,

            success: function(result) {
                $("#linkedin_response").html(result);
                $("#linkedinusername").attr("disabled", false);
                $("#linkedin_status").attr("disabled", false);
            }
        });
    }
}


// update portfolio
function add_portfolio() {
    $("#response_portfolio").html("");

    var project_name = $("#project_name").val();
    var project_category = $("#project_category").val();
    var project_url = $("#project_url").val();

    if (project_name == "") {
        $("#response_portfolio").html("Project name required!");
    } else if (project_category == "") {
        $("#response_portfolio").html("Project Category required!");
    } else if (project_url == "") {
        $("#response_portfolio").html("Project Url required!");
    }

    // all filled
    else {
        $("#project_name").attr("disabled", true);
        $("#project_category").attr("disabled", true);
        $("#project_url").attr("disabled", true);
        $("#response_portfolio").html("Please Wait...");
        $("#portfolio_btn").html("Saving...");

        $.ajax({
            url: "./functions/add_portfolio.php",
            type: "POST",
            data: "project_name=" + project_name +
                "&project_category=" + project_category +
                "&project_url=" + project_url,

            success: function(result) {
                $("#response_portfolio").html(result);
                $("#project_name").attr("disabled", false);
                $("#project_category").attr("disabled", false);
                $("#project_url").attr("disabled", false);
                $("#portfolio_btn").html('<i class="fas fa-save"></i> <span style="padding-left: 5px;">Save</span>');
            }
        });
    }
}


// update hobbies
function hobbie1() {
    $("#hobbie1_response").html("");

    var type = ("hobbie1");
    var hobbie_name = $("#hobbie_1").val();
    var hobbie_type = $("#hobbie_1_type").val();
    var hobbie_desc = $("#hobbie_1_desc").val();

    if (hobbie_name == "") {
        $("#hobbie1_response").html("Please a hobby name!");
    } else if (hobbie_desc == "") {
        $("#hobbie1_response").html("Please tell me more about your " + hobbie_name);
    }

    // all filled
    else {
        $("#hobbie_1").attr("disabled", true);
        $("#hobbie_1_type").attr("disabled", true);
        $("#hobbie_1_desc").attr("disabled", true);
        $("#hobbie1_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/add_hobbies.php",
            type: "POST",
            data: "hobbie_1=" + hobbie_name +
                "&hobbie1=" + type +
                "&hobbie_1_type=" + hobbie_type +
                "&hobbie_1_desc=" + hobbie_desc,

            success: function(result) {
                $("#hobbie1_response").html(result);
                $("#hobbie_1").attr("disabled", false);
                $("#hobbie_1_type").attr("disabled", false);
                $("#hobbie_1_desc").attr("disabled", false);
            }
        });
    }
}

function hobbie2() {
    $("#hobbie2_response").html("");

    var type = ("hobbie2");
    var hobbie_name = $("#hobbie_2").val();
    var hobbie_type = $("#hobbie_2_type").val();
    var hobbie_desc = $("#hobbie_2_desc").val();

    if (hobbie_name == "") {
        $("#hobbie2_response").html("Please a hobby name!");
    } else if (hobbie_desc == "") {
        $("#hobbie2_response").html("Please tell me more about your " + hobbie_name);
    }

    // all filled
    else {
        $("#hobbie_2").attr("disabled", true);
        $("#hobbie_2_type").attr("disabled", true);
        $("#hobbie_2_desc").attr("disabled", true);
        $("#hobbie2_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/add_hobbies.php",
            type: "POST",
            data: "hobbie_2=" + hobbie_name +
                "&hobbie1=" + type +
                "&hobbie_2_type=" + hobbie_type +
                "&hobbie_2_desc=" + hobbie_desc,

            success: function(result) {
                $("#hobbie2_response").html(result);
                $("#hobbie_2").attr("disabled", false);
                $("#hobbie_2_type").attr("disabled", false);
                $("#hobbie_2_desc").attr("disabled", false);
            }
        });
    }
}

function hobbie3() {
    $("#hobbie3_response").html("");

    var type = ("hobbie3");
    var hobbie_name = $("#hobbie_3").val();
    var hobbie_type = $("#hobbie_3_type").val();
    var hobbie_desc = $("#hobbie_3_desc").val();

    if (hobbie_name == "") {
        $("#hobbie3_response").html("Please a hobby name!");
    } else if (hobbie_desc == "") {
        $("#hobbie3_response").html("Please tell me more about your " + hobbie_name);
    }

    // all filled
    else {
        $("#hobbie_3").attr("disabled", true);
        $("#hobbie_3_type").attr("disabled", true);
        $("#hobbie_3_desc").attr("disabled", true);
        $("#hobbie3_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/add_hobbies.php",
            type: "POST",
            data: "hobbie_3=" + hobbie_name +
                "&hobbie1=" + type +
                "&hobbie_3_type=" + hobbie_type +
                "&hobbie_3_desc=" + hobbie_desc,

            success: function(result) {
                $("#hobbie3_response").html(result);
                $("#hobbie_3").attr("disabled", false);
                $("#hobbie_3_type").attr("disabled", false);
                $("#hobbie_3_desc").attr("disabled", false);
            }
        });
    }
}

function hobbie4() {
    $("#hobbie4_response").html("");

    var type = ("hobbie4");
    var hobbie_name = $("#hobbie_4").val();
    var hobbie_type = $("#hobbie_4_type").val();
    var hobbie_desc = $("#hobbie_4_desc").val();

    if (hobbie_name == "") {
        $("#hobbie4_response").html("Please a hobby name!");
    } else if (hobbie_desc == "") {
        $("#hobbie4_response").html("Please tell me more about your " + hobbie_name);
    }

    // all filled
    else {
        $("#hobbie_4").attr("disabled", true);
        $("#hobbie_4_type").attr("disabled", true);
        $("#hobbie_4_desc").attr("disabled", true);
        $("#hobbie4_response").html("<span style='color: green;'>Saving...</span>");

        $.ajax({
            url: "./functions/add_hobbies.php",
            type: "POST",
            data: "hobbie_4=" + hobbie_name +
                "&hobbie1=" + type +
                "&hobbie_4_type=" + hobbie_type +
                "&hobbie_4_desc=" + hobbie_desc,

            success: function(result) {
                $("#hobbie4_response").html(result);
                $("#hobbie_4").attr("disabled", false);
                $("#hobbie_4_type").attr("disabled", false);
                $("#hobbie_4_desc").attr("disabled", false);
            }
        });
    }
}

// archive message 
function archive_message() {
    $("#response_message").html("");

    var message_id = $("#Message_id").val();

    $("#response_message").html("Please wait... We're on it.");

    $.ajax({
        url: "./functions/hide_message.php",
        type: "POST",
        data: "message_id=" + message_id,



        success: function(result) {
            $("#response_message").html(result);

            setTimeout(function() {
                $("#response_message").attr('hidden', true);
            }, 3000);
        }
    });
}

// Reset password page
function hide_otp_and_password_field() {
    $('#otp_and_password').hide();
    $('#Preset_btn').hide();
}

// Reset function outside the dashboard

// function check_and_send_OTP() {
//     $('#recovery_response').html("Please Wait...");

//     var recovery_email = $("#reset_email").val();

//     if (recovery_email == "") {
//         $('#recovery_response').html("Please enter a valid email.");

//     } else {
//         $('#recovery_response').html("Please Wait...");
//         $("#reset_email").attr("disabled", true);

//         $.ajax({
//             url: "./functions/password_recovery.php",
//             type: "POST",
//             data: "reset_email=" + recovery_email,

//             success: function(result) {

//                 if (result == "success") {
//                     $('#otp_and_password').show();
//                     $('#Preset_btn').show();
//                     $('#recovery_response').html("");
//                     $("#_hide_mouse_btn").hide();
//                     $("#full_width").toggleClass("col-sm-12", true);
//                     $('#recovery_response').html("Please Wait...");

//                     // proceed with otp and verification
//                     $.ajax({
//                         url: "./functions/send_otp_recovery.php",
//                         type: "POST",
//                         data: "reset_email=" + recovery_email,

//                         success: function(result_reset) {
//                             if (result_reset == "success") {
//                                 $('#recovery_response').html("<span style='color: green;'> OTP Send Successfully!</span>");
//                             } else {
//                                 $('#recovery_response').html(result_reset);

//                             }
//                         }
//                     });

//                 } else {
//                     $('#recovery_response').html(result);
//                     $("#reset_email").attr("disabled", false);
//                 }
//             }
//         });
//     }

// }

// function verify_reset_otp() {
//     $("#recovery_response").html("");
//     $("#otp").html("");
//     var otp = $("#otp").val();

//     if (otp == "") {
//         $("#recovery_response").html("Enter OTP Please.");
//     } else {
//         $("#otp").attr("disabled", true);
//         $("#verify_otp").attr("disabled", true);
//         $("#recovery_response").html("Please Wait...");
//         //$("#enter_otp_div").attr("hidden", true);

//         $.ajax({
//             url: "./functions/verify_otp.php",
//             type: "POST",
//             data: "otp=" + otp,

//             success: function(result) {
//                 $("#recovery_response").html(result);

//                 //$("#otp").attr("hidden", true);
//                 //$("#enter_otp_div").attr("hidden", true);
//                 if (result == "success") {
//                     $("#reset_email").attr("hidden", true);
//                     $("#register_btn").attr("disabled", false);
//                     $("#verify_otp").attr("disable", true);
//                     $("#verify_otp").attr("hidden", true);
//                     $("#enter_otp_div").attr("hidden", true);
//                     $("#email").attr("disabled", true);
//                     $("#recovery_response").html("<span style='color: green;'>Verified!</span>");
//                     $("#send_otp").attr("disabled", true);
//                     $("#otp_success").fadeOut(1500);
//                     $('#Preset_btn').show();

//                 } else {
//                     $("#otp").attr("disabled", false);
//                     $("#verify_otp").attr("disabled", false);
//                 }
//             }
//         });
//     }
// }


// function reset_and_update_password() {
//     $("#recovery_response").html();

//     var new_password = $("#new_password").val();
//     var new_password_confirm = $("#new_password_confirm").val();

//     if (new_password == "" && new_password_confirm == "") {
//         $("#recovery_response").html("Both fields are required!");
//     } else if (new_password != new_password_confirm) {
//         $("#recovery_response").html("Both password must be same.");
//     }
//     // next process
//     else {
//         $.ajax({
//             url: "./functions/password_recovery_update.php",
//             type: "POST",
//             data: "new_password=" + new_password +
//                 "&new_password_confirm=" + new_password_confirm,

//             success: function(result_update) {
//                 $("#recovery_response").html(result_update);
//             }
//         })
//     }

// }


// reset working...
function send_reset_link() {
    $('#recovery_response').html("");

    var reset_email = $("#reset_email").val();

    if (reset_email == "") {
        $('#recovery_response').html("Please enter a email.");
    }

    // next---> verify and send otp
    else {
        $("#reset_email").attr("disabled", true);
        $('#recovery_response').html("Please Wait...");

        $.ajax({
            url: "./functions/password_recovery.php",
            type: "POST",
            data: "reset_email=" + reset_email,

            success: function(resul_reset_data) {
                $('#recovery_response').html(resul_reset_data);
                $("#reset_email").attr("disabled", false);
            }

        });
    }

}

// reset working... 
function set_new_pasword_now() {
    $('#reset_pass_response').html("");

    var new_password = $("#newpass").val();
    var confirm_password = $("#confirmpass").val();
    var reset_email_add = $("#email").val();

    if (new_password == "" && confirm_password == "") {
        $("#reset_pass_response").html("Both fields are required!");
    } else if (new_password != confirm_password) {
        $("#reset_pass_response").html("Both password must be same.");
    }

    //--> Update
    else {
        $("#newpass").attr("disabled", true);
        $("#confirmpass").attr("disabled", true);
        $("#email").attr("disabled", true);
        $('#reset_pass_response').html("Please Wait...");

        $.ajax({
            url: "./functions/password_recovery_update.php",
            type: "POST",
            data: "newpass=" + new_password + "&email=" + reset_email_add,

            success: function(result) {
                $('#reset_pass_response').html(result);
                $("#newpass").attr("disabled", false);
                $("#confirmpass").attr("disabled", false);
            }
        });
    }
}


// Search user and send request teams.php
function search_users_profile() {
    $("#search_result").html("Working");

    var find_username = $("#find_username").val();

    if (find_username == "") {
        $("#search_result").html("Please Enter a username to search");
    }

    //send and fatch
    else {
        $("#search_result").html("Searching...");

        $.ajax({
            url: "./functions/search_user.php",
            type: "POST",
            data: "find_username=" + find_username,

            success: function(result) {
                $("#search_result").html(result);
            }

        });
    }
}

function hide_response_message() {
    $("#hide_response_message").hide();
}

// user action
function user_action_settings() {
    $("#response_user_action").html("");

    var user_mode_action = $("#user_mode_action").val();
    var block_status_action = $("#block_status_action").val();
    var user_action_type = $("#user_action_type").val();
    var User_action_id = $("#User_action_id").val();
    var User_username = $("#User_username").val();

    if (user_mode_action == "" || block_status_action == "" || user_action_type == "" || User_action_id == "" || User_username == "") {
        $("#response_user_action").html("All inputs are mandatory");
    }

    //
    else {
        $("#response_user_action").html("Please Wait...");

        $.ajax({
            url: "./functions/user_action_settings.php",
            type: "POST",
            data: "user_mode_action=" + user_mode_action + "&block_status_action=" + block_status_action + "&user_action_type=" + user_action_type + "&User_action_id=" + User_action_id + "&User_username=" + User_username,

            success: function(result) {
                $("#response_user_action").html(result);
            }
        });
    }
}

function premium_user() {
    $("#premium_user_result").html("");

    var subscription_type = $("#subscription_type").val();
    var user_id = $("#user_id").val();
    var user_name = $("#username").val();

    if (user_id = "" || user_name == "") {
        $("#premium_user_result").html("All inputs are mandatory");
    }

    // else send the form
    else {
        $("#premium_user_result").html("Please Wait... We are redirecting you to the payment page");

        $.ajax({
            url: "./functions/subscriptions.php",
            type: "POST",
            data: "username=" + user_name + "&user_id=" + user_id,


            success: function(result) {
                $("#premium_user_result").html("Done");

                if (result == " fail") {
                    $("#premium_user_result").html("Something went wrong! Please try again.");
                }

            }
        });

    }
}


function support_form() {

    $("support_response").html("");

    var username = $("#user_name").val();
    var Fname = $("#user_fname").val();
    var Lname = $("#user_lname").val();
    var email = $("#user_email").val();
    var type_of_bugs = $("#support_type").val();
    var bugs_descriptions = $("#support_description").val();

    if (type_of_bugs == "" || bugs_descriptions == "") {
        $("support_response").html("Please choose the type of bug and write a description.");
    }

    //
    else {
        $("support_response").html("Please wait...");
        $("support_send_btn").attr("disabled", true);


        $.ajax({
            url: "./functions/support_form.php",
            type: "POST",
            data: "user_name=" + username + "&user_fname=" + Fname + "&user_lname=" + Lname + "&user_email=" + email + "&support_type=" + type_of_bugs + "&support_description=" + bugs_descriptions,

            success: function(result) {

                if (result == "success") {
                    $("support_response").html("Form submitted successfully!");
                } else {
                    $("support_response").html("Form submitted successfully!Something went wrong. Please try agin...");
                }

                $("support_send_btn").attr("disabled", false);

            }

        });
    }
}