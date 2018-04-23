<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'custFirstName',
    	'custLastName',
    	'custAddress1',
    	'custAddress2',
    	'custCity',
    	'custState',
    	'custZip',
    	'custPhone',
    	'custEmail',
    	'compName',
    	'compAddress',
    	'compCity',
    	'compState',
    	'compZip',
    	'compPhone',
    	'compInvoicePDF'
    ];
}
