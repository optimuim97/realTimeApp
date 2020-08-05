<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Question::latest()->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Question::create([
            "title"=> $request->title,
            "slug"=> $request->slug,
            "body"=> $request->body,
            "category_id"=> $request->category_id,
            "user_id"=> $request->user_id,
        ]);

        return response('Propre',Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return $question;
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();

        return response("Deleted",  Response::HTTP_NO_CONTENT);
    }
}
