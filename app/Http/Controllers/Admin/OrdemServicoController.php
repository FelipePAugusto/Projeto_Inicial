<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OrdemServico;
use App\User;
use Auth;

class OrdemServicoController extends Controller
{
    public function index(){
        $usuarioLogado = Auth::user()->id;

        $registros = OrdemServico::all()->where('usuario_id', $usuarioLogado);
        return view('admin.ordens.index',compact('registros'));
    }

    public function adicionar(){        
        return view('admin.ordens.adicionarordem');
    }

    public function salvar(Request $req){
        $dados = $req->all();


        $dados['assinatura'] = 'Assinado';

        if(isset($dados['status'])){
            $dados['status'] = 'sim';
        }else{
            $dados['status'] = 'nao';
        }

        $dados['usuario_id'] = $usuarioLogado;

        OrdemServico::create($dados);

        return redirect()->route('admin.ordens');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    public function editar($id){
        $registro = Curso::find($id);
        return view('admin.ordens.editar',compact('registro'));
    }

    public function atualizar(Request $req, $id){
        $dados = $req->all();

        if(isset($dados['publicado'])){
            $dados['publicado'] = 'sim';
        }else{
            $dados['publicado'] = 'nao';
        }

        if($req->hasFile('imagem')){
            $imagem = $req->file('imagem');
            $num = rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);

        return redirect()->route('admin.ordens');
    }


    public function delete($id){
        Curso::find($id)->delete();
        return redirect()->route('admin.ordens');
    }
}
