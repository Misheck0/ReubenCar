<?php

namespace App\Http\Controllers;

use App\Models\carPart;
use Illuminate\Http\Request;

class CarPartController extends Controller
{
    //
    public function index(){
        //$data = carPart::all();
        $data = carPart::paginate(4);
        //compact("data")
        return view("home",compact('data'));
    }

public function cars(){
  $data = carPart::paginate(3);
  return view("homepage.product",compact("data"));
}
    public function CarDetails($id) {
      $getData = carPart::find($id);
      return view("homepage.Details",compact('getData'));
    }
    public function add(Request $request) {
     $request->validate(
      [  
        'make'=>'required',
         'car_name'=>'max:255',
         'Entype'=>'max:255',
         'price'=>'max:255',
         'img1'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'img2'=>'image|mimes:jpeg,png,jpg,gif|max:2048'
      ]);

      
        $img1 = $request->file('img1');
      //  $img2 = $request->file('img2');
        $imageName = time() . '.' . $img1->extension();
       // carPart::create([$validInput,'img1'=>$imageName]);
        // Move the image to the public/images folder
        $img1->move(public_path('Images'), $imageName);
        carPart::create([
          'make'=> $request->input('make'),
          'car_name'=> $request->input('car_name'),
          'engineType'=> $request->input('Entype'),
          'price'=> $request->input('price'),
          'context'=> $request->input('context'),
          'img1'=>$imageName,
      ]);

        return redirect('/add-item')->with('success', 'Post created successfully.');
        
      
      
        
        
        
           
    }
/*
    public function edit($id) {
     $data = carPart::find($id);
     // echo $id;
      return view("Dashboard.edit",compact('$id'));
    }
}
*/
public function edit($id)
{
    // Fetch the car part data by ID
    $data = carPart::find($id);

    // Return the view located in 'resources/views/Dashboard/edit.blade.php'
    return view('Dashboard.edit', ['id' => $id, 'data' => $data]);
}
}