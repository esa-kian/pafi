<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DirsModel;
use DB;

class DirsController extends Controller
{
    public function top100(){
        $dirs= DirsModel::select('nameDir','avg','count','idDir')->orderby('avg','desc')->get();
        if(isset($_GET["avg"])){
            foreach ($dirs as $dir){
                $idDir=$dir['idDir'];
                $avg=$dir['avg'];
                if($idDir==$_GET["idDir"]){
                    $tmp=($avg)*($dir['count']);
                    $count=$dir['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Dirs')->where('idDir',$idDir)->increment('count',1);
                    DB::table('Dirs')->where('idDir',$idDir)->update(['avg'=>$avg]);
                    return redirect('Dirs/top100');
                }
            }      
        }        
        return view('layouts.dirs.top100',compact('dirs'));
    }
    
    public function alpha(){
        $dirs= DirsModel::select('nameDir','avg','count','idDir')->orderby('nameDir','asc')->get();
        if(isset($_GET["avg"])){
            foreach ($dirs as $dir){
                $idDir=$dir['idDir'];
                $avg=$dir['avg'];
                if($idDir==$_GET["idDir"]){
                    $tmp=($avg)*($dir['count']);
                    $count=$dir['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Dirs')->where('idDir',$idDir)->increment('count',1);
                    DB::table('Dirs')->where('idDir',$idDir)->update(['avg'=>$avg]);
                    return redirect('Dirs/alpha');
                }
            }      
        } 
    	return view('layouts.dirs.alpha',compact('dirs'));
    }
    
    public function info($idDir){
        $dirs=DB::select('select nameDir,idDir,avg,count,dateBirth,placeBirth,comment from Dirs where idDir=?',[$idDir]);
        $films=DB::select('select titleFilm,Films.idFilm from Dirs,Films,dirsfilms where Dirs.idDir=dirsfilms.idDir and Films.idFilm=dirsfilms.idFilm and Dirs.idDir=?',[$idDir]);
        $seris=DB::select('select titleSeri,Seris.idSeri from Dirs,Seris,dirsseris where Dirs.idDir=dirsseris.idDir and Seris.idSeri=dirsseris.idSeri and Dirs.idDir=?',[$idDir]);
        if(isset($_GET["avg"])){            
            foreach ($dirs as $dir){
                $avg=$dir->avg;
                if($idDir==$_GET["idDir"]){
                    $tmp=($avg)*($dir->count);
                    $count=($dir->count)+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Dirs')->where('idDir',$idDir)->increment('count',1);
                    DB::table('Dirs')->where('idDir',$idDir)->update(['avg'=>$avg]);
                    return redirect('Dirs/'.$dir->idDir.'/info');
                }
            }
        }        
    	return view('layouts.dirs.info',['dirs'=>$dirs,'films'=>$films,'seris'=>$seris]);
    }
}