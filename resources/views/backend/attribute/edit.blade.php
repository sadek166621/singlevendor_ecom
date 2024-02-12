@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<section class="content-main">
    <div class="row">
        <div class="col-md-8 offset-2 ">
            <div class="content-header">
                <h2 class="content-title">Attribute Edit</h2>
                <div class="">
                    <a href="{{ route('attribute.index') }}" class="btn btn-primary p-3" title="Attribute List"><i class="fa fa-list"></i> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
    	<div class="col-sm-8">
    		<div class="card">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <form method="post" action="{{ route('attribute.update',$attribute->id) }}" enctype="multipart/form-data">
		                    	@csrf
		                    	@method('PUT')
		                        <div class="mb-4">
		                           	<label for="name" class="col-form-label col-md-2" style="font-weight: bold;"> Name:</label>
		                            <input class="form-control" id="name" type="text" name="name" placeholder="Write attribute name" value="{{$attribute->name}}">
		                            @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
		                        </div>

		                        <div class="row mb-4 justify-content-sm-end">
									<div class="col-6 col-md-4">
										<input type="submit" name="" class="btn btn-primary" value="Update">
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
