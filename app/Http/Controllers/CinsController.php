<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CinsModel;
use App\VotesModel;//here
use Illuminate\Support\Facades\Auth;//here
use DB;

class CinsController extends Controller
{
    public function top100(){
        $cins= CinsModel::select('nameCin','avg','count','idCin')->orderby('avg','desc')->get();
        $idUser=Auth::id();//here

        if(isset($_GET["avg"])){
            foreach ($cins as $cin){
                $idCin=$cin['idCin'];
                $avg=$cin['avg'];
                if($avg<=10){//here
                    if($idCin==$_GET["idCin"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idCin)->where('idUser',$idUser)->where('NameTable','cin')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($cin['count']);
                            $count=$cin['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Cins')->where('idCin',$idCin)->increment('count',1);
                            DB::table('Cins')->where('idCin',$idCin)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idCin,'cin']);
                        }
                        return redirect('Cinemas/top100');
                    }
                }
            }      
        }
        return view('layouts.cins.top100',compact('cins'));
    }
    public function city(){
        return view('layouts.cins.city');
    }
    public function alpha(){
        $cins= CinsModel::select('nameCin','avg','count','idCin')->orderby('nameCin','asc')->get();
        $idUser=Auth::id();//here

        if(isset($_GET["avg"])){
            foreach ($cins as $cin){
                $idCin=$cin['idCin'];
                $avg=$cin['avg'];
                if($avg<=10){//here
                    if($idCin==$_GET["idCin"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idCin)->where('idUser',$idUser)->where('NameTable','cin')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($cin['count']);
                            $count=$cin['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Cins')->where('idCin',$idCin)->increment('count',1);
                            DB::table('Cins')->where('idCin',$idCin)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idCin,'cin']);
                        }
                        return redirect('Cinemas/alpha');
                    }
                }
            }      
        }
        return view('layouts.cins.alpha',compact('cins'));
    }
    public function info($idCin){
        $cins= DB::select('select nameCin,idCin,avg,count,year,address from Cins where idCin=?',[$idCin]);
        $films=DB::select('select titleFilm,Films.idFilm from Cins,Films,cinsfilms where Cins.idCin=cinsfilms.idcin and Films.idFilm=cinsfilms.idFilm and Cins.idCin=?',[$idCin]);
        $idUser=Auth::id();//here

        if(isset($_GET["avg"])){            
            foreach ($cins as $cin){
                $avg=$cin->avg;
                if($avg<=10){//here
                    if($idCin==$_GET["idCin"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idCin)->where('idUser',$idUser)->where('NameTable','cin')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($cin->count);
                            $count=($cin->count)+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Cins')->where('idCin',$idCin)->increment('count',1);
                            DB::table('Cins')->where('idCin',$idCin)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idCin,'cin']);
                        }
                        return redirect('Cinemas/'.$cin->idCin.'/info');
                    }
                }
            }
        }        
        return view('layouts.cins.info',['cins'=>$cins,'films'=>$films]);
    }
    //
}
