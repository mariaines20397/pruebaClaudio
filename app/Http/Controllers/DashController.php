<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index()
    {
        return \view('dash.crud.index');
    }
    public function transit_guide()
    {
        return \view('dash.crud.transit_guide');
    }
    public function technical_data()
    {
        return \view('dash.crud.technical_data');
    }
    public function production()
    {
        return \view('dash.crud.production');
    }
    public function mining_producers(Type $var = null)
    {
        return \view('dash.crud.mining_producers');
    }
    /*public function statisticalGraph(Type $var = null)
    {
        return \view('dash.crud.statisticalGraph');
    }*/
}
