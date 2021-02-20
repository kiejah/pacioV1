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
                Add New Company
          </h5>
        </div>
        <div class="card-body">

            <form role="form" method="POST" action="{{ route('admin.company-master.store') }}" id="company-form">

                @csrf

                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Company Name</label>
                                <input name="company_name" type="text" class="form-control" id="company_name_id" placeholder="Company Name">
                                @error('company_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Company Code</label>
                                <input name="company_code" type="text" class="form-control" id="company_code_id" readonly value="{{ getCompanyCode() }}">
                                @error('company_code')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Phone</label>
                                <input name="company_phone" type="text" class="form-control" id="company_phone_id" placeholder="Company Phone">
                                @error('company_phone')
                                <small class="text-danger">
                                    {{ $message}}
                                </small>
                            @enderror
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Country</label>
                                <select class="form-control" name="country_id" id="company_country_id">
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
                                <label for="exampleInputPassword1">Company Address</label>
                                <textarea class="form-control" name="company_address" id="company_address_id" cols="30" rows="3"></textarea>
                                @error('company_address')
                                <small class="text-danger">
                                    {{ $message}}
                                </small>
                            @enderror
                              </div>


                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company County/Area</label>
                                <select class="form-control" name="area_id" id="company_area_id">
                                    @foreach ($areas as $area)
                                    <option value="{{$area->id}}">{{$area->area_name}}</option>
                                    @endforeach

                                </select>
                                @error('area_id')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company Email</label>
                                <input name="company_email" type="email" class="form-control" id="company_email_id" placeholder="Company Email Address">
                                @error('company_email')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="companyRegNumber_id">Company Registration Number</label>
                                <input name="companyRegNumber" type="text" class="form-control" id="companyRegNumber_id" placeholder="Company Registration Number">
                                @error('companyRegNumber')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="contactpersonName_id">Company Contact Person Name</label>
                                <input name="contactpersonName" type="text" class="form-control" id="contactpersonName_id" placeholder="Company Contact Person Name">
                                @error('contactpersonName')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="contactpersonPhone_id">Company Contact Person Phone Number</label>
                                <input name="contactpersonPhone" type="text" class="form-control" id="contactpersonPhone_id" placeholder="Company Contact Person Phone Number">
                                @error('contactpersonPhone')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="contactpersonEmail_id">Company Contact Person Email</label>
                                <input name="contactpersonEmail" type="email" class="form-control" id="contactpersonEmail_id" placeholder="Company Contact Person Email ">
                                @error('contactpersonEmail')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="">Company Logo</label>
                              <div class="input-group">
                                <div class="custom-file">
                                  <input name="company_logo" type="file" class="custom-file-input" id="company_logo_id">
                                  <label class="custom-file-label" for="company_logo_id">Choose file</label>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="">Company Tax Pin Certificate</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input name="company_pin_cert" type="file" class="custom-file-input" id="company_pin_cert_id">
                                    <label class="custom-file-label" for="company_pin_cert_id">Choose file</label>
                                  </div>
                              </div>
                              </div>
                              <div class="form-group">
                                <label for="">Company Registration Certificate</label>
                                <div class="input-group">
                                  <div class="custom-file">
                                    <input name="company_reg_cert" type="file" class="custom-file-input" id="company_reg_cert_id">
                                    <label class="custom-file-label" for="company_reg_cert_id">Choose file</label>
                                  </div>
                              </div>
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




