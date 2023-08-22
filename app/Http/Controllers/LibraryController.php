<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index(){
        $data = Library::paginate(4);
        return view('databuku', compact('data'));
    }
    public function tambahbuku(){
        $data = Library::all();
            return view('tambahbuku', compact('data'));
    }

    public function insertdata(Request $request){
        $data = Library::create($request->all());
        if ($request->hasFile('sampul')) {
            $request->file('sampul')->move('sampulbuku/', $request->file('sampul')->getClientOriginalName() );
            $data->sampul = $request->file('sampul')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('buku')->with('success', 'Data Ter-Upload');
    }
    
    public function tampilindata($id){
        $data = Library::find($id);
        // dd($data);
        return view('edit', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Library::find($id);
        $data->update($request->all());
        return redirect()->route('buku')->with('success', 'Data Ter-Update');
    }

    public function delete($id){
        $data = Library::find($id);
        $data->delete();
        return redirect()->route('buku')->with('success', 'Data Terhapus');
    }
}
