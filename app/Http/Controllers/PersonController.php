<?php

namespace Challenge\Http\Controllers;

use Challenge\Phone;
use Challenge\Phones;
use Illuminate\Http\Request;

use Challenge\Person;

use SoapBox\Formatter\Formatter;
use DB;
use Storage;

class PersonController extends Controller
{
    public function store(Request $request)
    {
        $path = Storage::get('xmls/people.xml');
        $formatter = Formatter::make($path, Formatter::XML);
        $json = $formatter->toJson();
        $data = json_decode($json, true);
        Phones::truncate();
        foreach ($data['person'] as $row) {
            $person = Person::find($row['personid']);
            if ($person === null) {
                $person = new Person;
                $person->id = $row['personid'];
                $person->name = $row['personname'];
                $person->save();

                if ((count($row['phones']['phone'])) > 1) {
                    foreach ($row['phones']['phone'] as $result) {
                        $phone = new Phones;
                        $phone->phone = $result;
                        $person->phones()->save($phone);
                    }

                } else {
                    $phone = new Phones;
                    $phone->phone = $row['phones']['phone'];
                    $person->phones()->save($phone);
                }
            } else {
                $person->id = $row['personid'];
                $person->name = $row['personname'];
                $person->save();
                if ((count($row['phones']['phone'])) > 1) {
                    foreach ($row['phones']['phone'] as $result) {
                        $phone = new Phones;
                        $phone->phone = $result;
                        $person->phones()->save($phone);
                    }

                } else {
                    $phone = new Phones;
                    $phone->phone = $row['phones']['phone'];
                    $person->phones()->save($phone);
                }
            }

        }
        return back();
    }
}
