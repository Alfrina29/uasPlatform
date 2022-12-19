<?php

namespace App\Models;


class film 
{
    Private static $daftar_film = [
        [
            "tittle" => "Avangers",
            "tahun" => "2017"
        ],
        [
            "tittle" => "KKN Desa Penari",
            "tahun" => "2022"
        ]
    ];

    public static function all(){
        return collect(self::$daftar_film);
    }
}
