@extends('layouts.back')

@section('content-back')
    <div class="row">
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <table class="table" width="100%">
                        <tbody>
                            <tr>
                                <td style="border-top: none; width:25%;">Nomor SP. LID/SPDP</td>
                                <td style="border-top: none; width:5%;"> : </td>
                                <td style="border-top: none;">{{ $specialCrimeInformation->spdp_number ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Tanggal SPDP / Sprint.Lid / Sprint.Dik</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->getDateSpdp() ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Nomor Register Perkara</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->register_number ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Nama JPU</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->jpu_name ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Nama Tersangka / Terdakwa</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->suspect_name ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Tempat & Tanggal Lahir</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->getPlaceAndDateBirth() ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Umur</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->getAge() ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Agama</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->religion ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Pasal yang dilanggar</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->pasal_hit ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Kasus Posisi</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->position_case ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Jenis Tindak Pidana</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->type_crime ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Tuntutan JPU</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->jpu_claim ?? '-' }}</td>
                            </tr>
                            
                            <tr>
                                <td style="width:25%;">Amar Putusan</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->verdict ?? '-' }}</td>
                            </tr>

                            <tr>
                                <td style="width:25%;">Status Perkara</td>
                                <td style="width:5%;"> : </td>
                                <td>{{ $specialCrimeInformation->status_matter ?? '-' }}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
    </script>
@endsection
