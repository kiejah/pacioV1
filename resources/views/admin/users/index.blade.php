@extends('admin.layouts.master')
@section('title','User')
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
             Uses
          </h5>
        </div>
        <div class="card-body">

                @include('admin.users.user_list')

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
