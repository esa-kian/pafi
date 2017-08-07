<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CinsModel;
use DB;

class CinsController extends Controller
{
    public function top100(){
        $cins= CinsModel::select('nameCin','avg','count','idCin')->orderby('avg','desc')->get();
        if(isset($_GET["avg"])){
            foreach ($cins as $cin){
                $idCin=$cin['idCin'];
                $avg=$cin['avg'];
                if($idCin==$_GET["idCin"]){
                    $tmp=($avg)*($cin['count']);
                    $count=$cin['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Cins')->where('idCin',$idCin)->increment('count',1);
                    DB::table('Cins')->where('idCin',$idCin)->update(['avg'=>$avg]);
                    return redirect('Cinemas/top100');
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
        if(isset($_GET["avg"])){
            foreach ($cins as $cin){
                $idCin=$cin['idCin'];
                $avg=$cin['avg'];
                if($idCin==$_GET["idCin"]){
                    $tmp=($avg)*($cin['count']);
                    $count=$cin['count']+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Cins')->where('idCin',$idCin)->increment('count',1);
                    DB::table('Cins')->where('idCin',$idCin)->update(['avg'=>$avg]);
                    return redirect('Cinemas/alpha');
                }
            }      
        }
        return view('layouts.cins.alpha',compact('cins'));
    }
    public function info($idCin){
        $cins= DB::select('select nameCin,idCin,avg,count,year,address from Cins where idCin=?',[$idCin]);
        $films=DB::select('select titleFilm,Films.idFilm from Cins,Films,cinsfilms where Cins.idCin=cinsfilms.idcin and Films.idFilm=cinsfilms.idFilm and Cins.idCin=?',[$idCin]);        
        if(isset($_GET["avg"])){            
            foreach ($cins as $cin){
                $avg=$cin->avg;
                if($idCin==$_GET["idCin"]){
                    $tmp=($avg)*($cin->count);
                    $count=($cin->count)+1;
                    $avg=($tmp+$_GET['avg'])/$count;
                    DB::table('Cins')->where('idCin',$idCin)->increment('count',1);
                    DB::table('Cins')->where('idCin',$idCin)->update(['avg'=>$avg]);
                    return redirect('Cinemas/'.$cin->idCin.'/info');
                }
            }
        }        
        return view('layouts.cins.info',['cins'=>$cins,'films'=>$films]);
    }
    //
}
