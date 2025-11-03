<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: VerifyEmailController.php
 * Fecha de creación: 02/11/25
 * Realizado por: Alfonso Angel García Hernández
 * Validado por: Alfonso Angel García Hernández
 */

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Date;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request, $id, $hash)
    {
        $user = User::findOrFail($id);

        // Validate email hash
        if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            abort(403, 'Invalid verification link.');
        }

        if (is_null($user->email_verified_at)) {
            $user->forceFill(['email_verified_at' => Date::now()])->save();
        }

        return redirect()->route(config('proj.route_name_prefix', 'proj') . '.auth.login')
            ->with('status', __('Correo verificado. Ya puedes iniciar sesión cuando tu cuenta sea aprobada.'));
    }
}
