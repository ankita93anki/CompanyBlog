<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;

class ContactController extends Controller
{
    public function adminContact()
    {
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }

    public function adminAddContact()
    {
        return view('admin.contact.create');
    }

    public function storeContact(Request $request)
    {
        $validatedData = $request->validate([
            'email'=> 'required',
            'phone'=> 'required',
            'address'=> 'required|min:4',

        ]);
        
         Contact::insert([
                  'email' => $request->email,
                  'phone' => $request->phone,
                  'address' => $request->address,
                  'created_at' => Carbon::now(),
         ]);
         
         $notification = array(
            'message' => 'Contact Data Saved Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('admin.contact')->with($notification);
          
    }
    public function contactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'subject'=> 'required',
            'message'=> 'required|min:4',

        ]);
        
         ContactForm::insert([
                  'name' => $request->name,
                  'email' => $request->email,
                  'subject' => $request->subject,
                  'message' => $request->message,
                  'created_at' => Carbon::now(),
         ]);
         $notification = array(
            'message' => 'Your Message Saved Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->route('contact')->with($notification);
         
    }
    
    public function editContact($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contact.edit',compact('contacts'));
    }
    public function updateContact(Request $request,$id)
    {
        $validatedData = $request->validate([
            'email'=> 'required',
            'phone' => 'required',
            'address' => 'required',
           
        ]); 
                Contact::find($id)->update([
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'address' => $request->address,
                 'created_at' => Carbon::now(),
       ]);   
         
        
       $notification = array(
            'message' => 'Contact Data Updated Successfully',
            'alert-type' => 'success'
       );
      return Redirect()->route('admin.contact')->with($notification);
    }

    public function deleteContact($id)
    {
         $contact = Contact::find($id);
         Contact::find($id)->delete();
         $notification = array(
            'message' => 'Contact Data Deleted Successfully',
            'alert-type' => 'error'
        );
        return Redirect()->route('admin.contact')->with($notification);
         
    }     

    public function contact()
    {
        $contacts = DB::table('contacts')->first();
        return view('pages.contact',compact('contacts'));
    }
    public function contactMessage()
    {
        $contacts = DB::table('contact_forms')->get();
        return view('admin.contact.createprofile',compact('contacts'));
    }
    public function deleteContactMessage($id)
    {
        $contact = ContactForm::find($id);
         ContactForm::find($id)->delete();
          $notification = array(
            'message' => 'Contact Data Deleted Successfully',
            'alert-type' => 'success'
        );
        return Redirect()->back()->with($notification);
         
    }

}
