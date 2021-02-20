@extends('admin.layouts.master')
@section('title','Locations')
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
              <a href="{{ route('admin.location.create')}}">
                <span class="float-right text-success"><i class="fas fa-plus"></i>&nbsp;Add Location</span>
                </a>
          </h5>
        </div>
        <div class="card-body">

            @if (count($del_locations) > 0)
                @include('admin.locations.location_list')
            @else
                <p>No Locations Found!</p>
            @endif

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
