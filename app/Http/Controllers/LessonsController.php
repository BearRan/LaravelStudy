<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;

class LessonsController extends Controller
{
    public function index()
    {
        // all();
        // 没有提示信息
        // 直接展示我们的数据结构
        // 没有错误信息
//        return Lesson::all();

        $lessons = Lesson::all();

        return \Response::json([
            'status'=>'success',
            'status_code'=>200,
//            'data'=> $lessons->toArray()
            'data'=> $this->transformCollection($lessons)
        ]);

    }

    public function show($id)
    {
        $lesson = Lesson::findOrFail($id);

        return \Response::json([
            'status'=>'success',
            'status_code'=>200,
            'data'=> $this->transform($lesson)
        ]);
    }

    private function transformCollection($lessons)
    {
        return array_map([$this,'transform'], $lessons->toArray());
    }

    private function transform($lesson)
    {
        return [
            'title'=>$lesson['title'],
            'content'=>$lesson['body'],
            'is_free'=>(boolean) $lesson['free']
        ];
    }

//    private function transform($lessons)
//    {
//        return array_map(function($lesson){
//            return [
//                'title'=>$lesson['title'],
//                'content'=>$lesson['body'],
//                'is_free'=>(boolean) $lesson['free']
//            ];
//        },$lessons->toArray());
//    }

}
