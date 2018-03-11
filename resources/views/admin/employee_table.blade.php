<table class="table table-bordered table-hover dataTable">
  <thead>
    <tr>
      <th>Joinning Date</th>
      <th>Name</th>
      <th>Email Address</th>
      <th>Department</th>
      <th>City</th>
      <th>Employee of the month</th>
    </tr>
  </thead>
  <tbody>
    @foreach($employee_detail as $result)
      <tr>
        <td>{{DateFormat($result->created_at)}}</td>
        <td>{{$result->name}}</td>
        <td>{{$result->email}}</td>
        <td>{{$result->department}}</td>
        <td>{{$result->city}}</td>
        <td>{{CheckStatus($result->status)}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<div class="ajaxPagination">{{$employee_detail->links()}}</div>

