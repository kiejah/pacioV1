<div class="table-responsive">
    <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>

          <th>#</th>
          <th>Country</th>
          <th>In County</th>
          <th>Location Type</th>
          <th>Parent Location</th>
          <th class="bg-secondary">Location</th>
          <th>Location Code</th>
          <th>Location Status</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($del_locations as $location)

            <tr>
                <td>

                    {{-- <a href="#"><small><i class="fas fa-eye text-primary "></small></i></a><br>
                    <a href="{{ URL::to('admin/company-master/'.$company->id.'/edit')}}"><small><i class="fas fa-pen text-su ccess"></small></i></a><br>
                    <small><i class="fas fa-trash text-danger"></small></i> --}}

                </td>
                <td>{{ getCountry($location->area->country_id)}}</td>
                <td>{{ $location->area->area_name}}</td>
                <td>{{ $location->type->location_type_name}}</td>
                <td>{{ $location->delivery_location_parent}}</td>
                <td class="text-secondary">{{ $location->delivery_location_name}}</td>
                <td>{{ $location->delivery_location_code}}</td>
                <td>{{ $location->delivery_location_status}}</td>
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
