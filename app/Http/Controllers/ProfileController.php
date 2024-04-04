<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function updateProfile(Request $request)
    {
        // Validação dos dados do formulário...

        // Obtendo o usuário autenticado
        $user = auth()->user();

        // Verificando se uma nova foto foi enviada
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            
            // Definindo o nome único para a foto
            $photoName = time() . '_' . $photo->getClientOriginalName();
            
            // Movendo a foto para a pasta public/profile-img
            $photo->move(public_path('profile-img'), $photoName);
            
            // Atualizando o caminho da foto de perfil do usuário
            $user->profile_photo_path = $photoName;
            $user->save();
        }

        // Redirecionamento ou resposta de sucesso
    }
}
