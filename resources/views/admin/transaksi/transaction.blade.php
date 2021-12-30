@extends('layouts.adminlayout')

@section('content')
    <div class="section-header">
        <h1>Transaction</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Transaction Config</a></div>
            <div class="breadcrumb-item">Transaction</div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="card-body p-0">
        <div class="table-responsive table-invoice">
            <table class="table table-striped">
                <tr class="text-center align-middle">
                    <th>No</th>
                    <th>Customer</th>
                    <th>Lawyer</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Jenis Meet</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; ?>
                @foreach ($transaksi as $trans)
                <tr>
                    <td class="text-center align-middle"><a href="#">{{ $i++ }}</a></td>
                    <td class="font-weight-600">{{ $trans->nama_klien }}</td>
                    <td class="font-weight-600">{{ $trans->nama_lawyer }}</td>
                    @if($trans->status == "Verifikasi")
                        <td><div class="badge badge-success text-center align-middle">{{ $trans->status }}</div></td>
                    @elseif ($trans->status == "Proses")
                        <td><div class="badge badge-warning text-center align-middle">{{ $trans->status }}</div></td>
                    @else
                        <td><div class="badge badge-danger text-center align-middle">{{ $trans->status }}</div></td>
                    @endif
                        <td class="text-center align-middle">{{ date('d-m-Y', strtotime($trans->tgl_meet)) }}</td>
                        <td>{{ $trans->jenis_meet }}</td>
                        <td><a href="{{ route('detail.transaksi', $trans->id_transaksi) }}" class="btn btn-primary text-center align-middle">Detail</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('component')
    <!-- Page Specific JS File -->
    <script src={{ asset('js/page/index.js') }}></script>
@endsection
