<?php

namespace App\Http\Controllers;

use App\member;
use Illuminate\Http\Request;

class Crud1 extends Controller
{
    public function home(){
//        $allMember = member::all()->paginate(5);
        $allMember = member::select('id','name','email','roll','department','home_dist')->orderBy('roll','asc')->paginate(7);
        return view('home',compact('allMember'));
    }
    public function addmember(){
        return view('addmember');
    }
    public function addmemberP(Request $request){
        $validationRules = [
            'name'=>'required',
            'email'=>'required|unique:members,email',
            'roll'=>'required|min:6|max:8|unique:members,roll',
            'department'=>'required',
            'home_dist'=>'required',
        ];
        $this->validate($request,$validationRules);
        member::insert($request->except('_token'));
        session()->flash('success','Successfully Add a mad !');
        return redirect()->route('home');
    }

    public function  show($id){
        $show = member::find($id);
        return view('show',compact('show'));
    }
    public function  update($id){
        $update = member::find($id);
        return view('updateMember',compact('update'));
    }
    public function updateMember(Request $request,$id){
        $validationRules = [
            'name'=>'required',
            'email'=>'required',
            'roll'=>'required|min:6|max:8',
            'department'=>'required',
            'home_dist'=>'required',
        ];
        $this->validate($request,$validationRules);

        $updateMember = member::where('id',$id)->update($request->except('_token'));
        session()->flash('success','Successfully update a mad information!');
        return redirect()->route('home');
    }

    public function delete($id){
        member::find($id)->delete($id);
        session()->flash('success','Successfully delete a mad information!');
        return redirect()->route('home');
    }


    public function image(){
        return view('image');
    }
    public function uploadImage(Request $request){
        $validationRules = [
            'image'=>'required|image'
        ];
        $this->validate($request,$validationRules);
       $image = $request->file('image');
       $photoName = $image->getClientOriginalName();

        if($image->isValid()){
            $image->storeAs('image',$photoName);
        }
        session()->flash('upload',"Image Upload Successfully !");
        return redirect()->route('image');

    }
}


