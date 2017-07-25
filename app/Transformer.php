<?php
/**
 * Created by PhpStorm.
 * User: bear
 * Date: 2017/7/25
 * Time: 上午8:58
 */

namespace App;


abstract class Transformer
{
    public function transformCollection($items)
    {
        return array_map([$this,'transform'], $items);
    }

    public abstract function transform($item);
}