<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function create(Request $request)
    {
        // validatation 
        $request->validate([
            'front_img' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'back_img' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'song_name' => 'required',
            'name' => 'required',
            'user_date' => 'required',
            'address' => 'required',
            'font_style' => 'required',
            'color' => 'required',
            'payment_status' => 'required',
        ]);

        //upload image
        $front_imgName = time() . '.' . $request->front_img->extension();
        $request->front_img->move(public_path('assets/upload-img'), $front_imgName);

        $back_imgName = time() . '.' . $request->back_img->extension();
        $request->back_img->move(public_path('assets/upload-img'), $back_imgName);

        //upload data
        $form = new Form;
        $form->card_type = $request->card_type;
        $form->front_img = $front_imgName;
        $form->back_img = $back_imgName;
        $form->massage = $request->massage;
        $form->song_name = $request->song_name;
        $form->name = $request->name;
        $form->user_date = $request->user_date;
        $form->address = $request->address;
        $form->font_style = $request->font_style;
        $form->color = $request->color;
        $form->payment_status = $request->payment_status;
        $form->save(); 
        return back()->withSuccess('Add Successfully !!!');
    }
}