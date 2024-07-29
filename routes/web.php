<?php   

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HolaController;
use App\Models\Post;



Route::get('/', HomeController::class); //return view('welcome');
Route::get('/hola', [HolaController::class, 'index']);
// siemre es importante el definir el orden de las rutas 
route::get('/hola/create', [HolaController::class, 'create']);
route::get('/hola/{id}', [HolaController::class, 'show']);


/*route::get('/hola/{valor}/{id?}', function ($valor,$id = null) { // aqui creamos una ruta que recoja el id y en la function lo recibe.
    
    if($id){
        return "Holaaaa {$valor} de la categoria {$id} ";
    }
        return "Holaaaa {$valor} ";
}); */

route::get('prueba', function(){
     //ESTO ES COMO LINQ

         // qui sera para  hacer una busqueda por id
    $post = Post::find(1);
    return $post; 
    /*
     // creamos una un objeto tipo Post,
    $post = new Post;  // este tipo Post es un Modelo que utiliza Eloquent para Interactuar con la Base de datos. 
    //Aqui le tenemos que mandar todas sus propiedades al objeto.
    $post->title = 'Titulo de Crueba 4';
    $post->content = 'Contenido de Prueba 4';
    $post-> categoria = 'Categoria de Prueba 4';
    $post->save();
    return $post; 
    
    //con este metodo buscamos como un like
    $post = Post::where('title', 'Titulo de Crueba')
                    ->first();
    $post-> categoria = 'Desarrollo web'; //aqui modificamos
    $post->save();
    return $post; 
    
    //Traer varios registros

    $post = Post::where('id','>=','2')
                    ->get();

    $post = Post::orderBy('id','desc')
                    ->select('id','title','categoria')
                    ->take(2)
                    ->get();
    return $post;
        

    //ELIMINAR UN REGISTRO.
    $post = Post::find(1);

    $post->delete();
    return "Eliminado Correctamente";
    */
});

route::get('prueba1', function(){
    $post = Post::find(1);
    //return $post->published_at->format('d-m-Y'); 
    dd($post->is_active);
});