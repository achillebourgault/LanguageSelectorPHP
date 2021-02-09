# LanguageSelector


Allows you to add a button to change the site language.\
Translations are stocked in ```lang/<lg>/messsages.json``` \
Made with PHP and Javascript.

## Demo

[Click here](http://achillebourgault.fr/demos/LanguageSelectorPHP/) to view the example.

## Installation

Just copy the 'lang' folder into your project directory.

```
cp -r assets/lang ../my-project/vendor
```

Then, add the language config file to your page.
```php
<?php require ("assets/lang/config.php"); ?>
```
## Usage
By default, the variable who contain all messages is named ```$lang```\
In case of you don't want to change the variable name just use the following example.

```html
<p class="test-message"><?php echo $lang['example_message']; ?></p>
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)
