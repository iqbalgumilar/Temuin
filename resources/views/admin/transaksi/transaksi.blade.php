@extends('admin.template.base')

@section('css')
    <link href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        .thumbnail {
            max-width: 100%;
        }
        .lightbox {
            /** Default lightbox to hidden */
            display: none;

            /** Position and style */
            position: fixed;
            z-index: 999;
            width: 100%;
            height: 100%;
            text-align: center;
            top: 0;
            left: 0;
            background: rgba(0,0,0,0.8);
        }

        .lightbox img {
            /** Pad the lightbox image */
            max-width: 90%;
            max-height: 80%;
            margin-top: 8%;
        }

        .lightbox:target {
            /** Remove default browser outline */
            outline: none;

            /** Unhide lightbox **/
            display: block;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Transaksi</div>
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
                        <h3 class="text-center title-2">Transaksi</h3>
                    </div>
                    <hr>
                    <table id="table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Produk</th>
                                <th>Total</th>
                                <th>Bukti</th>
                                <th>Status</th>
                                <th>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Produk</th>
                                <th>Total</th>
                                <th>Bukti</th>
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
        var number = 1;
        var oTable = $('#table').DataTable({
            pageLength: 10,
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("/admin/transaksi/data") }}'
            },
            columns: [
            {data: 'rownum', name: 'rownum'},
            {data: 'nama_profile', name: 'nama_profile'},
            {data: 'produk', name: 'produk'},
            {data: 'total_transaksi', name: 'total_transaksi'},
            {data: 'bukti', name: 'image_transaksi'},
            {data: 'stat', name: 'status_transaksi'},
            {data: 'action', name: 'action', orderable: false},
        ],
        });
    });
</script>
@endsection