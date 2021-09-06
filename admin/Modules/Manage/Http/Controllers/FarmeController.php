<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Manage\Repositories\Repository as Repository;

class FarmeController extends Controller
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
        $page_title = 'เพิ่มข้อมูลดกลุ่มเกษตรกร และฟาร์ม';
        $page_description = '';

        $data['result'] = $this->Repository->show('flowers');
        $data['resultAmphures'] = $this->Repository->show('amphures');
        $data['resultProvinces'] = $this->Repository->show('provinces');
        $data['resultDistricts'] = $this->Repository->districts('provinces');

        return view('manage::farme.form_farme', compact('page_title', 'page_description'),$data);
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function CreateFarme(Request $request)
    {
        $page_title = 'เพิ่มข้อมูลกลุ่มเกษตรกร และฟาร์ม';
        $page_description = '';

        // dd($request);
        $data['result'] = $this->Repository->show('flowers');
        $data['resultAmphures'] = $this->Repository->show('amphures');
        $data['resultProvinces'] = $this->Repository->show('provinces');
        $data['resultDistricts'] = $this->Repository->districts('provinces');

        return view('manage::farme.form_farme_part2', compact('page_title', 'page_description'));
    }
}
