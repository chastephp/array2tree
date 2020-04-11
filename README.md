# array2tree
a simple php function that convert array to tree


## Usage

```php
$arr = [
    ['id' => 1, 'name' => '11', 'parent_id' => 0],
    ['id' => 2, 'name' => '22', 'parent_id' => 1],
    ['id' => 3, 'name' => '33', 'parent_id' => 2],
    ['id' => 4, 'name' => '44', 'parent_id' => 2],
];

var_dump(array2tree($arr));
```
