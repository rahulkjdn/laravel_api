<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Jobs\SaveSubmissionJob;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function postSubmit(PostRequest $request){
       SaveSubmissionJob::dispatch($request->all());

       return response()->json([
        'message' => 'Record added to job successfully!'
       ]);
    }
}
