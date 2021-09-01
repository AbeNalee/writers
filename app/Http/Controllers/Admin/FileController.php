<?php

namespace App\Http\Controllers\Admin;

use App\Models\File;
use App\Models\FileImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Org_Heigl\Ghostscript\Ghostscript;
use Spatie\PdfToImage\Pdf;

class FileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin.auth:admin')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Return View::make('admin.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $req->validate([
            'file' => 'required|mimes:pdf|max:2048',
            'tag' => 'required',
            'title' => 'required',
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->path = '/storage/' . $filePath;
            $fileModel->tag = $req->tag;
            $fileModel->title = $req->title;
            $fileModel->save();

//            Ghostscript::setGsPath("C:\Program Files (x86)\gs\gs9.54.0\bin\gswin32c.exe");
//            $image = new Pdf(asset($fileModel->path));
//            $image->setOutputFormat('jpg')
//                ->saveImage(storage_path('app\public\uploadImages\\' . $fileName . '.jpg'));
//
//            $fileImage = FileImage::create([
//                'name' => $fileName . '.jpg',
//                'path' => storage_path('app\public\uploadImages\\' . $fileName . '.jpg'),
//                'file_id' => $fileModel->id,
//            ]);

            return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        return response()->file(storage_path('/app/public/uploads/' . $file->name));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
