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
              @if (count($companies) > 0)

              <a href="{{ route('admin.company.add_new_company')}}">
                <span class="float-right text-success"><i class="fas fa-plus"></i>&nbsp;Add Company</span>
            </a>


              @else
                Add New Company
              @endif
          </h5>
        </div>
        <div class="card-body">

            @if (count($companies) > 0)
                @include('admin.company.company_list')
            @else
                @include('admin.company.new-company')
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
