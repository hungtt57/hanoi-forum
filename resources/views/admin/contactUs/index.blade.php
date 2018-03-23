@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">List contact</h3>

    @include('admin.flash_message')
    <div class="col-md-12" style="margin-top: 20px">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>
                                <th>First name</th>
                                <th>Sur name</th>
                                <th>Title</th>
                                <th>Email</th>
                                <th>Registration ID</th>
                                <th>Issue</th>
                                <th>Subject</th>
                                <th>Question</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>

@endsection

@push('scripts')
    <script>


      var table;

      $(function () {
        table = $('#departments-table').DataTable({
          responsive: true,
          processing: true,
          // serverSide: true,
          // searching: true,
            orders : [[8,'desc']],
          ajax: '{{route('Backend::contact@datatables')}}',
          columns: [
            {data: 'first_name', name: 'first_name'},
            {data: 'sur_name', name: 'sur_name'},
            {data: 'title', name: 'title'},
            {data: 'email', name: 'email'},
            {data: 'code', name: 'code'},
            {data: 'issue', name: 'issue'},
            {data: 'subject', name: 'subject'},
            {data: 'question', name: 'question'},
            {data: 'created_at', name: 'created_at'},

            {data: 'action', name: 'action'},
          ],

          initComplete: function () {
            this.api().columns().every(function () {
              var column = this;
              var input = document.createElement("input");
              input.className = "form-control form-filter input-sm";
              $(input).appendTo($(column.header()))
                .on('keyup', function () {
                  column.search($(this).val()).draw();
                });
            });
          }
        });


      });

    </script>
@endpush