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
                                {{--<th>Email</th>--}}
                                {{--<th>First name</th>--}}
                                {{--<th>Last name</th>--}}
                                {{--<th>Title</th>--}}
                                {{--<th>Affiliation</th>--}}
                                {{--<th>Gender</th>--}}
                                {{--<th>Nationality</th>--}}
                                {{--<th>Created at</th>--}}
                                <th>Abstract</th>
                                <th>Title of paper</th>
                                <th>Paper</th>
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

        {{--$(document).on('change', '.select-reviewer', function () {--}}
          {{--var val = $(this).val();--}}
          {{--var id = $(this).attr('data-id');--}}
          {{--$.ajax({--}}
            {{--url: '{{ route('Backend::reviewParticipants@select') }}',--}}
            {{--type: 'post',--}}
            {{--data: {--}}
              {{--reviewer_id: val,--}}
              {{--id: id--}}
            {{--},--}}
            {{--dataType: 'json',--}}

            {{--success: function (response) {--}}
              {{--if (response.status == 1) {--}}
                {{--swal(response.message, '', 'success');--}}

              {{--} else {--}}
                {{--swal(response.message, '', 'error');--}}
              {{--}--}}
            {{--}, error: function (error) {--}}
              {{--swal('Error,Try again later', '', 'error');--}}
            {{--}--}}
          {{--});--}}
        {{--});--}}
        table = $('#departments-table').DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          // searching: true,
          orders: [[8, 'desc']],
          ajax: '{{route('Backend::reviewParticipants@datatables')}}',
          columns: [
            // {data: 'email', name: 'email'},
            // {data: 'first_name', name: 'first_name'},
            // {data: 'last_name', name: 'sur_name'},
            // {data: 'title', name: 'title'},
            // {data: 'affiliation', name: 'affiliation'},
            //
            // {data: 'gender', name: 'gender'},
            // {data: 'nationality', name: 'nationality'},
            // {data: 'created_at', name: 'created_at'},

           {data: 'abstract', name: 'abstract',orderable : false},
           {data: 'title_of_paper', name: 'title_of_paper',orderable : false},
           {data: 'paper', name: 'paper',orderable : false},
           {data: 'action', name: 'action'},
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