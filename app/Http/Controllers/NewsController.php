<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\NewsResource;
use App\Models\GeneralSetting;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        try {
            $news = NewsResource::collection(News::all());
            $setting = GeneralSetting::first();

            return view('backend.pages.news.index-news', compact('news', 'setting'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function indexFrontend()
    {
        try {
            $news = NewsResource::collection(News::all());
            $setting = GeneralSetting::first();

            return view('frontend.pages.news.index-news', compact('news', 'setting'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }
    public function newsDetail(string $slug)
    {
        try {
            $new = News::where('slug', $slug)->first();

            $setting = GeneralSetting::first();

            // Traer todos los registros de la tabla News excepto el que se está mostrando
            $news = News::where('id', '!=', $new->id)->get();

            return view('frontend.pages.news.new-detail', compact('new', 'setting', 'news'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function create()
    {
        try {
            $setting = GeneralSetting::first();

            return view('backend.pages.news.add-new', compact('setting'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(NewsRequest $request)
    {
        try {
            $news = $request->validated();

            $title = $request->title;
            $slug = strtolower(str_replace(' ', '-', $title));
            $news['slug'] = $slug;

            if ($image = $request->file('image')) {
                $routeSaveImage = 'assets/images/';
                $imageNews = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($routeSaveImage, $imageNews);
                $news['image'] = "$imageNews";
            }

            News::create($news);

            return to_route('news')->with('message', 'Operación realizada correctamente');
        } catch (\Exception $th) {
            throw $th;
        }
    }

    public function edit(News $new)
    {
        $setting = GeneralSetting::first();

        return view('backend.pages.news.edit-new', compact('new', 'setting'));
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

            return to_route('news')->with('message', 'Operación realizada correctamente');
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

            return to_route('news')->with('message', 'Operación realizada correctamente');
        } catch (\Exception $th) {
            throw $th;
        }
    }
}
