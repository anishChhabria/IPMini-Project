<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Session;
use App\Users;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $profile['fname'] = "Anish";
        $profile['lname' ] = "Chhabria";
        // $profile['mobile number' ] = "Chhabria";
        $profile['email' ] = "anish.chhabria087@gmail.com";
        // $profile['address' ] = "Chhabria";
        // $profile['gender' ] = "Chhabria";
        // $profile['password' ] = "Chhabria";
        // $profile['confirm password' ] = "Chhabria";
        // return $profile['name'];
        Session::put('user', $profile);
        if($request->session()->has('user'))
    {
        $profile =  Session::get('user');
        // return($profile);
        // return(json_encode($profile));
        return view('profile.profile')->with('profile',$profile);
    }else{
        redirect('/');
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return('gg');
        $this->validate($request,[
            'first_name' => 'required|String',
            'mid_name' => 'required|String',
            'last_name' => 'required|String',
            'phone_no' => 'required|min:9000000000|max:9999999999|Numeric',
            'date_of_birth' => 'required|Date',
            'gender' => 'required|String',
            'address_line_1' => 'required',
            'address_line_2' => 'required',
            'address_line_3' => 'required',
            'address_line_4' => 'required',
            'state'=> 'required'
        ]);
        $user = new Users();
        // return($request->input('first_name'));
        $user->email_id = $request->input('email_id');
        $user->first_name = $request->input('first_name');
        $user->mid_name = $request->input('mid_name');
        $user->last_name = $request->input('last_name');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->mobile_no = $request->input('phone_no');
        if($request->input('gender') == "male"){
            $gender = 'M';
        }else{
            $gender = 'F';
        }
        $user->gender = $gender;
        $user->address_line_1 = $request->input('address_line_1');
        $user->address_line_2 = $request->input('address_line_2');
        $user->landmark = $request->input('address_line_3');
        $user->pincode = $request->input('address_line_4');
        $user->state = $request->input('state');
        $user->save();

        return redirect('/')->with('success', 'Profile has been updated');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
