// clear browser 
function OnreloadClearHistory() {
    console.log("Deleted all history");
}

function clearHistory() {
    let deletingAll = browser.history.deleteAll();
    deletingAll.then(OnreloadClearHistory);
}

// clearing pages css and other history
clearHistory();


// Merge all pages in one

// home page
function hide_default() {
    $("#home").attr("hidden", false);
    $("#aboutpage").attr("hidden", true);
    $("#worksPage").attr("hidden", true);
    $("#contactPage").attr("hidden", true);
    $("#teamPage").attr("hidden", true);
    $("#home_css").html('<link rel="stylesheet" href="../theme_two/css/styles.css">')
    $("#about_css").html('');
    $("#works_css").html('');
    $("#contactPage_css").html('');
    $("#AdsORDashboard_css").html('');
    $("#AdsORDashboard").attr("hidden", true);
    catEverything();
}


// about page
function aboutPage() {
    $("#home").attr("hidden", true);
    $("#aboutpage").attr("hidden", false);
    $("#worksPage").attr("hidden", true);
    $("#contactPage").attr("hidden", true);
    $("#teamPage").attr("hidden", true);
    $("#about_css").html('<link rel="stylesheet" href="../theme_two/css/about.css">');
    $("#home_css").html('');
    $("#works_css").html('');
    $("#contactPage_css").html('');
    $("#AdsORDashboard_css").html('');
    $("#AdsORDashboard").attr("hidden", true);
}


function worksPage() {
    $("#home").attr("hidden", true);
    $("#worksPage").attr("hidden", false);
    $("#aboutpage").attr("hidden", true);
    $("#contactPage").attr("hidden", true);
    $("#teamPage").attr("hidden", true);
    $("#works_css").html('<link rel="stylesheet" href="../theme_two/css/works.css">');
    $("#home_css").html('');
    $("#about_css").html('');
    $("#contactPage_css").html('');
    $("#AdsORDashboard_css").html('');
    $("#AdsORDashboard").attr("hidden", true);
}

function contactPage() {
    $("#home").attr("hidden", true);
    $("#worksPage").attr("hidden", true);
    $("#aboutpage").attr("hidden", true);
    $("#contactPage").attr("hidden", false);
    $("#teamPage").attr("hidden", true);
    $("#contactPage_css").html('<link rel="stylesheet" href="../theme_two/css/contact.css">');
    $("#home_css").html('');
    $("#about_css").html('');
    $("#works_css").html('');
    $("#AdsORDashboard_css").html('');
    $("#AdsORDashboard_css").html('');
    $("#AdsORDashboard").attr("hidden", true);
}

function teamPage() {
    $("#home").attr("hidden", true);
    $("#worksPage").attr("hidden", true);
    $("#aboutpage").attr("hidden", true);
    $("#contactPage").attr("hidden", true);
    $("#teamPage").attr("hidden", false);
    $("#teamPage_css").html('<link rel="stylesheet" href="../theme_two/css/team.css">');
    $("#contactPage_css").html('');
    $("#home_css").html('');
    $("#about_css").html('');
    $("#works_css").html('');
    $("#AdsORDashboard_css").html('');
    $("#AdsORDashboard").attr("hidden", true);
}

function dashboard() {
    $("#home").attr("hidden", true);
    $("#worksPage").attr("hidden", true);
    $("#aboutpage").attr("hidden", true);
    $("#contactPage").attr("hidden", true);
    $("#teamPage").attr("hidden", true);
    $("#AdsORDashboard").attr("hidden", false);
    $("#AdsORDashboard_css").html('<link rel="stylesheet" href="../theme_two/css/team.css">');
    $("#contactPage_css").html('');
    $("#home_css").html('');
    $("#about_css").html('');
    $("#works_css").html('');
    $("#teamPage_css").html('');
}


// Work catagories js

function catEverything() {
    $("div #writing").show();
    $("div #design").show();
    $("div #art").show();
    $("div #development").show();
    $("div #other").show();
    $("#cat1").toggleClass("active", true);
    $("#cat2").toggleClass("active", false);
    $("#cat3").toggleClass("active", false);
    $("#cat4").toggleClass("active", false);
    $("#cat5").toggleClass("active", false);
    $("#cat6").toggleClass("active", false);
}

function catWriting() {
    $("div #writing").show();
    $("div #design").hide();
    $("div #art").hide();
    $("div #development").hide();
    $("div #other").hide();
    $("#cat1").toggleClass("active", false);
    $("#cat2").toggleClass("active", true);
    $("#cat3").toggleClass("active", false);
    $("#cat4").toggleClass("active", false);
    $("#cat5").toggleClass("active", false);
    $("#cat6").toggleClass("active", false);
}

function catArt() {
    $("div #writing").hide();
    $("div #design").hide();
    $("div #art").show()
    $("div #development").hide();
    $("div #other").hide();
    $("#cat1").toggleClass("active", false);
    $("#cat2").toggleClass("active", false);
    $("#cat3").toggleClass("active", true);
    $("#cat4").toggleClass("active", false);
    $("#cat5").toggleClass("active", false);
    $("#cat6").toggleClass("active", false);
}

function catDevelopment() {
    $("div #writing").hide();
    $("div #design").hide();
    $("div #art").hide();
    $("div #development").show();
    $("div #other").hide();
    $("#cat1").toggleClass("active", false);
    $("#cat2").toggleClass("active", false);
    $("#cat3").toggleClass("active", false);
    $("#cat4").toggleClass("active", false);
    $("#cat5").toggleClass("active", true);
    $("#cat6").toggleClass("active", false);
}

function catDesign() {
    $("div #writing").hide();
    $("div #design").show();
    $("div #art").hide();
    $("div #development").hide();
    $("div #other").hide();
    $("#cat1").toggleClass("active", false);
    $("#cat2").toggleClass("active", false);
    $("#cat3").toggleClass("active", false);
    $("#cat4").toggleClass("active", true);
    $("#cat5").toggleClass("active", false);
    $("#cat6").toggleClass("active", false);

}

function catOther() {
    $("div #writing").hide();
    $("div #design").hide();
    $("div #art").hide();
    $("div #development").hide();
    $("div #other").show()
    $("#cat1").toggleClass("active", false);
    $("#cat2").toggleClass("active", false);
    $("#cat3").toggleClass("active", false);
    $("#cat4").toggleClass("active", false);
    $("#cat5").toggleClass("active", false);
    $("#cat6").toggleClass("active", true);
}

// Send Message


function send_message() {
    $("#message_response").html("");

    var name = $("#InputName").val();
    var email = $("#InputEmail").val();
    var subject = $("#InputSubject").val();
    var message = $("#InputMessage").val();

    var user_ID = $("#userID").val();
    var userName = $("#userName").val();

    if (name == "") {
        $("#message_response").html("Please enter your name.");
    } else if (email == "") {
        $("#message_response").html("Please enter your email.");
    } else if (subject == "") {
        $("#message_response").html("Please enter a subject.");
    } else if (message == "") {
        $("#message_response").html("Please type your message.");

        // All field.
    } else {
        $("#submit").attr("disabled", true);
        $("#InputName").attr("disabled", true);
        $("#InputEmail").attr("disabled", true);
        $("#InputMessage").attr("disabled", true);
        $("#InputMessage").attr("disabled", true);

        $("#message_response").html("Please Wait...");

        $.ajax({
            url: "../functions/send_message.php",
            type: "POST",
            data: "name=" + name +
                "&email=" + email +
                "&subject=" + subject +
                "&message=" + message +
                "&userName=" + userName +
                "&userID=" + user_ID,

            success: function(result) {
                $("#message_response").html(result);
                $("#submit").attr("disabled", false);
                $("#InputName").attr("disabled", false);
                $("#InputEmail").attr("disabled", false);
                $("#InputMessage").attr("disabled", false);
                $("#InputMessage").attr("disabled", false);
            }
        });
    }
}

// Dashboard button 
// function dashboard() {
//     window.open('../dashboard/', '_blank');
// }

// Search user
function search_user() {
    $("#search_response").html("");
    var username = $("#usernmae").val();

    if (username != "") {
        window.location.href = "../user/" + username;
        $("usernmae").val("");
    } else {
        $("#search_response").html("Please enter a username...");
        $("#search_response").fadeOut(5000);
    }
}

function send_request() {
    $("#send_request").html('Send <i class="fas fa-check"></i>');
}