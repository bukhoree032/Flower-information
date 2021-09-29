<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Home\Repositories\Repository as Repository;

class FarmController extends Controller
{
    protected $Repository;

    public function __construct(Repository $Repository)
    {
        $this->Repository = $Repository;
    }

    public function index()
    {
        $data['system'] = $this->Repository->show('system');

        $db = "farmes";
        $data['result'] = $this->Repository->show($db);

        foreach ($data['result'] as $key => $value) {
            if(isset($value->FA_SUB_DISTRICT)) {
                $value->FA_SUB_DISTRICT = $this->Repository->ProvinceJoin($value->FA_SUB_DISTRICT);
            }
        }

        return view('home::farmers.farmer',$data);
    }
    
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $data['system'] = $this->Repository->show('system');

        return view('home::farmers.farmer_detail');
    }
}
