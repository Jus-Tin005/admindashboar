@extends('layouts.app')
@section('admin')

<div class="container  my-3">
                        <div class="table-wrapper">
                                <div class="table-title">
                                        <div class="row">
                                                <div class="col-12">
                                                        <h5>All <b>Users</b></h5>
                                                </div>
                                                <div class="col-12 d-flex justify-content-end">
                                                        <a class="btn btn-success" href="{{ route('companies.create') }}"><i class="fas fa-plus-circle"></i><span>Add</span></a>
                                                </div>
                                        </div>
                                </div>
                        </div>

                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                                <p>{{ $message }}</p>
                        </div>
                        @endif
                        <table class="">
                        <thead>
                                <tr>
                                <th>S.No</th>
                                <th>Role Name</th>
                                <th>Role Email</th>
                                <th>Roles</th>
                                <th style="width:180px;">Action</th>
                                </tr>
                        </thead>
                        <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                        <td>{{ $company->id }}</td>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->role }}</td>
                                        <td>
                                        <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                                        @csrf
                                                <a class="btn btn-warning mx-1" href="{{ route('companies.show',$company->id) }}"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}" target="_blank"><i class="fas fa-edit"></i></a>

                                                @method('DELETE')
                                                <button type="button" class="btn btn-danger delete-all"  target="_blank"><i class="fas fa-trash"></i></button>
                                        </form>
                                        </td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>
                        {!! $companies->links() !!}
                        <div class="clearfix">
                                        <div class="text-hint">Showing <b>6</b> out of <b>over 150</b> entries</div>
                                                <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                        </div>
                        </div>


                                                <!----------------------------------
                                                                *  Delete Modal    *
                                                ------------------------------------>
                                                        <div id="my-modal" class="modal">
                                                                <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                                <form action="/" method="/">
                                                                                        <div class="modal-header">
                                                                                                <h5 class="modal-title">Delete Users</h5>
                                                                                                <span class="close">&times;</span>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                                <p>Are you sure you want to delete it?</p>
                                                                                                <p class="text-warning"><small>This action cannot be found any more !!!</small></p>
                                                                                        </div>
                                                                                        <div class="modal-footer justify-content-center">
                                                                                                <button type="button" class="btn btn-primary close">Cancel</button>
                                                                                                <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                                                                                                        @csrf
                                                                                                        @method('DELETE')
                                                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                                                </form>
                                                                                        </div>
                                                                                </form>
                                                                        </div>
                                                                </div>
                                                        </div>
</div>


@endsection