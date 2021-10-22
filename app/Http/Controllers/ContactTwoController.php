<?php

namespace App\Http\Controllers;

use App\Models\ContactTwo;
use Illuminate\Http\Request;

class ContactTwoController extends Controller
{
    public function frontendTwoContactMessagesView() {
        $frontendTwoMessages = ContactTwo::all();
        return view('admin.contact_messages.frontend_two_messages_view', compact('frontendTwoMessages'));
    }
}
