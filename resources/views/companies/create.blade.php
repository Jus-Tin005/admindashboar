@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Add User</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                                <a  href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
                                        </div>
                        </div>
                </div>
        </div>

        <div class="main-section">
                <div class="row">
                        <div class="col-12">
                                <div class="card">
                                        <div class="card-body">
                                        @if(session('status'))
                                                <div class="alert alert-success mb-1 mt-1">
                                                        {{ session('status') }}
                                                </div>
                                        @endif
                                                        <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mb-3">
                                                                        <label for="name" class="col-sm-3 col-form-label">Name :</label>
                                                                <div class="col-sm-9">
                                                                        <input type="text" name="name" id="name" class="form-control">
                                                                        @error('name')
                                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                                <label for="email" class="col-sm-3 col-form-label">Email :</label>
                                                                <div class="col-sm-9">
                                                                        <input type="email" name="email" id="email" class="form-control">
                                                                        @error('email')
                                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                         </div>

                                                        <div class="row mb-3">
                                                                 <label for="role" class="col-sm-3 form-check-label">Roles<span class="requires"> *</span></label>
                                                                 <div class="col-sm-9">
                                                                        <select name="role" id="role" class="form-select">
                                                                                <option value="Admin">Admin</option>
                                                                                <option value="Manager">Manager</option>
                                                                                <option value="Secretary">Secretary</option>
                                                                                <option value="Accountant">Accountant</option>
                                                                                <option value="Project Manager">Project Manager</option>
                                                                                <option value="Cashier">Cashier</option>
                                                                         </select>
                                                                         @error('role')
                                                                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                                        @enderror
                                                                </div>
                                                         </div>

                                                        <div class="btn-group d-flex justify-content-end">
                                                                  <button type="submit" class="btn btn-secondary">Submit</button>
                                                        </div>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
   </section>
@endsection





