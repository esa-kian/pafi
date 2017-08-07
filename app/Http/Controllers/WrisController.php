<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WrisModel;
use DB;

class WrisController extends Controller
{
    public function top100(){
        $wris= WrisModel::select('nameWri','avg','count','idWri')->orderby('avg','desc')->get();
        if(isset($_GET["avg"])){
            foreach ($wris as $wri){
                $idWri=$wri['idWri'];
                $avg=$wri['avg'];
                if($idWri==$_GET["idWri"]){
                    $tmp=($avg)*($wri['count']);
                    $count=$wri['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Wris')->where('idWri',$idWri)->increment('count',1);
                    DB::table('Wris')->where('idWri',$idWri)->update(['avg'=>$avg]);
                    return redirect('Wris/top100');
                }
            }      
        } 
        return view('layouts.wris.top100',compact('wris'));
    }

    public function alpha(){
        $wris= WrisModel::select('nameWri','avg','count','idWri')->orderby('nameWri','asc')->get();
        if(isset($_GET["avg"])){
            foreach ($wris as $wri){
                $idWri=$wri['idWri'];
                $avg=$wri['avg'];
                if($idWri==$_GET["idWri"]){
                    $tmp=($avg)*($wri['count']);
                    $count=$wri['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Wris')->where('idWri',$idWri)->increment('count',1);
                    DB::table('Wris')->where('idWri',$idWri)->update(['avg'=>$avg]);
                    return redirect('Wris/alpha');
                }
            }      
        }
    	return view('layouts.wris.alpha',compact('wris'));
    }
    
    public function info($idWri){
        $wris=DB::select('select nameWri,idWri,avg,count,dateBirth,placeBirth,comment from Wris where idWri=?',[$idWri]);
        $films=DB::select('select titleFilm,Films.idFilm from Wris,Films,wrisfilms where Wris.idWri=wrisfilms.idWri and Films.idFilm=wrisfilms.idFilm and Wris.idWri=?',[$idWri]);
        $seris=DB::select('select titleSeri,Seris.idSeri from Wris,Seris,wrisseris where Wris.idWri=wrisseris.idWri and Seris.idSeri=wrisseris.idSeri and Wris.idWri=?',[$idWri]);
        if(isset($_GET["avg"])){            
            foreach ($wris as $wri){
                $avg=$wri->avg;
                if($idWri==$_GET["idWri"]){
                    $tmp=($avg)*($wri->count);
                    $count=($wri->count)+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Wris')->where('idWri',$idWri)->increment('count',1);
                    DB::table('Wris')->where('idWri',$idWri)->update(['avg'=>$avg]);
                    return redirect('Wris/'.$wri->idWri.'/info');
                }
            }
        }         
    	return view('layouts.wris.info',['wris'=>$wris,'films'=>$films,'seris'=>$seris]);
    }
}

