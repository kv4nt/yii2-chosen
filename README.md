Chosen + Bootstrap 4 + Yii2
===========================
Fork from https://github.com/RomeroMsk/yii2-chosen

Credits
-------
Chosen http://harvesthq.github.io/chosen/

Chosen Bootstrap Look & Feel https://github.com/dbtek/chosen-bootstrap (with my style fixes)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require "kv4nt/yii2-chosen" "*"
```

or add

```json
"kv4nt/yii2-chosen" : "*"
```

to the `require` section of your application's `composer.json` file.

Usage
-----
**With a model**

```
<?php
use kv4nt\chosen\Chosen;
?>

<?= Chosen::widget([
    'model' => $model,
    'attribute' => 'selectable_attr',
    'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],
    'multiple' => true,
]);?>

<?= $form->field($model, 'selectable_attr')->widget(
    Chosen::className(), [
        'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],
        'disableSearch' => 5, // Search input will be disabled while there are fewer than 5 items
        'clientOptions' => [
            'search_contains' => true,
            'single_backstroke_delete' => false,
        ],
]);?>
```
**Without a model**

```
<?php
use kv4nt\chosen\Chosen;
?>
<?= Chosen::widget([
    'name' => 'ChosenTest',
    'value' => 3,
    'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],
    'allowDeselect' => false,
    'disableSearch' => true, // Search input will be disabled
    'clientOptions' => [
        'search_contains' => true,
        'max_selected_options' => 2,
    ],
]);?>
```

To override default placeholder strings you can add translated messages for `Select an option` (single select) and `Select some options` (multiple select) to your application message file. By default widget will use 'app' category to translate this strings, but you can set your own category by changing `translateCategory` option in widget configuration. For example, you can write this in application config file:
```
<?php
\Yii::$container->set('kv4nt\chosen\Chosen', [
    'translateCategory' => 'my-app',
]);
```
Also you can override placeholder text when invoking widget (it can be useful for selects with small width):
```
<?php
use kv4nt\chosen\Chosen;
?>
<?= Chosen::widget([
    'name' => 'ChosenTest',
    'value' => 3,
    'items' => [1 => 'First item', 2 => 'Second item', 3 => 'Third item'],

    'placeholder' => 'Select',
]);?>
```
