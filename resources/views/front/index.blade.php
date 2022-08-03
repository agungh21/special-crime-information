@extends('layouts.front')

@section('content-front')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped" id="dataTable">

                    <thead>
                        <tr>
                            <th> Asal Perkara </th>
                            <th> Nomor Surat Perintah Penyidikan / SPDP </th>
                            <th> Tanggal Surat Perintah Penyidikan </th>
                            <th> Nomor SP. LID/SPDP </th>
                            <th> Nama Tersangka / Terdakwa </th>
                            <th> Kasus Posisi </th>
                            <th> Status Perkara </th>
                            <th width="100"> Aksi </th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                        <tr>
                            <th> Asal Perkara </th>
                            <th> Nomor Surat Perintah Penyidikan / SPDP </th>
                            <th> Tanggal Surat Perintah Penyidikan </th>
                            <th> Nomor SP. LID/SPDP </th>
                            <th> Nama Tersangka / Terdakwa </th>
                            <th> Kasus Posisi </th>
                            <th> Status Perkara </th>
                            <th width="100"> Aksi </th>
                        </tr>
                    </tfoot>

                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: false,
                ajax: {
                    url: "{{ route('front.index') }}"
                },
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all",
                }],
                columns: [{
                        data: "origin_things",
                        name: "origin_things",
                    },
                    {
                        data: "investigation_number",
                        name: "investigation_number",
                    },
                    {
                        data: "investigation_date",
                        name: "investigation_date",
                    },
                    {
                        data: "spdp_number",
                        name: "spdp_number",
                    },
                    {
                        data: "suspect_name",
                        name: "suspect_name",
                    },
                    {
                        data: "position_case",
                        name: "position_case",
                    },
                    {
                        data: "status_matter",
                        name: "status_matter",
                    },
                    {
                        data: "action",
                        name: "action",
                        orderable: false,
                        searchable: false,
                    },
                ],
                drawCallback: settings => {
                    renderedEvent();
                }


            })
            const reloadDT = () => {
                $('#dataTable').DataTable().ajax.reload();
            }

            const renderedEvent = () => {
                $.each($('.delete'), (i, deleteBtn) => {
                    $(deleteBtn).off('click')
                    $(deleteBtn).on('click', function() {
                        let {
                            deleteMessage,
                            deleteHref
                        } = $(this).data();
                        confirmation(deleteMessage, function() {
                            ajaxSetup()
                            $.ajax({
                                    url: deleteHref,
                                    method: 'delete',
                                    dataType: 'json',
                                    data: {
                                        '_token': '{{ csrf_token() }}'
                                    }
                                })
                                .done(response => {
                                    let {
                                        message
                                    } = response
                                    successNotification(' Berhasil',
                                        message)
                                    reloadDT();
                                    reloadWindow();
                                })
                                .fail(error => {
                                    ajaxErrorHandling(error);
                                })
                        })
                    })
                })

            }
        })
    </script>
@endsection
