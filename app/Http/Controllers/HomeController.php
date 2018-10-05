<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$images = Image::all();
        return view('home', compact('images'));
    }

    public function fileCreate() {
    	return view('imageupload');
    }

	public function fileStore(Request $request)
	{
		$image = $request->file('file');
		$imageName = $image->getClientOriginalName();
		$image->move(public_path('images'),$imageName);

		$imageUpload = new Image();
		$imageUpload->path = 'images/' . $imageName;
		$imageUpload->save();
		return response()->json(['success'=>$imageName]);
	}

	public function fileDestroy(Request $request)
	{
		$filename =  $request->get('filename');
		Image::where('filename',$filename)->delete();
		$path=public_path().'/images/'.$filename;
		if (file_exists($path)) {
			unlink($path);
		}
		return $filename;
	}

	public function listImages() {
		$images = Image::all();
		return view('image_list', compact('images'));
	}
}
