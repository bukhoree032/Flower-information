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
        $affected = \DB::table($db)
              ->where('id', $id)
              ->update($data);
        // $insert = $this->$db::update($data);
        dd($affected);
        return $insert;
    }
}

