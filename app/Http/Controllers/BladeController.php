<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['welcome'] = 'Hoc Lap trinh Web <i>Laravel</i>';
        $this->data['content'] = '<h3>Chuong1: Nhap mon laravel</h3>
            <p>kien thuc 1</p>
            <p>kien thuc 2</p>
            <p>kien thuc 3</p>        
        ';
        $this->data['index'] = '1';
        $this->data['dataArr'] = [
            // 'Item1',
            // 'Item2',
            // 'Item3',
        ];
        return view('blade', $this->data);
    }
}
