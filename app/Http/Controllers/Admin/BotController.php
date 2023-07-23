<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\Bot;
use App\Models\Image;

class BotController extends Controller
{
    public function index(): View
    {
        return view('admin.bot.index', [
            'blocks' => Bot::orderBy('order','asc')->get(),
        ]);
    }

    public function create(Request $request)
    {
        $bot = Bot::create([
            'title_ua' => $request->title_ua,
            'title_en' => $request->title_en,
            'order' => 99,
        ]);
        return redirect()->route('admin.bot.edit',$bot->id);
    }

    public function edit(Bot $bot)
    {
        return view('admin.bot.edit', ['page'=>$bot]);
    }

    public function update(Request $request, Bot $bot)
    {
        $data = $request->all();
        if($request->hasFile('images')) {
            unset($data['images']);
            Image::uploadImages($request->file('images'), $bot->id, 'bot');
        }
        $bot->update($data);

        return redirect()->route('admin.bot.edit',$bot)->with('success', 'Updated');
    }

    public function destroy(Bot $bot)
    {
        foreach ($bot->images as $image) {
            Storage::disk('public')->delete($image->url);
            $image->delete();
        }
        $bot->delete();
        return response()->json('success', 200);
    }

    public function toggleShow(Bot $bot)
    {
        $bot->show = 1 - $bot->show;
        $bot->save();
        return response()->json('success', 200);
    }

}
