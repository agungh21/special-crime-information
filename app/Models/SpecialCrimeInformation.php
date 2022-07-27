<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class SpecialCrimeInformation extends Model
{
    protected $table = 'special_crime_informations';
    protected $fillable = ['spdp_number', 'suspect_name', 'position_case', 'status_matter', 'spdp_date', 'register_number', 'jpu_name', 'place_birth', 'date_birth', 'age', 'gender', 'religion', 'address', 'pasal_hit', 'type_crime', 'jpu_claim', 'verdict'];

    /*
    *
    * Crud Method
    *
    */

    public static function createSpecialCrimeInformation(array $request)
    {
        $specialCrimeInformation = self::create($request);

        return $specialCrimeInformation;
    }


    public function updateSpecialCrimeInformation(array $request)
    {
        $this->update($request);

        return $this;
    }


    public function deleteSpecialCrimeInformation()
    {
        return $this->delete();
    }

    /*
    *
    * Datatable
    *
    */

    public static function dt()
    {
        $data = self::select('special_crime_informations.*');
        return \Datatables::eloquent($data)
            ->addColumn('action', function ($data) {

                    $action = '
					<div class="dropdown">
						<button class="btn btn-primary px-2 py-1 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pilih Aksi
						</button>
						<div class="dropdown-menu">
                            <a class="dropdown-item" href="' . route('admin.special_crime_information.edit', $data->id) . '">
                            <i class="fas fa-edit"></i> Edit
                            </a>

                            <a class="dropdown-item" href="' . route('admin.special_crime_information.detail', $data->id) . '">
                            <i class="fas fa-eye"></i> Detail
                            </a>

							<a class="dropdown-item delete" href="javascript:void(0)" data-delete-message="Yakin ingin menghapus?" data-delete-href="' . route('admin.special_crime_information.destroy', $data->id) . '">
								<i class="fas fa-trash mr-1"></i> Hapus
							</a>

						</div>
					</div>';

                    return $action;
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    public static function dtFront()
    {
        $data = self::select('special_crime_informations.*');
        return \Datatables::eloquent($data)
            ->addColumn('action', function ($data) {
                    $action = '
					<a class="btn btn-primary" href="' . route('front.detail', $data->id) . '"><i class="fas fa-eye"></i> Detail </a>';

                    return $action;
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    
    /*
    *
    * Get String
    *
    */

    public function getDateSpdp(){
        return Carbon::parse($this->spdp_date)->format('d-m-Y');
    }

    public function getPlaceAndDateBirth(){
        return $this->place_birth.', '.$this->date_birth;
    }

    public function getAge(){
        return $this->age.' Tahun';
    }
}
