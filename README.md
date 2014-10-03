Yii2 outdated-browser
=====================

Yii2 widget for [http://outdatedbrowser.com/](http://outdatedbrowser.com/).

- [GitHub Repo](https://github.com/Sammaye/yii2-outdated-browser)
- [GitHub Issues](https://github.com/Sammaye/yii2-outdated-browser/issues)
- [Packagist Entry](https://packagist.org/packages/sammaye/yii2-outdated-browser)

Usage of this plugin is really simple, just include it in your `composer.json` like so:

``` bash
'sammaye/yii2-outdated-browser': '*'
```

and then update your composer (`php ./composer.phar update`) and finally include it in your page:

``` php
<?= sammaye\outdatedBrowser\OutdatedBrowser::widget() ?>
```

## Setting the parameters

The outdated browser plugin accepts four parameters which can be provied as class vars like so:

```php
<?= sammaye\outdatedBrowser\OutdatedBrowser::widget(['language' => 'ar', 'bgColor' => '#f25648']) ?>
```

## Using this only for IE7

Using this only for IE7 can be very useful especially since Bootstrap 3.x supports IE8+

Since Yii2, by default, only uses JQuery 2.2 you must actually add a line to your composer to make this work:

``` bash
"bower-asset/jquery": "~1.11@stable",
```

And then when calling the plugin you simply put:

``` php
<?= sammaye\outdatedBrowser\OutdatedBrowser::widget(['onlyIe7' => true]) ?>
```