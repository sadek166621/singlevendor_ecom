@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="content-header">
        <h2 class="content-title">Staff Edit</h2>
        <div class="">
            <a href="{{route('staff.index') }}" title="List" class="btn btn-primary"><i class="fa fa-list"></i></a>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-sm-6">
    		<div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="{{ route('staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
		                    	@csrf
		                        <div class="">
		                           <label for="name" class="col-form-label col-md-2" style="font-weight: bold;">Name:</label>
		                            <input class="form-control" id="name" type="text" name="name" placeholder="Write name here" value="{{ $staff->user->name }}">
		                            @error('name')
	                                    <p class="text-danger">{{$message}}</p>
	                                @enderror
		                        </div>
		                        <div class="">
		                           <label for="email" class="col-form-label col-md-2" style="font-weight: bold;">Email:</label>
		                            <input class="form-control" id="email" type="email" name="email" placeholder="Write email here" value="{{ $staff->user->email }}">
		                            @error('email')
	                                    <p class="text-danger">{{$message}}</p>
	                                @enderror
		                        </div>
		                        <div class="">
		                           <label for="phone" class="col-form-label col-md-2" style="font-weight: bold;">Phone:</label>
		                            <input class="form-control" id="phone" type="number" name="phone" placeholder="Write phone here" value="{{ $staff->user->phone }}">
		                            @error('phone')
	                                    <p class="text-danger">{{$message}}</p>
	                                @enderror
		                        </div>
		                        <div class="mb-4">
		                           <label for="password" class="col-form-label col-md-2" style="font-weight: bold;">Password:</label>
		                            <input class="form-control" id="password" type="password" name="password" placeholder="Password" value="">
		                            @error('password')
	                                    <p class="text-danger">{{$message}}</p>
	                                @enderror
		                        </div>

		                        <div class="custom_select">
		                        	<label for="supplier_id" class="col-form-label" style="font-weight: bold;">Role:</label>
                                    <select class="form-control select-active w-100 form-select select-nice" name="role_id" id="role_id">
                                    	<option selected="">Select Role</option>
					                	@foreach($roles as $role)
					                		<option value="{{ $role->id }}" @php if($staff->role_id == $role->id) echo "selected"; @endphp>{{ $role->name }}</option>
					               		@endforeach
                                    </select>
                                </div>
		                        <div class="row  mt-3 justify-content-sm-end" style="margin-right: 30px;">
									<div class="col-lg-3 col-md-4 col-sm-5 col-6">
										<input type="submit" class="btn btn-primary" value="Update">
									</div>
								</div>
		                    </form>
		                </div>
		            </div>
		            <!-- .row // -->
		        </div>
		        <!-- card body .// -->
		    </div>
		    <!-- card .// -->
    	</div>
    </div>
</section>


@endsection
