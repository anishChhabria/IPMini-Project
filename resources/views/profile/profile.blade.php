@extends('navbar.navbar')

@section('content')
<style>
#flex{
        display: inline-flex;
}

</style>
<script src="https://www.google.com/reCAPTCHA/api.js" async defer></script>	

<div class ="container" >
        <form action = "/profile/store" method ="POST" class = "form-horizontal" autocomplete="off" >
             {{-- {!! Form::open(['method'=> 'POST', 'action'=>'ProfileController@store'])!!} --}}
                @csrf
                <div class="row">
					<div class ="col-4">
						<div class = "form-group">		
							{{-- <div class="col-lg-4"> --}}
								<label>First Name : </label>
							<input type="text" class="form-control" name="first_name" id = "first_name" placeholder="Enter First Name " value="{{$profile['fname']}}" onkeyup="generatefullname()">

							@if ($errors->get('first_name'))
								<div class = "alert alert-danger">
									<ul>
										@foreach ($errors->get('first_name') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							{{-- </div>	 --}}
						</div>
					</div>
					<div class ="col-4">
                        <div class = "form-group">
							{{-- <div class="col-lg-4"> --}}
									<label>Middle Name : </label>
									<input type="text" class="form-control" name="mid_name" id = "mid_name" placeholder="Enter Mid Name" onkeyup="generatefullname()">
							{{-- </div> --}}
							@if ($errors->get('mid_name'))
								<div class = "alert alert-danger">
									<ul>
										@foreach ($errors->get('mid_name') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
						</div>
					</div>
					<div class ="col-4">
                        <div class = "form-group">
							{{-- <div class="col-lg-4"> --}}
									<label>Last Name : </label>
									<input type="text" class="form-control" name="last_name" id = "last_name" placeholder="Enter Last Name" value="{{$profile['lname']}}"  onkeyup="generatefullname()">
									@if ($errors->get('last_name'))
								<div class = "alert alert-danger">
									<ul>
										@foreach ($errors->get('last_name') as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif
							{{-- </div> --}}
						</div>
					</div>
                </div>
                <div class = "row">
					<div class="col-8">
					<div class = "form-group">
						<label>Full Name : </label>
						<input type="text" class="form-control" name="full_name"  id = "full_name" readonly>
					</div>
					</div>
				</div>
				<div class = "row">
					<div class = "col-8">
						<div class = "form-group">
							<label>Email Id :</label>
							<input type="email" class="form-control" name="email_id" id = "email_id" value="{{$profile['email']}}" readonly>
						</div>
					</div>
				</div>
				<div class = "row">	
					<div class = "col-4">
							<div class = "form-group">
								<label>Date of Birth</label>
								<input type="date" class="form-control" id="date_of_birth" name = "date_of_birth" placeholder="Date of Birth">

								@if ($errors->get('date_of_birth'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('date_of_birth') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif

								
							</div>
						</div>	
					
					<div class = "col-4">
							<div class = "form-group">
									<label>Phone No :</label>
									<input type="tel" class="form-control" name="phone_no" id = "phone_no" placeholder="9000000000">
									@if ($errors->get('phone_no'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('phone_no') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
							</div>
						</div>
					<div class = "col-4">
						<div class = "form-group">
							<label>Gender</label><br>
							<input type="radio" name="gender" value="male"> Male &nbsp;
							<input type="radio" name="gender" value="female"> Female &nbsp;
							<input type="radio" name="gender" value="other"> Other &nbsp;
							@if ($errors->get('gender'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('gender') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
						</div>
					</div>
				</div>
				<div class = "row">
						<div class = "col-6">
						<div class = "form-group">
								<label>Address Line 1</label>
								<input type = "text" class="form-control" name = "address_line_1" id = "address_line_1" placeholder="Address Line 1">
								@if ($errors->get('address_line_1'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('address_line_1') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
						</div>
						</div>
						<div class = "col-6">
							<div class = "form-group">
									<label>Address Line 2</label>
									<input type = "text" class="form-control" name = "address_line_2" id = "address_line_2" placeholder="Address Line 1">
									@if ($errors->get('address_line_2'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('address_line_2') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
							
							</div>
						</div>
				</div>
				<div class = "row">
					<div class = "col-4">
					<div class = "form-group">
							<label>Land Mark</label>
							<input type = "text" class="form-control" name = "address_line_3" id = "address_line_3" placeholder="Land Mark">
							@if ($errors->get('address_line_3'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('address_line_3') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
							@endif
						
					</div>
					</div>
					<div class = "col-4">
					<div class = "form-group">
						<label>Pin Code</label>
						<input type = "number" class="form-control" name = "address_line_4" id = "address_line_4" placeholder="400074">
						@if ($errors->get('address_line_4'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('address_line_4') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
						@endif
					</div>
					</div>
					<div class = "col-4">
							<div class = "form-group">
								<label>State :</label>
								<select class="browser-default custom-select" name = "state" id = "state">
									<option value="" disabled selected>Select Your State</option>
									<option value="andra_pradesh">Andhra Pradesh</option>
									<option value="arunanchal_pradesh">Arunachal Pradesh</option>
									<option value="assam">Assam</option>
									<option value="bihar">Bihar</option>
									<option value="chhattisgarh">Chhattisgarh</option>
									<option value="goa">Goa</option>
									<option value="gujarat">Gujarat</option>
									<option value="haryana">Haryana</option>
									<option value="himachal_pradesh">Himachal Pradesh</option>
									<option value="jammu_Kashmir">Jammu & Kashmir</option>
									<option value="jharkhand">Jharkhand</option>
									<option value="karnataka">Karnataka</option>
									<option value="kerala">Kerala</option>
									<option value="madhya_pradesh">Madhya Pradesh</option>
									<option value="maharashtra">Maharashtra</option>
									<option value="manipur">Manipur</option>
									<option value="meghalaya">Meghalaya</option>
									<option value="mizoram">Mizoram</option>
									<option value="nagaland">Nagaland</option>
									<option value="odisha">Odisha</option>
									<option value="punjab">Punjab</option>
									<option value="rajasthan">Rajasthan</option>
									<option value="sikkim">Sikkim</option>
									<option value="tamil_nadu">Tamil Nadu</option>
									<option value="telangana">Telangana</option>
									<option value="tripura">Tripura</option>
									<option value="uttarakhand">Uttarakhand</option>
									<option value="uttar_pradesh">Uttar Pradesh</option>
									<option value="west_bengal">West Bengal</option>

								</select>
								@if ($errors->get('state'))
									<div class = "alert alert-danger">
										<ul>
											@foreach ($errors->get('state') as $error)
												<li>{{ $error }}</li>
											@endforeach
										</ul>
									</div>
								@endif
							</div>
							</div>
				</div>
				<div class = "row">
					<div class = "col-4">
					<div class = "form-group">
						<button type="submit" class = "btn btn-success">Submit</button>
					</div>
					</div>
				</div>
                {{-- <div class="col-md-2 col-sm-2">
                        {{Form::submit('Submit',['class'=>'btn btn-success btn-lg'])}}          
                </div>  --}}
</div>
<script type="text/javascript">
	function generatefullname(){
		document.getElementById('full_name').value = document.getElementById('first_name').value + ' ' + document.getElementById('mid_name').value + ' ' + document.getElementById('last_name').value;
	}
</script>
@endsection

