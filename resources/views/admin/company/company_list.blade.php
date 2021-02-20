<div class="table-responsive">
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>#</th>
      <th>Company</th>
      <th>Company Address</th>
      <th>Company  <i class="fa fa-phone text-success"></i></th>
      <th>Company Country</th>
      <th>Company Reg No</th>
      <th>Contact Person</th>
      <th>Contact Person <i class="fa fa-phone text-success"></i></th>
      <th>Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($companies as $company)

        <tr>
            <td>

                <a href="#"><small><i class="fas fa-eye text-primary "></small></i></a><br>
                <a href="{{ URL::to('admin/company-master/'.$company->id.'/edit')}}"><small><i class="fas fa-pen text-su ccess"></small></i></a><br>
                <small><i class="fas fa-trash text-danger"></small></i>

            </td>
            <td>{{ $company->company_name}}</td>
            <td>{{ $company->company_address}}</td>
            <td>{{ $company->company_phone}}</td>
            <td>{{ $company->country->country_name}}</td>
            <td>{{ $company->companyRegNumber}}</td>
            <td>{{ $company->contactpersonName}}</td>
            <td>{{ $company->contactpersonPhone}}</td>
            <td>{{ $company->status}}</td>
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
