@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper p-3">
<h1>All Companies</h1>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.pages.companies.company_add') }}" class="btn btn-success btn-rounded mb-3">Add Company</a>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">All Registered Companies</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Company Contact One</th>
                <th>Company Contact Two</th>
                <th>Company Phone One</th>
                <th>Company Phone Two</th>
                <th>Created At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($companies as $company)
              <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->contact1 }}</td>
                <td>{{ $company->contact2 }}</td>
                <td>{{ $company->phone1 }}</td>
                <td>{{ $company->phone2 }}</td>
                <td>{{ date('m-d-Y', strtotime($company->created_at)) }}</td>
                <td>
                    <a href="{{ route('admin.pages.companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ route('admin.pages.companies.delete', $company->id) }}" class="btn btn-danger">Delete</a>
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
</div>
@endsection