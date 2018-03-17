@extends('admin')

@section('content')
    <h3 class="inline">Quản lý bài viết</h3>

    @include('admin.flash_message')
    <div class="col-md-12">

        <a href="{{ route('Backend::post@add')}}" class="btn btn-success pull-right" style="margin-bottom: 20px">Thêm bài viết</a>

        <table class="table table-striped table-bordered table-hover" id="departments-table">
            <thead>
            <tr>

                <th>Tiêu đề</th>
                <th>Hình Ảnh</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
        </table>
    </div>



@endsection

@push('scripts')
    <script>


      var table;

      $(function () {
        table = $('#departments-table').DataTable({
          processing: true,
          // serverSide: true,
          searching: true,
          ajax: '{{route('Backend::post@datatables')}}',
          columns: [
            {data: 'title', name: 'title'},
            {
              "render": function (data, type, full, meta) {
                return '<img src="' + full.image + '" style="max-width: 150px">';
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