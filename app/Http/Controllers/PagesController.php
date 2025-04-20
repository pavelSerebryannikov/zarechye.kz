<?php

namespace App\Http\Controllers;


use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Page;
use App\Photo;
use App\Benefit;
use App\Promotion;
use App\Appartament;
use App\Publication;

class PagesController extends Controller
{
    public function setLocale($locale)
    {

        if (in_array($locale, config()->get('app.locales'))) {
            session()->put('locale', $locale);
        }
        return back();
    }

    public function home(Request $request)
    {
        $photos = Photo::where('status' , 1)->orderBy('order' , 'ASC')->get();
        $benefits = Benefit::where('status' , 1 , 'translations')->orderBy('order' , 'ASC')->get();
        $benefits = $benefits->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        $publications = Publication::where('status' , 1 , 'translations')->orderBy('order' , 'ASC')->get();
        $benefits = $benefits->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        return view('home' , compact('photos' , 'benefits' , 'publications'));
    }

    public function page($slug)
    {
        $page = Page::where('slug' , $slug , 'translations')->firstOrFail();
        $page = $page->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        $photos = Photo::where('status' , 1)->orderBy('order' , 'ASC')->get();
        $benefits = Benefit::where('status' , 1 , 'translations')->orderBy('order' , 'ASC')->get();
        $benefits = $benefits->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        $promotions = Promotion::where('status' , 1 , 'translations')->orderBy('order' , 'ASC')->get();
        $promotions = $promotions->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        $appartaments = Appartament::where('status' , 1 , 'translations')->orderBy('order' , 'ASC')->get();
        $appartaments = $appartaments->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        $publications = Publication::where('status' , 1 , 'translations')->orderBy('order' , 'ASC')->get();
        $publications = $publications->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        return view($page->type , compact('page' , 'photos' , 'benefits' , 'promotions' , 'appartaments' , 'publications'));
    }

    public function promotion($slug)
    {
        $promotion = Promotion::where('slug' , $slug , 'translations')->firstOrFail();
        $promotion = $promotion->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        return view('promotion' , compact('promotion'));
    }

    public function appartament($slug)
    {
        $appartament = Appartament::where('slug' , $slug , 'translations')->firstOrFail();
        $appartament = $appartament->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        return view('appartament' , compact('appartament'));
    }

    public function publication($slug)
    {
        $publication = Publication::where('slug' , $slug , 'translations')->firstOrFail();
        $publication = $publication->translate(session()->get('locale'),config()->get('app.fallback_locale'));
        return view('publication' , compact('publication'));
    }
}