<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
class FaqController extends Controller
{
   





    public function index() {
        $faqs = Faq::all(); // Recupera tutte le FAQ dal database
        return view('faq', compact('faqs')); // Passa le FAQ alla vista
    }

    public function store(Request $request) {
        $faq = new Faq;
        $faq->domanda = $request->input('domanda');
        $faq->risposta = $request->input('risposta');
        $faq->save();
        return redirect()->route('faq.index');
    }

    public function update(Request $request) {
        $faq = Faq::find($request->input('id'));
        $faq->domanda = $request->input('domanda');
        $faq->risposta = $request->input('risposta');
        $faq->save();
        return redirect()->route('faq.index');
    }

    public function destroy($id) {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('faq.index');
    }
}


