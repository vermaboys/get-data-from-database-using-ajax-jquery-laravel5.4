@extends('layouts.admin')
@section('content')
<section class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <span>Switch is used to get employee of the month</span>
      </div>
      <div class="col-md-9">
        <label class="switch">
          <input type="checkbox" id="transaction_type_filter">
          <span class="slider round"></span>
        </label>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
              <h3 class="box-title">Employee Details</h3>
          </div>
          <div class="box-body">
            <form id="form">
            <input type="hidden" name="switch" id="switch" value="">
            <span id="employee_include">
              @include('admin/employee_table')
            </span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>   

<script type="text/javascript">
  $('body').on('click', '.ajaxPagination .pagination a', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    
    $.ajax({
            type:'GET',
            url:url,
            data:$('#form').serialize(),
            success:function(data){
                  $('#employee_include').html(data);
                }
    });
});
  $( document ).ready(function() {

    $('#transaction_type_filter').on('change.bootstrapSwitch', function (e, state) {
      var res;
      var value;
      if (e.target.checked == true) {
        $('#switch').val('1');
        }else {
          $('#switch').val('0');
        }
        getDetail();
    });

  });
  function getDetail(){

    $.ajax({

            type:"get",
            url:"{{url('admin/employee')}}",
            data:$('#form').serialize(),
            success: function(data){
              console.log(data);
              $('#employee_include').html(data);

              
            }
        })
}
</script>
@endsection