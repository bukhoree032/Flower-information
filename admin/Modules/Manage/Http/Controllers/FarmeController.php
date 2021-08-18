<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FarmeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page_title = 'กลุ่มเกษตรกร และฟาร์ม';
        $page_description = '';

        return view('manage::farme.manage_farme', compact('page_title', 'page_description'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'เพิ่มข้อมูลดอกไม้';
        $page_description = '';

        return view('manage::farme.form_farme', compact('page_title', 'page_description'));
    }
}
