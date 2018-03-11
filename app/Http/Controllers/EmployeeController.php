<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\EmployeeDetail;

class EmployeeController extends Controller
{
    function employeeLising(){
    	$employee_detail=EmployeeDetail::select('name','city','email','department',
							    		'city','status','created_at');
        
    	 if(isset($_REQUEST['switch']) || isset($_REQUEST['page'])){

            if(isset($_REQUEST['switch']) && $_REQUEST['switch']==1){

            $employee_detail=$employee_detail->where('status','=',$_REQUEST['switch']);
            
            
            }else{
            
            }
            $employee_detail=$employee_detail->paginate(config('app.pagination'));
            echo  view('admin.employee_table')
                ->with(['employee_detail'=>$employee_detail]);die;
        }
		$employee_detail=$employee_detail->paginate(config('app.pagination'));
    	return 	view('admin.employee_listing')
    			->with(['employee_detail'=>$employee_detail]);
    }
}
