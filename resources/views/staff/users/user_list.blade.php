 <div class="table-responsive">
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>#</th>
      <th>User FullName</th>
      <th>User Email</th>
      <th>Role</th>
      <th>Company</th>
    </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($users as $key=> $user)

        <tr>
            <td>{{$i+$key}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->role->role_name}}</td>
            <td>{{ $user->company->company_name}}</td>

        </tr>

        @endforeach

    </tbody>

  </table>
</div>
