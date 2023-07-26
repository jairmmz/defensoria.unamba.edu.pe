<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegulationRequest;
use App\Models\GeneralSetting;
use App\Models\Regulation;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RegulationController extends Controller
{
    public function index()
    {
        $regulations = Regulation::all();
        $setting = GeneralSetting::first();

        return view('backend.pages.regulations.index-regulations', compact('regulations', 'setting'));
    }

    public function indexFrontend()
    {
        $regulations = Regulation::where('is_active', '1')->get();
        $setting = GeneralSetting::first();

        return view('frontend.pages.documents.index-documents', compact('regulations', 'setting'));
    }

    public function create()
    {
        $setting = GeneralSetting::first();

        return view('backend.pages.regulations.add-regulation', compact('setting'));
    }

    public function store(RegulationRequest $request)
    {
        try {
            $regulation = $request->all();

            if ($document = $request->file('document_regulation')) {
                $routeSaveDocument = 'assets/documents/';
                $documentRegulation = $document->getClientOriginalName(); // Obtener el nombre original del documento
                $document->move($routeSaveDocument, $documentRegulation);
                $regulation['document_regulation'] = $documentRegulation;
            }

            Regulation::create($regulation);

            return redirect()->route('regulations')->with('success', 'Regulation created successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function pdfRegulation()
    {
        $regulations = Regulation::all();

        $imageUNAMBA = '/assets/images/universidad-nacional-micaela-bastidas-logo.jpg';
        $imageTH = '/assets/images/logo-th.png';

        $pdf = Pdf::loadView('backend.pages.regulations.regulations-pdf', compact('regulations', 'imageUNAMBA', 'imageTH'))->setPaper('a4', 'landscape');

        return $pdf->stream('regulations.pdf');
        // return view('backend.pages.regulations.regulations-pdf', compact('regulations', 'imageUNAMBA', 'imageTH'));
    }

    public function edit(Regulation $regulation)
    {
        $setting = GeneralSetting::first();

        return view('backend.pages.regulations.edit-regulation', compact('regulation', 'setting'));
    }

    public function update(Request $request, Regulation $regulation)
    {
        try {
            $regulationUpdate = $request->all();

            if ($document = $request->file('document_regulation')) {
                // Eliminar el documento si existe
                if ($regulation->document_regulation) {
                    $documentPath = public_path('assets/documents/' . $regulation->document_regulation);

                    if (file_exists($documentPath)) {
                        unlink($documentPath);
                    }
                }
                // Guardar el nuevo documento
                $routeSaveDocument = 'assets/documents/';
                $documentRegulation = $document->getClientOriginalName(); // Obtener el nombre original del documento
                $document->move($routeSaveDocument, $documentRegulation);
                $regulationUpdate['document_regulation'] = $documentRegulation;
            } else {
                // Mantener el documento anterior
                $regulationUpdate['document_regulation'] = $regulation->document_regulation;
            }

            $regulation->update($regulationUpdate);

            return redirect()->route('regulations')->with('success', 'Regulation updated successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy(Regulation $regulation)
    {
        try {
            if ($regulation->document_regulation) {
                $documentPath = public_path('assets/documents/' . $regulation->document_regulation);

                if (file_exists($documentPath)) {
                    unlink($documentPath);
                }
            }

            $regulation->delete();

            return redirect()->route('regulations')->with('success', 'Regulation deleted successfully');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
