/*
    Achille Bourgault - LangSelector
    GitHub: https://github.com/achillebourgault/LanguageSelectorPHP
    My Projects: http://achillebourgault.fr
*/

function changeLanguage(currentLang) {
    const langLabel = $("#inputLanguage").val();

    if (langLabel != currentLang) {
        const new_url = "index.php?lg=".concat(langLabel);
        document.location.href = new_url;
        console.log(new_url);
    }
}