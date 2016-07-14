<?php

class AdminController extends BaseController {

	public function add_image_to_directory($stone_type)
	{
		$stone_image = array('image' => Input::file('stone_image'));
		$destination_path = 'images/'. $stone_type . '/';
		$extension =  Input::file('stone_image')->getClientOriginalExtension();
		$file_name = rand(11111,99999) . '.' . $extension;
		Input::file('stone_image')->move($destination_path, $file_name);
		return $destination_path . $file_name;
	}

	public function add_stone()
	{

		//check for authentication
       if(!Input::has('stone_name') || !Input::has('stone_type') ||  !Input::has('stone_description') ||  !Input::has('stone_price') ||  !Input::has('stone_quantity') || !Input::has('stone_image'))
       {
       	//do nothing for now
       }

       $stone_name = Input::get('stone_name');
       $stone_type = Input::get('stone_type');
       $stone_description = Input::get('stone_description');
       $stone_price = Input::get('stone_price');
       $stone_quantity = Input::get('stone_quantity');
       $stone_image_url = $this->add_image_to_directory($stone_type);

        DB::table('stone')->insert(
    		array(
    		'stone_name' => $stone_name, 
    		'stone_type' => $stone_type , 
    		'in_stock_quantity' => $stone_quantity ,
    		'stone_description' => $stone_description, 
    		'stone_picture_url' => $stone_image_url ,
    		'stone_price_per_square_foot' =>$stone_price 
    		)
		);
	}

}
