<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;

use App\Models\Category; //INSERITA PER RISOLVERE IL PROBLEMA CLASSE NON TROVATA 

use Illuminate\Http\Request;



class AdminController extends Controller

//APPROVARE LE VARIE FUNZIONI LAVORA CON NOI //
{
    public function dashboard(){
        $adminRequest =User::where('is_admin' , NULL)->get();
        $revisorRequest =User::where('is_revisor' , NULL)->get();
        $writerRequest =User::where('is_writer' , NULL)->get();

        return view('admin.dashboard'  ,  compact('adminRequest'  ,  'revisorRequest'  ,  'writerRequest'));
    }

    public function setAdmin(User $user){
        $user->is_admin = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'HAI CORRETTAMENTE RESO AMMINISTRATORE L\'UTENTE SCELTO');
    }

    public function setRevisor(User $user){
        $user->is_revisor = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'HAI CORRETTAMENTE RESO REVISORE L\'UTENTE SCELTO');
    }

    public function setWriter(User $user){
        $user->is_writer = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message' , 'HAI CORRETTAMENTE RESO REDATTORE L\'UTENTE SCELTO');
    }

    //MODIFICA TAG //

    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name' => 'required|unique:tags',
        ]);
    
        $tag->update([
            'name' => strtolower($request->name),
        ]);
    
        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente aggiornato il tag');
    }
    
    public function deleteTag(Tag $tag){
        foreach($tag->articles as $article){
            $article->tags()->detach($tag);
        }
    
        $tag->delete();
    
        return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente eliminato il tag');
    }

//CATEGORIE AGGIUNGI CATEGORIE//


public function editCategory(Request $request, Category $category){
    $request->validate([
        'name' => 'required|unique:categories',
    ]);

    $category->update([
        'name' => strtolower($request->name),
    ]);

    return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente aggiornato la categoria');
}

public function storeCategory(Request $request){
    Category::create([
        'name' => strtolower($request->name),
    ]);

    return redirect(route('admin.dashboard'))->with('message', 'Hai correttamente inserito una nuova categoria');
}

}