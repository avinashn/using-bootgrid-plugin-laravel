<?php
use App\BootGridData;
Route::get('/', function () {
  $data = BootGridData::all();
  return view('welcome')->withData($data);
});
Route::post('/save', function () {
  $data = Request::all();
  $edit = BootGridData::where('id',$data['edit_id'])->first();
  $edit->first_name=$data['firstname'];
  $edit->last_name=$data['lastname'];
  $edit->email=$data['email'];
  $edit->gender=$data['gender'];
  $edit->country=$data['country'];
  $edit->salary=$data['salary'];
  $edit->save();
  return Redirect::back();
});
Route::post('/delete',function () {
  $data = Request::all();
  $edit = BootGridData::where('id',$data['del_id'])->delete();
  return Redirect::back();
});
