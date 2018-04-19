@extends('admin.layouts.master')

@section('content')
    <h3 class="inline">Manager articles</h3>

    @include('admin.flash_message')
    <div class="col-md-12">

        <a href="{{ route('Backend::article@add')}}" class="btn btn-success pull-right" style="margin-bottom: 20px">Add new
            article</a>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table class="table table-bordered table-hover" id="departments-table">
                            <thead>
                            <tr>
                                <th>Title</th>
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

          ajax: '{{route('Backend::article@datatables')}}',
          columns: [
            {data: 'title', name: 'title'},
            {data: 'action', name: 'action'},
          ]
        });


      });

    </script>
@endpush