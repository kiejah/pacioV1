@extends('staff.layouts.master')
@section('title','Company Master')
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
                Details
          </h5>
        </div>
        <div class="card-body">

            <form role="form" method="POST" action="{{ route('staff.parcel.store') }}" id="user-form">

                @csrf

                    <div class="row">
                        <div class="col-md-4">
                            {{--  PARCEL DETAILS--}}

                                <legend>Parcel Details</legend>

                                <div class="form-group">
                                    <label for="">Parcel Name</label>
                                    <input name="parcelName" type="text" class="form-control" id="parcelName_id" placeholder="Parcel Name">
                                    @error('parcelName')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Parcel Tracker Code</label>
                                    <input name="parcelTrackerCode" type="number" class="form-control"
                                        id="parcelTrackerCode_id" placeholder="Parcel Tracker Code">
                                    @error('parcelTrackerCode')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Parcel Note</label>
                                    <textarea class="form-control" name="parcelNote"
                                        id="parcelNote_id" cols="30" rows="3"></textarea>
                                    @error('parcelNote')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Parcel Weight</label>
                                    <input name="parcelWeight" type="number" class="form-control"
                                        id="parcelWeight_id" step=0.01 placeholder="Parcel Weight">
                                    @error('parcelWeight')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Parcel Fee</label>
                                    <input name="fee" type="number" class="form-control"
                                        id="fee_id" placeholder="Parcel fee">
                                    @error('fee')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Parcel Booked Date</label>
                                    <input name="bookedDate" type="date" class="form-control"
                                        id="bookedDate_id" placeholder="Booked Date">
                                    @error('bookedDate')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Location: Parcel From</label>
                                    <input name="parcelFrom" type="text" class="form-control"
                                        id="parcelFrom_id" placeholder="Location: Parcel From">
                                    @error('parcelFrom')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Location: Parcel To</label>
                                    <input name="parcelTo" type="text" class="form-control"
                                        id="parcelTo_id" placeholder="Location: Parcel To">
                                    @error('parcelTo')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>


                        </div>
                        <div class="col-md-4">
                            <legend>Sender Details</legend>
                            {{-- SENDER DETAILS --}}
                                <div class="form-group">
                                    <label for="">Sender Fullnames</label>
                                    <input name="sender_name" type="text" class="form-control" id="sender_name_id" placeholder="Sender Name">
                                    @error('sender_name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">User Email</label>
                                    <input name="sender_email" type="email" class="form-control" id="sender_email_id" placeholder="user@company.com">
                                    @error('sender_email')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Sender National ID</label>
                                    <input name="sender_natID" type="text" class="form-control" id="sender_natID_id" >
                                    @error('sender_natID')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Sender Phonenumber</label>
                                    <input name="sender_phonenumber" type="text" class="form-control" id="sender_phonenumber_id" >
                                    @error('sender_phonenumber')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Sender Alternate Phonenumber</label>
                                    <input name="sender_altPhoneNumber" type="text" class="form-control" id="sender_altPhoneNumber_id" >
                                    @error('sender_altPhoneNumber')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                        </div>
                        <div class="col-md-4">
                            <legend>Receiver Details</legend>
                            {{-- RECEIVER DETAILS --}}
                                <div class="form-group">
                                    <label for="">Receiver Fullnames</label>
                                    <input name="receiver_name" type="text" class="form-control"
                                    id="receiver_name_id" placeholder="Receiver Fullnames">
                                    @error('receiver_name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Receiver Email</label>
                                    <input name="receiver_email" type="email" class="form-control"
                                    id="receiver_email_id" placeholder="user@company.com">
                                    @error('receiver_email')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Receiver National ID</label>
                                    <input name="receiver_natID" type="text" class="form-control"
                                    id="receiver_natID_id" >
                                    @error('receiver_natID')
                                    <small class="text-danger">
                                        {{ $message}}
                                    </small>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Receiver Phonenumber</label>
                                    <input name="receiver_phonenumber" type="text" class="form-control"
                                    id="receiver_phonenumber_id" >
                                    @error('receiver_phonenumber')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="">Receiver Alternate Phonenumber</label>
                                    <input name="receiver_altPhoneNumber" type="text" class="form-control"
                                    id="receiver_altPhoneNumber_id" >
                                    @error('receiver_altPhoneNumber')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                    @enderror
                                </div>

                        </div>
                    </div>
                    <!-- /.row -->
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


@endpush
