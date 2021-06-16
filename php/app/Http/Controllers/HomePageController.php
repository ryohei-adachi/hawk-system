<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactSendmail;
use App\Models\ContactsTable;
use Illuminate\Support\Facades\Mail; 


class HomePageController extends Controller
{
    
    public function index()
    {
        //ホームページ表示
        return view('home.index');
    }

    public function contact()
    {
        //お問い合わせページ表示
        return view('contact.index');
    }
    
    public function hp_service()
    {
        //ホームページ制作紹介ページ表示
        return view('service.hp');
    }

    public function confirm(Request $request)
    {
        //バリデーション結果を実行
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'body'  => 'required',
        ], [
            'name.required'  => '名前を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email'    => 'メールアドレスが不正です。',
            'title.required' => '題名を入力してください。',
            'body.required'  => 'お問い合わせ内容を入力してください'
        ]);
        
        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function send(Request $request)
    {
        
        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったaction以外のinputの値を取得
        $inputs = $request->except('action');

        if($action !== 'submit') {
            return redirect(url('/contact'))->withInput($inputs);
        }
        else {

            //データベース更新処理
            $name = $request->name;
            $email = $request->email;
            $title = $request->title;
            $body = $request->body;

            $contacts_table = new ContactsTable();
            $contacts_table->name = $name;
            $contacts_table->email = $email;
            $contacts_table->title = $title;
            $contacts_table->body = $body;
    
            $contacts_table->save();

            //メール送信
            Mail::to("hawk.system1234@gmail.com")->send(new ContactSendmail($inputs));

            //再送を防ぐためにトークンを再発行
            $request->session()->regenerateToken();

            //送信完了ページ表示
            return view('contact.finish');
        }
    }
    
    public function error()
    {
        //エラーページ表示
        return view('home.error');
    }
}

