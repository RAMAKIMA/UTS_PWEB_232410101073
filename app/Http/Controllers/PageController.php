<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username', 'Investor');

        // Ringkasan dummy
        $totalInvestasi = 10000000;
        $return = 12.4;

        $komposisi = [
            'Saham' => 30,
            'Reksa Dana Pasar Uang' => 50,
            'Obligasi' => 20,
        ];

        return view('dashboard', compact('username', 'totalInvestasi', 'return', 'komposisi'));
    }

    public function pengelolaan()
    {
        $portofolio = [
            [
                'nama' => 'BRI Seruni Pasar Uang III',
                'tipe' => 'Pasar Uang',
                'investasi_awal' => 100000,
                'return' => 5.62,
                'nilai_sekarang' => 105620
            ],
            [
                'nama' => 'Bahana Likuid Plus',
                'tipe' => 'Saham',
                'investasi_awal' => 200000,
                'return' => -1.66,
                'nilai_sekarang' => 196680
            ],
            [
                'nama' => 'Manulife Obligasi Unggulan Kelas A',
                'tipe' => 'Obligasi',
                'investasi_awal' => 500000,
                'return' => 6.24,
                'nilai_sekarang' => 531200
            ],
            [
                'nama' => 'BNI-AM Indeks IDX30',
                'tipe' => 'Saham',
                'investasi_awal' => 1000000,
                'return' => -8.00,
                'nilai_sekarang' => 920000
            ],
            [
                'nama' => 'TRIM Kas 2 Kelas A',
                'tipe' => 'Pasar Uang',
                'investasi_awal' => 1000000,
                'return' => 5.47,
                'nilai_sekarang' => 1054700
            ],
            [
                'nama' => 'ABF Indonesia Bond Index Fund',
                'tipe' => 'Obligasi',
                'investasi_awal' => 700000,
                'return' => 7.27,
                'nilai_sekarang' => 750890
            ],
        ];

        return view('pengelolaan', compact('portofolio'));
    }

    public function profile(Request $request)
    {
        $username = session('username', 'RAMAKIMA');

        $profil = [
            'nama_lengkap' => 'MUHAMMAD ILYASIN RAMADHAN',
            'email' => 'ramakima611@gmail.com',
            'profil_risiko' => 'Moderate',
            'tujuan_investasi' => 'Tabungan Jangka Panjang'
        ];

        return view('profile', compact('username', 'profil'));
    }
}
