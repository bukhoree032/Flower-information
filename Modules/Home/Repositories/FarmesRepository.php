<?php

namespace Modules\Home\Repositories;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Home\Entities\Stores;
use Modules\Home\Entities\Flowers;
use Modules\Home\Entities\Farmes;

class FarmesRepository 
{
    public function __construct()
    {
        $this->classModelStores = Stores::class;
        $this->classModelFlowers = Flowers::class;
        $this->classModelFarmes = Farmes::class;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function index()
    {

        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show()
    {
        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function ShowId()
    {

        return $data;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function insert()
    {
        return $insert;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function update()
    {
        return $data;
    }
}

