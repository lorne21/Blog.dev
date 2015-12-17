<?php

class ProjectsController extends \BaseController {

	public function __construct()
	{
	    parent::__construct();
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // set a value in the session
        $query = Project::all();

        $projects = $query->orderBy('created_at', 'desc')->paginate(6);


		return View::make('projects.index')->with(array('projects' => $projects));
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
        
    }
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::find($id);
        if(!$project) {
            Session::flash('errorMessage', "Project with id of $id is not found");
            App::abort(404);
        }
        return View::make('projects.show')->with(array('project' => $project));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */

    public function destroy($id)
	{
        
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