<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
Use App\Models\Answer;

class Question extends Model
{
    //
    protected $fillable = [
        'no_of_views', 'question', 'created_by','tag_id',
    ];

    public function tag()
    {
        return $this->belongsTo('App\Models\Tag','tag_id');
    }

    public function answer()
    {
        return $this->hasOne('App\Models\Answer','question_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','created_by');
    }

    public static function createQuestionAndAnswer($request){

        try{
            // return $request->all() ;
            $new_question = Question::create([
                'question'=>$request->get('question'),
                'tag_id'=>$request->get('tag_id'),
                'no_of_views'=>0,
                'created_by'=>Auth::user()->id,

            ]);


            if($new_question){
                $new_answer= Answer::create([
                    'no_of_likes' => 0,
                    'answer'=>$request->get('answer'),
                    'created_by'=>Auth::user()->id,
                    'question_id'=>$new_question->id,
                ]);

                if($new_answer){
                    return 'success';
                }else
                    return 'unsuccess';

            }else{
                return 'unsuccess';
            }


        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public static function updateQuestionAndAnswer($request,$questions){
        try{
            $updated_question = $questions->update([
                'question'=>$request->get('question'),
                'tag_id'=>$request->get('tag_id'),
            ]);

            if($updated_question){
                $answer = Answer::where('question_id',$questions->id)->update([
                    'answer'=>$request->get('answer'),
                ]);

                if($answer){
                    return 'success';
                }else
                    return 'unsuccess';

            }else{
                return 'unsuccess';
            }


        }catch(Exception $e){
            return $e->getMessage();
        }


    }
}
