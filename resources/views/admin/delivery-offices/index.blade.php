@extends('admin.layouts.master')
@section('title','Delivery Offices')
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
              <a href="{{ route('admin.delivery-office.create')}}">
                <span class="float-right text-success"><i class="fas fa-plus"></i>&nbsp;Add a Delivery Office</span>
                </a>
          </h5>
        </div>
        <div class="card-body">

            @if (count($delivery_offices) > 0)
                @include('admin.delivery-offices.delivery_offices_list')
            @else
                <p>No Offices Found!</p>
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

</script>

@endpush
