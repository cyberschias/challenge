<?php

namespace Challenge\Http\Controllers;

use Challenge\Items;
use Challenge\ShipOrders;
use Illuminate\Http\Request;

use SoapBox\Formatter\Formatter;
use DB;
use Storage;


class ShipOrdersController extends Controller
{
    public function store(Request $request)
    {
        $path = Storage::get('xmls/shiporders.xml');
        $formatter = Formatter::make($path, Formatter::XML);
        $json = $formatter->toJson();
        $data = json_decode($json, true);
        Items::truncate();
        foreach ($data['shiporder'] as $row) {
            $shiporder = ShipOrders::find($row['orderid']);
            if ($shiporder === null) {
                $shiporder = new ShipOrders;
                $shiporder->id = $row['orderid'];
                $shiporder->person_id = $row['orderperson'];
                $shiporder->shipto_name = $row['shipto']['name'];
                $shiporder->shipto_address = $row['shipto']['address'];
                $shiporder->shipto_city = $row['shipto']['city'];
                $shiporder->shipto_country = $row['shipto']['country'];
                $shiporder->save();
                foreach ($row['items'] as $result) {
                    $item = new Items;
                    $item->title = $result['title'];
                    $item->note = $result['note'];
                    $item->quantity = $result['quantity'];
                    $item->price = $result['price'];
                    $shiporder->items()->save($item);
                }
            } else {
                $shiporder->id = $row['orderid'];
                $shiporder->person_id = $row['orderperson'];
                $shiporder->shipto_name = $row['shipto']['name'];
                $shiporder->shipto_address = $row['shipto']['address'];
                $shiporder->shipto_city = $row['shipto']['city'];
                $shiporder->shipto_country = $row['shipto']['country'];
                $shiporder->save();

                foreach ($row['items'] as $result) {
                    $item = new Items;
                    $item->title = $result['title'];
                    $item->note = $result['note'];
                    $item->quantity = $result['quantity'];
                    $item->price = $result['price'];
                    $shiporder->items()->save($item);
                }
            }
        }
        return back();
    }
}
