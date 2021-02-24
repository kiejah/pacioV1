@extends('admin.layouts.master')
@section('title','Pacio- Locations')
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
                Add New Location
          </h5>
        </div>
        <div class="card-body">

            <form role="form" method="POST" action="{{ route('admin.location.store') }}" id="location-form">

                @csrf

                  <div class="card-body">
                      <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="location_country">Location Country</label>
                                <select class="form-control" name="location_country" id="location_country_id">
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

                            <div class="form-group ">

                                    <label for="county_id">In County/Area &nbsp;
                                        {{-- TO DO: location type CRUD in  modal--}}
                                        <a href="#"><i class="fas fa-plus"></i></a>
                                    </label>
                                    <select class="form-control" name="delivery_location_area_id" id="delivery_location_area_id_id">
                                        @foreach ($counties as $county)
                                        <option value="{{$county->id}}">{{$county->area_name}}</option>
                                        @endforeach

                                    </select>
                                    @error('delivery_location_area_id')
                                        <small class="text-danger">
                                            {{ $message}}
                                        </small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="location_type_id">Location Type</label>
                                <select class="form-control" name="delivery_location_type_id" id="delivery_location_type_id_id">
                                    @foreach ($location_types as $location_type)
                                    <option value="{{$location_type->id}}">{{$location_type->location_type_name}}</option>
                                    @endforeach

                                </select>

                                @error('delivery_location_type_id')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Location Name</label>
                                <input name="delivery_location_name" type="text" class="form-control" id="delivery_location_name_id" placeholder="Location Name">
                                @error('delivery_location_name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Parent Location Name</label>
                                <input name="delivery_location_parent" type="text" class="form-control" id="delivery_location_name_id" placeholder="Location Name">
                                @error('delivery_location_parent')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Location Code</label>
                                <input name="delivery_location_code" type="text" class="form-control" id="delivery_location_code_id"
                                readonly value="{{ getLocationCode()}}">
                                @error('delivery_location_code')
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




