<?php

namespace App\Http\Controllers;

use App\Model\Question;
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionController $questionController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionController $questionController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionController $questionController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\QuestionController  $questionController
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionController $questionController)
    {
        //
    }
}
