<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Cache;
use App\Models\News;
use App\Models\Comment;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //cache
        $news_cached = Cache::remember('newscache', 1, function(){
            return News::orderBy('updated_at', 'desc')->get();
        });

        //paginator
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $per_page = 5;
        $news = new LengthAwarePaginator (
            $news_cached->forPage($current_page, $per_page), 
            $news_cached->count(), 
            $per_page, 
            $current_page, [
            'path' => $request->url(),
            'query' => $request->query()
        ]);

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
            return redirect()
                ->route('news.create')
                ->withErrors($validator)
                ->withInput()
                ->with('status', 'News failed to create');
        } else {
            $news = new News;
            $news->title    = Input::get('title');
            $news->content  = Input::get('content');
            $news->save();

            return redirect()->route('news.index')->with('status', 'News successfully created');
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
        $news = News::withTrashed()->find($id);
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
            return redirect()
                ->route('news.edit', ['id' => $id])
                ->withErrors($validator)
                ->withInput()
                ->with('status', 'News failed to update');
        } else {
            // store
            $news = News::find($id);
            $news->title    = Input::get('title');
            $news->content  = Input::get('content');
            $news->save();

            Cache::forget('newscache');

            return redirect()->route('news.index')->with('status', 'News successfully updated');
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
        //Delete overridden with soft delete function
        $news = News::find($id);
        $news->delete();

        Cache::forget('newscache');

        return redirect()->back()->with('status', 'News successfully deleted');
    }

    /*SOFT DELETES FUNCTION*/
    public function getTrash()
    {
        $news = News::onlyTrashed()->orderBy('updated_at', 'desc')->paginate(3);
        $isTrash = 1;
        return view('news.index')
            ->with('news', $news)
            ->with('isTrash', $isTrash);
    }

    public function restoreTrash($id)
    {
        $news = News::withTrashed()->find($id)->restore();

        Cache::forget('newscache');
        return redirect()->back()->with('status', 'News successfully restored');
    }

    public function removeTrash($id)
    {
        $news = News::withTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('status', 'News permanently removed');
    }
}
