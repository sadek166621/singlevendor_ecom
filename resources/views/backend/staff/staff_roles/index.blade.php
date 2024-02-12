@extends('admin.admin_master')
@section('admin')
<section class="content-main">
    <div class="content-header">
        {{-- <h3 class="content-title">Role list <span class="badge rounded-pill alert-success"> {{ count($roles) }} </span></h3> --}}
        <div class="col-md-10">
            <div class="">
                <h2 class="">Role list</h2>
            </div>
            <strong style="font-weight: bold" class="text-dark"> {{ count($roles) }} Role Found </strong>
        </div>
        <div>
            <a href="{{ route('roles.create') }}" title="Add Role" class="btn btn-primary"><i class="material-icons md-plus"></i></a>
        </div>
    </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive-sm">
               <table id="example" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Sl</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $key => $role)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td> {{ $role->name ?? 'NULL' }} </td>
                            <td>
                                <a  class="btn btn-primary btn-icon btn-circle btn-sm btn-xs" href="{{ route('roles.edit', $role->id) }}">
			                        <i class="fa-solid fa-edit"></i>
			                    </a>
			                    <a  href="{{route('roles.destroy', $role->id)}}" id="delete" class="btn btn-danger btn-icon btn-circle btn-sm btn-xs" data-href="#" style="background-color:red !important ">
			                        <i class="fa-solid fa-trash"></i>
			                    </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- table-responsive //end -->
        </div>
        <!-- card-body end// -->
    </div>
</section>
@endsection
