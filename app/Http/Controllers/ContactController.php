<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    protected function formResponse() {
        $notification = array(
            'message' => 'Mensaje Enviado Exisotamente',
            'alert-type' => 'success'
        );
        return redirect()->route('contacto')->with($notification);
    }

    public function storeContactForm(Request $request)
    {
        if ($request->faxonly) { 
            return $this->formResponse(); 
        } 
        

        $request->validate([
            'name' => 'required',
            'mail' => 'required|email',
            'mensaje' => 'required',
        ]);

       

        $input = $request->all();

        
        Contact::create($input);

        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'empresa' => $input['empresa'],
            'mail' => $input['mail'],
            'tel1' => $input['tel1'],
            'tel3' => $input['tel3'],
            'tel2' => $input['tel2'],
            'mensaje' => $input['mensaje'],
        ), function($message) use ($request){
            $message->from('info@zitalk.com');
            $message->to('erikjames69@hotmail.com', 'Admin')->subject($request->get('empresa'));
        });
        $notification = array(
            'message' => 'Mensaje Enviado Exisotamente',
            'alert-type' => 'success'
        );
        return Redirect()->route('contacto')->with($notification);
    }

    public function ContactMessages() {
        $contacts = Contact::all();
        return view('admin.contacts', compact('contacts'));
    }

    public function FrontendContactMessagesView() {
        $frontmessages = Contact::all();
        return view('admin.contact_messages.frontend_messages', compact('frontmessages'));
    }

    public function deleteContactMessage($id) {
        $contact = Contact::find($id);
        $contact->delete();
        $notification = array(
            'message' => 'Message Successfully Deleted',
            'alert-type' => 'success'
        );
        return Redirect()->route('front_end_messages')->with($notification);
    } 
}

