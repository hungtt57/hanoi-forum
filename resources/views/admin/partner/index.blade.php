@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">Manager admins</h3>

    @include('admin.flash_message')
    <div class="col-md-12">

        <a href="{{ route('Backend::admin@add')}}" class="btn btn-success pull-right" style="margin-bottom: 20px">Add new
            admin</a>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>First name</th>
                                <th>Last name</th>
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



@endsection

@push('scripts')
    <script>


      var table;

      {{--$(function () {--}}
        {{--table = $('#departments-table').DataTable({--}}
          {{--responsive: true,--}}
          {{--processing: true,--}}
          {{--serverSide: true,--}}
          {{--// searching: true,--}}
          {{--order : [[3,'desc']],--}}
          {{--ajax: '{{route('Backend::admin@datatables')}}',--}}
          {{--columns: [--}}

            {{--{data: 'email', name: 'email'},--}}
            {{--{data: 'first_name', name: 'first_name'},--}}
            {{--{data: 'last_name', name: 'last_name'},--}}
            {{--{data: 'created_at', name: 'created_at'},--}}
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