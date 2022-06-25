<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClienteService {

    public function salvarUsuario(Usuario $user, Endereco $endereco){
        try{

            // verificando se já existe esse login
            $dbUsuario = Usuario::where("login", $user->login)->first();
            if($dbUsuario){
                return ['status' => 'err', 'message' => 'Login já cadastrado no sistema'];
            }

            DB::beginTransaction(); // iniciar uma transacao
            $user->save();
            $endereco->usuario_id = $user->id;
            $endereco->save();
            DB::commit(); // confirmando a transacao

            return ['status' => 'ok', 'message' => 'Usuario cadastrado com sucesso!'];

        } catch (\Exception $e) {
            Log::error("ERRO", ['file' => 'ClienteService.salvarUsuario', 'message' => $e->getMessage()]);
            DB::rollback(); // cancelar a transacao
            return ['status' => 'err', 'message' => 'Não foi possível cadastrar o usuário'];
        }
    }
}
