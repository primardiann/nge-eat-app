<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class ItemTerjualController extends Controller
{
    public function gofood(Request $request)
    {
        return $this->getDataByPlatform(1, 'items-terjual.gofood', $request);
    }

    public function grabfood(Request $request)
    {
        return $this->getDataByPlatform(2, 'items-terjual.grabfood', $request);
    }

    public function shopeefood(Request $request)
    {
        return $this->getDataByPlatform(3, 'items-terjual.shopeefood', $request);
    }

    private function getDataByPlatform($platformId, $view, Request $request)
    {
        $tanggalAwal  = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        $transaksiTable = match ($platformId) {
            1 => 'transaksi_go_food',
            2 => 'transaksi_grab_food',
            3 => 'transaksi_shopee_food',
            default => throw new \Exception("Platform tidak dikenali"),
        };

        $transaksiItemTable = $transaksiTable . '_items';

        $query = DB::table($transaksiItemTable . ' as t')
            ->join('menus as m', 't.menu_id', '=', 'm.id')
            ->join('categories as c', 'm.category_id', '=', 'c.id')
            ->join($transaksiTable . ' as tf', 't.transaksi_id', '=', 'tf.id')
            ->select(
                'm.name as nama_menu',
                'c.name as kategori',
                DB::raw('MAX(t.harga) as harga'),
                DB::raw('SUM(t.jumlah) as item_terjual'),
                DB::raw('DATE(tf.tanggal) as tanggal')
            );

        // Optional: kalau memang platform_id itu gak ada di tabel, hapus ini
        if (Schema::hasColumn($transaksiItemTable, 'platform_id')) {
            $query->where('t.platform_id', $platformId);
        }

        if ($tanggalAwal && $tanggalAkhir) {
            $query->whereBetween('tf.tanggal', [$tanggalAwal, $tanggalAkhir]);
        }

        $items = $query
            ->groupBy('m.id', 'm.name', 'c.name', 'tf.tanggal')
            ->orderByDesc('tf.tanggal') // aman dan natural urutannya
            ->orderByDesc('item_terjual')
            ->paginate(10)
            ->appends($request->except('page'));

        return view($view, [
            'items' => $items,
            'tanggalAwal' => $tanggalAwal,
            'tanggalAkhir' => $tanggalAkhir,
        ]);
    }
}
