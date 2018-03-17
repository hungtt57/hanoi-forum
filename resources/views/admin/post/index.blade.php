@extends('admin')

@section('content')
    <h3 class="inline">Quản lý thương hiệu</h3>

    @include('admin.flash_message')
    <div class="col-md-12">

            <a href="{{ url('admin/them-gian-hang') }}" class="btn btn-success" style="margin-bottom: 20px">Thêm thương
                hiệu</a>

        <table class="table table-striped table-bordered table-hover" id="departments-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Tên</th>
                <th>Hình Ảnh</th>
                <th>Nổi bật</th>
                <th>Hành động</th>
            </tr>
            </thead>
        </table>
    </div>



@endsection

@push('scripts')
    <script>


      var table;

      {{--$(function () {--}}
        {{--table = $('#departments-table').DataTable({--}}
          {{--processing: true,--}}
          {{--// serverSide: true,--}}
          {{--searching: true,--}}
          {{--ajax: '{{url('admin/departments.data')}}',--}}
          {{--columns: [--}}
            {{--{data: 'id', name: 'id'},--}}
            {{--{data: 'name', name: 'name'},--}}
            {{--{--}}
              {{--"render": function (data, type, full, meta) {--}}
                {{--return '<img src="' + full.logo + '" style="max-width: 150px">';--}}
              {{--}--}}
            {{--},--}}
            {{--{data: 'is_featured', name: 'is_featured'},--}}
            {{--{data: 'action', name: 'action'},--}}
          {{--],--}}

          {{--initComplete: function () {--}}
            {{--this.api().columns().every(function () {--}}
              {{--var column = this;--}}
              {{--var input = document.createElement("input");--}}
              {{--input.className = "form-control form-filter input-sm";--}}
              {{--$(input).appendTo($(column.header()))--}}
                {{--.on('keyup', function () {--}}
                  {{--column.search($(this).val()).draw();--}}
                {{--});--}}
            {{--});--}}
          {{--}--}}
        {{--});--}}


      {{--});--}}

    </script>
@endpush