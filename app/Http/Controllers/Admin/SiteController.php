<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Site;
use App\Models\Image;

class SiteController extends Controller
{
    public function index(): View
    {
        return view('admin.site.index', [
            'blocks' => Site::orderBy('order','asc')->get(),
        ]);
    }

    public function create(Request $request)
    {
        $site = Site::create([
            'title_ua' => $request->title_ua,
            'title_en' => $request->title_en,
            'order' => 99,
        ]);
        return redirect()->route('admin.site.edit',$site->id);
    }

    public function edit(Site $site)
    {
        return view('admin.site.edit', ['page'=>$site]);
    }

    public function update(Request $request, Site $site)
    {
        $data = $request->all();
        if($request->hasFile('images')) {
            unset($data['images']);
            Image::uploadImages($request->file('images'), $site->id, 'site');
        }
        $site->update($data);

        return redirect()->route('admin.site.edit',$site)->with('success', 'Updated');
    }

    public function destroy(Site $site)
    {
        foreach ($site->images as $image) {
            Storage::disk('public')->delete($image->url);
            $image->delete();
        }
        $site->delete();
        return response()->json('success', 200);
    }

    public function toggleShow(Site $site)
    {
        $site->show = 1 - $site->show;
        $site->save();
        return response()->json('success', 200);
    }

}
