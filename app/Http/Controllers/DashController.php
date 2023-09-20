<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Response;

class DashController extends Controller
{
    public function mpdFile($filename)
    {
        $path = public_path('dash/' . $filename);

       return Response::download($path, $filename, [
        'Content-Type' => 'application/dash+xml'
        ]);
    }
    public function serveDashVideo($subFolder, $filename)
    {
        $path = public_path('dash/video/'.$subFolder.'/' . $filename);

       return Response::download($path, $filename, [
        'Content-Type' => 'video/mp4'
        ]);
    }
    public function serveDashAudio($subFolder, $filename)
    {
        $path = public_path('dash/audio/und/'.$subFolder.'/' . $filename);

       return Response::download($path, $filename, [
        'Content-Type' => 'video/mp4'
        ]);
    }
}
