<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Home\Repositories\Repository as Repository;

class HomeController extends Controller
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

        $db = "flowers";
        $data['result'] = $this->Repository->show($db);
        $db = "news";
        $data['news'] = $this->Repository->show($db);

        return view('home::index',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function FlowerDetail($id)
    {
        $data['system'] = $this->Repository->show('system');

        $db = "flowers";
        $data['result'] = $this->Repository->ShowId($id,$db);

        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('home::flowers.flower_detail',$data);
    }

    public function FlowerFlowers()
    {
        $data['system'] = $this->Repository->show('system');

        $db = "flowers";
        $data['result'] = $this->Repository->show($db);

        return view('home::flowers.flower',$data);
    }
}
