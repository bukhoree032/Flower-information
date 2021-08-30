<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page_title = 'ดอกไม้';
        $page_description = '';

        return view('manage::flower.manage_flower', compact('page_title', 'page_description'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'เพิ่มข้อมูลดอกไม้';
        $page_description = '';

        return view('manage::flower.form_flower', compact('page_title', 'page_description'));
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function CreateFlower(Request $request)
    {
        $data=$request->all();
        \DB::table('flowers')->insert([$data,]);
        return redirect()->route('index.flower');
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
        return view('manage::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('manage::edit');
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
