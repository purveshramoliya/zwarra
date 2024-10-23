@include('admin.layouts.headermodule')

<body class="hold-transition sidebar-mini zw_sidebar">
	<div class="wrapper"> @include('admin.layouts.header') @include('admin.layouts.sidebar')
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6 zw_back">
							<a onclick="history.back()" class="poppins-medium zw_18 zw_text_333333 zw_a zw_back">
								<i class="fas fa-arrow-left right mr-2"></i>Back </a>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-md-12 col-lg-6">
							<h1 class="poppins-semibold zw_46 zw_text_AF2245 mt-2">
								<span class="mr-3">
									<img src="{{ url('dist/img/zwaara_user.png') }}" alt="Zwaara User" class=" ">
								</span>Body
							</h1>
							<h5 class="pt-2" style="font-size: 12px;">You have 10 list of main services</h5>
						</div>

					</div>
				</div>
				<!-- /.container-fluid -->
			</section>
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6">
						<form action="{{ route('admin.body') }}" method="GET" class="zw_search_form">
							<div class="input-group input-group-sm">
								<input type="text" name="search" class=" zw_search_input zw_16 poppins-regular" placeholder="Search">
								<div class="input-group-append zw_input-group-append">
									<button type="submit" class="btn zw_search_button zw_bg_ffffff">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="col-12 col-md-12 col-lg-6">
						<a class="btn zw_add_btn float-right  poppins-medium zw_18" href="{{ route('admin.body.create', ['id' => request()->id]) }}"><i class="fas fa-plus right mr-2"></i>Add Body Function</a>
						{{-- <a href="" class="btn zw_add_btn float-right  poppins-medium zw_18 packageservicebtn" data-toggle="modal" data-target="#exampleModal">
				  <i class="fas fa-plus right mr-2 mb-1"></i>Add Body Function</a> --}}
					</div>

				</div>
				<div class="row">
					<div class="col-12">
						<div class="card zw_card"> @if ($message = Session::get('success')) <div class="alert zw_alert_success">
								<p>{{ $message }}</p>
							</div> @endif
							<!-- /.card-header -->
							<div class="card-body table-responsive p-0">
								<div class="pre_next">
								</div>
								<table class="table table-hover text-nowrap zw_table pt-2">
									<thead class="zw_bg_AF2245 zw_text_ffffff">
										<tr>
											<th class="poppins-medium zw_18 text-center">Image</th>
											<th class="poppins-medium zw_18">En Name</th>
											<th class="poppins-medium zw_18">Ar Name</th>
											<th class="poppins-medium zw_18" colspan="2">Status</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($bodys as $body)
										<tr>
											<td class="poppins-regular zw_14 zw_text_333333 text-center">
												<img class="center-block" width="50px" height="" src="{{ asset($body->Logo) }}">
											</td>
											<td class="poppins-regular zw_14 zw_text_333333">{{$body->Enname}}</td>
											<td class="poppins-regular zw_14 zw_text_333333">{{$body->Arname}}</td>
											<!-- <td class="poppins-regular zw_14 zw_text_333333">
												<label class="switch">
													<form id="statusForm" class="statusForm">
														<input type="hidden" name="bodyid" id="bodyid" class="bodyid" value="{{$body->id}}">
														<input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active" {{ $body->Status ? 'checked' : '' }}>
														<span class="slider"></span>
													</form>
												</label>
											</td> -->
											<td class="poppins-regular zw_14 zw_text_333333">
												<label class="switch">
													<form id="statusForm" class="statusForm">
														<input type="hidden" name="bodyid" class="bodyid" value="{{ $body->id }}">
														<input type="checkbox" id="StatusUpdate" class="StatusUpdate" data-on="Active" data-off="In Active"  {{ $body->status ? 'checked' : '' }}>
														<span class="slider"></span>
													</form>
												</label>
											</td>

											<td class="poppins-regular zw_14 zw_text_333333">
												<a class="btn zw_text_AF2245 zw_a zw_24" href="">
													<i class="fa fa-edit" aria-hidden="true"></i>
												</a>
											</td>
										</tr>
										@endforeach

									</tbody>
								</table>
							</div>
							<!-- /.card-body -->
						</div>
						<!-- /.card -->
					</div>
				</div>
				<!-- /.row -->
			</section>
		</div> @include('admin.layouts.footer')
	</div>
	<script>
		$(document).ready(function() {
			$('.StatusUpdate').change(function() {
				var status = $(this).prop('checked');
				var bodyid = $(this).closest('.statusForm').find('.bodyid').val();

				$.ajax({
					url: "{{ route('bodyupdate.status') }}", // Adjust this route as necessary
					method: 'POST',
					data: {
						_token: "{{ csrf_token() }}",
						id: bodyid,
						status: status
					},
					success: function(response) {
						console.log('Status updated successfully');
						// Optionally, you can show a success message to the user
					},
					error: function(xhr, status, error) {
						console.error('Error updating status:', error);
						// Optionally, show an error message to the user
					}
				});
			});
		});
	</script>

	<script>
		function updateFileName(input) {
			const file = input.files[0];
			const label = input.nextElementSibling;
			if (file) {
				label.textContent = file.name;
				const reader = new FileReader();
				reader.onload = function(e) {
					const imagePreview = document.getElementById('imagePreview');
					imagePreview.src = e.target.result;
					imagePreview.style.display = 'inline'; // Show inline
				};
				reader.readAsDataURL(file);
			} else {
				label.textContent = 'Choose file';
				document.getElementById('imagePreview').style.display = 'none';
			}
		}
	</script>
</body>

</html>