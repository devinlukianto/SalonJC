<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\Comment;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comment = Comment::all();

        return view('comments.index')
            ->with('comment', $comment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news_id = Input::get('news_id');
        return view('comments.create')
            ->with('news_id', $news_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'content'   => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('comment.create')
                ->withErrors($validator)
                ->withInput()
                ->with('status', 'Comment failed to create');
        } else {
            $comment = new Comment;
            $comment->news_id  = Input::get('news_id');
            $comment->content  = Input::get('content');
            $comment->save();

            return redirect()->route('news.show', ['id' => $comment->news_id])
                ->with('status', 'Comment successfully created');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);

        return view('comments.edit')
            ->with('comment', $comment);
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
        $rules = array(
            'content'   => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect()->route('comment.edit', ['id' => $id])
                ->withErrors($validator)
                ->withInput()
                ->with('status', 'Comment failed to update');
        } else {
            // store
            $comment = Comment::find($id);
            $comment->content  = Input::get('content');
            $comment->save();

            return redirect()->route('news.show', ['id' => $comment->news_id])
                ->with('status', 'Comment successfully updated');
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
        $comment = Comment::find($id);
        $comment->delete();

        return redirect()->route('news.show', ['id' => $comment->news_id])
                ->with('status', 'Comment successfully deleted');
    }
}
