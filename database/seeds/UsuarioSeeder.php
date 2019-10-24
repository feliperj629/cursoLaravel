<?php

use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Exemplo de criação manual
    	//$usuario = new user;
    	//$usuario-> name ='felipe';

    	$dados = [
    		'name'=>"Felipe Alves",
    		'email'=>"admin@mail.com",
    		'password'=>bcrypt("123456"),
    	];

    	if(User::where('email', '=', $dados['email'])->count())
    	{
    		$usuario = User::where('email','=', $dados['email'])->first();
    		$usuario->update($dados);

    		echo "Usuário Alterado";
    	}
    	else
    	{
    		User::create($dados);
    		echo "Usuário Criado";
    	}

    }
}
