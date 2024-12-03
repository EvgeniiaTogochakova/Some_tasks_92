<?php

namespace App\Http\Controllers;

use App\Models\MyEmployee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('get-employee-data');
    }

    public function store(Request $request)
    {
        $myEmployee = new MyEmployee($request->all());
        $myEmployee->save();
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        return view('info', ['path' => $path, 'url' => $url, 'done'=>'saved']);
    }

    public function edit($id)
    {
        $existingEmployee = MyEmployee::find($id);
        if (! $existingEmployee) return "This employee does not exist!";

        return view('put-employee-data', ['old' => $existingEmployee]);
    }

    public function update(Request $request, $id)
    {

        $existingEmployee = MyEmployee::find($id);
        if (! $existingEmployee) return "This employee does not exist!";
        $existingEmployee->update($request->all());
        $existingEmployee->save();
        $path = $this->getPath($request);
        $url = $this->getUrl($request);
        return view('info', ['path' => $path, 'url' => $url, 'done'=>'updated']);
    }

    public function getPath(Request $request)
    {
        return $request->path();
    }

    public function getUrl(Request $request)
    {
        return $request->url();
    }
}
