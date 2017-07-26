<?php

namespace App\Http\Controllers;

use App\LessonTransformer;
use Illuminate\Http\Request;
use App\Lesson;

class LessonsController extends ApiController
{
    protected $lessonTransformer;

    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
    }

    public function index()
    {
        // all();
        // 没有提示信息
        // 直接展示我们的数据结构
        // 没有错误信息
//        return Lesson::all();

        $lessons = Lesson::all();

        return $this->response([
           'status'=>'success',
            'data'=>$this->lessonTransformer->transformCollection($lessons->toArray())
        ]);
//        return \Response::json([
//            'status' => 'success',
//            'status_code' => 200,
////            'data'=> $lessons->toArray()
//            'data' => $this->lessonTransformer->transformCollection($lessons->toArray())
//        ]);

    }

    public function show($id)
    {
//        $lesson = Lesson::findOrFail($id);

        $lesson = Lesson::find($id);
        if (! $lesson){
            return $this->responseNotFound();
//            return $this->setStatusCode(404)->responseNotFound();
//            return \Response::json([
//                'statue'=>'failed',
//                'status_code'=>'404',
//                'message'=>'Lesson not found'
//            ]);
        }

        return $this->response([
            'status' => 'success',
            'data' => $this->lessonTransformer->transform($lesson)
        ]);

//        return \Response::json([
//            'status' => 'success',
//            'status_code' => 200,
//            'data' => $this->lessonTransformer->transform($lesson)
//        ]);
    }

//    private function transformCollection($lessons)
//    {
//        return array_map([$this,'transform'], $lessons->toArray());
//    }
//
//    private function transform($lesson)
//    {
//        return [
//            'title'=>$lesson['title'],
//            'content'=>$lesson['body'],
//            'is_free'=>(boolean) $lesson['free']
//        ];
//    }

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
