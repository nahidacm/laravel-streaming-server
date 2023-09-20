<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

class DashController extends Controller
{
    public function mpdFile($lessonId, $filename)
    {
        $pathToFile = storage_path('app/private/dash/'.$lessonId.'/'.$filename);
        $headers = [ 'Content-Type' => 'application/dash+xml' ];
        
        return response()->file($pathToFile, $headers);
    }
    public function serveDashVideo($lessonId, $subFolder, $filename)
    {
        $pathToFile = storage_path('app/private/dash/'.$lessonId.'/video/'.$subFolder.'/'.$filename);
        $headers = [ 'Content-Type' => 'video/mp4' ];

        return response()->file($pathToFile, $headers);
    }
    public function serveDashAudio($lessonId, $subFolder, $filename)
    {
        $pathToFile = storage_path('app/private/dash/'.$lessonId.'/audio/und/'.$subFolder.'/'.$filename);
        $headers = [ 'Content-Type' => 'video/mp4' ];

        return response()->file($pathToFile, $headers);
    }
}
