<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SerisModel;
use App\VotesModel;//here
use Illuminate\Support\Facades\Auth;//here
use DB;


class SerisController extends Controller
{
    public function top100(){
        $seris= SerisModel::select('titleSeri','avg','count','idSeri')->orderby('avg','desc')->get();
        $idUser=Auth::id();

        if(isset($_GET["avg"])){
            foreach ($seris as $seri){
                $idSeri=$seri['idSeri'];
                $avg=$seri['avg'];
                if($avg<=10){//here
                    if($idSeri==$_GET["idSeri"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idSeri)->where('idUser',$idUser)->where('NameTable','seri')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($seri['count']);
                            $count=$seri['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Seris')->where('idSeri',$idSeri)->increment('count',1);
                            DB::table('Seris')->where('idSeri',$idSeri)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idSeri,'seri']);//here
                        }
                        return redirect('Seris/top100');
                    }
                }
            }  
        }        
        return view('layouts.seris.top100',compact('seris'));
    }
    public function genre(){
    	return view('layouts.seris.genre');
    }
    public function alpha(){
        $seris= SerisModel::select('titleSeri','avg','count','idSeri')->orderby('titleSeri','asc')->get();
        $idUser=Auth::id();

        if(isset($_GET["avg"])){
            foreach ($seris as $seri){
                $idSeri=$seri['idSeri'];
                $avg=$seri['avg'];
                if($avg<=10){
                    if($idSeri==$_GET["idSeri"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idSeri)->where('idUser',$idUser)->where('NameTable','seri')->count();//here
                        if($vote==0){
                            $tmp=($avg)*($seri['count']);
                            $count=$seri['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Seris')->where('idSeri',$idSeri)->increment('count',1);
                            DB::table('Seris')->where('idSeri',$idSeri)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idSeri,'seri']);
                        }
                        return redirect('Seris/alpha');
                    }
                }
            }      
        } 
    	return view('layouts.seris.alpha',compact('seris'));
    }
    public function info($idSeri){
        $seris=DB::select('select titleSeri,idSeri,avg,count,year,comment,Genre from Seris where idSeri=?',[$idSeri]);
        $arts=DB::select('select nameArt,Arts.idArt from Arts,artsseris,Seris where Arts.idArt=artsseris.idArt and Seris.idSeri=artsseris.idSeri and Seris.idSeri=?',[$idSeri]);
        $wris=DB::select('select nameWri,Wris.idWri from Wris,wrisseris,Seris where Wris.idWri=wrisseris.idWri and Seris.idSeri=wrisseris.idSeri and Seris.idSeri=?',[$idSeri]);
        $dirs=DB::select('select nameDir,Dirs.idDir from Dirs,dirsseris,Seris where Dirs.idDir=dirsseris.idDir and Seris.idSeri=dirsseris.idSeri and Seris.idSeri=?',[$idSeri]);
        $idUser=Auth::id();

        if(isset($_GET["avg"])){
            foreach ($seris as $seri){
                $avg=$seri->avg;
                if($avg<=10){
                    if($idSeri==$_GET["idSeri"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idSeri)->where('idUser',$idUser)->where('NameTable','seri')->count();//here
                        if($vote==0){
                            $tmp=($avg)*($seri->count);
                            $count=($seri->count)+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Seris')->where('idSeri',$idSeri)->increment('count',1);
                            DB::table('Seris')->where('idSeri',$idSeri)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idSeri,'seri']);
                        }
                        return redirect('Seris/'.$seri->idSeri.'/info');
                    }
                }
            }
        }
        return view('layouts.seris.info', ['seris'=>$seris,'arts'=>$arts,'wris'=>$wris,'dirs'=>$dirs]);
    }
}
