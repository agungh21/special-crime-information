@extends('layouts.back')

@section('content-back')
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <form id="formEdit">
                        @csrf
                        <div class="row">
                            <div class="col-6">

                                <div class="form-group">
                                    <label> Asal Perkara </label>
                                    <input type="text" name="origin_things" value="{{ $specialCrimeInformation->origin_things }}" class="form-control" placeholder="Asal Perkara">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Nomor Surat Perintah Penyidikan / SPDP </label>
                                    <input type="text" name="investigation_number" value="{{ $specialCrimeInformation->investigation_number }}" class="form-control" placeholder="Nomor Surat Perintah Penyidikan / SPDP">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Tanggal Surat Perintah Penyidikan </label>
                                    <input type="date" name="investigation_date" value="{{ $specialCrimeInformation->investigation_date }}" class="form-control" placeholder="Tanggal Surat Perintah Penyidikan">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Nomor SP. LID/SPDP </label>
                                    <input type="text" name="spdp_number" value="{{ $specialCrimeInformation->spdp_number }}" class="form-control" placeholder="Nomor SP. LID/SPDP">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Nama Tersangka / Terdakwa </label>
                                    <input type="text" name="suspect_name" value="{{ $specialCrimeInformation->suspect_name }}" class="form-control" placeholder="Nama Tersangka / Terdakwa">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Kasus Posisi </label>
                                    <textarea class="form-control" name="position_case" cols="30" rows="5" placeholder="Kasus Posisi">{{ $specialCrimeInformation->position_case }}</textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label> Status Perkara </label>
                                    <input type="text" name="status_matter" value="{{ $specialCrimeInformation->status_matter }}" class="form-control" placeholder="Status Perkara">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Tanggal SPDP / Sprint.Lid / Sprint.Dik </label>
                                    <input type="date" name="spdp_date" value="{{ $specialCrimeInformation->spdp_date }}" class="form-control">
                                    <span class="invalid-feedback"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label> Nomor Register Perkara </label>
                                    <input type="text" name="register_number" value="{{ $specialCrimeInformation->register_number }}"  class="form-control" placeholder="Nomor Register Perkara">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Nama JPU </label>
                                    <input type="text" name="jpu_name" value="{{ $specialCrimeInformation->jpu_name }}" class="form-control" placeholder="Nama JPU">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Tempat Lahir </label>
                                    <input type="text" name="place_birth" value="{{ $specialCrimeInformation->place_birth }}" class="form-control" placeholder="Tempat Lahir">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Tanggal Lahir </label>
                                    <input type="date" name="date_birth" value="{{ $specialCrimeInformation->date_birth }}" class="form-control">
                                    <span class="invalid-feedback"></span>
                                </div>

                            </div>

                            <div class="col-6">

                                <div class="form-group">
                                    <label> Umur </label>
                                    <input type="number" name="age" value="{{ $specialCrimeInformation->age }}" class="form-control" placeholder="Umur">
                                    <span class="form-text text-muted">Contoh : 25</span>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Jenis Kelamin </label>
                                    <select name="gender" class="form-control">
                                        <option value="" disabled>Pilih</option>
                                        <option value="Laki-laki" {{ $specialCrimeInformation->gender =='Laki-laki' ? 'selected':'' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $specialCrimeInformation->gender =='Perempuan' ? 'selected':'' }}>Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label> Agama </label>
                                    <select name="religion" class="form-control">
                                        <option value="" disabled>Pilih</option>
                                        <option value="Islam" {{ $specialCrimeInformation->religion =='Islam' ? 'selected':'' }}>Islam</option>
                                        <option value="Protestan" {{ $specialCrimeInformation->religion =='Protestan' ? 'selected':'' }}>Protestan</option>
                                        <option value="Katolik" {{ $specialCrimeInformation->religion =='Katolik' ? 'selected':'' }}>Katolik</option>
                                        <option value="Hindu" {{ $specialCrimeInformation->religion =='Hindu' ? 'selected':'' }}>Hindu</option>
                                        <option value="Buddha" {{ $specialCrimeInformation->religion =='Buddha' ? 'selected':'' }}>Buddha</option>
                                        <option value="Khonghucu" {{ $specialCrimeInformation->religion =='Khonghucu' ? 'selected':'' }}>Khonghucu</option>
                                    </select>
                                </div>
        
                                <div class="form-group">
                                    <label> Alamat </label>
                                    <textarea class="form-control" name="address" cols="30" rows="5" placeholder="Alamat">{{ $specialCrimeInformation->address }}</textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Pasal yang dilanggar </label>
                                    <textarea class="form-control" name="pasal_hit" cols="30" rows="5" placeholder="Pasal yang dilanggar">{{ $specialCrimeInformation->pasal_hit }}</textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Jenis Tindak Pidana </label>
                                    <input type="text" name="type_crime" value="{{ $specialCrimeInformation->type_crime }}" class="form-control" placeholder="Jenis Tindak Pidana">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Tuntutan JPU </label>
                                    <textarea class="form-control" name="jpu_claim" cols="30" rows="5" placeholder="Tuntutan JPU" maxlength="250">{{ $specialCrimeInformation->jpu_claim }}</textarea>
                                    <span class="form-text text-muted">Maksimal 250 Karakter</span>
                                    <span class="invalid-feedback"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label> Amar Putusan </label>
                                    <textarea class="form-control" name="verdict" cols="30" rows="5" placeholder="Amar Putusan">{{ $specialCrimeInformation->verdict }}</textarea>
                                    <span class="invalid-feedback"></span>
                                </div>

                            </div>

                        </div>

                        <div class="row text-center">
                            <div class="col">
                                <button class="btn btn-primary" type="submit" data-style="expand-left">
                                    <i class="fa fa-check"></i> Update
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {

            let $form = $('#formEdit');
            let $formEditBtn = $form.find(`[type="submit"]`).ladda();

            $form.on('submit', function(e) {
                e.preventDefault();
                clearInvalid()

                let formData = $(this).serialize();

                $formEditBtn.ladda('start');
                ajaxSetup();

                $.ajax({
                        url: "{{ route('admin.special_crime_information.update', $specialCrimeInformation->id) }}",
                        data: formData,
                        method: 'put',
                        dataType: 'json'
                    })
                    .done(response => {
                        let {
                            message
                        } = response;
                        successNotification('Berhasil', message)
                        $formEditBtn.ladda('stop');
                    })
                    .fail(error => {
                        const {
                            status,
                            responseJSON
                        } = error;
                        const {
                            message,
                            errors
                        } = responseJSON;

                        if (status == 422) {
                            invalidResponse($form, errors)
                        }

                        $formEditBtn.ladda('stop');
                        ajaxErrorHandling(error, $form);
                    })


            })
        })
    </script>
@endsection
