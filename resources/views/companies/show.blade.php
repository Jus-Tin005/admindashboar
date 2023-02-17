@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Users</h5>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                                <a class="btn btn-primary" href="{{ route('companies.index') }}" enctype="multipart/form-data">Back</a>
                                        </div>
                        </div>
                </div>
        </div>

        <div class="main-section">
                <div class="row">
                        <div class="col-12">
                                <div class="card">
                                        <div class="card-body">
                                                <p class="card-title">Name : <b>{{ $company->name }}</b></p>
                                                <p class="card-text">Email : <b>{{ $company->email }}</b></p>
                                                <p class="card-text">Role : <b>{{ $company->role }}</b></p>
                                      </div>
                                </div>
                        </div>
                </div>
        </div>
   </section>
@endsection