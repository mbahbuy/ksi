<?php

namespace App\Http\Controllers;

use App\Models\{Dashboard};
use Illuminate\Http\{Request};
use Illuminate\Support\Facades\{Hash, Validator, Storage};

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.index",[
            "masthead_content" => Dashboard::masthead(),
            "section_img_scroll" => Dashboard::section_img_scroll(),
            "section_img_two" => Dashboard::section_img_two(),
            "section_content_one" => Dashboard::section_content_one(),
            "section_content_two" => Dashboard::section_content_two(),
            "section_content_three" => Dashboard::section_content_three(),
            "section_content_four" => Dashboard::section_content_four(),
        ]);
    }

    public function update(Request $request, $parent_id, $children_id)
    {
        $rules = Validator::make( $request->all() , [
            'value' => 'required'
        ]);
        if($rules->fails()){
            return back()->withInput()->withErrors($rules, 'data_' . $parent_id . '_' . $children_id);
        }
        $data = $rules->validated();
        Dashboard::where('parent_id', $parent_id)->where('children_id', $children_id)->update(['value' => $data['value']]);
        return back()->with('success', 'Data sudah diperbarui!');
    }

    public function img(Request $request, $parent_id, $children_id)
    {
        $rules = Validator::make( $request->all() , [
            'image' => 'required|image|file|max:2048'
        ]);
        if($rules->fails()){
            return back()->withInput()->withErrors($rules, 'img_' . $parent_id . '_' . $children_id);
        }
        $data = $rules->validated();
        $old_image = Dashboard::select('value')->where('parent_id', $parent_id)->where('children_id', $children_id)->first();
        $data['image'] = $request->file('image')->store('dashboard');
        Storage::delete($old_image['value']);
        Dashboard::where('parent_id', $parent_id)->where('children_id', $children_id)->update(['value' => $data['image']]);
        return back()->with('success', 'Image sudah diperbarui!');
    }

    public function footer(Request $request)
    {
        $data = $request->validate([
            'web' => 'nullable|max:255',
            'facebook' => 'nullable|max:255',
            'instagram' => 'nullable|max:255',
            'twitter' => 'nullable|max:255',
            'tiktok' => 'nullable|max:255',
            'youtube' => 'nullable|max:255',
        ]);

        if ($data['web'] != null || $data['web'] != '') {
            Dashboard::where('parent_id', 11)->where('children_id', 1)->update(['value' => $data['web']]);
        }

        if ($data['facebook'] != null || $data['facebook'] != '') {
            Dashboard::where('parent_id', 11)->where('children_id', 2)->update(['value' => $data['facebook']]);
        }

        if ($data['instagram'] != null || $data['instagram'] != '') {
            Dashboard::where('parent_id', 11)->where('children_id', 3)->update(['value' => $data['instagram']]);
        }

        if ($data['twitter'] != null || $data['twitter'] != '') {
            Dashboard::where('parent_id', 11)->where('children_id', 4)->update(['value' => $data['twitter']]);
        }

        if ($data['tiktok'] != null || $data['tiktok'] != '') {
            Dashboard::where('parent_id', 11)->where('children_id', 5)->update(['value' => $data['tiktok']]);
        }

        if ($data['youtube'] != null || $data['youtube'] != '') {
            Dashboard::where('parent_id', 11)->where('children_id', 6)->update(['value' => $data['youtube']]);
        }

        if ($data['web'] == null && $data['facebook'] == null && $data['instagram'] == null && $data['twitter'] == null && $data['tiktok'] == null && $data['youtube'] == null) {
            return back()->with('success', 'Nice Try!!!');
        }
        return back()->with('success', 'Footer link telah diperbarui');
    }
}
