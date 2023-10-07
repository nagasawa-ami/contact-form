<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactController extends Controller
{
    //トップ表示
    public function index()
    {
        return view('index');
    }

    //入力フォームのデータの受け取り
    public function confirm(Request $request)
    {
         $contact = $request->only(['name'. 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }


    //データ受け取りのデータの保存処理
    public function store(Request $request)
    {
        $contact = $request->only(['name'. 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }




}
