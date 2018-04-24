@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">List delegates</h3>

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
                                <th>Last name</th>
                                <th>Title</th>
                                <th>Affiliations</th>
                                <th>Email</th>
                                <th>Link</th>
                                <th>Abstract</th>
                                <th>Title of paper</th>
                                <th>Paper</th>

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
          serverSide: true,
          // searching: true,
          orders: [[8, 'desc']],
          ajax: '{{url('admin/list-delegates.data')}}',
          columns: [
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'title', name: 'title'},
            {data: 'affiliation', name: 'affiliation'},
            {data: 'email', name: 'email'},
            {data: 'link_cv', name: 'link_cv'},

            {data: 'abstract', name: 'abstract'},
            {data: 'title_of_paper', name: 'title_of_paper'},

            {data: 'paper', name: 'paper',searchable : false,orderable : false},
          ],

          // initComplete: function () {
          //   this.api().columns().every(function () {
          //     var column = this;
          //     var input = document.createElement("input");
          //     input.className = "form-control form-filter input-sm";
          //     $(input).appendTo($(column.header()))
          //       .on('keyup', function () {
          //         column.search($(this).val()).draw();
          //       });
          //   });
          // }
        });


      });

    </script>
@endpush