// Search user
function search_user() {
    $("#search_response").html("Working...");
    var username = $("#usernmae").val();

    if (username != "") {
        window.location.href = "user/" + username;
        $("usernmae").val("");
    } else {
        $("#search_response").html("Please enter a username...");
    }
}

// Auto scroll
var scrolling = null;

function scroll_up() {
    var d = document.getElementById('scroller');

    d.scrollTop = d.scrollTop - 5;

    scrolling = window.setTimeout(function() {
        scroll_up();
    }, 30);
}

function scroll_down() {
    var d = document.getElementById('scroller');

    d.scrollTop = d.scrollTop + 5;

    scrolling = window.setTimeout(function() {
        scroll_down();
    }, 40);
}

function stop_scroll() {
    window.clearTimeout(scrolling);
}

// autoscroll2

var scrolling2 = null;

function scroll_up_two() {
    var d = document.getElementById('scroller2');

    d.scrollTop = d.scrollTop - 5;

    scrolling2 = window.setTimeout(function() {
        scroll_up_two();
    }, 30);
}

function scroll_down_two() {
    var d = document.getElementById('scroller2');

    d.scrollTop = d.scrollTop + 5;

    scrolling2 = window.setTimeout(function() {
        scroll_down_two();
    }, 40);
}

function stop_scroll_two() {
    window.clearTimeout(scrolling2);
}

// Restore Scroll Experience
function restore_scroll() {
    $('#restore_experience1').load(location.href + ' #restore1');
    $('#restore_experience2').load(location.href + ' #restore2');
}

// Touch me not message on hiring page
function touch_me() {
    $("#touch_me_message").attr("hidden", false);
    var number = 1 + Math.floor(Math.random() * 6);
    if (number == 1) {
        $("#touch_me_message").html("Working...");
        $("#images_on_hover").attr("src", "../dashboard/assets/avatar/avatar1.png")
    } else if (number == 2) {
        $("#touch_me_message").html("Working...2");
        $("#images_on_hover").attr("src", "../dashboard/assets/avatar/avatar2.png")
    } else if (number == 3) {
        $("#touch_me_message").html("Working...3");
        $("#images_on_hover").attr("src", "../dashboard/assets/avatar/avatar3.png")
    } else if (number == 4) {
        $("#touch_me_message").html("Working...4");
        $("#images_on_hover").attr("src", "../dashboard/assets/avatar/avatar4.png")
    } else if (number == 5) {
        $("#touch_me_message").html("Working...5");
        $("#images_on_hover").attr("src", "../dashboard/assets/avatar/avatar5.png")
    } else if (number == 6) {
        $("#touch_me_message").html("Working...6");
        $("#images_on_hover").attr("src", "../dashboard/assets/avatar/avatar6.png")
    }
}
// change touchme_functions
setInterval(touch_me, 2000);

function login_page() {
    function newpage() {
        window.location.href = '../dashboard/';
    }
    setTimeout(function() {
        newpage();
    }, 500);
}

function released() {
    setTimeout(function() {
        $("#touch_me_message").attr("hidden", true);
    }, 9000);
}

function default_hidden() {
    $("#load_less_btn").attr("hidden", true);
    $("#Fatch_all").attr("hidden", true);
}


function fatch_more() {
    $("#first_6").attr("hidden", true);
    $("#load_more_btn").attr("hidden", true);
    $("#load_less_btn").attr("hidden", false);
    $("#Fatch_all").attr("hidden", false);
}

function show_less() {
    $("#first_6").attr("hidden", true);
    $("#first_6").attr("hidden", false);
    $("#load_less_btn").attr("hidden", true);
    $("#load_more_btn").attr("hidden", false);
    $("#Fatch_all").attr("hidden", true);
}

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