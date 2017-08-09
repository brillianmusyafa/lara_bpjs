<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title">Data Pribadi</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-borderless">
					<tbody>
						<tr>
							<th> Kantor Cabang</th>
							<td> {{ $option['data']->Kantor_cabang->cabang }} </td>
						</tr>
						<tr>
							<th> Nama Lengkap </th>
							<td> {{ $option['data']->nama_lengkap }} </td>
						</tr>
						<tr>
							<th> Nik </th>
							<td> {{ $option['data']->nik }} </td>
						</tr>
						<tr>
							<th> Alamat </th>
							<td> {{ $option['data']->alamat }} </td>
						</tr>
						<tr>
							<th> No Telp </th>
							<td> {{ $option['data']->no_telp }} </td>
						</tr>
						<tr>
							<th> Nominal Gaji </th>
							<td> Rp. {{ number_format($option['data']->nominal,0,'.','.') }} </td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
	
	<div class="panel panel-danger">
		<div class="panel-heading">
			<h3 class="panel-title">Data Iuran</h3>
		</div>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Periode</th>
							<th>Bulan</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						@foreach($option['data_pembentukan'] as $p)
						<tr>
							<td>{{$p->jumlah_bulan_pembentukan}} Bulan</td>
							<td>{{$p->bulan}} - {{$p->tahun}}</td>
							<td>Rp. {{number_format($p->total,0,'.','.')}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</div>