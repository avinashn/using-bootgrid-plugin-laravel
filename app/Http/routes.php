<?php
use App\BootGridData;
Route::get('/', function () {
  $data = BootGridData::all();
  return view('welcome')->withData($data);
});
Route::post('/save', function () {
  $data = Request::all();
//dd($data);
  $edit = BootGridData::where('id',$data['id'])->first();
  $edit->first_name=$data['firstname'];
  $edit->last_name=$data['lastname'];
  $edit->email=$data['email'];
  $edit->gender=$data['gender'];
  $edit->country=$data['country'];
  $edit->salary=$data['salary'];
  $edit->save();
  return Redirect::back();
  //dd($data);
});
