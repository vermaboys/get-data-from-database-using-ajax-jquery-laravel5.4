<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //call uses table seeder class
  		$this->call('employee_detail');
        //this message shown in your terminal after running db:seed command
        $this->command->info("employee_detail table seeded :)");
    }
}
class employee_detail extends Seeder {

   public function run()
   {
     //insert some dummy records
     DB::table('employee_detail')->insert(array(
         array('name'=>'deepak','email'=>'deepak@gmail.com','department'=>'Research Development','created_at'=>'2018-10-01','city'=>'Machhiwara','status'=>'0'),

         array('name'=>'satwinder','email'=>'satwinder@gmail.com','department'=>'Purchasing','created_at'=>'2018-09-01','city'=>'Machhiwara','status'=>'1'),

         array('name'=>'rohit','email'=>'rohit@gmail.com','department'=>'Production','created_at'=>'2018-08-08','city'=>'Samrala','status'=>'0'),

         array('name'=>'mandeep','email'=>'mandeep@gmail.com','department'=>'Marketing','created_at'=>'2018-07-01','city'=>'Amritsar','status'=>'1'),

         array('name'=>'ajay','email'=>'ajay@gmail.com','department'=>'Services','created_at'=>'2018-06-01','city'=>'Ludhiana','status'=>'0'),

         array('name'=>'mukesh','email'=>'mukesh@gmail.com','department'=>'Adminstration','created_at'=>'2018-05-01','city'=>'Machhiwara','status'=>'0'),

         array('name'=>'vishal','email'=>'vishal@gmail.com','department'=>'Finanace','created_at'=>'2018-04-01','city'=>'Ludhiana','status'=>'1'),

         array('name'=>'rahul','email'=>'rahul@gmail.com','department'=>'Marketing','created_at'=>'2018-03-01','city'=>'Ludhiana','status'=>'1'),

         array('name'=>'ravi','email'=>'ravi@gmail.com','department'=>'Production','created_at'=>'2018-02-01','city'=>'Machhiwara','status'=>'1'),
         
         array('name'=>'mohit','email'=>'mohit@gmail.com','department'=>'Purchasing','created_at'=>'2018-01-01','city'=>'Ludhiana','status'=>'1')
    ));
   }

}


