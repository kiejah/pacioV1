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
            <td></td>
            <td>{{ $company->company_name}}</td>
            <td>{{ $company->company_address}}</td>
            <td>{{ $company->company_phone}}</td>
            <td>{{ $company->company_country}}</td>
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
