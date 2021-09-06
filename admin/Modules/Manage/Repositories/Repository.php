<?php

namespace Modules\Manage\Repositories;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Manage\Entities\Stores;
use Modules\Manage\Entities\Flowers;

class Repository 
{
    public function __construct()
    {
        $this->classModelStores = Stores::class;
        $this->classModelFlowers = Flowers::class;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($db)
    {
        $data['result'] = \DB::table($db)
                        ->get();
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function ShowId($id,$db)
    {
        $data['result'] = \DB::table($db)
                        ->where('id',$id)
                        ->get();
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function districts()
    {
        $data['result'] = \DB::table('districts')
                        ->join('amphures', 'districts.amphure_id', '=', 'amphures.id')
                        ->join('provinces', 'amphures.province_id', '=', 'provinces.id')
                        ->where('provinces.id','>=', 74)
                        ->where('provinces.id','<=', 76)
                        ->select('districts.id as id_districts','districts.name_th as name_districts','amphures.id as id_amphures','amphures.name_th as name_amphures','provinces.id as id_provinces','provinces.name_th as name_provinces','districts.zip_code as zip_code_districts')
                        
                        ->get();
        return $data;
    }


    /**
     * @param $id
     * @return mixed
     */
    public function ProvinceJoin($id)
    {
        $data['result'] = \DB::table('districts')
                        ->join('amphures', 'districts.amphure_id', '=', 'amphures.id')
                        ->join('provinces', 'amphures.province_id', '=', 'provinces.id')
                        ->where('districts.id', $id)
                        ->select('districts.id as id_districts','districts.name_th as name_districts','amphures.id as id_amphures','amphures.name_th as name_amphures','provinces.id as id_provinces','provinces.name_th as name_provinces')
                        
                        ->get();
        // $insert = $this->$db::create($data);
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function insert($data,$db)
    {
        $insert = $this->$db::create($data);
        return $insert;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update($data,$id,$db)
    {
        $data['update'] = \DB::table($db)
              ->where('id', $id)
              ->update($data);
        // $insert = $this->$db::update($data);
        // dd($id);
        return $data;
    }
}

