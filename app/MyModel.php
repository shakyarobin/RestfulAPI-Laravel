<?php namespace App; // Need to specify namespace because model.php is not in same place or space or folder.

use Illuminate\Database\Eloquent\Model; // path to model 

class MyModel extends Model
{
	protected $fillable = ['name', 'phone', 'secretAttribute', 'password'];

	protected $hidden = ['secretAttriblute', 'password']; // this hides two elements from fillable secretAttributes and possword

}