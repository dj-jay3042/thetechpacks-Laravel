<?php

namespace App\Http\Controllers\ContactControllers;

use App\Models\Contact;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ContactController extends BaseController
{
    public function handleContact(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Create a new instance of the Contact model
        $contact = new Contact;

        // Assign values from the request to the model instance
        $contact->cntName = $name;
        $contact->cntEmail = $email;
        $contact->cntMessage = $message;

        // Optionally, you can set the cntDate value to the current date and time
        $contact->cntDate = now();

        // Save the model instance to the database
        $contact->save();

        // Optionally, you can return a response indicating success or redirect to a different page
        return response()->json("Success", 200);
    }
}
