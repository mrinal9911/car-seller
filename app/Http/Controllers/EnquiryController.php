<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    // Show list of enquiries
    public function listEnquiry()
    {
        return $enquiries = Enquiry::latest()->get();
        return view('enquiries.index', compact('enquiries'));
    }

    // Show create form
    public function createEnquiry()
    {
        return view('enquiries.create');
    }

    // Store enquiry
    public function storeEnquiry(Request $request)
    {
        return "lorem";
        $validated = $request->validate([
            'car_id'   => 'nullable|integer',
            'name'     => 'required|string|max:100',
            'phone'    => 'required|string|max:20',
            'email'    => 'nullable|email|max:100',
            'message'  => 'required|string|max:500',
        ]);

        Enquiry::create($validated);

        return redirect()->route('enquiry.index')->with('success', 'Enquiry submitted successfully.');
    }
}
