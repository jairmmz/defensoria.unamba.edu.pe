<?php

namespace App\Http\Controllers;

use App\Http\Requests\GeneralSettingsRequest;
use App\Models\GeneralSetting;

class GeneralSettingController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first();
        
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

            return to_route('settings')->with('message', 'Operación realizada correctamente');

        } catch (\Throwable $th) {
            throw $th;
        }
        
    }

}
