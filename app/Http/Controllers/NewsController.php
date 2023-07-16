<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        try {
            $news = News::all();

            return view('backend.pages.news.index-news', compact('news'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
    }

    public function store(NewsRequest $request)
    {
        try {
            $news = $request->all();

            if ($image = $request->file('image')) {
                $routeSaveImage = 'assets/images/';
                $imageNews = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageNews);
                $news['image'] = "$imageNews";
            }

            News::create($news);

            return to_route('news')->with(['status' => 'success', 'message' => 'Noticia registrada correctamente.']);
        } catch (\Exception $th) {
            throw $th;
        }
    }

    public function show(News $new)
    {
        //
    }

    public function edit(News $new)
    {
        return view('backend.pages.news.edit-new', compact('new'));
    }

    public function update(Request $request, News $new)
    {
        try {
            $newUpdate = $request->all();

            if ($image = $request->file('image')) {
                // Eliminar la imagen de perfil anterior si existe
                if ($new->image) {
                    $imagePath = public_path('assets/images/') . $new->image;

                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }

                // Guardar la nueva imagen
                $routeSaveImage = 'assets/images/';
                $imageNew = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageNew);
                $newUpdate['image'] = $imageNew;
            } else {
                // Mantener la imagen de perfil anterior si no se seleccionó una nueva imagen
                unset($newUpdate['image']);
            }

            $new->update($newUpdate);

            return to_route('news')->with(['status' => 'success', 'message' => 'Noticia actualizada correctamente.']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(News $new)
    {
        try {
            if ($new->image) {
                $imagePath = public_path('assets/images/') . $new->image;

                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $new->delete();

            return to_route('news')->with(['status' => 'success', 'message' => 'Noticia eliminada correctamente.']);
        } catch (\Exception $th) {
            throw $th;
        }
    }
}
