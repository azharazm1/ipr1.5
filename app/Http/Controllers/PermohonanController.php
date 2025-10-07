<?php

namespace App\Http\Controllers;

use App\Models\Daerah;
use App\Models\Permohonan;
use Illuminate\Http\Request;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permohonan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $jenis = $request->query('jenis');

        if (!$jenis || !in_array($jenis, ['INSAN', 'INTAN'])) {
            return redirect()->route('permohonan.index')
                ->with('error', 'Sila pilih jenis program yang sah.');
        }

        return view('permohonan.create', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ Step 1: Validate all inputs
        $request->validate([
            'jenis_program' => 'nullable|string|max:50',
            'pengalaman_makanan' => 'nullable|string|max:255',
            'tifoid' => 'nullable|string|in:Ya,Tidak',
            'jenis_makanan' => 'nullable|string|max:255',
            'ada_kenderaan' => 'nullable|string|in:Ya,Tidak',
            'jenis_kenderaan' => 'nullable|string|max:100',

            // Maklumat Diri
            'nama' => 'required|string|max:255',
            'no_kp' => ['required', 'regex:/^[0-9]{6}-[0-9]{2}-[0-9]{4}$/', 'unique:permohonans,no_kp'],
            'jantina' => 'required|string|in:Lelaki,Perempuan',
            'bangsa' => 'nullable|string|max:50',
            'bangsa_lain' => 'nullable|string|max:100',
            'negeri' => 'required|string|max:100',
            'daerah' => 'nullable|string|max:100',
            'poskod' => 'nullable|string|max:10',
            'alamat' => 'nullable|string|max:255',

            // Two-column phone input
            'telefon_prefix' => ['required', 'regex:/^1[0-9]{1,2}$/'],
            'telefon_main' => ['required', 'regex:/^[0-9]{6,8}$/'],

            'email' => 'required|email|max:255',
            'pendapatan' => 'nullable|numeric|min:0',
            'str' => 'nullable|string|in:Ya,Tidak',
        ]);

        // ✅ Step 2: Combine prefix + main number into full phone format
        $telefon = '+60' . $request->telefon_prefix . '-' . $request->telefon_main;

        // ✅ Step 3: Create record
        Permohonan::create([
            'jenis_program' => $request->jenis_program,
            'pengalaman_makanan' => $request->pengalaman_makanan,
            'tifoid' => $request->tifoid,
            'jenis_makanan' => $request->jenis_makanan,
            'ada_kenderaan' => $request->ada_kenderaan,
            'jenis_kenderaan' => $request->jenis_kenderaan,
            'nama' => strtoupper($request->nama),
            'no_kp' => $request->no_kp,
            'jantina' => $request->jantina,
            'bangsa' => $request->bangsa,
            'bangsa_lain' => $request->bangsa_lain,
            'negeri' => $request->negeri,
            'daerah' => $request->daerah,
            'poskod' => $request->poskod,
            'alamat' => strtoupper($request->alamat),
            'telefon' => $telefon, // combined phone
            'email' => strtolower($request->email),
            'pendapatan' => $request->pendapatan,
            'str' => $request->str,
        ]);

        // ✅ Step 4: Redirect with success message
        return redirect()
            ->route('permohonan.index')
            ->with('success', 'Terima kasih! Permohonan anda telah berjaya dihantar.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getDaerah($negeri)
    {
        $daerahList = Daerah::where('negeri', $negeri)->pluck('daerah');
        return response()->json($daerahList);
    }
}
