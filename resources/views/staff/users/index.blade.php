@extends('staff.layouts.master')
@section('title','Company Parcels')
@push('css')

@endpush
@section('content')
<div class="col-md-12">
    @include('staff.alert')
</div>
<div class="col-md-12">


    <div class="card card-primary card-outline">
        <div class="card-header">
          <h5 class="card-title m-0">
              @if (count($users) > 0)

              <a href="{{ route('staff.parcel.add_parcel_details_form')}}">
                <span class="float-right text-success"><i class="fas fa-plus"></i>&nbsp;Add Parcel</span>
            </a>


              @else
                Add New Company
              @endif
          </h5>
        </div>
        <div class="card-body">

            @if (count($users) > 0)
                @include('staff.users.user_list')
            @else
                @php
                    return redirect()->route('parcel.add_parcel_details_form');
                @endphp
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
