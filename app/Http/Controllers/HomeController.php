<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function StoreUserProfileDetails (Request $request){
        $user=new UserProfile;
        $user->user_id=$request->user_id;
        $user->Name=$request->name;
        $user->Age=$request->age;
        $user->ShoulderWidth=$request->shoulder_width;
        $user->Bust=$request->bust_width;
        $user->Waist=$request->waist_width;
        $user->Hip=$request->hip_size;
        $user->SkinSensitivity=$request->skin_sensitivity;
        $user->SkinUndertone=$request->undertone;

        if($request->hasFile('user_image')){
            $image = $request->file('user_image');
            $image_name = $image->getClientOriginalName();
            $user['UserImage'] = $image_name;
        }

        if($request->hasFile('PrefferedOutfits')){
            foreach($request->file('PrefferedOutfits') as $OutfitImage){
                $outfit_image_name = $OutfitImage->getClientOriginalName();
            }
            $user['PrefferedOutfits'] = $outfit_image_name;
        }

        $user->save();

    }
}
