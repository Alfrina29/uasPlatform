<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use DB;

class FilmController extends Controller
{
    public function index(Request $request) //buat nampilin film pada view daftar film
    {
        // $tittle = "Daftar Film";
        // $lists = DB::select("SELECT f.*, g.* FROM films as f JOIN genres as g ON f.genre_id = g.id");

        // return view('film', compact('lists', 'tittle'));
        // return view('film', [
        //     "tittle" => "Daftar Film",
        //     "lists" =>  DB::table('films')->join('genres','films.genre_id','=','genres.id')->where('genres.genre','like','%'.$request->search.'%')->orWhere('films.tittle','like','%'.$request->search.'%')->get()
        // ]);

        $tittle = "Daftar Film"; //nama halaman
        $lists = DB::select("SELECT f.*, g.genre FROM films as f JOIN genres as g ON f.genre_id = g.id"); 

        // dd($lists);

        return view('film', compact('lists', 'tittle'));
    }

    public function tambahFilm(Request $request) {

        // dd($request);
        // return $request->file('gambar')->store('gambar-film');

        if($request->file('gambar')){ //tombol upload choose file pada saat upload gambar
            Film::create(
                [
                    'genre_id' => $request->genre_id,
                    'tittle'=> $request->tittle,
                    'tahun' => $request->tahun,
                    'gambar' => $request->file('gambar')->store('gambar-film')
                ]
            );
        } else { //tanpa gambar
            Film::create(
                [
                    'genre_id' => $request->genre_id,
                    'tittle'=> $request->tittle,
                    'tahun' => $request->tahun,
                ]
            );
        }

        return redirect('/film');
    }

    public function tambahPage() { //nampilin halaman tambah
        $genres = DB::select("SELECT * FROM genres");

        $tittle = "Tambah";

        return view('tambah', compact('genres', 'tittle') ); //memasukan variable genre pada dropdown
    }

    public function edit($id) {
        $film = DB::select("SELECT f.*, g.genre FROM films as f JOIN genres as g ON f.genre_id = g.id WHERE f.id = $id")[0];
        $genres = DB::select("SELECT * FROM genres");

        $tittle = "Tambah";
        return view('edit', compact('film', 'genres', 'tittle'));
    } // nampilin halaman edit

    public function update(Request $request, $id) {
        // dd($id);
        if($request->file('gambar')) {
            DB::table('films')->where('id', $id)->update(
                [
                    'tittle' => $request->tittle,
                    'tahun' => $request->tahun,
                    'genre_id' => $request->genre_id,
                    'gambar' => $request->file('gambar')->store('gambar-film')
                ]
            );
        } else {
            DB::table('films')->where('id', $id)->update(
                [
                    'tittle' => $request->tittle,
                    'tahun' => $request->tahun,
                    'genre_id' => $request->genre_id,
                ]
            );
        }

        return redirect('/film');
    } //submit tombol update

    public function destroy($id){
        // Film::destroy($film->delete()->id);

        DB::table('films')->where('id', $id)->delete();
        return redirect('/film')->with('success', 'Post has been deleted!');
    }// id film

    public function cari(Request $request) {
        $tittle = "Daftar Film";
        $tahun = "Daftar Film";
        $lists = DB::select("SELECT f.*, g.genre FROM films as f JOIN genres as g ON f.genre_id = g.id WHERE f.tittle LIKE '%$request->search%' OR g.genre LIKE '%$request->search%' OR f.tahun LIKE '%$request->search%'");

        return view('film', compact('lists', 'tittle'));
    }
}
