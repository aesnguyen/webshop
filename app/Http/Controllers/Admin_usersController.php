<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin_users;

class Admin_usersController extends Controller
{
    public function getlist()
   {
   		$data = Admin_users::paginate(10);
    	return view('back-end.admin_mem.list',['data'=>$data]);
   }
   public function getedit($id)
   {
   		$data = Admin_users::where('id',$id)->first();
   		return view('back-end.users.edit',['data'=>$data]);
   }
   public function postedit($id){
	   $mem = Admin_users::find($id);
   }
}
