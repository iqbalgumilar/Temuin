@extends('admin.template.base')

@section('css')
    <link href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Master</div>
                        <div class="col-md-6 text-right">
                            <a href={{ route('skills.create') }} class="btn btn-primary btn-sm">
                                <i class="fa fa-plus"></i> Tambah
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(\Session::has('alert'))
                        <div class="alert alert-danger">
                            <div>{{ Session::get('alert') }}</div>
                        </div>
                    @endif
                    @if(\Session::has('alert-success'))
                        <div class="alert alert-success">
                            <div>{{ Session::get('alert-success') }}</div>
                        </div>
                    @endif
                    <div class="card-title">
                        <h3 class="text-center title-2">Works</h3>
                    </div>
                    <hr>
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Work</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Work</th>
                                <th>Status</th>
                                <th>Created By</th>
                                <th>Updated By</th>
                                <th>#</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(function() {
        var oTable = $('#table').DataTable({
            pageLength: 10,
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("/admin/works/data") }}'
            },
            columns: [
            {data: 'id', name: 'id'},
            {data: 'work', name: 'work'},
            {data: 'status', name: 'status'},
            {data: 'created_by', name: 'created_by', orderable: false},
            {data: 'updated_by', name: 'updated_by', orderable: false},
            {data: 'action', name: 'action', orderable: false},
        ],
        });
    });
</script>
@endsection