<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModuleData;
use App\Models\CustomField;

class ModuleApiController extends Controller
{
    //Listing the module data 
    public function showModuleList($module) {
        $fields = CustomField::where('module', $module)->get();
        $data = ModuleData::where('module', $module)->get();
        return view('modules.list', compact('fields', 'data', 'module'));
    }

    //create the module data 
    public function showModuleCreate($module) {
        $fields = CustomField::where('module', $module)->get();
        return view('modules.create', compact('fields', 'module'));
    }

    //Listing the module data based on Api calls
    public function list($module) {
        $data = ModuleData::where('module', $module)->get();
        return response()->json($data);
    }

    //creating the module data based on Api calls
    public function create(Request $request, $module) {
        $data = $request->except('module');
        $moduleData = ModuleData::create(['module' => $module, 'data' => $data]);
        return response()->json($moduleData);
    }

}
