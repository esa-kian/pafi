<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnimsModel;
use App\VotesModel;//here
use Illuminate\Support\Facades\Auth;//here
use DB;

class AnimsController extends Controller
{
    public function top100(){
        $anims= AnimsModel::select('titleAnim','avg','count','idAnim')->orderby('avg','desc')->get();
        $idUser=Auth::id();

        if(isset($_GET["avg"])){
            foreach ($anims as $anim){
                $idAnim=$anim['idAnim'];
                $avg=$anim['avg'];
                if($avg<=10){
                    if($idAnim==$_GET["idAnim"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idAnim)->where('idUser',$idUser)->where('NameTable','anim')->count();//here
                        if($vote==0){
                            $tmp=($avg)*($anim['count']);
                            $count=$anim['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Anims')->where('idAnim',$idAnim)->increment('count',1);
                            DB::table('Anims')->where('idAnim',$idAnim)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idAnim,'anim']);
                        }
                        return redirect('Anims/top100');
                    }
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
        $idUser=Auth::id();

        if(isset($_GET["avg"])){
            foreach ($anims as $anim){
                $idAnim=$anim['idAnim'];
                $avg=$anim['avg'];
                if($avg<=10){
                    if($idAnim==$_GET["idAnim"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idAnim)->where('idUser',$idUser)->where('NameTable','anim')->count();//here
                        if($vote==0){
                            $tmp=($avg)*($anim['count']);
                            $count=$anim['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Anims')->where('idAnim',$idAnim)->increment('count',1);
                            DB::table('Anims')->where('idAnim',$idAnim)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idAnim,'anim']);
                        }
                        return redirect('Anims/alpha');
                    }
                }
            }      
        }
    	return view('layouts.anims.alpha', compact('anims'));
    }
     public function info($idAnim){
        $anims= DB::select('SELECT * FROM Anims where idAnim=?',[$idAnim]);
        $idUser=Auth::id();

        if(isset($_GET["avg"])){            
            foreach ($anims as $anim){
                $avg=$anim->avg;
                if($avg<=10){
                    if($idAnim==$_GET["idAnim"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idAnim)->where('idUser',$idUser)->where('NameTable','anim')->count();//here
                        if($vote==0){
                            $tmp=($avg)*($anim->count);
                            $count=($anim->count)+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Anims')->where('idAnim',$idAnim)->increment('count',1);
                            DB::table('Anims')->where('idAnim',$idAnim)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idAnim,'anim']);
                        }
                        return redirect('Anims/'.$anim->idAnim.'/info');
                    }
                }
            }
        } 
    	return view('layouts.anims.info',['anims'=>$anims]);
    }
}
