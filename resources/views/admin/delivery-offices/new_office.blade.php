@extends('admin.layouts.master')
@section('title','Pacio-New Office')
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
                Add a New Delivery Office
          </h5>
        </div>
        <div class="card-body">

            <form role="form" method="POST" action="{{ route('admin.delivery-office.store') }}" id="location-form">

                @csrf

                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="location_country">Company</label>
                                <select class="form-control" name="company_id" id="company_id_id">
                                    <option value="">--Select Company--</option>
                                    @foreach ($companies as $company)
                                    <option value="{{$company->id}}">{{$company->company_name}}</option>
                                    @endforeach

                                </select>
                                @error('company_id')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>

                            <div class="form-group ">

                                    <label for="county_id">In Location &nbsp;
                                        <a href="#"><i class="fas fa-plus"></i></a>
                                    </label>
                                    <select class="form-control" name="delivery_location_id" id="delivery_location_id_id">
                                        <option value="">--Select Location--</option>
                                        @foreach ($locations as $location)
                                        <option value="{{$location->id}}">{{$location->delivery_location_name}}</option>
                                        @endforeach

                                    </select>
                                    @error('delivery_location_id')
                                        <small class="text-danger">
                                            {{ $message}}
                                        </small>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Delivery Office Name</label>
                                <input name="delivery_office_name" type="text" class="form-control" id="delivery_office_name_id" placeholder="Location Name">
                                @error('delivery_office_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Office Primary Phonenumber</label>
                                <input name="office_contact_1" type="text" class="form-control" id="office_contact_1_id" placeholder="Location Name">
                                @error('office_contact_1')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Office Alternative Phonenumber</label>
                                <input name="office_contact_2" type="text" class="form-control" id="office_contact_2_id" placeholder="Location Name">
                                @error('office_contact_2')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
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

</script>

@endpush




