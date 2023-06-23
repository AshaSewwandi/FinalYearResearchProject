<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\OutfitStyle;
use Session;
use Illuminate\Support\Facades\Http;

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

        $outfit_images = "";
        if($request->hasFile('PrefferedOutfits')){
            foreach($request->file('PrefferedOutfits') as $OutfitImage){
                $outfit_image_name = $OutfitImage->getClientOriginalName();
                $outfit_images .= $outfit_image_name . ", ";
            }
            $outfit_images = rtrim($outfit_images, ", ");
            $user['PrefferedOutfits'] = $outfit_images;
        }

        $data = $request->all();
        $bodyShapeData = [ $data['bust_width'], $data['waist_width'], $data['hip_size']];
        $payload = ['data' => $bodyShapeData];

        $response = Http::post('http://localhost:8080/outfit_recommendation', $payload);

        if ($response->ok()) {

            $result = $response->json()['result'];
            $frocks = $result['Frocks'];
            $pants = $result['Pants'];
            $tops = $result['Tops'];
            $bodyShape = $result['Body Shape'];

            $firstFrock = $frocks[0];
            $firstPant = $pants[0];
            $firstTop = $tops[0];
            $userBodyShape = $bodyShape[0];

            Session::put([
                'user_body_shape' => $userBodyShape,
                'frock_style' => $firstFrock,
                'pant_style' => $firstPant,
                'top_style' => $firstTop
            ]);
        }
        $user->save();

        return view('viewpage');
    }
}
