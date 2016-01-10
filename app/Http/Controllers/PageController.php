<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;
class PageController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

public function home()
{
	return \View::make('home');
}
public function calc()
{
	$data=Input::all();
	$a = ($data['c']*$data['e']/100)-($data['n']*$data['o']/100);
	$b = 100*$a/$data['i'];
	$bma = $b-$a;
	$y = $data['c']*$data['e']/100;
	$x = $y*100/$data['f'];
	$xmy = $x-$y; 
	$z = $bma/$xmy;
	$t = ($z*$data['c']*($data['d']-$data['e'])*100)/($data['k']*(100-$data['m']));
	$avt = 100*$data['j']/$t;
	$ret=['a'=>$a,'b'=>$b,'bma'=>$bma,'y'=>$y,'x'=>$x,'xmy'=>$xmy,'z'=>$z,'t'=>$t,'avt'=>$avt];

	dd($ret);
}

}

