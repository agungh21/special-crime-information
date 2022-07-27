<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Setting;
use App\MyClass\Validations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\SpecialCrimeInformation;

class AdminController extends Controller
{

    const USER = 1;
    // -------------
    // DASHBOARD
    // -------------
    public function index()
    {
        $settings = Setting::getSettingCommon();
        return view('admin.index', [
            'title' => 'Dashboard',
            'settings' => $settings,
        ]);
    }

    // -------------
    // USER
    // -------------
    public function userIndex(Request $request)
    {
        $settings = Setting::getSettingCommon();
        if ($request->ajax()) {
            return User::dt();
        }
        return view('admin.user.index', [
            'title' => 'User',
            'settings' => $settings,
        ]);
    }

    public function userAdd()
    {
        $settings = Setting::getSettingCommon();
        return view('admin.user.add', [
            'title'            => 'User',
            'settings' => $settings,
            'breadcrumbs'      => [
                [
                    'title'    => 'Dashboard',
                    'link'    => route('admin'),
                ],
                [
                    'title'     => 'User',
                    'link'      => route('admin.user'),
                ],
                [
                    'title'     => 'Tambah',
                    'link'      => route('admin.user.add'),
                ]
            ]
        ]);
    }

    public function userStore(Request $request, User $user)
    {

        Validations::userValidation($request);

        if ($request->role != null) {
            $role = $request->role;
        } else {
            $role = self::USER;
        }

        DB::beginTransaction();

        try {
            $user->createUser([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $role,
            ]);
            DB::commit();
            return \Res::save();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    public function userEdit(User $user)
    {
        $settings = Setting::getSettingCommon();
        return view('admin.user.edit', [
            'title' => 'Edit User',
            'user' => $user,
            'settings' => $settings,
            'breadcrumbs'   => [
                [
                    'title' => "Dashboard",
                    'link'  => route('admin'),
                ],
                [
                    'title' => "User",
                    'link'  => route('admin.user'),
                ],
                [
                    'title' => "Edit",
                    'link'  => route('admin.user.edit', $user->id),
                ]
            ],
        ]);
    }

    public function userUpdate(Request $request, User $user)
    {
        DB::beginTransaction();

        try {
            $user->updateUser($request->all());
            DB::commit();

            return \Res::update();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    public function userDestroy(User $user)
    {
        DB::beginTransaction();

        try {
            $user->deleteUser();
            DB::commit();

            return \Res::delete();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    // ---------------
    // Pengaturan Umum
    // ---------------
    public function settingCommonIndex()
    {
        $title = "Umum";
        $settings = Setting::getSettingCommon();

        return view('admin.setting.common', [
            'title'            => $title,
            'settings'         => $settings,
            'breadcrumbs' => [
                [
                    'title' => "Dashboard",
                    'link'  => route('admin'),
                ],
                [
                    'title' => $title,
                    'link'  => route('admin.setting.common'),
                ],
            ],
        ]);
    }

    public function settingCommonStore(Request $request)
    {

        DB::beginTransaction();

        try {
            $requestAll = $request->all();

            Setting::commonStore($requestAll);

            DB::commit();

            return \Res::save();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    // -------------
    // Special Crime Information
    // -------------
    public function specialCrimeInformationIndex(Request $request)
    {
        $settings = Setting::getSettingCommon();
        if ($request->ajax()) {
            return SpecialCrimeInformation::dt();
        }
        return view('admin.special_crime_information.index', [
            'title' => 'Pidana Khusus',
            'settings' => $settings,
        ]);
    }

    public function specialCrimeInformationAdd()
    {
        $settings = Setting::getSettingCommon();
        return view('admin.special_crime_information.add', [
            'title'            => 'Pidana Khusus',
            'settings'         => $settings,
            'breadcrumbs'      => [
                [
                    'title'    => 'Dashboard',
                    'link'    => route('admin'),
                ],
                [
                    'title'     => 'Pidana Khusus',
                    'link'      => route('admin.special_crime_information'),
                ],
                [
                    'title'     => 'Tambah',
                    'link'      => route('admin.special_crime_information.add'),
                ]
            ]
        ]);
    }

    public function specialCrimeInformationStore(Request $request, SpecialCrimeInformation $specialCrimeInformation)
    {

        // Validations::userValidation($request);

        DB::beginTransaction();

        try {
            $specialCrimeInformation->createSpecialCrimeInformation($request->all());
            DB::commit();
            return \Res::save();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    public function specialCrimeInformationEdit(SpecialCrimeInformation $specialCrimeInformation)
    {
        $settings = Setting::getSettingCommon();
        return view('admin.special_crime_information.edit', [
            'title'         => 'Edit Pidana Khusus',
            'specialCrimeInformation'          => $specialCrimeInformation,
            'settings'      => $settings,
            'breadcrumbs'   => [
                [
                    'title' => "Dashboard",
                    'link'  => route('admin'),
                ],
                [
                    'title' => "Pidana Khusus",
                    'link'  => route('admin.special_crime_information'),
                ],
                [
                    'title' => "Edit",
                    'link'  => route('admin.special_crime_information.edit', $specialCrimeInformation->id),
                ]
            ],
        ]);
    }

    public function specialCrimeInformationUpdate(Request $request, SpecialCrimeInformation $specialCrimeInformation)
    {
        DB::beginTransaction();

        try {
            $specialCrimeInformation->updateSpecialCrimeInformation($request->all());
            DB::commit();

            return \Res::update();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    public function specialCrimeInformationDestroy(SpecialCrimeInformation $specialCrimeInformation)
    {
        DB::beginTransaction();

        try {
            $specialCrimeInformation->deleteSpecialCrimeInformation();
            DB::commit();

            return \Res::delete();
        } catch (\Exception $e) {
            DB::rollback();

            return \Res::error($e);
        }
    }

    public function specialCrimeInformationDetail(SpecialCrimeInformation $specialCrimeInformation)
    {
        $settings = Setting::getSettingCommon();
        return view('admin.special_crime_information.detail', [
            'title'                     => 'Detail Pidana Khusus',
            'specialCrimeInformation'   => $specialCrimeInformation,
            'settings'                  => $settings,
            'breadcrumbs'   => [
                [
                    'title' => "Dashboard",
                    'link'  => route('admin'),
                ],
                [
                    'title' => "Pidana Khusus",
                    'link'  => route('admin.special_crime_information'),
                ],
                [
                    'title' => "Detail",
                    'link'  => route('admin.special_crime_information.detail', $specialCrimeInformation->id),
                ],
            ],
        ]);
    }


}
