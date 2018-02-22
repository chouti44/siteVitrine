<?php

namespace App\Http\Controllers;

use App\Models\EmailCustomer;
use App\Notifications\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

/**
 * @Middleware("web")
 */
class EmailCustomerController extends Controller
{
    /**
     * @Get("/index")
     */
    public function email() {
        return view('index', [
            'message' => session('message')
        ]);
    }

    /**
     * @Post("/index")
     */
    public function postEmail(Request $request) {
        $values = $request->all();

        $validator = Validator::make($values, [
            'email' => 'required',
        ]);

        if($validator->fails()) {
            return redirect()->action('EmailCustomerController@email')->with('message', 'Your email exist already ');
        }

        $mail = EmailCustomer::create([
            EmailCustomer::EMAIL => $values[EmailCustomer::EMAIL],
        ]);

        Notification::send($mail, new Welcome($mail));

        return redirect()->action('EmailCustomerController@email')->with('message', 'You are received email');
    }

    /**
     * @Get("/legalNotice")
     */
    public function legalNotice() {
        return view('legalNotice');
    }
}
