<?php

namespace App\Http\Controllers;

use App\Image;
use App\Mail\ContactEmail;
use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $images = Image::orderBy('id', 'desc')->get();
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
		$images = Image::orderBy('id', 'desc')->get();
		return view('images_list', compact('images'));
	}

	public function deleteImage($id) {
	    Image::where('id', $id)->delete();

		return redirect()->route('image_list');
	}

	public function editImage($id)
	{
		$image = Image::find($id);
		return view('image_edit', compact('image', 'id'));
	}

	public function updateImage(Request $request, $id)
	{
		$image= Image::find($id);
		$image->id=$request->get('number');
		$image->save();

		return redirect()->route('image_list');
	}

	public function emailForm()
	{
		return view('contact');
	}


}
