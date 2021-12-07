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
        $data['banner'] = $this->Repository->show_NoDESC('banner');

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
    public function store($id)
    {
        $data['system'] = $this->Repository->show('system');
        $data['banner'] = $this->Repository->show_NoDESC('banner');

        $db = "farmes";
        $data['result'] = $this->Repository->ShowId($id,$db);

        $data['result']->FA_FLOWER = unserialize($data['result']->FA_FLOWER);
        $data['result']->FA_CUSTOMER_GROUP = unserialize($data['result']->FA_CUSTOMER_GROUP);
        $data['result']->FA_PROBLEM_PLANT = unserialize($data['result']->FA_PROBLEM_PLANT);
        $data['result']->FA_SEND = unserialize($data['result']->FA_SEND);
        $data['result']->FA_SELL = unserialize($data['result']->FA_SELL);
        $data['result']->FA_REMAINING = unserialize($data['result']->FA_REMAINING);
        $data['result']->FA_REMAINING_CAUSE = unserialize($data['result']->FA_REMAINING_CAUSE);
        $data['result']->FA_SET_PRICE = unserialize($data['result']->FA_SET_PRICE);
        $data['result']->FA_PROBLEM = unserialize($data['result']->FA_PROBLEM);
        $data['result']->file_multiple = unserialize($data['result']->file_multiple);

        $data['DISTRICT'] = $this->Repository->ProvinceJoin($data['result']->FA_SUB_DISTRICT);

        return view('home::farmers.farmer_detail',$data);
    }
}
