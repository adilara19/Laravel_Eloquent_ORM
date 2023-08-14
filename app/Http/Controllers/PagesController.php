<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;

class PagesController extends Controller
{
    public function create(){
        $pages = new Pages;
        $pages->title='Laravel Eğitimi';
        $pages->subtitle='Laravel 9 Dersleri';
        $pages->content='Burada Laravel Eğitimi Hakkında Bilgiler Mevcut';
        $pages->SAVE();

        return "Veri Kaydedildi";
    }

    public function createnew(){
        Pages::create([
            'title'=>'Laravel Eğitimi',
            'subtitle'=>'Laravel 9 Dersleri',
            'content'=> 'Burada Laravel Eğitimi Hakkında Bilgiler Mevcut'
        ]);

        return "Veri Eklendi";
    }

    public function read(){
        $pages = Pages::query()->get();
        return view('read', compact('pages'));
    }

    public function edit($id){
        $page = Pages::query()->find($id);
        $title = $page->title;
        $subtitle = $page->subtitle;
        $content= $page->content;
        return view('edit', compact('title', 'subtitle', 'content'));
    }
}
