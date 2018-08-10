@extends('admin.layouts.master')
@section('style')
    <link rel="stylesheet" href="/backend/plugins/iCheck/all.css">
    <style>
        .select2-container {
            width: 100% !important;
        }
    </style>
@endsection
@section('content')
    <h3 class="inline">List delegates</h3>

    @include('admin.flash_message')
    <div class="col-md-12">
        <a data-toggle="modal" data-target="#export-modal" class="btn btn-success pull-right"
           style="margin-bottom: 20px">Export</a>
        <a   href="{{url('admin/download-all')}}" class="btn btn-primary pull-right"
           style="margin-bottom: 20px">Download all Abstract</a>
        <a   href="{{url('admin/send-email-abstract')}}" class="btn btn-info pull-right"
             style="margin-bottom: 20px">Send email abstract</a>
    </div>
    <div class="col-md-12" style="margin-top: 20px">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>
                                {{--<th>Email</th>--}}
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Title</th>
                                <th>Affiliation</th>

                                <th>CV</th>
                                <th>Title of paper</th>
                                <th>Full-text paper panel</th>
                                <th>Reviewer</th>
                                {{--<th style="width: 105px;">Payment Status</th>--}}
                                <th >Verify</th>
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
    <div class="modal fade" id="export-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Export excel</h4>
                </div>
                <form class="form-horizontal" action="{{ route('Backend::participants@export') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="modal-body">


                        <div class="form-body">


                            <label>
                                <input type="checkbox" class="minimal" name="first_name">
                                First name
                            </label>

                            <label>
                                <input type="checkbox" class="minimal" name="last_name">
                                Last name
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="title">
                                Title
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="affiliation">
                                Affiliation
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="email">
                                Email
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="gender">
                                Gender
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="abstract">
                                Abstract
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="title_of_paper">
                                Title of paper
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="paper">
                                Paper
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="nationality">
                                Nationality
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="know">
                                Source
                            </label>
                            <label>
                                <input type="checkbox" class="minimal" name="abstract_panel">
                                Submission to panel
                            </label>

                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label col-md-3">User</label>
                                    <div class="col-md-6">
                                        @php $users = \App\Models\User::where('type', \App\Models\User::PARTNER)->get(); @endphp
                                        <select class="form-control select2" name="id[]"  multiple id="nationality">

                                            @foreach($users as $user)
                                                <option value="{{$user->id}}" >{{$user->email}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Time</label>
                                    <div class="col-md-6">
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="time" class="form-control pull-right" id="datepicker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" id="save-answer" class="btn btn-primary">Export</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('scripts')
    <script src="/backend/plugins/iCheck/icheck.min.js"></script>
    <script>


      var table;

      $(function () {
        $('#datepicker').datepicker({
          format: 'dd/mm/yyyy',
          autoclose: true
        })
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
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
        $(document).on('change', '.select-paper-panel', function (e) {
          var val = $(this).val();
          var id = $(this).attr('data-id');
          $.ajax({
            url: '{{ route('Backend::participants@selectPaperPanel') }}',
            type: 'post',
            data: {
              panel: val,
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

        $(document).on('click','.verify',function () {
          var id = $(this).data('id');
          var that = this;
          bootbox.confirm({
            message: "Do you want to verify delegate",
            buttons: {
              confirm: {
                label: 'Yes',
                className: 'btn-success'
              },
              cancel: {
                label: 'No',
                className: 'btn-danger'
              }
            },


            callback: function (result) {
              if (result == true) {
                $.ajax({
                  url: '{{ route('Backend::participants@verify') }}',
                  type: 'post',
                  data: {
                    id: id
                  },
                  dataType: 'json',

                  success: function (response) {
                    if (response.status == 1) {
                        if(response.data.verify == 1) {
                            $(that).removeClass('btn-danger').addClass('btn-primary').html('Active');
                        }else {
                            $(that).removeClass('btn-primary').addClass('btn-danger').html('InActive');
                        }
                      swal(response.message, '', 'success');

                    } else {
                      swal(response.message, '', 'error');
                    }
                  }, error: function (error) {
                    swal('Error,Try again later', '', 'error');
                  }
                });
              }
            }
          });
        });
        $(document).on('change', '.select-payment', function () {
          var val = $(this).val();

          var id = $(this).attr('data-id');
          $.ajax({
            url: '{{ route('Backend::participants@selectPayment') }}',
            type: 'post',
            data: {
              payment_status: val,
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
          orders: [[8, 'desc']],
          ajax: '{{route('Backend::participants@datatables')}}',
          columns: [
            // {data: 'email', name: 'email'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'title', name: 'title'},
            {data: 'affiliation', name: 'affiliation'},
            {data: 'link_cv', name: 'link_cv', searchable: false, orderable: false},
            {data: 'title_of_paper', name: 'title_of_paper'},
            // {data: 'status_submit', name: 'status_submit', searchable: false, orderable: false},
            {data: 'paper_panel', name: 'paper_panel',searchable: false, orderable: false},
            {data: 'reviewer', name: 'reviewer',searchable: false, orderable: false},

            // {data: 'payment_status', name: 'payment_status', orderable: false, searchable: false},
            {data: 'verify', name: 'verify', orderable: false, searchable: false},
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

        $(document).on('click', '.delete-part', function (e) {

          var that = this;
          var url = $(this).attr('data-url');
          bootbox.confirm({
            message: "Bạn có chắc chắn muốn xóa",
            buttons: {
              confirm: {
                label: 'Có',
                className: 'btn-success'
              },
              cancel: {
                label: 'Không',
                className: 'btn-danger'
              }
            },


            callback: function (result) {
              if (result == true) {
                $.ajax({
                  url: url,
                  type: 'get',
                  data: {

                  },
                  dataType: 'json',

                  success: function (response) {
                    if (response.status == 1) {
                      var row = table.row($(that).parents('tr'));
                      var rowNode = row.node();
                      row.remove();

                      table.draw();
                    } else {
                      swal(response.message, '', 'error');
                    }
                  }, error: function (error) {
                    swal('Error,Try again later', '', 'error');
                  }
                });

              }
            }
          });


      });

    </script>
@endpush