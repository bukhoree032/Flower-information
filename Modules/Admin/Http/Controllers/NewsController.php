<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Home\Repositories\Repository as Repository;

class NewsController extends Controller
{
    protected $Repository;

    public function __construct(Repository $Repository)
    {
        $this->Repository = $Repository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $db = "news";
        $data['result'] = $this->Repository->Show($db);
        
        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('admin::news.news',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * showid a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function showid($id)
    {
        $db = "news";
        $data['result'] = $this->Repository->ShowId($id,$db);

        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('admin::news.detail',$data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
