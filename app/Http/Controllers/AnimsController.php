<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnimsModel;
use DB;

class AnimsController extends Controller
{
    public function top100(){
        $anims= AnimsModel::select('titleAnim','avg','count','idAnim')->orderby('avg','desc')->get();
        if(isset($_GET["avg"])){
            foreach ($anims as $anim){
                $idAnim=$anim['idAnim'];
                $avg=$anim['avg'];
                if($idAnim==$_GET["idAnim"]){
                    $tmp=($avg)*($anim['count']);
                    $count=$anim['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Anims')->where('idAnim',$idAnim)->increment('count',1);
                    DB::table('Anims')->where('idAnim',$idAnim)->update(['avg'=>$avg]);
                    return redirect('Anims/top100');
                }
            }      
        }
        return view('layouts.anims.top100', compact('anims'));
    }
    
    public function genre(){
    	return view('layouts.anims.genre');
    }
    
    public function alpha(){
        $anims= AnimsModel::select('titleAnim','avg','count','idAnim')->orderby('titleAnim','asc')->get();
        if(isset($_GET["avg"])){
            foreach ($anims as $anim){
                $idAnim=$anim['idAnim'];
                $avg=$anim['avg'];
                if($idAnim==$_GET["idAnim"]){
                    $tmp=($avg)*($anim['count']);
                    $count=$anim['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Anims')->where('idAnim',$idAnim)->increment('count',1);
                    DB::table('Anims')->where('idAnim',$idAnim)->update(['avg'=>$avg]);
                    return redirect('Anims/alpha');
                }
            }      
        }
    	return view('layouts.anims.alpha', compact('anims'));
    }
     public function info($idAnim){
        $anims= DB::select('SELECT * FROM Anims where idAnim=?',[$idAnim]);
        if(isset($_GET["avg"])){            
            foreach ($anims as $anim){
                $avg=$anim->avg;
                if($idAnim==$_GET["idAnim"]){
                    $tmp=($avg)*($anim->count);
                    $count=($anim->count)+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Anims')->where('idAnim',$idAnim)->increment('count',1);
                    DB::table('Anims')->where('idAnim',$idAnim)->update(['avg'=>$avg]);
                    return redirect('Anims/'.$anim->idAnim.'/info');
                }
            }
        } 
    	return view('layouts.anims.info',['anims'=>$anims]);
    }
}
