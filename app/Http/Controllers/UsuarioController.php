<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function cadastrar(Request $request){
        if ($request->isMethod('POST')){

            $dados = $request->all();
            if(isset($dados)){
                $nome = $request->nome_cadastro;
                $email = $request->email_cadastro;
                $senha = $request->senha_cadastro;
                $csenha = $request->csenha_cadastro;

                if(($nome == "") || ($email == "") || ($senha == "") || ($csenha == "")){
                    $data = [];

                    $data['msg'] = "Não deixe nenhum dos campos vazios!";

                    return view('cadastro', $data);
                }

                elseif($senha != $csenha){
                    $data = [];

                    $data['msg'] = "As senhas não conferem!";

                    return view('cadastro', $data);
                }

                else{
                    $usuario = new Usuario([
                        'nome' => $nome,
                        'email' => $email,
                        'senha' => sha1($senha),
                    ]);

                    $usuario->save();

                    $data = [];
                    $data['msg'] = "Cadastro concluído com sucesso!";

                    return redirect()->route('login', $data);
                }


            }
        }
        return view('cadastro');
    }

    public function login(Request $request){
        if ($request->isMethod('POST')){
            $dados = $request->all();

            if(isset($dados)){
                $email = $request->email_login;
                $senha = $request->senha_login;

                $auth = Usuario::all();

                $auth->where('email', $email, 'senha', sha1($senha));

                if(isset($auth)){
                    $session_login = session('login', []);
                    array_push($session_login, $auth);
                    session(['login' => $session_login]);

                    return redirect()->route('index');
                }
                else{
                    $data = [];

                    $data['msg'] = "Email ou senha incorretos!";

                    return view('login', $data);
                }
            }
            else{
                $data = [];

                $data['msg'] = "Não deixe os campos vazios!";

                return view('login', $data);
            }
        }
        return view('login');
    }

}
