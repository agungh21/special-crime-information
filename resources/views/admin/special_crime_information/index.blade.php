@extends('layouts.back')

@section('content-back')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title float-right">
                {{-- new page --}}
                <a class="btn btn-primary" href="{{ route('admin.special_crime_information.add') }}">
                    <i class="fa fa-plus"></i> Tambah
                </a>

            </h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-condensed table-striped" id="dataTable">

                    <thead>
                        <tr>
                            <th> Nomor SP. LID/SPDP </th>
                            <th> Nama Tersangka / Terdakwa </th>
                            <th> Kasus Posisi </th>
                            <th> Status Perkara </th>
                            <th width="100"> Aksi </th>
                        </tr>
                    </thead>
                    
                    <tfoot>
                        <tr>
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
                    url: "{{ route('admin.special_crime_information') }}"
                },
                columnDefs: [{
                    "defaultContent": "-",
                    "targets": "_all",
                }],
                columns: [{
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
