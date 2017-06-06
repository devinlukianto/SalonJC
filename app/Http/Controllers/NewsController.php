<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\News;
use App\Models\Comment;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(3);
        $isTrash = 0;
        return view('news.index')
            ->with('news', $news)
            ->with('isTrash', $isTrash);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'title'     => 'required',
            'content'   => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('news/create')
                ->with('status', 'News failed to create');
        } else {
            $news = new News;
            $news->title    = Input::get('title');
            $news->content  = Input::get('content');
            $news->save();

            return redirect('news')->with('status', 'News successfully created');
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
        $news = News::find($id);
        $comment = $news->comments()->get();

        return view('news.show')
            ->with('news', $news)
            ->with('comment', $comment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view('news.edit')
            ->with('news', $news);
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
            'title'     => 'required',
            'content'   => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return redirect('news/' . $id . '/edit')
                ->with('status', 'News failed to update');
        } else {
            // store
            $news = News::find($id);
            $news->title    = Input::get('title');
            $news->content  = Input::get('content');
            $news->save();

            return redirect('news')->with('status', 'News successfully updated');
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
        $news = News::find($id);
        //Delete overridden with soft delete function
        $news->delete();

        return redirect('news')->with('status', 'News successfully deleted');
    }

    /*SOFT DELETES FUNCTION*/
    public function getTrash()
    {
        $news = News::onlyTrashed()->paginate(3);
        $isTrash = 1;
        return view('news.index')
            ->with('news', $news)
            ->with('isTrash', $isTrash);
    }

    public function restoreTrash($id)
    {
        $news = News::withTrashed()->find($id)->restore();
        return redirect('news/trash')->with('status', 'News successfully restored');
    }

    public function removeTrash($id)
    {
        $news = News::withTrashed()->find($id)->forceDelete();
        return redirect('news/trash')->with('status', 'News permanently removed');
    }
}
