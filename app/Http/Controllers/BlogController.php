<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BlogController extends BaseController
{
    //
    public function index()
    {
        return Blog::all();
    }

    public function withId($id)
    {
        if (Blog::where('id', '=', $id)->exists()) {
            return Blog::find($id);
        } else {
            return response()->json(['message' => 'Blog not found'], 404);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'published' => 'required',
            'reading' => 'required',
            'isi' => 'required'
        ]);

        $Blog = Blog::create(
            $request->only(['judul', 'published', 'reading','isi'])
        );

        return response()->json([
            'created' => true,
            'data' => $Blog
        ], 201);
    }

    public function update(Request $request, $id)
    {
        try {
            $Blog = Blog::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Blog not found'
            ], 404);
        }

        $Blog->fill(

            $request->only(['judul', 'published', 'reading','isi'])
        );
        $Blog->save();

        return response()->json([
            'updated' => true,
            'data' => $Blog
        ], 200);
    }

    public function destroy($id)
    {
        try {
            $Blog = Blog::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'error' => [
                    'message' => 'Blog not found'
                ]
            ], 404);
        }

        $Blog->delete();

        return response()->json([
            'deleted' => true
        ], 200);
    }
}
