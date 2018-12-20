@extends('admin.template.base')

@section('css')
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
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
                        <h3 class="text-center title-2">Skills</h3>
                    </div>
                    <hr>
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Skill</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Skill</th>
                                <th>Status</th>
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
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(function() {
        var oTable = $('#table').DataTable({
            pageLength: 10,
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("/admin/skills/data") }}'
            },
            columns: [
            {data: 'rownum', name: 'id'},
            {data: 'skill', name: 'skill'},
            {data: 'stat', name: 'status'},
            {data: 'action', name: 'action', orderable: false},
        ],
        });
    });
</script>
@endsection