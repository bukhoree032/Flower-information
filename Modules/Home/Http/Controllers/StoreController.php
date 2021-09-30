<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Home\Repositories\Repository as Repository;
use Modules\Home\Repositories\StoresRepository as StoresRepository;

class StoreController extends Controller
{
    protected $Repository;

    public function __construct(Repository $Repository,StoresRepository $StoresRepository)
    {
        $this->Repository = $Repository;
        $this->StoresRepository = $StoresRepository;
    }
    
    
    public function Stores()
    {
        $data['system'] = $this->Repository->show('system');
        $data['banner'] = $this->Repository->show('banner');

        $db = "stores";
        $data['result'] = $this->Repository->Show($db);

        foreach ($data['result'] as $key => $value) {
            if(isset($value->S_SUB_DISTRICT)) {
                $data['ProvinceJoin'][$key] = $this->Repository->ProvinceJoin($value->S_SUB_DISTRICT);
            }
        }
        return view('home::stores.store',$data);
    }

    public function StoresDetail($id)
    {
        $data['system'] = $this->Repository->show('system');
        $data['banner'] = $this->Repository->show('banner');

        $data['result'] = $this->Repository->ShowId($id,"stores");

        $data['result']->S_FLOWER = unserialize($data['result']->S_FLOWER);
        foreach ($data['result']->S_FLOWER as $key => $value) {
            if(isset($value)) {
                // dd($value);
                $data['FlowerStor'][$key] = $this->StoresRepository->FlowerStor($value);
            }
        }

        $data['result']->file_multiple = unserialize($data['result']->file_multiple);
        $data['result']->S_SUB_DISTRICT = $this->Repository->ProvinceJoin($data['result']->S_SUB_DISTRICT);
        
        // dd($data);
        return view('home::stores.store_detail',$data);
    }


}
