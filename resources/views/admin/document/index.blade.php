@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">List document</h3>

    @include('admin.flash_message')
    <div class="col-md-12" style="margin-top: 20px">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>
                                <th>Reviewer</th>
                                <th>abstract</th>
                                <th>Title of paper</th>
                                <th>Paper</th>
                                <th>Participant</th>
                                <th>Subcommittee</th>
                                {{--<th>Nationality</th>--}}
                                {{--<th>Reviewer</th>--}}
                                {{--<th>Created at</th>--}}
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

        $(document).on('change', '.select-reviewer', function () {
          var val = $(this).val();
          var id = $(this).attr('data-id');
          $.ajax({
            url: '{{ route('Backend::participants@select') }}',
            type: 'post',
            data: {
              reviewer_id: val,
              id: id
            },
            dataType: 'json',

            success: function (response) {
              if (response.status == 1) {
                swal(response.message, '', 'success');

              } else {
                swal(response.message, '', 'error');
              }
            }, error: function (error) {
              swal('Error,Try again later', '', 'error');
            }
          });
        });
        table = $('#departments-table').DataTable({
          responsive: true,
          processing: true,
          serverSide: true,
          // searching: true,

          ajax: '{{route('Backend::document@datatables')}}',
          columns: [
            {data: 'reviewer', name: 'reviewer',orderable:false},
            {data: 'abstract', name: 'abstract',orderable:false},
            {data: 'title_of_paper', name: 'title_of_paper',orderable:false},
            {data: 'paper', name: 'paper',orderable:false},
            {data: 'participant', name: 'participant',orderable:false},

            {data: 'subcommittee', name: 'subcommittee',orderable:false},
           {data: 'action', name: 'action'},
          ],

//          initComplete: function () {
//            this.api().columns().every(function () {
//              var column = this;
//              var input = document.createElement("input");
//              input.className = "form-control form-filter input-sm";
//              $(input).appendTo($(column.header()))
//                .on('keyup', function () {
//                  column.search($(this).val()).draw();
//                });
//            });
//          }
        });


      });

    </script>
@endpush