<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function toggle($artiste_id)
    {
        $user_id = auth()->id(); // ID du user connecté

        $abonnement = Abonnement::where('user_id', $user_id)
                                ->where('artiste_id', $artiste_id)
                                ->first();

        if ($abonnement) {
            $abonnement->delete();
            return response()->json(['status' => 'unsubscribed']);
        }

        Abonnement::create([
            'user_id' => $user_id,
            'artiste_id' => $artiste_id,
        ]);

        return response()->json(['status' => 'subscribed']);
    }
}
