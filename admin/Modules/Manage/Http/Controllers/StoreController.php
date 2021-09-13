<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Manage\Repositories\Repository as Repository;
use Modules\Manage\Repositories\StoresRepository as StoresRepository;

use Illuminate\Support\Str;
use App\Http\Controllers\UploadeFileController;

class StoreController extends UploadeFileController
{
    protected $Repository;

    public function __construct(Repository $Repository,StoresRepository $StoresRepository)
    {
        $this->Repository = $Repository;
        $this->StoresRepository = $StoresRepository;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $page_title = 'ร้านค้า';
        $page_description = '';

        $db = "stores";
        $data['result'] = $this->Repository->index($db);

        return view('manage::store.manage_store', compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';

        $data['result'] = $this->Repository->show('flowers');
        $data['resultAmphures'] = $this->Repository->show('amphures');
        $data['resultProvinces'] = $this->Repository->show('provinces');
        $data['resultDistricts'] = $this->Repository->districts('provinces');
        // dd($data);
        return view('manage::store.form_store', compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function CreateStore(Request $request)
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';
        $datajount['resultID'] = $this->Repository->ProvinceJoin($request['S_SUB_DISTRICT']);
        
        $request['S_DISTRICT'] = $datajount['resultID']['result'][0]->id_amphures ?? null;
        $request['S_PROVINCE'] = $datajount['resultID']['result'][0]->id_provinces ?? null;
        $request['S_FLOWER'] = serialize($request['S_FLOWER']);
        $request['S_FLOWER_OTHER'] = serialize($request['S_FLOWER_OTHER']);
        $request['S_CUSTOMER_GROUP'] = serialize($request['S_CUSTOMER_GROUP']);
        $request['S_CUSTOMER_GROUP_OTHER'] = serialize($request['S_CUSTOMER_GROUP_OTHER']);
        $request['S_SOURCE'] = serialize($request['S_SOURCE']);
        $request['S_SEND_OTHER'] = serialize($request['S_SEND_OTHER']);
        $request['S_CONDITION_SELL_OTHER'] = serialize($request['S_CONDITION_SELL_OTHER']);
        $request['S_CUSTOMER_PAYS_OTHER'] = serialize($request['S_CUSTOMER_PAYS_OTHER']);
        $request['S_PROMOTION_OTHER'] = serialize($request['S_PROMOTION_OTHER']);

        $data['result'] = $this->Repository->insert($request,'classModelStores');

        return redirect()->route('manage.create.store2',$data['result']['id']);
    }

    public function FormStore2($id)
    {
        // dd($id);
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';
        
        
        $data['resultID'] = $this->StoresRepository->ShowId($id,'stores');

        return view('manage::store.form_store_part2',compact('page_title', 'page_description'),$data);
    }
    
    public function CreateStore2(Request $request,$id)
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';

        $request['S_VOLUME'] = serialize($request['S_VOLUME']);
        $request['S_REMAINING'] = serialize($request['S_REMAINING']);
        $request['S_REMAINING_CAUSE_OTHER'] = serialize($request['S_REMAINING_CAUSE_OTHER']);
        $request['S_SET_PRICE'] = serialize($request['S_SET_PRICE']);
        $request['S_PROBLEM'] = serialize($request['S_PROBLEM']);

        $datas = $request->all();
        $data['result'] = $this->Repository->update($datas,$id,'stores');

        // return view('manage::store.form_store_part2');
        return redirect()->route('index.store');
    }

    
    public function PageDetailStore($id)
    {
        $page_title = 'เพิ่มข้อมูลร้านค้า';
        $page_description = '';

        
        $data['result'] = $this->Repository->ShowId($id,'stores');
        dd($data);

        return view('manage::store.detail_store',compact('page_title', 'page_description'),$data);
    }
}
