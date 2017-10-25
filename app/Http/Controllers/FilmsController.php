<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FilmsModel;
use App\ArtsModel;
use App\WrisModel;
use App\DirsModel;
use App\User;
use App\VotesModel;//here
use Illuminate\Support\Facades\Auth;//here
use DB;

class FilmsController extends Controller
{
    public function top100(){
        $films= FilmsModel::select('titleFilm','avg','count','idFilm')->orderby('avg','desc')->get();

        $idUser=Auth::id();//here

       // Section for register Votes  
        if(isset($_GET["avg"])){
            foreach ($films as $film){
                $idFilm=$film['idFilm'];
                $avg=$film['avg'];
                if($avg<=10){//here
                    if($idFilm==$_GET["idFilm"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idFilm)->where('idUser',$idUser)->where('NameTable','film')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($film['count']);
                            $count=$film['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Films')->where('idFilm',$idFilm)->increment('count',1);
                            DB::table('Films')->where('idFilm',$idFilm)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idFilm,'film']);//here
                        }
                        return redirect('Films/top100');
                    }
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
        $idUser=Auth::id();

               // Section for register Votes
        if(isset($_GET["avg"])){
            foreach ($films as $film){
                $idFilm=$film['idFilm'];
                $avg=$film['avg'];
                if($avg<=10){
                    if($idFilm==$_GET["idFilm"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idFilm)->where('idUser',$idUser)->where('NameTable','film')->count();
                        if($vote==0){
                            $tmp=($avg)*($film['count']);
                            $count=$film['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Films')->where('idFilm',$idFilm)->increment('count',1);
                            DB::table('Films')->where('idFilm',$idFilm)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idFilm,'film']);
                        }
                        return redirect('Films/alpha');
                    }
                }
            } 
        }
    	return view('layouts.films.alpha',compact('films'));
    }
    //ManyToMany Relationship in info page
    public function info($idFilm){    

        $films=DB::select('select titleFilm,idFilm,avg,count,year,comment,Genre from Films  where idFilm=?',[$idFilm]);
        $arts= DB::select('select nameArt,Arts.idArt from Arts ,artsfilms,Films where Films.idFilm=artsfilms.idFilm and Arts.idArt=artsfilms.idArt and Films.idFilm=?',[$idFilm]);
        $wris= DB::select('select nameWri,Wris.idWri from Wris ,wrisfilms,Films where Films.idFilm=wrisfilms.idFilm and Wris.idWri=wrisfilms.idWri and Films.idFilm=?',[$idFilm]);
        $dirs= DB::select('select nameDir,Dirs.idDir from Dirs ,dirsfilms,Films where Films.idFilm=dirsfilms.idFilm and Dirs.idDir=dirsfilms.idDir and Films.idFilm=?',[$idFilm]); 
        $idUser=Auth::id();
                       // Section for register Votes
        if(isset($_GET["avg"])){ 
            foreach ($films as $film){
                $avg=$film->avg;
                if($avg<=10){
                    if($idFilm==$_GET["idFilm"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idFilm)->where('idUser',$idUser)->where('NameTable','film')->count();
                        if($vote==0){
                            $tmp=($avg)*($film->count);
                            $count=($film->count)+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Films')->where('idFilm',$idFilm)->increment('count',1);
                            DB::table('Films')->where('idFilm',$idFilm)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idFilm,'film']);
                        }
                        return redirect('Films/'.$film->idFilm.'/info');
                    }
                }
            }
        }
        return view('layouts.films.info',['films'=>$films,'arts'=>$arts,'wris'=>$wris,'dirs'=>$dirs]);
    }
}
