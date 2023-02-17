@extends('layouts.app')
@section('admin')



<div class="container my-3">
    <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
                    <div class="col-12">
                            <h5>Edit Users</h5>
                    </div>
                <div class="col-12 d-flex justify-content-end">
                    <a href="{{ route('companies.index') }}" class="btn btn-primary"  enctype="multipart/form-data">
                        Back</a>
                </div>
            </div>
        </div>
    </div>

        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('companies.update',$company->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <b>Role Name :</b>
                        <input type="text" name="name" value="{{ $company->name }}" class="form-control"
                            placeholder="Company name">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role Email :</strong>
                        <input type="email" name="email" class="form-control" placeholder="Company Email"
                            value="{{ $company->email }}">
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles :</strong>
                        <input type="text" name="role" value="{{ $company->role }}" class="form-control"
                            placeholder="Company Roles">
                        @error('role')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    <div class="btn-group d-flex justify-content-center">
                            <button type="submit" class="btn btn-success">Submit</button>
                    </div>
            </div>
        </form>
    </div>


@endsection

