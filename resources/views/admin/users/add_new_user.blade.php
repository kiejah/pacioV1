@extends('admin.layouts.master')
@section('title','Company Master')
@push('css')

@endpush
@section('content')
<div class="col-md-12">
    @include('admin.alert')
</div>
<div class="col-md-12">


    <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="card-title m-0">
                Add New User
          </h5>
        </div>
        <div class="card-body">
    {{--  USER DETAILS--}}
    <form role="form" method="POST" action="{{ route('admin.user.store') }}" id="user-form">
        @csrf
        <div class="form-group">
            <label for="">User Fullname</label>
            <input name="user_fullname" type="text" class="form-control" id="user_fullname_id" placeholder="John Doe">
            @error('user_fullname')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">User Email</label>
            <input name="user_email" type="email" class="form-control"
                id="user_email_id" placeholder="user@example.com">
            @error('user_email')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">User Company</label>
            <select name="user_company" id="user_company_id" class="form-control">
                @foreach ($companies as $company)
                <option value="{{ $company->id}}">{{ $company->company_name}}</option>
                @endforeach

            </select>

            @error('user_company')
            <small class="text-danger">
                {{ $message}}
            </small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">User Role</label>
            <select name="user_role" id="user_role_id" class="form-control">
                @foreach ($roles as $role)
                <option value="{{ $role->id}}">{{ $role->role_name}}</option>
                @endforeach

            </select>

            @error('user_role')
            <small class="text-danger">
                {{ $message}}
            </small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input name="password" type="password" class="form-control"
                id="password">
            @error('password')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input name="password_confirmation" type="password" class="form-control"
                id="password_confirmation">
            @error('password_confirmation')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

</div>
</div>


</div>

@endsection
@push('js')
<script>

function companyFormSubmit(){

}
</script>

@endpush

