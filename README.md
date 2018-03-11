# get-data-from-database-using-ajax-jquery-laravel5.4

You can get data from database using git clone

Git clone:- git clone https://github.com/vermaboys/get-data-from-database-using-ajax-jquery-laravel5.4.git

Run command on terminal php artisan migrate

Run command on terminal php artisan db:seed

You can also get data from database using following steps which is given below

Include css in your css file which is given below

```
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
```

Include Js file in your layout file
```
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
```

Create helpers.php file in app/http folder and paste code which is given below

```
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
```

Add path of helpers.php in composer.json

```
"autoload": {
	"files": ["app/Http/helpers.php"]
}

Run command on terminal composer dump-autoload
```






