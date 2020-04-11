<?php
/**
 * User: widdy
 * Date: 2020/4/10
 * Time: 17:14
 */

/**
 * @param $array
 * @param string $keyName default id
 * @param string $parentKeyName default parent_id
 * @param string $childrenKeyName default children
 * @return array
 */
function array2tree($array, $keyName = 'id', $parentKeyName = 'parent_id', $childrenKeyName = 'children')
{
    $ret = [
        [$keyName => 0, 'name' => 'root', $childrenKeyName => []]
    ];
    foreach ($array as &$item) {
        $item[$childrenKeyName] = [];
        $ret[$item[$keyName]] = &$item;
    }

    foreach ($array as &$item) {
        $ret[$item[$parentKeyName]][$childrenKeyName][] = &$item;
    }

    return $ret[0][$childrenKeyName];
}