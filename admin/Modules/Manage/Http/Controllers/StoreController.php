<?php

namespace Modules\Manage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Manage\Repositories\Repository as Repository;

class StoreController extends Controller
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

        $db = "flowers";
        $data['result'] = $this->Repository->show($db);
        return view('manage::store.form_store', compact('page_title', 'page_description'),$data);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function CreateStore(Request $request)
    {
        // dd($request['S_FLOWER']);
        $request['S_FLOWER'] = serialize($request['S_FLOWER']);
        $request['S_FLOWER_OTHER'] = serialize($request['S_FLOWER_OTHER']);
        $request['S_CUSTOMER_GROUP'] = serialize($request['S_CUSTOMER_GROUP']);
        $request['S_CUSTOMER_GROUP_OTHER'] = serialize($request['S_CUSTOMER_GROUP_OTHER']);
        $request['S_SOURCE'] = serialize($request['S_SOURCE']);
        $request['S_SEND_OTHER'] = serialize($request['S_SEND_OTHER']);
        $request['S_CONDITION_SELL_OTHER'] = serialize($request['S_CONDITION_SELL_OTHER']);
        $request['S_CUSTOMER_PAYS_OTHER'] = serialize($request['S_CUSTOMER_PAYS_OTHER']);
        $request['S_PROMOTION_OTHER'] = serialize($request['S_PROMOTION_OTHER']);
        
        $datas = $request->all();
        $data['result'] = $this->Repository->insert($datas,'classModelStores');
        
        // dd($data);

        return view('manage::store.form_store_part2',$data);
    }
    
    public function CreateStore2(Request $request,$id)
    {
        
        $request['S_VOLUME'] = serialize($request['S_VOLUME']);
        $request['S_REMAINING'] = serialize($request['S_REMAINING']);
        $request['S_REMAINING_CAUSE_OTHER'] = serialize($request['S_REMAINING_CAUSE_OTHER']);
        $request['S_SET_PRICE'] = serialize($request['S_SET_PRICE']);
        $request['S_PROBLEM'] = serialize($request['S_PROBLEM']);
        // dd($request,$id);
        // S_REMAINING_CAUSE
        $datas = $request->all();
        $data['result'] = $this->Repository->update($datas,$id,'stores');
        // $page_title = 'เพิ่มข้อมูลร้านค้า';
        // $page_description = '';

        return view('manage::store.form_store_part2');
    }
}
