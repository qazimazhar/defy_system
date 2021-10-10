<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function calculation()
    {
    	
    	
    	$response = Http::post('https://api.morecowbell.ai/api/calculator/v1/calculate', [
    		    "aggregateLimit"=>1000000,
 "yearsInBusiness"=>30,
 "retroactiveYear"=>2,
 "companyType"=>"Private",
 "numberOfEmployees"=>100,
 "questionLeadership"=>true,
 "questionTraining"=>true,
 "questionCloud"=>true,
 "questionEncryption"=>true,
 "excludedFromSE"=>false,
 "socialEngEndorsement"=>false,
 "revenue"=>2983373,
 "naicsCode"=>"237110",
 "state"=>"AZ",
 "deductible"=>1000,
 "waitingPeriod"=>8,
 "businessIncomeCoverage"=>100000,
 "computerFraudEndorsement"=>false
   
]);
     var_dump(openssl_get_cert_locations());
    	return view('form.test');
}
}
