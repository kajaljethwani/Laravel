<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\company;
class companies extends Controller
{
    //
    function save(Request $req)
    {
        $company= new company;
        $company->name=$req->name;
        $company->address=$req->address;
        $company->save();
    }
    function list()
    {
        $data=company::all();
        return view('userview',['data'=>$data]);
    }
    function delete($id)
    {
        $a=company::find($id);
        $a->delete();
        return redirect('/list');
    }
    function update($id)
    {
        $a=company::find($id);
        $a->update();
        return view('update123',['a'=>$a]);
    }
    function updatedata(Request $req)
    {
        $company = company::find($req -> id);
        $company->name=$req->name;

        $company->address=$req->address;

        echo $company->save();
        return redirect('/list');
    }
}

