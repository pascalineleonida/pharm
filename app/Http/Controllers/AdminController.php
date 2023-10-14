<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitRequest;
use App\Models\Category;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function lists(){
        $posts = User::paginate(10);
        return view('admin.listClient',compact('posts'));
    }

    public function listsCategory()
    {
        $posts = Category::all();
        return view('admin.listCategory',compact('posts'));
    }

    public function listsProduit()
    {
        $posts = Produit::all();
        return view('admin.produit.listsProduit',compact('posts'));
    }

    public function add(){
        $product = new Produit();
        $catgs = Category::all();
        return view('admin.produit.add',compact('catgs','product'));
    }

    public function edit($id){
        $catgs = Category::all();
        $product = Produit::findOrFail($id);
        return view('admin.produit.add',compact('catgs','product'));
    }

    public function editProduit(ProduitRequest $request,$id,Produit $post){
        $product = Produit::findOrFail($id);
        $add = $request->validated();
        /** @var UploadedFile $image */
        $image =$request->validated('image');
        if($product->image){
            Storage::disk('public')->delete($product->image);
        }
        $add['image'] = $image->store('blog','public');
        $post->where('id',$id)->update($add);
       return redirect()->route('admin.produit');
    }

    public function storeProduit(ProduitRequest $request,Produit $add){
        $post = $request->validated();
            /** @var UploadedFile $image */
            $image = $request->validated('image');
            $post['avatar'] = $image->store('bloc', 'public');

            $add->create($post);
       return redirect()->route('admin.produit');
    }
}
