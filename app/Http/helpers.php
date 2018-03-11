<?php
function DateFormat($datetime,$showOnlyDate=1,$format='d M Y') {
 return date($format,strtotime($datetime));
}
function CheckStatus($status){
	if($status==0){
		return "No";
	}else{
		return "Yes";
	}
}