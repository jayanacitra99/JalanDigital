<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function show($slug)
    {
        // Ambil data event beserta rsvp-nya (urutkan dari yang terbaru)
        $event = Event::where('slug', $slug)->with(['rsvps' => function($query) {
            $query->latest();
        }])->firstOrFail();

        return view('invitation.index', compact('event'));
    }

    public function storeRsvp(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'kehadiran' => 'required|in:hadir,tidak_hadir',
            'pesan' => 'nullable|string',
        ]);

        // Simpan data ke database
        $rsvp = $event->rsvps()->create([
            'name' => $validated['nama'],
            'attendance' => $validated['kehadiran'],
            'message' => $validated['pesan'],
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Terima kasih atas doa restu dan konfirmasi Anda. Kehadiran Anda akan menjadi kebahagiaan tersendiri bagi kami.',
                'data' => $rsvp
            ]);
        }

        return redirect()->back()->with('success', 'Terima kasih atas doa restu dan konfirmasi Anda. Kehadiran Anda akan menjadi kebahagiaan tersendiri bagi kami.');
    }
}