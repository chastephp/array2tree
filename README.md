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

/**
array(1) {
  [0]=>
  array(4) {
    ["id"]=>
    int(1)
    ["name"]=>
    string(2) "11"
    ["parent_id"]=>
    int(0)
    ["children"]=>
    array(1) {
      [0]=>
      array(4) {
        ["id"]=>
        int(2)
        ["name"]=>
        string(2) "22"
        ["parent_id"]=>
        int(1)
        ["children"]=>
        array(1) {
          [0]=>
          array(4) {
            ["id"]=>
            int(3)
            ["name"]=>
            string(2) "33"
            ["parent_id"]=>
            int(2)
            ["children"]=>
            array(0) {
            }
          }
        }
      }
    }
  }
}

**/
```
