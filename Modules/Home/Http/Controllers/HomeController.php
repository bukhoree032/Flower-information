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
        $db = "flowers";
        $data['result'] = $this->Repository->show($db);

        return view('home::index',$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function FlowerDetail($id)
    {
        $db = "flowers";
        $data['result'] = $this->Repository->ShowId($id,$db);

        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('home::flowers.flower_detail',$data);
    }

    public function FlowerFlowers()
    {
        $db = "flowers";
        $data['result'] = $this->Repository->show($db);

        return view('home::flowers.flower',$data);
    }


    // ----------- farmer
    
    public function Farmers()
    {
        return view('home::farmers.farmer');
    }

    public function FarmersDetail()
    {
        return view('home::farmers.farmer_detail');
    }
    
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('home::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('home::edit');
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
