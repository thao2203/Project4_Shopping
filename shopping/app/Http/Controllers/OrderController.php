<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Order;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Cookie;
class OrderController extends Controller
{
	private $order;
	public function __construct(Order $order)
	{
		$this->order = $order;
	}
    public function index()
    {
		$orders = DB::table('orders')
            ->orderBy('created_at', 'desc')
            ->get();
    	return view('admin.order.index', compact('orders'));	
    }


    public function getOrderList($status)
    {
      
        $datas = Category::where('parent_id', 0)->get(); 

        $orders = DB::table('orders')
            ->orderBy('created_at', 'desc')
            ->where("guild_id",Cookie::get('id'))
            ->where("status",$status)
            ->get();
        // $order_details = DB::table('order_details')
        // ->join('orders','orders.id','=','order_details.orderID')
        // ->where("guild_id",Cookie::get('id'))
        // ->where("status",$status)
        // ->orderBy('orders.created_at', 'desc')
        // ->select('order_details.*','orders.*')
        // ->get();
        return view('client.purchase', compact('orders','datas'));
    }

   
    public function getOrderDetail($id)
    {
        $datas = Category::where('parent_id', 0)->get(); 
        $detail_orders = DB::table('order_details')
        ->where('orderID',$id)
        ->get();
        return view('client.orderDetail', compact('detail_orders','datas'));
    }
    public function detail($id)
    {
        $detail_orders = DB::table('order_details')
        ->where('orderID',$id)
        ->get();
    	return view('admin.order.detail', compact('detail_orders'));	
    }

    public function updateStatus(Request $request)
    {
        DB::table("orders")->where("id",$request->id)
        ->update(["status"=>$request->status]);
        return $request;
    }
    // public function getStatus($id)
    // {
   	// 	$data = DB::table('orders')
    //        ->get();//Lấy ra tất cả các data
    // 	$recusive = new Recusive($data);
    // 	$htmlOption = $recusive->statusRecusive($id);
    // 	return $htmlOption;
    // }

    // public function create()
    // {
    // 	$htmlOption = $this->getCategory($parentId = '');
	// 	$htmlSupplier = $this->getSupplier($supplierid = '');
		
    // 	return view('admin.product.add', compact('htmlOption','htmlSupplier'));
    // }
	// public function store(Request $request)
    // {
	
	// 	if (!$request->hasFile('feature_image_path')) {
	// 		return "Mời chọn file cần upload";
	// 	}
	// 	// Nếu có thì thục hiện lưu trữ file vào public/images
	// 	$image = $request->file('feature_image_path');
	// 	$storedPath = $image->move('images', $image->getClientOriginalName());
	
    // 	$this->product->create([
    // 		'name' => $request->name,
	// 		'content'=>$request->content,
	// 		'supplier_id'=>$request->supplier_id,
	// 		'quantity'=>$request->quantity,
	// 		'feature_image_path'=>$storedPath->getFilename(),
    // 		'category_id' => $request->category_id,
	// 		'price' => $request->price,
	// 		'user_id'=> 1,
	// 		'content' => $request->content,
    // 	]);

    // 	return redirect()->route('product.index');
    // }

	
    // public function getCategory($parentId)
    // {
   	// 	$data = $this->category->all();//Lấy ra tất cả các data
    // 	$recusive = new Recusive($data);
    // 	$htmlOption = $recusive->categoryRecusiveUpdate($parentId);
    // 	return $htmlOption;
    // }

	// public function getSupplier($supplierid)
    // {
   	// 	$data = $this->supplier->all();//Lấy ra tất cả các data
		   
    // 	$recusive = new Recusive($data);
    // 	$htmlOptionSupplier = $recusive->categoryRecusiveSupplier($supplierid);
    // 	return $htmlOptionSupplier;
    // }

	public function edit($id)
    {
        $detail_orders = DB::table('order_details')
        ->where('orderID',$id)
        ->get();
    	return view('admin.order.edit',compact('detail_orders'));
    }

    // public function update($id, Request $request)
    // {
	// 	if (!$request->hasFile('feature_image_path')) {
	// 		return "Mời chọn file cần upload";
	// 	}
	// 	$image = $request->file('feature_image_path');
	// 	$storedPath = $image->move('images', $image->getClientOriginalName());
    // 	$this->product->find($id)->update([
    // 		'name' => $request->name,
    // 		'category_id' => $request->category_id,
	// 		'supplier_id'=>$request->supplier_id,
	// 		'quantity'=>$request->quantity,
    // 		'slug' => Str::slug($request->name),
	// 		'content' => $request->content,
	// 		'user_id' => 1,
	// 		'feature_image_path'=> $storedPath->getFilename(),
	// 		'price' => $request->price,
    // 	]);
    // 	return redirect()->route('product.index');
    // }

    // public function delete($id)
    // {  	
    // 	$this->product->find($id)->delete();
    // 	return redirect()->route('product.index');
    // }
}
