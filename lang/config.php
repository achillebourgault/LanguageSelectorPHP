<?php
$languages_availible = ["FR", "EN"];
$site_default_language = "FR";
$user_current_language;

if (!isset($_GET['lg'])) {
    header('Location: index.php?lg=' . $site_default_language);
} else {
    $lg = $_GET['lg'];
    if (file_exists("assets/lang/" . $lg)) {
        $lg = $_GET['lg'];
        $user_current_language = $lg;
    } else {
        header('Location: index.php?lg=' . $site_default_language);
    }
}
$lang = json_decode(file_get_contents("assets/lang/" . $lg . "/messages.json"), true);

/* Optional: If messages.json file is missing, the website move the user to the error page
if ($lang == NULL)
    header('Location: error.php?lg=' . $site_default_language);
*/

?>
<script type="text/javascript">
function changeLanguage(currentLang) {
    const langLabel = $("#inputLanguage").val();

    if (langLabel != currentLang) {
        const new_url = "index.php?lg=".concat(langLabel);
        document.location.href = new_url;
        console.log(new_url);
    }
}
</script>
<?php