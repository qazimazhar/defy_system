<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Detail;
use App\Models\Code;
use App\Models\Contact;
use Carbon\Carbon;
use Session;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url = "https://api.morecowbell.ai/api/auth/v1/api/token";
        $payload = [
            "clientId"=> "BOt7oHqgQuWr_x2lkv_Dhw",
            "secret"=> "4818462f1d5cc253715dce3b89c1346b9e042f158868e75c68f5ec10705cfd23"

        ];
        $response = Http::withHeaders([
            
            'Content-Type'   => 'application/json'
        ])->post($url,$payload);
        
        $responseBody = $response->json();
        // dd($responseBody['accessToken']);

        // $request->session()->put('accessToken',$responseBody['accessToken']);
        
        Session::put('accessToken', $responseBody['accessToken']);

        $accessToken = Session::get('accessToken', $responseBody['accessToken']);

        $url = "https://api.morecowbell.ai/api/account/v1/naics/auto";
        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $accessToken, //  . env('token'),
            'Content-Type'   => 'application/json',
        ])->get($url);
       
        
        $responseBody = $response->json();
        // if ($response->successful()) {
        //     return response()->json([
        //         'error' => false,
        //         'data' => $responseBody,
        //     ]);
        // }
        // return response()->json([
        //     'error' => true,
        //     'data' => null
        // ]);
        // dd($responseBody);
        Session::put('naicsCode', $responseBody);

        // $indCode = Session::get('naicsCode');
        // dd($indCode['content'][0]['naicsCode']);

        $url = "https://api.morecowbell.ai/api/account/v1/state";
        $response = Http::withHeaders([
            'Authorization' => "Bearer " . $accessToken, //  . env('token'),
            'Content-Type'   => 'application/json',
        ])->get($url);
       
        
        $responseBody = $response->json();
        // if ($response->successful()) {
        //     return response()->json([
        //         'error' => false,
        //         'data' => $responseBody,
        //     ]);
        // }
        // return response()->json([
        //     'error' => true,
        //     'data' => null
        // ]);
        // dd($responseBody['content']->array[0]->stateNameAbbrv);
        // dd($responseBody['content']);

        Session::put('stateCode', $responseBody);

        
       
        return view('forms.form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function calculate(Request $request)
    // {
    //     $url = "https://api.morecowbell.ai/api/calculator/v1/calculate";
    //     // $payload = [
    //     //     "aggregateLimit" => 1000000,
    //     //     "yearsInBusiness" => 30,
    //     //     "retroactiveYear" => 3,
    //     //     "companyType" => "Private",
    //     //     "numberOfEmployees" => 48,
    //     //     "questionLeadership" => true,
    //     //     "questionTraining" => true,
    //     //     "questionCloud" => true,
    //     //     "questionEncryption" => true,
    //     //     "excludedFromSE" => false,
    //     //     "socialEngEndorsement" => false,
    //     //     "revenue" => 2983373,
    //     //     "naicsCode" => "237110",
    //     //     "state" => "AZ",
    //     //     "deductible" => 1000,
    //     //     "waitingPeriod" => 8,
    //     //     "businessIncomeCoverage" => 100000,
    //     //     "computerFraudEndorsement" => false
    //     // ];
    //     $payload = [
    //         "aggregateLimit" => (int)$request->aggregateLimit,
    //         "yearsInBusiness" => (int)$request->yearsInBusiness,
    //         "retroactiveYear" => (int)$request->retroactiveYear,
    //         "companyType" => $request->companyType,
    //         "numberOfEmployees" => (int)$request->numberOfEmployees,
    //         "questionLeadership" => true,
    //         "questionTraining" => true,
    //         "questionCloud" => true,
    //         "questionEncryption" => true,
    //         "excludedFromSE" => false,
    //         "socialEngEndorsement" => false,
    //         "revenue" => (int)$request->revenue,
    //         "naicsCode" => $request->naicsCode,
    //         "state" => $request->state,
    //         "deductible" => (int)$request->deductible,
    //         "waitingPeriod" => (int)$request->waitingPeriod,
    //         "businessIncomeCoverage" => (int)$request->businessIncomeCoverage,
    //         "computerFraudEndorsement" => false,
    //         "effectiveDate" => Carbon::parse($request->effectiveDate)
    //     ];
    //     // dd($payload);
    //     $response = Http::withHeaders([
    //         'Authorization' => "Bearer ". $accessToken, //  . env('token'),
    //         'Content-Type'   => 'application/json',
    //     ])->post($url, $payload);
    //     // dd($response);
    //     $responseBody = $response->json();
    //     if ($response->successful()) {
    //         Detail::create([
    //             'indication' => $responseBody,
    //         ]);
    //         return response()->json([
    //             'error' => false,
    //             'data' => $responseBody,
    //         ]);
    //     }
    //     return response()->json([
    //         'error' => true,
    //         'data' => null
    //     ]);
    //     dd($responseBody);
    // }
    public function contact(Request $request)
    {
        
        // $contact = new Contact($request->all());
        // $request->session()->put('$contact', $contact['policyContactFirstName']);
        // dd($contact['policyContactFirstName']);
        // return $contact;
        // $contact = $request->session()->put([
        //     'policyContactFirstName' => $request->policyContactFirstName,
        //     'policyContactLastName' => $request->policyContactLastName,
        //     'policyContactEmail' => $request->policyContactEmail
        //     ]);
        //     dd($contact);
        $request->session()->put('policyContactFirstName',$request->policyContactFirstName);
        $request->session()->put('policyContactLastName',$request->policyContactLastName);
        $request->session()->put('policyContactEmail',$request->policyContactEmail);
        
        
    }

    public function register(Request $request)
    {
        $data1 = $request->session()->get('policyContactFirstName');
        $data2 = $request->session()->get('policyContactLastName');
        $data3 = $request->session()->get('policyContactEmail');

        $accessToken = Session::get('accessToken');

        $content = Session::get('content');
        
        $indCode = Session::get('naicsCode');
        // dd($indCode['content'][0]['naicsCode']);
        
        $url = "https://api.morecowbell.ai/api/account/v1/account";
        // $payload = [
        //     "agencyId"=> "cc2af3f6-79b3-4c52-b171-6a046c05dfcf",
        //     "name"=> "check123",
        //     "description"=> "Description of the account / business",
        //     "domainName" => "you.com",
        //     "yearEstablished"=> "2000",
        //     "revenue"=> "1541727",
        //     "ownershipType"=> "Private",
        //     "naicsCode"=> "621111",
        //     "address1"=> "1100 Park Ave W",
        //     "city"=> "Highland Park",
        //     "state"=> "IL",
        //     "country"=> "US",
        //     "zipCode"=> "60035",
        //     "phoneNumber"=> "8274320840",
        //     "agentFirstName"=> "test",
        //     "agentLastName"=> "AgentLastName",
        //     "agentEmail"=> "test@email.com",
        //     "agentPhone"=> "9252334033",
        //     "policyContactFirstName"=> "check",
        //     "policyContactLastName"=> "Policy",
        //     "policyContactPhone"=> "9252504474",
        //     "policyContactEmail"=> "check@gmail.com",
        //     "isSecurityOfficer"=> true,
        //     "isSecurityTraining"=> true,
        //     "useEncryption"=> true,
        //     "useCloudStorage"=> true,
        //     "claimHistory"=> 0,
        //     "isVerifingBankAccounts"=> true,
        //     "isAuthenticatingFundTransferRequests"=> true,
        //     "isPreventingUnauthorizedWireTransfers"=> true,
        //     "noOfEmployeesAll"=> 48
        // ];

        $payload = [
            "agencyId"=> "cc2af3f6-79b3-4c52-b171-6a046c05dfcf",
            "agencyName"=> "Defy Insurence Test",
            "name"=> $request->name,
            "description"=> $request->description,
            "domainName" => $request->domainName,
            "domains" => $request->domains,
            "yearEstablished"=> (int)$request->yearEstablished,
            "revenue"=> (int)$request->revenue,
            "ownershipType"=> $request->ownershipType,
            "naicsCode"=> (int)$request->naicsCode,
            "address1"=> $request->address1,
            "address2"=> $request->address2,
            "city"=> $request->city,
            "state"=> $request->state,
            "zipCode"=> (int)$request->zipCode,
            "phoneNumber"=> $request->phoneNumber,
            "isFranchise"=> $request->isFranchise,
            "agentFirstName"=> $request->agentFirstName,
            "agentLastName"=> $request->agentLastName,
            "agentEmail"=> $request->agentEmail,
            "agentPhone"=> $request->agentPhone,
            "policyContactFirstName"=> $data1,
            "policyContactLastName"=> $data2,
            "policyContactPhone"=> $request->policyContactPhone,
            "policyContactEmail"=> $data3,
            "isSecurityOfficer"=> $request->isSecurityOfficer,
            "isSecurityTraining"=> $request->isSecurityTraining,
            "useEncryption"=> $request->useEncryption,
            "useCloudStorage"=> $request->useCloudStorage,
            "claimHistory"=> (int)$request->claimHistory,
            "isVerifingBankAccounts"=> $request->isVerifingBankAccounts,
            "isAuthenticatingFundTransferRequests"=> true,
            "isPreventingUnauthorizedWireTransfers"=> true,
            "noOfEmployeesAll"=> (int)$request->noOfEmployeesAll,
            "entityType"=> $request->entityType
            // "dunsNumber"=> $request->dunsNumber,
            // "effectiveDate"=> "2020-05-30",
            // "endDate"=> "2021-05-30",
            // "limit"=> 50000,
            // "deductible"=> 1000,
            // "waitingPeriod"=> 8,
            // "retroactivePeriod"=> 3,
            // "businessIncomeCoverage"=> 5000,
            // "computerFraudEndorsement"=> true

        ];
        
        // return response()->json($payload);
        $response = Http::withHeaders([
            'Authorization' => "Bearer ". $accessToken, //  . env('token'),
            'Content-Type'   => 'application/json',
        ])->post($url, $payload);
        // dd($response);
        
        $responseBody = $response->json();
        if ($response->successful()) {
            Detail::create([
                'register' => $responseBody,
            ]);
            return response()->json([
                'error' => false,
                'data' => $responseBody,
                $request->session()->put('account_id', $responseBody['id'])
                
            ]);
        }
        return response()->json([
            'error' => true,
            'data' => null
        ]);
        // dd($responseBody['id']);
        // return response()->json($responseBody);
        return view("form.form", compact('indCode'));
    }

    public function quote(Request $request)
    {
        $accessToken = Session::get('accessToken');
        $data = $request->session()->get('account_id');
        $url = "https://api.morecowbell.ai/api/quote/v1/" . $data;
        $payload = [
            "agencyId"=>"cc2af3f6-79b3-4c52-b171-6a046c05dfcf",
            "effectiveDate"=> Carbon::parse($request->effectiveDate),
            "endDate"=> Carbon::parse($request->endDate),
            "limit"=> (int)$request->limit,
            "deductible"=> (int)$request->deductible,
            "waitingPeriod"=> (int)$request->waitingPeriod,
            "retroactivePeriod"=> (int)$request->retroactivePeriod,
            "businessIncomeCoverage"=> (int)$request->businessIncomeCoverage,
            "computerFraudEndorsement"=> true,
            "agentFirstName"=> $request->agentFirstName,
            "agentLastName"=> $request->agentLastName,
            "agentEmail"=> $request->agentEmail,
            "agentPhone"=> $request->agentPhone,
        ];
        // $payload = [
        //     "agencyId"=>"cc2af3f6-79b3-4c52-b171-6a046c05dfcf",
        //     "effectiveDate"=> "2020-05-30",
        //     "endDate"=> "2021-05-30",
        //     "limit"=> 50000,
        //     "deductible"=> 1000,
        //     "waitingPeriod"=> 8,
        //     "retroactivePeriod"=> 3,
        //     "businessIncomeCoverage"=> 5000,
        //     "computerFraudEndorsement"=> true,
        //     "agentFirstName"=> "AgentFirstName",
        //     "agentLastName"=> "AgentLastName",
        //     "agentEmail"=> "agent@email.com",
        //     "agentPhone"=> "9252334033",
        
        // "name"=> "check123",
        // "description"=> "Description of the account / business",
        // "domainName" => "you.com",
        // "yearEstablished"=> "2000",
        // "revenue"=> "1541727",
        // "ownershipType"=> "Private",
        // "naicsCode"=> "621111",
        // "address1"=> "1100 Park Ave W",
        // "city"=> "Highland Park",
        // "state"=> "IL",
        // "country"=> "US",
        // "zipCode"=> "60035",
        // "phoneNumber"=> "8274320840",
        // "agentFirstName"=> "test",
        // "agentLastName"=> "AgentLastName",
        // "agentEmail"=> "test@email.com",
        // "agentPhone"=> "9252334033",
        // "policyContactFirstName"=> "check",
        // "policyContactLastName"=> "Policy",
        // "policyContactPhone"=> "9252504474",
        // "policyContactEmail"=> "check@gmail.com",
        // "isSecurityOfficer"=> true,
        // "isSecurityTraining"=> true,
        // "useEncryption"=> true,
        // "useCloudStorage"=> true,
        // "claimHistory"=> 0,
        // "isVerifingBankAccounts"=> true,
        // "isAuthenticatingFundTransferRequests"=> true,
        // "isPreventingUnauthorizedWireTransfers"=> true,
        // "noOfEmployeesAll"=> 48,
        // "wraRequestToBind"=>true
        // ];
        // dd($payload);
        $response = Http::withHeaders([
            'Authorization' => "Bearer ". $accessToken, //  . env('token'),
            'Content-Type'   => 'application/json',
        ])->post($url, $payload);
        // dd($response);
        $responseBody = $response->json();
        // echo $responseBody;
        if ($response->successful()) {
            $url = "https://api.morecowbell.ai/api/quote/v1/" . $responseBody['id'];
       
            // dd($payload);
            $response = Http::withHeaders([
                'Authorization' => "Bearer ". $accessToken, //  . env('token'),
                'Content-Type'   => 'application/json',
            ])->get($url);
            // dd($response);
            $responseBody = $response->json();
            // dd($responseBody);
            if ($response->successful()) {
                Detail::create([
                    'quote_details' => $responseBody,
                ]);
                return response()->json([
                    'error' => false,
                    'data' => $responseBody,
                ]);
            }
            return response()->json([
                'error' => true,
                'data' => null
            ]);
            dd($responseBody);
        }
        return response()->json([
            'error' => true,
            'data' => null
        ]);
        dd($responseBody);
    }
    public function payment(Request $request)
    {
        $url = "https://staging.simplepin.com/api/v2/invoice/payment_form";
         
        // dd($payload);
        $response = Http::withHeaders([
            'Authorization' => "6d777c6f824f7e164def88a7347d778d", //  . env('token'),
            'Token' => "e10d1b116d6608f2706fb034e6136f74",
            'Content-Type'   => 'application/json',
            'Accept' => 'application/json'
        ])->post($url ,[
            'customer_id' => 'CUS001',
            
        ]);
        // dd($response);
        $responseBody = $response->json();
        
        if ($response->successful()) {
            // return response()->json(dd($responseBody['url']));
            return redirect($responseBody['url']);
        }
        return response()->json([
            'error' => true,
            'data' => null
        ]);
        dd($responseBody['url']);
        // echo $responseBody['url'];
        // return view('index');
    }
}
