# array2tree
a simple php function that convert array to tree


## Install

```bash
composer require chastephp/array2tree
```


## Usage

```php
$arr = [
    ['id' => 1, 'name' => '11', 'parent_id' => 0],
    ['id' => 2, 'name' => '22', 'parent_id' => 1],
    ['id' => 3, 'name' => '33', 'parent_id' => 2],
    ['id' => 4, 'name' => '44', 'parent_id' => 2],
];

var_dump(array2tree($arr, 'id', 'parent_id', 'children')); 

```

```
array (
  0 =>
  array (
    'id' => 1,
    'name' => '11',
    'parent_id' => 0,
    'children' =>
    array (
      0 =>
      array (
        'id' => 2,
        'name' => '22',
        'parent_id' => 1,
        'children' =>
        array (
          0 =>
          array (
            'id' => 3,
            'name' => '33',
            'parent_id' => 2,
            'children' =>
            array (
            ),
          ),
        ),
      ),
    ),
  ),
)
```
