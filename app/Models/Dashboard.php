<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function masthead(){
        $value = self::select('value')->where('parent_id', 2)->where('children_id', 1)->first();
        return $value->value;
    }

    public function section_img_scroll(){
        $value = self::select('value')->where('parent_id', 3)->where('children_id', 1)->first();
        return $value->value;
    }

    public function section_content_one(){
        $value = self::select('value')->where('parent_id', 4)->where('children_id', 1)->first();
        return $value->value;
    }

    public function section_img_two(){
        $value = self::select('value')->where('parent_id', 5)->where('children_id', 1)->first();
        return $value->value;
    }

    public function section_content_two(){
        $value = self::select('value')->where('parent_id', 5)->where('children_id', 2)->first();
        return $value->value;
    }

    public function section_content_three(){
        $value = self::select('value')->where('parent_id', 6)->where('children_id', 1)->first();
        return $value->value;
    }

    public function section_content_four(){
        $value = self::select('value')->where('parent_id', 7)->where('children_id', 1)->first();
        return $value->value;
    }

    public function footer_web(){
        $value = self::select('value')->where('parent_id', 11)->where('children_id', 1)->first();
        return $value->value;
    }

    public function footer_facebook(){
        $value = self::select('value')->where('parent_id', 11)->where('children_id', 2)->first();
        return $value->value;
    }

    public function footer_instagram(){
        $value = self::select('value')->where('parent_id', 11)->where('children_id', 3)->first();
        return $value->value;
    }

    public function footer_twitter(){
        $value = self::select('value')->where('parent_id', 11)->where('children_id', 4)->first();
        return $value->value;
    }

    public function footer_tiktok(){
        $value = self::select('value')->where('parent_id', 11)->where('children_id', 5)->first();
        return $value->value;
    }

    public function footer_youtube(){
        $value = self::select('value')->where('parent_id', 11)->where('children_id', 6)->first();
        return $value->value;
    }
}
