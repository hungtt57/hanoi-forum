@extends('admin.layouts.master')

@section('content')

    <h3 class="inline">List online questions </h3>

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
                                {{--<th>Email</th>--}}
                                {{--<th>Registration ID</th>--}}
                                <th>Issue</th>
                                {{--<th>Subject</th>--}}
                                <th>Question</th>
                                <th>Created at</th>
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

    <div class="clearfix"></div>

    <div class="modal fade" id="answer-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Answer online question</h4>
                </div>
                <form class="form-horizontal" id="answer-form" method="post" enctype="multipart/form-data">
                    <div class="modal-body">


                        <div class="form-body">
                            {{ csrf_field() }}

                            <input type="hidden" name="id">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Content</label>
                                <div class="col-md-6">
                                  <textarea class="form-control " rows="5" cols="10" placeholder=""
                                            name="answer"></textarea>
                                </div>
                            </div>


                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" id="save-answer" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
          order: [[7, 'desc']],
          ajax: '{{route('Backend::contact@datatables')}}',
          columns: [
            {data: 'first_name', name: 'first_name',orderable : false},
            {data: 'sur_name', name: 'sur_name',orderable : false},
            {data: 'title', name: 'title',orderable : false},
//            {data: 'email', name: 'email',orderable : false},
//            {data: 'code', name: 'code',orderable : false},
            {data: 'issue', name: 'issue',orderable : false},
//            {data: 'subject', name: 'subject',orderable : false},
            {data: 'question', name: 'question',orderable : false},
            {data: 'created_at', name: 'created_at',orderable : false},
            {data: 'status', name: 'status',orderable:false},

            {data: 'action', name: 'action',orderable:false},
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

        $(document).on('click', '.answer-question', function () {
          var id = $(this).data('id');
          $('#answer-modal').find('input[name=id]').val(id);
        });

        $('#save-answer').click(function (e) {
          e.preventDefault();
          var form = $('#answer-form').serializeArray();

          $.ajax({
            url: '{{route('Backend::contact@answer')}}',
            data: form,
            type: 'POST',
            dataType: 'json',
            success: function (response) {
              if (response.status === 1) {
                $('#answer-modal').modal('hide');
                $('#answer-modal').find('input[name=content]').val('');
                $('#count-question').html(response.data.count);
                table.draw();
                swal(response.message, '', 'success');
              } else {
                swal(response.message, '', 'error');
              }
            }

          });
        });
      });

    </script>
@endpush