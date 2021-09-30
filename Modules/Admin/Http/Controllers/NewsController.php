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
        $data['system'] = $this->Repository->show('system');
        $data['banner'] = $this->Repository->show('banner');

        $db = "news";
        $data['result'] = $this->Repository->Show($db);
        
        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('admin::news.news',$data);
    }

    /**
     * showid a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function showid($id)
    {
        $data['system'] = $this->Repository->show('system');
        $data['banner'] = $this->Repository->show('banner');

        $db = "news";
        $data['result'] = $this->Repository->ShowId($id,$db);

        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('admin::news.detail',$data);
    }
}
