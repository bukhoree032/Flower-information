<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page_title = 'ร้านค้า';
        $page_description = '';

        return view('manage::store.manage_store', compact('page_title', 'page_description'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';

        return view('manage::store.form_store', compact('page_title', 'page_description'));
    }
}
