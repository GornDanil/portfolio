<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Models\Images;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    public function uploadForm()
    {
        if(!Auth::check()) {
            return redirect('/');
        }
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request)
    {
        if(!Auth::check()) {
            return redirect('/');
        }
        $product = Portfolio::create([
            'title' => $request->title,
            'task' => $request->task,
            'description_col_1' => $request->description_col_1,
            'description_col_2' => $request->description_col_2,
            'intro' => 'app/' . $request->intro->store('intro')
        ]);
        foreach ($request->images as $image) {
            $filename = $image->store('images');

            Images::create([
                'post_id' => $product->id,
                'filename' => $filename
            ]);
        }
        return 'Upload successful!';
    }

    public function removePost(int $id)
    {
        if(!Auth::check()) {
            return redirect('/');
        }
        $post = new Portfolio();
        return view('removepost', [
            'data' => $post->with('images')->find($id)
        ]);

    }

    public function updateSubmit(Request $request, int $id)
    {
        if(!Auth::check()) {
            return redirect('/');
        }
        if ($request->delete == "DELETE") {
            $images = new Images();
            $images->where('post_id', $id)->delete();
            $post = new Portfolio();
            $post->where('id', $id)->delete();
            return 'Успешно удалено';
        }
        $post = new Portfolio();
        $post->where('id', $id)
            ->update([
                'title' => $request->title,
                'task' => $request->task,
                'description_col_1' => $request->description_col_1,
                'description_col_2' => $request->description_col_2,
            ]);
        if($request->intro != null){
            $post->where('id', $id)
                ->update([
                    'intro' => 'app/' .$request->intro->store('intro'),
                ]);
        }
        if($request->images != null ?? count($request->images) != 0) {
            Images::where('post_id', $id)->delete();
            foreach ($request->images as $image) {
                $filename = $image->store('images');

                Images::create([
                    'post_id' => $id,
                    'filename' => $filename
                ]);
            }
        }
        return 'Upload successful!';
    }
    public function deletePost(int $id): string
    {
        if(!Auth::check()) {
            return redirect('/');
        }
        $images = new Images();
        $images->where('post_id', $id)->delete();
        $post = new Portfolio();
        $post->where('id', $id)->delete();
        return 'Успешно удалено';

    }
}
