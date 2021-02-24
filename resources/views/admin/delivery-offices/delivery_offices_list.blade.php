<div class="table-responsive">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>

          <th>#</th>
          <th>Company</th>
          <th>Location</th>
          <th>Delivery Office Name</th>
          <th>Contacts</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($delivery_offices as $office)

            <tr>
                <td>

                    {{-- <a href="#"><small><i class="fas fa-eye text-primary "></small></i></a><br>
                    <a href="{{ URL::to('admin/company-master/'.$company->id.'/edit')}}"><small><i class="fas fa-pen text-su ccess"></small></i></a><br>
                    <small><i class="fas fa-trash text-danger"></small></i> --}}

                </td>

                <td>{{ $office->company->company_name}}</td>
                <td>{{ $office->location->delivery_location_name}}</td>
                <td>{{ $office->delivery_office_name}}</td>
                <td class="text-secondary">{{ $office->office_contact_1}} / {{ $office->office_contact_2}}</td>
            </tr>

            @endforeach

        </tbody>

      </table>
    </div>
