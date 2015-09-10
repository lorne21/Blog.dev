<?php

use Faker\Factory as Faker;

class PostsController extends \BaseController {

	public function __construct()
	{
	    parent::__construct();
	    $this->beforeFilter('auth', array('except' => array('index', 'show')));
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // set a value in the session
        $query = Post::with('user');

        if(Input::has('search')){
        	$search = Input::get('search');
        	$query->where('title', 'like', '%' . $search . '%');
        	$query->orWhere('title', 'like', '%' . $search);
        	$query->orWhere('title', 'like', $search . '%');
        	
        	$query->orWhereHas('user', function($q){
        		$search = Input::get('search');
        		$q->where('first_name', $search);
        	});
        	$query->orWhereHas('user', function($q){
        		$search = Input::get('search');
        		$q->where('last_name', $search);
        	});
        }
        

        $posts = $query->orderBy('created_at', 'desc')->paginate(6);


		return View::make('posts.index')->with(array('posts' => $posts));
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {
        // create the validator
        $validator = Validator::make(Input::all(), Post::$rules);
        // attempt validation
        if ($validator->fails()) {
            Session::flash('errorMessage', 'Something went wrong. Please read errors below:');
            Log::info('Validator failed', Input::all());
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            // validation succeeded, create and save the post
            $directory = 'img/uploads/';
            $image = Input::file('img_path');
            $faker = Faker::create();
            $post = new Post;
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            $post->user_id = Auth::id();
            if (Input::hasFile('img_path')) {
                $post->img_path = $image->move($directory);
            }
            $post->save();
            Log::info("Post successfully saved.", Input::all());
            Session::flash('successMessage', 'You created ' . $post->title . ' post successfully');
            return Redirect::action('PostsController@index');
        }
    }
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
        if(!$post) {
            Session::flash('errorMessage', "Post with id of $id is not found");
            App::abort(404);
        }
        Log::info("post of id $id found");
        return View::make('posts.show')->with(array('post' => $post));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $post = Post::find($id);
        if(!$post) {
            Session::flash('errorMessage', "Post with id of $id is not found");
            App::abort(404);
        }
		return View::make('posts.edit')->with(['post' => $post]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
        $validator = Validator::make(Input::all(), Post::$rules);
        // attempt validation
        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
            // validation failed, redirect to the post create page with validation errors and old inputs
        } else {
            // validation succeeded, create and save the post
            $post = Post::find($id);
            $directory = 'img/uploads/';
            $image = Input::file('img_path');
    
            $post->title = Input::get('title');
            $post->body = Input::get('body');
            if (Input::hasFile('img_path')) {
                $post->img_path = $image->move($directory);
            }
            $post->save();
            if (Request::wantsJson()) {
                return Response::json(array("Post edited successfully"));
            } else {
                Session::flash('errorMessage', "Post with id of $id is not found");
                return Redirect::action('PostsController@getManage');
            }
        }
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function destroy($id)
	{
        $post = Post::find($id);
        // if(!$post) {
        //     Session::flash('errorMessage', "Post with id of $id is not found");
        //     App::abort(404);
        // }
        // $post->delete();
        // return Redirect::action('PostsController@index');
        $post->delete();

        if (Request::wantsJson()) {
            return Response::json(array("Post deleted successfully"));
        } else {
            Session::flash('errorMessage', "Post with id of $id is not found");
            return Redirect::action('PostsController@getManage');
        }
	}

    public function getManage()
    {
        return View::make('posts.manage');
    }

    public function getList()
    {
        $query = Post::with('user');

        $posts = $query->get();

        return Response::json($posts);
    }
	
}