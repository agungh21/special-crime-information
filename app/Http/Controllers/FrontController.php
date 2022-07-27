<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\SpecialCrimeInformation;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $settings = Setting::getSettingCommon();
        if ($request->ajax()) {
            return SpecialCrimeInformation::dtFront();
        }

        return view('front.index', [
            'title'         => 'Pidana Khusus',
            'settings'      => $settings,
        ]);
    }

    public function detail(SpecialCrimeInformation $specialCrimeInformation)
    {
        $settings = Setting::getSettingCommon();
        return view('front.detail', [
            'title'                     => 'Detail Pidana Khusus',
            'specialCrimeInformation'   => $specialCrimeInformation,
            'settings'                  => $settings,
        ]);
    }
}
