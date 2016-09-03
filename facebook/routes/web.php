<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('thongtin','HomeController@info');

Route::get('khoa-hoc',function()
{
	return "Lập trình laravel 5";
});

Route::get('khoa-hoc/{ten}/{gio?}',function($ten,$gi=12)
{
	return "Lập trình căn bản: {$ten} {$gi}";
})->where(['ten'=>'[0-9]{2,9}','gio'=>'[A-Za-z]{1,10}']);

Route::get('view',function(){
    $ten="3434";
    return View('view',compact('ten'));
});

Route::get('callview','HomeController@display');

Route::get('ho-chi-minh',['as'=>'hcm',function()
{
    return View('view');
}]);


Route::group(['middleware'=>'thuc-don'],function()
{
    Route::get('bun-bo',function()
    {
          return "bun bo";
    });

    Route::get('bun-rieu',function()
    {
    	return "bun rieu";
    });

});

Route::get('goi-view',function()
{
	return View('layout/sub/view');
});

View::share('title','Lap trinh Laravel 5');

View::composer(['layout.sub.view'],function($view)
{
	return $view->with('thongtin','Xin chao cac ban');
});

Route::get('check-view',function()
{
	if(view()->exists('layout.sub.views'))
	{
		return View('layout/sub/view');
	}
	else
	{
		return "View khong ton tai";
	}
});

Route::get('call-blade',function()
{
	return view('view/sub');
});


Route::get('url/full',function()
{
	return URL::full();
});


Route::get('url/asset',function()
{
	return URL::asset('css/style.css',true);
});


Route::get('url/to',function()
{
	return URL::to('khoa-hoc',['quangkhai','12'],true);
});


Route::get('url/secure',function()
{
	return secure_url('khoa-hoc',['dinhkhiem','12']);
});


Route::get('schema',function()
{
	Schema::create('abc',function($table)
	{
		$table->increments('id');
		$table->string('tenmonhoc')->unique();
		$table->text('mamon');
		$table->timestamps();
	});	
});


Route::get('schema/dropIfExit',function()
{
	Schema::dropIfExists('abc');
});

Route::get('schema/change',function()
{
	Schema::table('abc',function($table)
	{
		$table->string('tenmonhoc',50)->nullable()->change();
		$table->renameColumn('mamon','hocsinh');

	});
});


Route::get('schema/category',function()
{
	Schema::create('category',function($table)
	{
		$table->increments('id');
		$table->string('categoryname');
		$table->timestamps();	
	});
});

Route::get('schema/product',function()
{
	Schema::create('product',function($table)
	{
		$table->increments('id');
		$table->string('productName');
		$table->integer('price');
		$table->integer('cate_id')->unsigned();
		$table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
		$table->timestamps();
	});
});

Route::get('query/table',function()
{
	$table = DB::table('product')->where('id','5')->get();
	echo "<pre>";
	print_r($table);
	echo "</pre>";	
});


