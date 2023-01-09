<style>
    <?php
    $theme = mysqli_query($conn, "SELECT theme FROM dev_profile WHERE username='$username'");
    $mode = mysqli_fetch_assoc($theme);
    $mode['theme'];
    $dark = $mode['theme'];

    if ($dark == '0') {
    ?>.card-body {
        background-color: #F2F6F9 !important;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important;
        border-radius: 18px 18px 18px 18px !important;
        background: url('./assets/custom/snowandtree.png');
        background-size: 500px;
        background-repeat: no-repeat;
        background-position: bottom center;

    }

    input,
    select,
    option {
        background-color: #F7FBFC !important;
        <?php
        if ($dark == '1') {
            echo "color: #fff !important;  background-color: #071344 !important;";
        }
        ?>
    }

    .card-three {
        background-color: #E9F7F7 !important;
    }

    .border-bott {
        border-radius: 0px 0px 22px 22px !important;
        padding: 12px;
    }

    .active {
        background-color: #B8D9DB !important;
    }

    .background_color {
        background-color: #e9f7f7d7 !important;
    }

    <?php
    }
    if ($dark == '0') {
        $card_header_color = " background-color: #B8D9DB !important;

        background: url('./assets/custom/snowtree.png');
        background-size: 230px;
        background-repeat: no-repeat;
        background-position: bottom right;
        
        
        
        ";
    }

    ?>.card-header {
        padding-bottom: 10px !important;
        <?php echo $card_header_color; ?>
    }

    .card-two {
        padding: 8px 5px !important;
    }

    .card-two-message {
        padding: 12px !important;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border-bottom: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
        <?php
        if ($dark == '1') {
            echo "color: #fff !important;  background-color: #071344;";
        }
        ?>
    }

    .tdmessages {
        width: 50%;
    }

    .action {
        width: 8%;
    }

    .names {
        width: 14%;
    }


    #response,
    #response_image,
    #response_password,
    #response_email_settings,
    #status,
    #response_visibility_settings,
    #facebook_response,
    #instagram_response,
    #github_response,
    #linkedin_response,
    #response_portfolio,
    #hobbie1_response,
    #hobbie2_response,
    #hobbie3_response,
    #hobbie4_response,
    #response_image_2 {
        font-size: 13px;
        color: red !important;
        font-style: italic;
    }

    #skill_response {
        font-size: 13px;
        color: red !important;
        font-style: italic;
    }

    <?php if ($message_notification == 0) {
    ?>.message_notification_span {
        font-size: 13px;
        color: red;
        text-align: right;
        float: right;
        <?php
    } else {
        echo '
    .message_notification_span {
    font-size: 13px;
    color: green;
    text-align: right;
    float: right;';
    }
        ?>
    }

    .upload-file {
        width: 100%;
        padding: 30px;
    }

    .filename {
        border: none;
        background-color: #F7F7FF;
        width: 100%;
        padding: 0;
        border-radius: 0px 12px 12px 0px;
        cursor: pointer;
    }

    input[type=file]::file-selector-button {
        border: none;
        padding: 20px;
        padding: 5px 18px;
        border-radius: 12px 0px 0px 12px;
        background-color: #344767;
        transition: 1s;
        font-size: 18px;
        color: #fff;
    }

    input[type=file]::file-selector-button:hover {
        opacity: 0.7;
        border: none;
        cursor: pointer;
    }

    .fa-upload,
    .fa-key,
    .fa-bell {
        padding-right: 5px;
    }

    .top-bottom-padding {
        padding: 8px 16px;
        width: 100%;
    }

    .center {
        display: flex;
        justify-content: center;
    }

    .progress {
        border: none;
        width: 100%;
    }

    .progress[value] {
        /*Reset the default appearance */
        -webkit-appearance: none;
        appearance: none;
        width: 420px;
        height: 15px;
    }

    .progress[value]::-webkit-progress-bar {
        background-color: rgb(0, 0, 0);
        border-radius: 14px;
    }

    .progress[value]::-webkit-progress-value::before {
        content: '80%';
        position: absolute;
        right: 0;
        top: -125%;
    }

    .status {
        color: #a29bfe;
    }

    .loaded_n_total {
        color: #a29bfe;
    }

    select {
        appearance: none;
        background-color: #F7F7FF;
        border: none;
        padding: 0 1em 0 0;
        margin: 0;
        width: 100%;
        font-family: inherit;
        font-size: inherit;
        cursor: inherit;
        line-height: inherit;
    }

    .select {
        width: 100%;
        border: 1px solid var(--select-border);
        border-radius: 0.25em;
        padding: 0.25em 0.5em;
        font-size: 1.25rem;
        cursor: pointer;
        line-height: 1.1;
        background-color: #fff;
        background-image: linear-gradient(to top, #f9f9f9, #fff 33%);
        width: 100%;
    }

    .btn-close {
        color: red;
    }

    .demofileimage {
        width: 80%;
        border: 1px solid #ccc;
        border-radius: 12px;
    }

    .centered {
        text-align: center;
        line-height: 8px;
    }

    .centered p {
        text-align: left;
        margin-left: 40px;
    }

    option {
        padding: 8px;
    }

    #uploadbuttonn {
        padding: 20px;
    }

    .filenameFN {
        font-weight: 600;
        color: red;
        text-decoration: underline;
        padding: 2px 4px;
    }

    .filenameLN {
        font-weight: 600;
        color: lightgreen;
        text-decoration: underline;
        padding: 2px 4px;
    }

    .filenameAN {
        font-weight: 600;
        color: darkgoldenrod;
        text-decoration: underline;
        padding: 2px 4px;
    }

    .filenameFN1 {

        color: red;
        text-decoration: underline;
        padding: 2px 10px;
    }

    .filenameLN1 {

        color: lightgreen;
        text-decoration: underline;
        padding: 2px 10px;
    }

    .filenameAN1 {

        color: darkgoldenrod;
        text-decoration: underline;
        padding: 2px 10px;
    }

    body {
        scrollbar-width: thin;
        /* "auto" or "thin" */
        scrollbar-color: #FFD15C #75757557;
        /* scroll thumb and track */
    }

    body::-webkit-scrollbar {
        width: 12px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: #75757557;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        background-color: #FFD15C;
        /* color of the scroll thumb */
        border-radius: 20px;
        /* roundness of the scroll thumb */
        border: 3px solid #75757557;
        /* creates padding around scroll thumb */
    }


    /* Works on Firefox */

    * {
        scrollbar-width: thin;
        scrollbar-color: #FFD15C #75757557;
    }


    /* Works on Chrome, Edge, and Safari */

    *::-webkit-scrollbar {
        width: 12px;
    }

    *::-webkit-scrollbar-track {
        background: #75757557;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #FFD15C;
        border-radius: 20px;
        border: 3px solid #75757557;
    }

    .message-box {
        padding: 20px;
    }

    .user_profile_image_list {
        width: 140px;
        height: 140px;
        border-radius: 50%;
    }

    .card_image {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
        width: 40%;
        background-color: #B8D9DB;
        border-radius: 0px 22px 0px 22px;
        
    }

    .card_image:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .container_image {
        padding: 0px 16px;
    }
    .image_{
        border-radius: 0px 22px 0px 22px;
    }
    abbr[title] {
    cursor: pointer;
    /* ensure consistent styling across browsers */
    text-decoration: underline dotted;
    }

    abbr[title]:hover::after,
    abbr[title]:focus::after {
        content: attr(title);
        /* position tooltip like the native one */
        position: absolute;
        left: -80px;
        bottom: 70px;
        width: auto;
        white-space: nowrap;
        cursor: pointer;
        /* style tooltip */
        background-color: #1e1e1e;
        color: #fff;
        border-radius: 5px;
        box-shadow: 2px 2px 13px 0 rgba(0, 0, 0, 0.9);
        font-size: 16px;
        padding: 2px 8px;
        color: #FFB400;
    }
</style>

<?php
$profile_additional_css = " 
<style>
    select,
    option {
        background-color: #F7F7FF;
    }
</style>
";
?>