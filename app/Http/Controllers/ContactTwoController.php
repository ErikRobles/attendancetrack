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

    public function storeContactForm2(Request $request)
    {
        if ($request->faxonly) { 
            return $this->formResponse2(); 
        } 
        

        $request->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'mensaje' => 'required',
        ]);

       

        $input = $request->all();

        
        ContactTwo::create($input);

        //  Send mail to admin
        \Mail::send('contact2Mail', array(
            'name' => $input['name'],
            'empresa' => $input['empresa'],
            'mail' => $input['mail'],
            'tel1' => $input['tel1'],
            'tel3' => $input['tel3'],
            'tel2' => $input['tel2'],
            'pais' => $input['pais'],
            'mensaje' => $input['mensaje'],
        ), function($message) use ($request){
            $message->from('info@zitalk.com');
            $message->to('erikjames69@hotmail.com', 'Admin')->subject($request->get('empresa'));
        });
        $notification = array(
            'message' => 'Mensaje Enviado Exisotamente',
            'alert-type' => 'success'
        );
        return Redirect()->route('contact_us')->with($notification);
    }

    public function ContactMessages2() {
        $contacts = ContactTwo::all();
        return view('admin.contacts', compact('contacts'));
    }

    public function deleteContactMessage2($id) {
        $contact = ContactTwo::find($id);
        $contact->delete();
        $notification = array(
            'message' => 'Message Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('frontend_two_messages_view')->with($notification);
    }
}
