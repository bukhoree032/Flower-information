<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Manage\Repositories\Repository as Repository;
use Modules\Manage\Repositories\FarmesRepository as FarmesRepository;

class FarmeController extends Controller
{
    protected $Repository;

    public function __construct(Repository $Repository,FarmesRepository $FarmesRepository)
    {
        $this->Repository = $Repository;
        $this->FarmesRepository = $FarmesRepository;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page_title = 'กลุ่มเกษตรกร และฟาร์ม';
        $page_description = '';

        $db = "farmes";
        $data['result'] = $this->Repository->index($db);
        // dd($data);

        // dd($data);
        return view('manage::farme.manage_farme', compact('page_title', 'page_description'),$data);
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
        // $page_title = 'เพิ่มข้อมูลกลุ่มเกษตรกร และฟาร์ม';
        // $page_description = '';

        $datajount['resultID'] = $this->Repository->ProvinceJoin($request['FA_SUB_DISTRICT']);
        // dd($datajount['resultID']['result'][0]->id_provinces);
        $request['FA_DISTRICT'] = $datajount['resultID']['result'][0]->id_amphures;
        $request['FA_PROVINCE'] = $datajount['resultID']['result'][0]->id_provinces;

        $request['FA_FLOWER'] = serialize($request['FA_FLOWER']);
        $request['FA_CUSTOMER_GROUP'] = serialize($request['FA_CUSTOMER_GROUP']);
        $request['FA_SEND_OTHER'] = serialize($request['FA_SEND_OTHER']);
        $request['FA_CONDITION_SELL_OTHER'] = serialize($request['FA_CONDITION_SELL_OTHER']);
        $request['FA_CUSTOMER_PAYFA_OTHER'] = serialize($request['FA_CUSTOMER_PAYFA_OTHER']);
        $request['FA_PROMOTION_OTHER'] = serialize($request['FA_PROMOTION_OTHER']);

        $request['file'] = "111";
        $request['file_multiple'] = "222";
        
        $datas = $request->all();
        // 
        $data['resulta'] = $this->Repository->insert($datas,'classModelFarmes');
        // dd($data['result']['id']);
        $data['resultID'] = $this->FarmesRepository->ShowId($data['resulta']['id'],'farmes');

        // dd($data['resulta']['id']);
        $data['result'] = $this->Repository->show('flowers');
        $data['resultAmphures'] = $this->Repository->show('amphures');
        $data['resultProvinces'] = $this->Repository->show('provinces');
        $data['resultDistricts'] = $this->Repository->districts('provinces');


        // return view('manage::farme.form_farme_part2', compact('page_title', 'page_description'),$data);
        return redirect()->route('manage.create.farme2',$data['resulta']['id']);
    }

    public function FormFarme2($id)
    {
        $page_title = 'เพิ่มข้อมูลกลุ่มเกษตรกร และฟาร์ม';
        $page_description = '';
        
        $data['resultID'] = $this->FarmesRepository->ShowId($id,'farmes');

        $data['result'] = $this->Repository->show('flowers');
        $data['resultAmphures'] = $this->Repository->show('amphures');
        $data['resultProvinces'] = $this->Repository->show('provinces');
        $data['resultDistricts'] = $this->Repository->districts('provinces');

        return view('manage::farme.form_farme_part2', compact('page_title', 'page_description'),$data);
    }

    public function CreateFarme2(Request $request,$id)
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';

        
        $request['FA_VOLUME'] = serialize($request['FA_VOLUME']);
        $request['FA_REMAINING'] = serialize($request['FA_REMAINING']);
        $request['FA_REMAINING_CAUSE_OTHER'] = serialize($request['FA_REMAINING_CAUSE_OTHER']);
        $request['FA_SET_PRICE'] = serialize($request['FA_SET_PRICE']);
        $request['FA_PROBLEM'] = serialize($request['FA_PROBLEM']);
        // dd($request,$id);
        $datas = $request->all();
        $data['result'] = $this->Repository->update($datas,$id,'farmes');
        
        return redirect()->route('index.farme');
    }

    public function PageDetailFarme($id)
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';

        
        $data['result'] = $this->Repository->ShowId($id,'farmes');
        dd($data);
        
        return view('manage::farme.detail_farme',compact('page_title', 'page_description'),$data);
    }
}
