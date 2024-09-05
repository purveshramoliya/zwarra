<?php

namespace App\Http\Controllers;
use App\Models\Bookings;
use App\Models\BookingsAttachment;
use Illuminate\Http\Request;

class BookingsAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bookings $bookings)
    {
        // Validate that `file` is an array of files
        $request->validate([
            'file.*' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048', // Validate each file
        ]);

        // Find the booking by ID
        // Assuming that $booking is properly injected and is already an instance of Bookings
        // If not, you might need to fetch it by ID or handle it differently

        $attachments = [];

        // Handle multiple file uploads
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $filePath = $file->store('bookingsattachment', 'public'); // Store file in 'bookingsattachment' directory
                $fileName = $file->getClientOriginalName(); // Get the original file name

                // Create the attachment record and associate it with the booking
                $attachments[] = $bookings->bookingsattachment()->create([
                    'filename' => $fileName,
                    'file_path' => $filePath,
                ]);
            }
        }

        // Return the created attachments as a JSON response
        return response()->json($attachments, 201);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function edit(Attachment $attachment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachment $attachment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachment $attachment)
    {
        //
    }
}
