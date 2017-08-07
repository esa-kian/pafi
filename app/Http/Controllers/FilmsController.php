<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmsModel;
use App\ArtsModel;
use App\WrisModel;
use App\DirsModel;
use DB;

class FilmsController extends Controller
{
    public function top100(){
        $films= FilmsModel::select('titleFilm','avg','count','idFilm')->orderby('avg','desc')->get();
       // از این قسمت برای ثبت رای استفاده شده 
        if(isset($_GET["avg"])){
            foreach ($films as $film){
                $idFilm=$film['idFilm'];
                $avg=$film['avg'];
                if($idFilm==$_GET["idFilm"]){
                    $tmp=($avg)*($film['count']);
                    $count=$film['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Films')->where('idFilm',$idFilm)->increment('count',1);
                    DB::table('Films')->where('idFilm',$idFilm)->update(['avg'=>$avg]);
                    return redirect('Films/top100');
                }
            }  
            
        }
        return view('layouts.films.top100',compact('films'));
    }
    public function genre(){
    	return view('layouts.films.genre');
    }
    public function alpha(){
        $films= FilmsModel::select('titleFilm','avg','count','idFilm')->orderby('titleFilm','asc')->get();
               // از این قسمت برای ثبت رای استفاده شده 
        if(isset($_GET["avg"])){
            foreach ($films as $film){
                $idFilm=$film['idFilm'];
                $avg=$film['avg'];
                if($idFilm==$_GET["idFilm"]){
                    $tmp=($avg)*($film['count']);
                    $count=$film['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Films')->where('idFilm',$idFilm)->increment('count',1);
                    DB::table('Films')->where('idFilm',$idFilm)->update(['avg'=>$avg]);
                    return redirect('Films/alpha');
                }
            } 
        }
    	return view('layouts.films.alpha',compact('films'));
    }
    public function info($idFilm){       
        $films=DB::select('select titleFilm,idFilm,avg,count,year,comment,Genre from Films  where idFilm=?',[$idFilm]);
        $arts= DB::select('select nameArt,Arts.idArt from Arts ,artsfilms,Films where Films.idFilm=artsfilms.idFilm and Arts.idArt=artsfilms.idArt and Films.idFilm=?',[$idFilm]);
        $wris= DB::select('select nameWri,Wris.idWri from Wris ,wrisfilms,Films where Films.idFilm=wrisfilms.idFilm and Wris.idWri=wrisfilms.idWri and Films.idFilm=?',[$idFilm]);
        $dirs= DB::select('select nameDir,Dirs.idDir from Dirs ,dirsfilms,Films where Films.idFilm=dirsfilms.idFilm and Dirs.idDir=dirsfilms.idDir and Films.idFilm=?',[$idFilm]); 
                       // از این قسمت برای ثبت رای استفاده شده 
        if(isset($_GET["avg"])){ 
            foreach ($films as $film){
                $avg=$film->avg;
                if($idFilm==$_GET["idFilm"]){
                    $tmp=($avg)*($film->count);
                    $count=($film->count)+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Films')->where('idFilm',$idFilm)->increment('count',1);
                    DB::table('Films')->where('idFilm',$idFilm)->update(['avg'=>$avg]);
                    return redirect('Films/'.$film->idFilm.'/info');
                }
            }
        }
        return view('layouts.films.info',['films'=>$films,'arts'=>$arts,'wris'=>$wris,'dirs'=>$dirs]);
    }
}
