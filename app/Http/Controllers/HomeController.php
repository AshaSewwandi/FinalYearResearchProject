<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\OutfitStyle;
use Session;
use Illuminate\Support\Arr;
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
        // $user=new UserProfile;
        // $user->user_id=$request->user_id;
        // $user->Name=$request->name;
        // $user->Age=$request->age;
        // $user->ShoulderWidth=$request->shoulder_width;
        // $user->Bust=$request->bust_width;
        // $user->Waist=$request->waist_width;
        // $user->Hip=$request->hip_size;
        // $user->SkinSensitivity=$request->skin_sensitivity;
        // $user->SkinUndertone=$request->undertone;

        // if($request->hasFile('user_image')){
        //     $image = $request->file('user_image');
        //     $image_name = $image->getClientOriginalName();
        //     $user['UserImage'] = $image_name;
        // }

        // $outfit_images = "";
        // if($request->hasFile('PrefferedOutfits')){
        //     foreach($request->file('PrefferedOutfits') as $OutfitImage){
        //         $outfit_image_name = $OutfitImage->getClientOriginalName();
        //         $outfit_images .= $outfit_image_name . ", ";
        //     }
        //     $outfit_images = rtrim($outfit_images, ", ");
        //     $user['PrefferedOutfits'] = $outfit_images;
        // }

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
            $secondFrock = $frocks[1];
            $thirdFrock = $frocks[2];
            $firstPant = $pants[0];
            $secondPant = $pants[1];
            $thirdPant = $pants[2];
            $firstTop = $tops[0];
            $secondTop= $tops[1];
            $thirdTop = $tops[2];

            $userBodyShape = $bodyShape[0];

            Session::put([
                'user_body_shape' => $userBodyShape,
                'frock_style_1' => $firstFrock,
                'frock_style_2' => $secondFrock,
                'frock_style_3' => $thirdFrock,
                'pant_style_1' => $firstPant,
                'pant_style_2' => $secondPant,
                'pant_style_3' => $thirdPant,
                'top_style_1' => $firstTop,
                'top_style_2' => $secondTop,
                'top_style_3' => $thirdTop
            ]);
        }

        $image = $request->file('user_image');

        $response = Http::attach(
            'image', file_get_contents($image->path()), $image->getClientOriginalName()
        )->post('http://127.0.0.1:5000/predict', [
            'skin_undertone' => $data['undertone'],
        ]);

        if ($response->ok()) {
            $predictions = $response->json()['predictions'];
            $predicted_color_preferences = $predictions['predicted_color_preferences'];
            $bottoms_colors = $predicted_color_preferences['bottoms'];
            $bottom_color_1 = $bottoms_colors[0];
            $bottom_color_2 = $bottoms_colors[1];
            $bottom_color_3 = $bottoms_colors[2];
            $bottom_color_4 = $bottoms_colors[3];
            $bottom_color_5 = $bottoms_colors[4];
            $top_colors = $predicted_color_preferences['tops'];
            $top_color_1 = $top_colors[0];
            $top_color_2 = $top_colors[1];
            $top_color_3 = $top_colors[2];
            $top_color_4 = $top_colors[3];
            $top_color_5 = $top_colors[4];
            $top_color_6 = $top_colors[5];
            $top_color_7 = $top_colors[6];
            $skin_type_identify = $predictions['skin_type'];
            $skin_type = Arr::get($skin_type_identify, 'skin_type');

            Session::put([
                'bottom_color_1' => $bottom_color_1,
                'bottom_color_2' => $bottom_color_2,
                'bottom_color_3' => $bottom_color_3,
                'bottom_color_4' => $bottom_color_4,
                'bottom_color_5' => $bottom_color_5,
                'top_color_1' => $top_color_1,
                'top_color_2' => $top_color_2,
                'top_color_3' => $top_color_3,
                'top_color_4' => $top_color_4,
                'top_color_5' => $top_color_5,
                'top_color_6' => $top_color_6,
                'top_color_7' => $top_color_7,
                'skin_type' => $skin_type
            ]);
        }
        // $user->save();

        return view ('view');
    }
}
