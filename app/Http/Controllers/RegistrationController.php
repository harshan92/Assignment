<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class RegistrationController extends Controller
{
    public function index()
    {
        return view('pages.register');
    }


    public function register(RegistrationRequest $requsest)
    {
        try{
            DB::beginTransaction();
            $user=new User;
            $user->name=$requsest->name;
            $user->contact_no=$requsest->contact_no;
            $user->email=$requsest->email;
            $user->password=$requsest->password;
            $user->save();
            DB::commit();
            return back()->with('message', 'Registered!');
        }catch(\Exception $e){
            DB::rollback();
            return back()->with('message', $e->getMessage());
        }
    }
}
