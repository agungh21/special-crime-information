@extends('layouts.back')

@section('content-back')
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <form id="formCreate">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label> Asal Perkara </label>
                                    <input type="text" name="origin_things" class="form-control" placeholder="Asal Perkara">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Nomor Surat Perintah Penyidikan / SPDP </label>
                                    <input type="text" name="investigation_number" class="form-control" placeholder="Nomor Surat Perintah Penyidikan / SPDP">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Tanggal Surat Perintah Penyidikan </label>
                                    <input type="date" name="investigation_date" class="form-control" placeholder="Tanggal Surat Perintah Penyidikan">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Nomor SP. LID/SPDP </label>
                                    <input type="text" name="spdp_number" class="form-control" placeholder="Nomor SP. LID/SPDP">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Nama Tersangka / Terdakwa </label>
                                    <input type="text" name="suspect_name" class="form-control" placeholder="Nama Tersangka / Terdakwa">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Kasus Posisi </label>
                                    <textarea class="form-control" name="position_case" cols="30" rows="5" placeholder="Kasus Posisi"></textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label> Status Perkara </label>
                                    <input type="text" name="status_matter" class="form-control" placeholder="Status Perkara">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Tanggal SPDP / Sprint.Lid / Sprint.Dik </label>
                                    <input type="date" name="spdp_date" class="form-control">
                                    <span class="invalid-feedback"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label> Nomor Register Perkara </label>
                                    <input type="text" name="register_number" class="form-control" placeholder="Nomor Register Perkara">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Nama JPU </label>
                                    <input type="text" name="jpu_name" class="form-control" placeholder="Nama JPU">
                                    <span class="invalid-feedback"></span>
                                </div>

                                <div class="form-group">
                                    <label> Tempat Lahir </label>
                                    <input type="text" name="place_birth" class="form-control" placeholder="Tempat Lahir">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Tanggal Lahir </label>
                                    <input type="date" name="date_birth" class="form-control">
                                    <span class="invalid-feedback"></span>
                                </div>

                            </div>

                            <div class="col-6">

                                <div class="form-group">
                                    <label> Umur </label>
                                    <input type="number" name="age" class="form-control" placeholder="Umur">
                                    <span class="form-text text-muted">Contoh : 25</span>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Jenis Kelamin </label>
                                    <select name="gender" class="form-control">
                                        <option value="" selected disabled>Pilih</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label> Agama </label>
                                    <select name="religion" class="form-control">
                                        <option value="" selected disabled>Pilih</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                    </select>
                                </div>
        
                                <div class="form-group">
                                    <label> Alamat </label>
                                    <textarea class="form-control" name="address" cols="30" rows="5" placeholder="Alamat"></textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Pasal yang dilanggar </label>
                                    <textarea class="form-control" name="pasal_hit" cols="30" rows="5" placeholder="Pasal yang dilanggar"></textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Jenis Tindak Pidana </label>
                                    <input type="text" name="type_crime" class="form-control" placeholder="Jenis Tindak Pidana">
                                    <span class="invalid-feedback"></span>
                                </div>
        
                                <div class="form-group">
                                    <label> Tuntutan JPU </label>
                                    <textarea class="form-control" name="jpu_claim" cols="30" rows="5" placeholder="Tuntutan JPU" maxlength="250"></textarea>
                                    <span class="form-text text-muted">Maksimal 250 Karakter</span>
                                    <span class="invalid-feedback"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label> Amar Putusan </label>
                                    <textarea class="form-control" name="verdict" cols="30" rows="5" placeholder="Amar Putusan"></textarea>
                                    <span class="invalid-feedback"></span>
                                </div>
        
                            </div>

                        </div>

                        <div class="row text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save mr-1"></i> Simpan
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

            const $formCreate = $('#formCreate');
            const $formCreateSubmitBtn = $formCreate.find(`[type="submit"]`).ladda();

            $formCreate.on('submit', function(e) {
                e.preventDefault();
                clearInvalid();

                let formData = $(this).serialize();

                $formCreateSubmitBtn.ladda('start');
                ajaxSetup();

                $.ajax({
                        url: "{{ route('admin.special_crime_information.store') }}",
                        data: formData,
                        method: 'post',
                        dataType: 'json'
                    })
                    .done(response => {
                        let {
                            message
                        } = response;
                        successNotification('Berhasil', message)
                        $formCreateSubmitBtn.ladda('stop');
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
                            invalidResponse($formCreate, errors);
                        }

                        $formCreateSubmitBtn.ladda('stop');
                        ajaxErrorHandling(error, $formCreate);
                    })
            })
        })
    </script>
@endsection
