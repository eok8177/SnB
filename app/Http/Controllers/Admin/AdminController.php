<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\Image;

class AdminController extends Controller
{
    public function changeOrder(Request $request)
    {
        $model = "App\Models\\".$request->model;
        $model::changeOrder($request->order);
        return response()->json('success', 200);
    }

    public function toggleShow(Request $request)
    {
        $model = "App\Models\\".$request->model;
        $item = $model::findOrFail($request->id);
        $item->show = 1 - $item->show;
        $item->save();
        return response()->json('success', 200);
    }

    public function destroyImage(Image $image)
    {
        Storage::disk('public')->delete($image->url);
        $image->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }
}
