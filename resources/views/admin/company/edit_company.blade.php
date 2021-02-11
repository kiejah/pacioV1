@extends('admin.layouts.master')
@section('title','Company Edit')
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
                Add New Company
          </h5>
        </div>
        <div class="card-body">

            <form role="form" method="POST" action="{{ route('admin.company.update',$company->id) }}" id="company-form">

                @csrf
                  <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input name="company_name" type="text" class="form-control" id="company_name_id" value="{{$company->company_name}}">
                        @error('company_name')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Company Code</label>
                        <input name="company_code" type="text" class="form-control" id="company_code_id" readonly value="{{$company->company_code}}">
                        @error('company_code')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Phone</label>
                        <input name="company_phone" type="text" class="form-control" id="company_phone_id" value="{{$company->company_phone}}">
                        @error('company_phone')
                        <small class="text-danger">
                            {{ $message}}
                        </small>
                    @enderror
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Company Address</label>
                      <textarea class="form-control" name="company_address" id="company_address_id" cols="30" rows="3">
                        {{$company->company_address}}
                      </textarea>
                      @error('company_address')
                      <small class="text-danger">
                          {{ $message}}
                      </small>
                  @enderror
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Country</label>
                        <select class="form-control" name="country_id" id="company_country_id">

                            <option selected value="{{$company->country_id}}">{{$company->country->country_name}}</option>
                            @foreach ($countries as $country)
                            <option value="{{$country->id}}">{{$country->country_name}}</option>
                            @endforeach


                        </select>
                        @error('country_id')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Email</label>
                        <input name="company_email" type="email" class="form-control" id="company_email_id"
                        value="{{$company->company_email}}">
                        @error('company_email')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="companyRegNumber_id">Company Registration Number</label>
                        <input name="companyRegNumber" type="text" class="form-control" id="companyRegNumber_id"
                        value="{{$company->companyRegNumber}}">
                        @error('companyRegNumber')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="contactpersonName_id">Company Contact Person Name</label>
                        <input name="contactpersonName" type="text" class="form-control" id="contactpersonName_id"
                        value="{{$company->contactpersonName}}">
                        @error('contactpersonName')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                        @enderror
                    </div>
                     <div class="form-group">
                        <label for="contactpersonPhone_id">Company Contact Person Phone Number</label>
                        <input name="contactpersonPhone" type="text" class="form-control" id="contactpersonPhone_id"
                        value="{{$company->contactpersonPhone}}">
                        @error('contactpersonPhone')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="contactpersonEmail_id">Company Contact Person Email</label>
                        <input name="contactpersonEmail" type="email" class="form-control" id="contactpersonEmail_id"
                        value="{{$company->contactpersonEmail}}">
                        @error('contactpersonEmail')
                            <small class="text-danger">
                                {{ $message}}
                            </small>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Company Logo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="company_logo" type="file" class="custom-file-input" id="company_logo_id">
                          <label class="custom-file-label" for="company_logo_id">Choose file</label>
                        </div>
                    </div>
                    </div>


                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>

        </div>
      </div>

            {{-- <!-- general form elements -->
                          <!-- /.card -->
               --}}





</div>

@endsection
@push('js')
<script>

   function companyFormSubmit(){

    }
</script>

@endpush




