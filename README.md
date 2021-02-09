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
MIT License

Copyright (c) 2021 Achille Bourgault

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
