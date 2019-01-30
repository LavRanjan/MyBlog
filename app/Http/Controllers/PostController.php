<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Tag;
Use Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $posts = Question::take(6)->orderby('id','desc')->get();
        $latestPost = Question::orderby('id','desc')->first();
        // return dd($latestPost);
        return view('Posts.index')->with(compact('posts','latestPost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tags = Tag::all();
        // return dd($tags);

        return view('Posts.create')->with(compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            // return $request->all();
            $validator = Validator::make($request->all(), [
                'question'    => 'required|string',
                'tag_id' => 'required|integer',
                'answer' => 'required|string',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('error','Please check the validation errors below')
                    ->withErrors($validator)
                    ->withInput($request->all());
            }

            $result = Question::createQuestionAndAnswer($request);

            if($result =='success')
                return redirect()->route('post.index')->with('success', $request->get('name').' post updated successfully!');
            elseif($result =='unsuccess')
                return redirect()->back()->with('error', 'post not created ,Please try again.')->withInput($request->all());
            else
                return redirect()->back()->with('error', 'Exception : '.$result)->withInput($request->all());

        }catch(Exception $e){
            return redirect()->back()->with('error', 'Exception : '.$e->getMessage)->withInput($request->all());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Question::findorfail($id);
        $tags = Tag::all();
        return view('Posts.edit')->with(compact('posts','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $validator = Validator::make($request->all(), [
                'question'    => 'required|string',
                'tag_id' => 'required|integer',
                'answer' => 'required|string',
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                    ->with('error','Please check the validation errors below')
                    ->withErrors($validator)
                    ->withInput($request->all());
            }

            $questions=Question::findorfail($id);

            $result = Question::updateQuestionAndAnswer($request,$questions);

            if($result =='success')
                return redirect()->route('post.index')->with('success', $request->get('name').' post updated successfully!');
            elseif($result =='unsuccess')
                return redirect()->back()->with('error', 'post not created ,Please try again.')->withInput($request->all());
            else
                return redirect()->back()->with('error', 'Exception : '.$result)->withInput($request->all());

        }catch(Exception $e){
            return redirect()->back()->with('error', 'Exception : '.$e->getMessage)->withInput($request->all());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
