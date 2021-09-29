<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Repositories\Repository as Repository;

use Illuminate\Support\Str;
use App\Http\Controllers\UploadeFileController;

class SystemController extends UploadeFileController
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
        $page_title = 'ตั้งค่าพื้นฐาน';
        $page_description = '';
        $page = compact('page_title', 'page_description');
        
        $db = "system";
        $data['result'] = $this->Repository->index($db);

        return view('admin::system.system',compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'ตั้งค่าพื้นฐาน';
        $page_description = '';
        $page = compact('page_title', 'page_description');
        
        $db = "system";
        $data['result'] = $this->Repository->index($db);

        return view('admin::system.create',compact('page_title', 'page_description'),$data);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function insert(Request $request)
    {
        $uploade = new UploadeFileController();
        if (!empty($request['files'])) {
            $request['file'] = $uploade->uploadImage(
                $request['files'],
                'flowers',
                Str::random(5)
            );
        }
        if($request->id == ''){
            $this->Repository->insert($request->all(),'classModelSystem');
        }else{
            $this->Repository->update($request->all(),$request->id,'classModelSystem');
        }
        return redirect()->route('index.system');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function detail($id)
    {
        $page_title = 'ข่าวกิจกรรม';
        $page_description = '';

        $db = "news";
        $data['result'] = $this->Repository->ShowId($id,$db);

        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('admin::news.detail',compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $page_title = 'ข่าวกิจกรรม';
        $page_description = '';

        $db = "news";
        $data['result'] = $this->Repository->ShowId($id,$db);

        if(isset($data['result']->file_multiple)){
            $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        }

        return view('admin::news.edit',compact('page_title', 'page_description'),$data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $uploade = new UploadeFileController();
        if (!empty($request['files'])) {
            $request['file'] = $uploade->uploadImage(
                $request['files'],
                'flowers',
                Str::random(5)
            );
        }
        
        if (!empty($request['file_multiples'])) {
            foreach ($request['file_multiples'] as $key => $value) {
                $file_multiples[$key] = $uploade->uploadImage(
                    $value,
                    'flowers',
                    Str::random(5)
                );
            }
            if (!empty($request['file_multiples_edit'])) {
                $request['file_multiple'] = serialize(array_merge($request['file_multiples_edit'],$file_multiples));
            }else{
                $request['file_multiple'] = serialize($file_multiples);
            }
        }

        $this->Repository->update($request->all(),$id,'classModelNews');

        return redirect()->route('index.news');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delet($id)
    {
        $db = "classModelNews";
        $this->Repository->delet($id,$db);

        return redirect()->route('index.news');
    }
}
