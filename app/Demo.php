<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Demo extends Model
{
    private $dataUser;
	public function __construct(){
		$this->dataUser  = DB::table('users');
	}
	
	public function getAllData(){
		
		$user = $this->dataUser->where('name', 'tarun')->first();
		dd($user);
	}
}
