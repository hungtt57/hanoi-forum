@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">Manager Banner</h3>

    @include('admin.flash_message')
    <div class="col-md-12">

        <a href="{{ route('Backend::banner@add')}}" class="btn btn-success pull-right" style="margin-bottom: 20px">Add new
            banner</a>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>

                                <th>Image</th>
                                <th>Priority</th>
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
          responsive: true,
          processing: true,
          serverSide: true,
          // searching: true,

          ajax: '{{route('Backend::banner@datatables')}}',
          columns: [
            {
                data : 'image' ,name : 'image'
            },
            {data: 'order', name: 'order'},
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