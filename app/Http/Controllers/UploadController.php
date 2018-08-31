<?php

namespace Challenge\Http\Controllers;

use Illuminate\Http\Request;
use Challenge\Http\Controllers\PersonController;
use Challenge\Http\Controllers\ShipOrdersController;


class UploadController extends Controller
{
    public function store(Request $request)
    {
        $xml = request()->file('xml');

        $name = $xml->getClientOriginalName();

        if ($name == 'people.xml') {
            $xml->storeAs('xmls', "people.xml");
            return (new PersonController())->store($request);
        } else if ($name == 'shiporders.xml') {
            $xml->storeAs('xmls', "shiporders.xml");
            return (new ShipOrdersController())->store($request);
        }
    }
}
