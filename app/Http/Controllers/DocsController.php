<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DocsModel;
use App\VotesModel;//here
use Illuminate\Support\Facades\Auth;//here
use DB;

class DocsController extends Controller
{

    public function top100(){
        $docs = DocsModel::select('titleDoc','avg','count','idDoc')->orderby('avg','desc')->get();
        $idUser=Auth::id();//here

        if(isset($_GET["avg"])){
            foreach ($docs as $doc){
                $idDoc=$doc['idDoc'];
                $avg=$doc['avg'];
                if($avg<=10){//here
                    if($idDoc==$_GET["idDoc"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idDoc)->where('idUser',$idUser)->where('NameTable','doc')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($doc['count']);
                            $count=$doc['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Docs')->where('idDoc',$idDoc)->increment('count',1);
                            DB::table('Docs')->where('idDoc',$idDoc)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idDoc,'doc']);
                        }
                        return redirect('Docs/top100');
                    }
                }
            }      
        }        
        return view('layouts.docs.top100',compact('docs'));
    }
    public function genre(){
    	return view('layouts.docs.genre');
    }
    public function alpha(){
        $docs = DocsModel::select('titleDoc','avg','count','idDoc')->orderby('titleDoc','asc')->get();
        $idUser=Auth::id();//here

        if(isset($_GET["avg"])){
            foreach ($docs as $doc){
                $idDoc=$doc['idDoc'];
                $avg=$doc['avg'];
                if($avg<=10){//here
                    if($idDoc==$_GET["idDoc"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idDoc)->where('idUser',$idUser)->where('NameTable','doc')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($doc['count']);
                            $count=$doc['count']+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Docs')->where('idDoc',$idDoc)->increment('count',1);
                            DB::table('Docs')->where('idDoc',$idDoc)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idDoc,'doc']);
                        }
                        return redirect('Docs/alpha');
                    }
                }
            }      
        }        
    	return view('layouts.docs.alpha',compact('docs'));
    }
    public function info($idDoc){
        $docs =DB::select('select * from Docs where idDoc=?',[$idDoc]);
        $idUser=Auth::id();//here

        if(isset($_GET["avg"])){            
            foreach ($docs as $doc){
                $avg=$doc->avg;
                if($avg<=10){//here
                    if($idDoc==$_GET["idDoc"]){
                        $vote=DB::table('votes')->select('idItem')->where('idItem',$idDoc)->where('idUser',$idUser)->where('NameTable','doc')->count();//here
                        if($vote==0){//here
                            $tmp=($avg)*($doc->count);
                            $count=($doc->count)+1;
                            $avg=($tmp+$_GET['avg'])/$count;
                            $avg=round($avg,2);
                            DB::table('Docs')->where('idDoc',$idDoc)->increment('count',1);
                            DB::table('Docs')->where('idDoc',$idDoc)->update(['avg'=>$avg]);
                            DB::insert('insert into votes (idUser,idItem,NameTable) value (?,?,?)',[$idUser,$idDoc,'doc']);
                        }
                        return redirect('Docs/'.$doc->idDoc.'/info');
                    }
                }
            }
        }        
        return view('layouts.docs.info',['docs'=>$docs]);
    }
}
