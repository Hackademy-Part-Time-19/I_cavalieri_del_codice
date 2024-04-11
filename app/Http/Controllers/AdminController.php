<?php

namespace App\Http\Controllers;




use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests =User::where('is_admin' , NULL)->get();
        $revisorRequests =User::where('is_revisor' , NULL)->get();
        $writerRequests =User::where('is_writer' , NULL)->get();

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

    public function editTag(Request $request , Tag $tag){

        $request->validate([
 
        'name' => 'required|unique:tags',

    ]);

    $tag->update([

       'mame' => strtolower($request->name),

    ]);

    return redirect(route('admin.dashboard'))->with('mesage' , 'Hai correttamente aggiornato il tag');

}

public function deleteTag(Tag $tag){

    foreach($tag->articles as $article){

        $article->tags()->detach($tag);
    }

    $tag->delete();

    return redirect(route('admin.dashboard'))->with('mesage' , 'Hai correttamente eliminato il tag');

    
}

//CATEGORIE TAG//


public function editCategory(Request $request , Category $category){

    $request->validate([

    'name' => 'required|unique:categorys',

]);

$category->update([

   'mame' => strtolower($request->name),

]);

return redirect(route('admin.dashboard'))->with('mesage' , 'Hai correttamente aggiornato la categoria');

}

public function deleteCategory(Category $category){

    
    $category->delete();

    return redirect(route('admin.dashboard'))->with('mesage' , 'Hai correttamente eliminato la categoria');

    
}

public function storeCategory(Request $request){

   Category::create([

    'mame' => strtolower($request->name),

   ]);

   return redirect(route('admin.dashboard'))->with('mesage' , 'Hai correttamente inserito una nuova  categoria');


}


}