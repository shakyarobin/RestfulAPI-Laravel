<?php namespace App\Http\Controllers;

// we dont need to import the namespace definition as contoller.php is in same foler eg. use ../..

class MyController extends Controller
{
	public function index ($name = 'user') // receives attribute parameter called name with default value  'user'
	{
		return view ('hi', ['name' => $name]); // Created a view called 'hi', will file corresponding file called hi.blade.php in views +  sending parameter to view that is name
	}
}