@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">Manager post</h3>

    @include('admin2.flash_message')
    <div class="col-md-12">

        <a href="{{ route('Backend::post@add')}}" class="btn btn-success pull-right" style="margin-bottom: 20px">Add new
            post</a>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Status</th>
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



@endsection

@push('scripts')
    <script>


      var table;

      $(function () {
        table = $('#departments-table').DataTable({
          processing: true,
          // serverSide: true,
          // searching: true,

          ajax: '{{route('Backend::post@datatables')}}',
          columns: [
            {data: 'title', name: 'title'},
            {
              "render": function (data, type, full, meta) {
                return '<img src="' + full.image + '" style="max-width: 150px;max-height: 200px">';
              }
            },
            {data: 'status', name: 'status'},
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