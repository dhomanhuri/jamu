<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekomendasiController extends Controller
{
    //
    public function index(){
        return view('rekomendasi.rekomendasi');
    }
    public function result(Request $request){
        $keluhan = explode(",",$request->query('keluhan'));
        $tahun = $request->query('tahun');
        // dd($keluhan."  ".$tahun);
        $classsaran = new saran($keluhan,$tahun);
        $data = [
            'nama'=>$classsaran->namaJamu(),
            'keluhan'=>$request->query('keluhan'),
            'umur'=>$classsaran->umur(),
            'saran'=>$classsaran->Saran()
        ];
        return view('rekomendasi.result',compact('data'));
    }
}

class jamu{
    public function __construct($keluhan,$tahun)
    {
        $this->tahun = $tahun;
        $this->keluhan = $keluhan;
    }
    public function namaJamu(){
        if ($this->keluhan[0]=='kesleo' && $this->keluhan[1]=='kurang nafsu makan') {
            return 'beras kencur';
        }else if($this->keluhan[0]=='pegal-pegal') {
            return 'Brotowali.';
        }else if ($this->keluhan[0]=='darah tinggi' && $this->keluhan[1]=='gula darah') {
            return 'temu lawak';
        }else{
            return 'jamu tidak ditemukan';
        }
    }
    public function umur(){
        return date('Y')-$this->tahun;
    }
}

class saran extends jamu{
    public function Saran(){
        $konsum= '';
        $cara = '';
        if ($this->umur()<=10) {
            $konsum = 'Dikonsumsi 1x';
        }else {
            $konsum = 'Dikonsumsi 2x';
        }
        if ($this->namaJamu()=='beras kencur'&& $this->keluhan[0]=='kesleo') {
            $cara = 'Dioleskan';
        }else{
            $cara = 'Dikonsumsi';
        }
        return $konsum." dengan cara ".$cara;
    }
}