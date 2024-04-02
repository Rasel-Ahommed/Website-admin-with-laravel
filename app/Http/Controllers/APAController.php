<?php

namespace App\Http\Controllers;

use App\Models\APA;
use App\Models\ApaName;
use App\Models\Activities;
use Illuminate\Http\Request;

class APAController extends Controller
{
    public function index(){
        $apaNames = ApaName::all();
        $datas  = APA::select('apas.*','apa_names.name as apa_name')
                ->join('apa_names', 'apas.apa_name_id', '=', 'apa_names.id')
                ->paginate(10);
        return view('admin/page/quick_links/apa',compact('apaNames','datas'));
    }

    // store apa 
    public function store(Request $request){
        $request->validate([
            'apa_name' => 'required',
            'headline' => 'required',
            'link' => 'required',
        ]);

        $data['apa_name_id'] = $request->apa_name;
        $data['headline'] = $request->headline;
        $data['links'] = $request->link;

        APA::create($data);
        return back()->with('success','The Apa has been successfully added');
    }

    // edit
    public function edit($id){
        $data = Apa::FindOrFail($id);
        $apaNames = ApaName::all();
        return view('admin/page/quick_links/editApa',compact('data','apaNames'));
    }

    // update 
    public function update(Request $request, $id){
        $request->validate([
            'apa_name' => 'required',
            'headline' => 'required',
            'link' => 'required',
        ]);

        $data = Apa::FindOrFail($id);

        $data->apa_name_id = $request->apa_name;
        $data->headline = $request->headline;
        $data->links = $request->link;

        $data->save();

        // save update record 
        $activites['name'] = 'APA section';
        $activites['date_time'] = $data->updated_at;
        Activities::create($activites);
        
        
        return redirect()->route('admin.apa')->with('success', 'The apa has been successfully updated');
    }

    // delete 
    public function destroy($id){
        $data = Apa::FindOrFail($id);
        $data->delete();
        return back()->with('delete','The apa has been successfully deleted');
    }


}
