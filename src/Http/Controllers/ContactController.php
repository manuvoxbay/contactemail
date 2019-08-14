<?php 

namespace Cubet\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cubet\Contact\Models\Contact;
use Mail;
class ContactController extends Controller
{

    public function index()
    {
        //return "Insdie";
        return view('contact::contact');
    }

    public function send(Request $request)
    {

        $value = config('contact.send_email_to');
        $value = config('contact.defaults.send_email_to');

        //echo "Value".$value;
        //print_r($value); die();




        $con = Contact::create($request->all());
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'note' => $request->note,
        ];
        Mail::send('contact::Emails.sample',$data,function($message)
        {
            $message->to(config($value))->subject("Test Mail");
            $message->from('manu.joseph@cubettech','Manu Joseph');
        });
        return redirect(route('load'));
    }
}
