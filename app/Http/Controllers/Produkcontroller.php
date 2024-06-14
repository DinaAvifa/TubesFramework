<?php

namespace App\Http\Controllers;


use PDF;
use Validator;
use Illuminate\Support\Str;
use App\Models\Produk;
use App\Models\Jenis;
use App\Exports\ProdukExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class Produkcontroller extends Controller
{
    /**
     * Display a jenising of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pageTitle = 'Daftar Produk';
        confirmDelete();
        return view('produk.index', compact('pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Input Data Produk';
        $jenis = Jenis::all();
        return view('produk.create', compact('pageTitle', 'jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :Attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];

        $validator = Validator::make($request->all(), [
            'kodeProduk' => 'required|unique:produk,kode_produk',
            'namaProduk' => 'required',
            'harga' => 'required|numeric',
            'deskripsiProduk' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //Get files
        $file = $request->file('gambar');

        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            //Store File
            $file->store('public/files');
        }

        // ELOQUENT
        $produk = new Produk;
        $produk->kode_produk = $request->kodeProduk;
        $produk->nama_produk = $request->namaProduk;
        $produk->price = $request->harga;
        $produk->description = $request->deskripsiProduk;
        $produk->jenis_id = $request->jenis;
        if ($file != null) {
            $produk->original_filename = $originalFilename;
            $produk->encrypted_filename = $encryptedFilename;
        }

        // Menampilkan isi request untuk debugging
        dd($produk);
        $produk->save();

        Alert::success('Berhasil ditambahkan', 'Data Produk berhasil ditambahkan.');
        return redirect()->route('produk.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = ' Detail Produk';
        // ELOQUENT
        $produk = Produk::find($id);
        return view('produk.show', compact('pageTitle', 'produk', ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Produk';
        // ELOQUENT
        $jenis = Jenis::all();
        $produk = Produk::find($id);
        return view(
            'produk.edit',
            compact(
                'pageTitle',
                'jenis',
                'produk'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Custom validation messages
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'unique' => ':Attribute sudah ada'
        ];

        // Validator
        $validator = Validator::make($request->all(), [
            'kodeProduk' => 'required|unique:produk,kode_produk,' . $id,
            'namaProduk' => 'required',
            'harga' => 'required|numeric',
            'deskripsiProduk' => 'required',
        ], $messages);

        // If validation fails, redirect back with errors and input
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the product by ID
        $produk = Produk::find($id);
        if (!$produk) {
            // If product not found, redirect back with error
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }

        // Handle file upload
        $file = $request->file('gambar');
        if ($file != null) {
            $originalFilename = $file->getClientOriginalName();
            $encryptedFilename = $file->hashName();

            // Delete the old file if it exists
            if ($produk->encrypted_filename) {
                Storage::disk('public')->delete('files/' . $produk->encrypted_filename);
            }

            // Store the new file
            $file->store('public/files');
        }

        // Update product attributes
        $produk->kode_produk = $request->kodeProduk;
        $produk->nama_produk = $request->namaProduk;
        $produk->price = $request->harga;
        $produk->description = $request->deskripsiProduk;
        $produk->jenis_id = $request->jenis;

        if ($file != null) {
            $produk->original_filename = $originalFilename;
            $produk->encrypted_filename = $encryptedFilename;
        }
        
        // Save the product
        
        $produk->save();

        // Success message
        Alert::success('Berhasil diedit', 'Data Produk berhasil diedit.');

        // Redirect to the product index page
        return redirect()->route('produk.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::find($id);
        $deletionpath = 'public/files/' . $produk->encrypted_filename;
        Storage::delete($deletionpath);
        $produk->delete();
        Alert::success('Berhasil dihapus', 'Data Produk berhasil dihapus.');
        return redirect()->route('produk.index');
    }

    public function getData(Request $request)
    {
        $produks = Produk::with('jenis');
        if ($request->ajax()) {
            return datatables()->of($produks)
                ->addIndexColumn()
                ->addColumn('action', function ($produk) {
                    return view('produk.action', compact('produk'));
                })
                ->toJson();
        }
    }

    public function exportExcel()
    {
        return Excel::download(new ProdukExport, 'produk.xlsx');
    }

    public function exportPdf()
    {
        $produk = Produk::all();

        $pdf = PDF::loadView('produk.export_pdf', compact('produk'));

        return $pdf->download('produk.pdf');
    }

    public function downloadFile($produkId)
    {
        $produk = Produk::find($produkId);
        $encryptedFilename = 'public/files/' . $produk->encrypted_filename;
        $downloadFilename = Str::lower($produk->kode_produk . '_' . $produk->nama_produk . '.jpg');

        if (Storage::exists($encryptedFilename)) {
            return Storage::download($encryptedFilename, $downloadFilename);
        }
    }
}