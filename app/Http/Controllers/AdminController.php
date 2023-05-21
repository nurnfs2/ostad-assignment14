<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //



    // For Question 1:
    public function store(Request $request)
    {
        $name = $request->input('name');
        return response()->json($name);
    }



    // For Question 2:
    public function setHeader(Request $request)
    {
        $userAgent = $request->header('User-Agent');
        return response()->json($userAgent);
    }


    // For Question 3:
    public function setQuery(Request $request)
    {
        $page = $request->input('page', null);
        return response()->json($page);
    }


    // For Question 4:
    public function getJsonResponse()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 25
        ];

        return response()->json([
            'message' => 'Success',
            'data' => $data
        ]);
    }


    // For Question 5:
    public function fileUploader(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $originalFilename = $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $originalFilename, 'public');
            return response()->json($filePath);
        }
    }


    // For Question 6:
    public function getRememberToken(Request $request)
    {
        $rememberToken = $request->cookie('remember_token', null);
        return response()->json($rememberToken);
    }





}
