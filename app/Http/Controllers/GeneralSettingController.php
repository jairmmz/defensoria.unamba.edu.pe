<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralSettingsRequest;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();
        
        if(!$setting){
            $setting = new GeneralSetting();
            $setting->title_website = 'Defensoría Universitaria - UNAMBA';
            $setting->logo_website = '';
            $setting->background_website = '';
            $setting->number_phone = '987654321';
            $setting->link_facebook = 'www.facebook.com/23123';
            $setting->id_user = '1';
            $setting->save();
        }

        return view('backend.pages.settings-general.index-settings-general', compact('setting'));
    }

    public function update(GeneralSettingsRequest $request)
    {
        try {
            $setting = GeneralSetting::first();

            if(!$setting){
                return to_route('authorities');
            }

            $settingUpdate = $request->all();

            // Para logo de la página web
            if($imageLogo = $request->file('logo_website')){
                if($setting->logo_website){
                    $imageLogoPath = public_path('assets/images/' . $setting->logo_website);

                    if(file_exists($imageLogoPath)){
                        unlink($imageLogoPath);
                    }
                }
                $routeSaveImageLogo = 'assets/images/';
                $imageLogoGet = date('YmdHis') . "." . $imageLogo->getClientOriginalExtension();
                $imageLogo->move($routeSaveImageLogo, $imageLogoGet);
                $settingUpdate['logo_website'] = $imageLogoGet;
            }else{
                $settingUpdate['logo_website'] = $setting->logo_website;
            }

            // Para el fondo /background de la página web
            if($imageBackground = $request->file('background_website')){
                if($setting->background_website){
                    $imageBackgroundPath = public_path('assets/images/' . $setting->background_website);

                    if(file_exists($imageBackgroundPath)){
                        unlink($imageBackgroundPath);
                    }
                }
                $routeSaveimageBackground = 'assets/images/';
                $imageBackgroundGet = date('YmdHis') . "." . $imageBackground->getClientOriginalExtension();
                $imageBackground->move($routeSaveimageBackground, $imageBackgroundGet);
                $settingUpdate['background_website'] = $imageBackgroundGet;
            }else{
                $settingUpdate['background_website'] = $setting->background_website;
            }

            $setting->update($settingUpdate);

            return to_route('settings');

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

}
