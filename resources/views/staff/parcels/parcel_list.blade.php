<div class="table-responsive">
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>#</th>
      <th>Parcel Name</th>
      <th>Parcel T.Code</th>
      <th>Sender - <i class="fa fa-phone text-success text-sm">-<em><small>alt</small></em></i></th>
      <th>Location: From</th>
      <th>Receiver - <i class="fa fa-phone text-success text-sm">-<em><small>alt</small></em></i></th>
      <th>Location: To</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($parcels as $parcel)

        <tr>
            <td>
                <a href=" {{ route('staff.parcel.view-parcel',$parcel->id)}} "><small><i class="fas fa-eye text-primary"></small></i></a><br>
                <small><i class="fas fa-pen text-success"></small></i><br>
                <small><i class="fas fa-trash text-danger"></small></i>

            </td>
            <td>{{ $parcel->parcelName}}</td>
            <td>{{ $parcel->parcelTrackerCode}}</td>
            <td>{{ $parcel->sender->name}}- {{ $parcel->sender->phoneNumber}}/ {{ $parcel->sender->altPhoneNumber}}</td>
            <td>{{ $parcel->parcelFrom}}</td>
            <td>{{ $parcel->receipient->name}}- {{ $parcel->receipient->phoneNumber}}/ {{ $parcel->receipient->altPhoneNumber}}</td>
            <td>{{ $parcel->parcelTo}}</td>
        </tr>

        @endforeach

    </tbody>
    {{-- <tfoot>
    <tr>
      <th>Rendering engine</th>
      <th>Browser</th>
      <th>Platform(s)</th>
      <th>Engine version</th>
      <th>CSS grade</th>
    </tr>
    </tfoot> --}}
  </table>
</div>
