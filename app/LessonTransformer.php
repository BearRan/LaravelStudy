<?php
/**
 * Created by PhpStorm.
 * User: bear
 * Date: 2017/7/25
 * Time: 上午8:45
 */

namespace App;


class LessonTransformer extends Transformer
{
    public function transform($lesson)
    {
        return [
            'title'=>$lesson['title'],
            'content'=>$lesson['body'],
            'is_free'=>(boolean) $lesson['free']
        ];
    }
}