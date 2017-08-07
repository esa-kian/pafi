<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArtsModel;
use DB;

class ArtsController extends Controller
{
    public function top100(){
        $arts= ArtsModel::select('nameArt','avg','count','idArt')->orderby('avg','desc')->get();
        if(isset($_GET["avg"])){
            foreach ($arts as $art){
                $idArt=$art['idArt'];
                $avg=$art['avg'];
                if($idArt==$_GET["idArt"]){
                    $tmp=($avg)*($art['count']);
                    $count=$art['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Arts')->where('idArt',$idArt)->increment('count',1);
                    DB::table('Arts')->where('idArt',$idArt)->update(['avg'=>$avg]);
                    return redirect('Arts/top100');
                }
            }      
        }
        return view('layouts.arts.top100',compact('arts'));  
    }

    public function alpha(){
        $arts= ArtsModel::select('nameArt','avg','count','idArt')->orderby('nameArt','asc')->get();
        if(isset($_GET["avg"])){
            foreach ($arts as $art){
                $idArt=$art['idArt'];
                $avg=$art['avg'];
                if($idArt==$_GET["idArt"]){
                    $tmp=($avg)*($art['count']);
                    $count=$art['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Arts')->where('idArt',$idArt)->increment('count',1);
                    DB::table('Arts')->where('idArt',$idArt)->update(['avg'=>$avg]);
                    return redirect('Arts/alpha');
                }
            }      
        }        
    	return view('layouts.arts.alpha',compact('arts'));
    }
    
    public function info($idArt){
        $arts=DB::select('select nameArt,idArt,avg,count,dateBirth,placeBirth,comment from Arts where idArt=?',[$idArt]);
        $films=DB::select('select titleFilm,Films.idFilm from Arts,Films,artsfilms where Arts.idArt=artsfilms.idArt and Films.idFilm=artsfilms.idFilm and Arts.idArt=?',[$idArt]);
        $seris=DB::select('select titleSeri,Seris.idSeri from Arts,Seris,artsseris where Arts.idArt=artsseris.idArt and Seris.idSeri=artsseris.idSeri and Arts.idArt=?',[$idArt]);
        
        if(isset($_GET["avg"])){            
            foreach ($arts as $art){
                $avg=$art->avg;
                if($idArt==$_GET["idArt"]){
                    $tmp=($avg)*($art->count);
                    $count=($art->count)+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Arts')->where('idArt',$idArt)->increment('count',1);
                    DB::table('Arts')->where('idArt',$idArt)->update(['avg'=>$avg]);
                    return redirect('Arts/'.$art->idArt.'/info');
                }
            }
        }        
        return view('layouts.arts.info',['arts'=>$arts,'films'=>$films,'seris'=>$seris]);
    }
}
