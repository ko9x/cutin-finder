<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request) {
        // $user = $this->getAuthenticatedUser();

        // $validator = $this->validator( $request->all() );

        // if( get_class( $validator ) == 'Illuminate\Http\JsonResponse' ){
        //     return $validator;
        // }else{
        //     $validator->validate();
        // }

        $data = $request->all();

        $item = Item::create([
            'name'       => $data['name'],
            'creator'    => $data['creator'],
        ]);

        if (!$item) {
            return response()->json(['success' => true, 'error' => 'Item not created' ]);
        } else {
            return response()->json(['success' => true, 'item' => $item ]);
        }
    }
}
