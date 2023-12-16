<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Http\Requests\Admin\Product\UpdateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImages;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::with('category')->orderBy('created_at', 'DESC')->get(); /* truyền tên hàm từ bên model product */
        // dd($product);  chạy thử để xem dữ liệu có nhảy qua
        return view('admin.modules.product.index', [
            'products' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.modules.product.create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $product = new Product();

        /* hình thì phải lấy tên hình ra */
        $file = $request->image; /* đổi tên name bên file create */
        $fileName = time() . '-' . $file->getClientOriginalName();

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->content = $request->content;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $product->featured = $request->featured;
        $product->image = $fileName;
        $product->user_id = Auth::user()->id;

        $product->save();

        $file->move(public_path('uploads/'), $fileName); /* mình sẽ có cái file sử dụng hàm move vô cái uploads_path */

        if($request->images != null){
            $this->uploadImageDetail ($request->images, $product->id);
        }

        return redirect()->route('admin.product.index')->with('success', 'Create product succesfully'); /* chuyển trang */
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $categories = Category::get();

        $product = Product::with('product_images')->findOrFail($id);

        // dd ('product'); // dùng chạy thử xem đã chạy qua chưa
        
        return view('admin.modules.product.edit', [
            'id' => $id,
            'categories' => $categories,
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $product = Product::findOrFail($id);
        /* hình thì phải lấy tên hình ra */
        $file = $request->image; /* đổi tên name bên file create */

        if (!empty($file)) {
            /* Kiểm tra đó có phải là file hình hay không */
            $request->validate([
                'image' => 'required|mimes:jpg,bmp,png,jpeg',
                /* sử dụng mimes và các loại hình */
            ], [
                'image.required' => 'Please enter product image',
                'image.mimes' => 'Images must be jpg,bmp,png,jpeg'
            ]);

            $old_image_path = public_path('uploads/' . $product->image); /* Kiểm tra hình cũ có tồn tại hay không */
            if (file_exists($old_image_path)) { /* kiểm tra hình cũ có tồn tại */
                unlink($old_image_path); /* có thì sẽ xóa đi */
            }

            $fileName = time() . '-' . $file->getClientOriginalName();
            /* nếu có hình cũ thì sẽ thực hiện các bước trên khi người ta nhập file */
            $product->image = $fileName;
            $file->move(public_path('uploads/'), $fileName); /* mình sẽ có cái file sử dụng hàm move vô cái uploads_path */
        }
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->content = $request->content;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $product->featured = $request->featured;
        $product->user_id = Auth::user()->id;

        $product->save();

        if($request->images != null){
            $this->uploadImageDetail ($request->images, $product->id);
        }

        return redirect()->route('admin.product.index')->with('success', 'Create product succesfully'); /* chuyển trang */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);
        
        $old_image_path = public_path('uploads/' . $product->image); /* Kiểm tra hình cũ có tồn tại hay không */
        if (file_exists($old_image_path)) { /* kiểm tra hình cũ có tồn tại */
            unlink($old_image_path); /* có thì sẽ xóa đi */
        }
        $product->delete();
        return redirect()->route('admin.product.index')->with('success', 'Delete product succesfully');
    }

    public function uploadFile (Request $request, $id)
    {
        //Bước đầu tiên là upload hình lên
        $file = $request->image; 
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move(public_path('uploads/'), $fileName); /* mình sẽ có cái file sử dụng hàm move vô cái uploads_path */
        //khi move file xong phải nhớ cập nhật lên database
        $product_image = ProductImages::find($id);
        
        //Bước 2 Xóa hình cũ đi để up hình mới lên
        $file_old_url = public_path('uploads/'. $product_image->images);
        if (file_exists($file_old_url)){
            unlink($file_old_url);
        }

        //Bước cuối save lại
        $product_image->images = $fileName;
        $product_image->save();
        
        return response()->json([
            'message' => 'Image upload successfully'
        ],200);
    }
    public function deleteFile ($id)
    {   
        // Lấy tấm hình đó ra 
        $product_image = ProductImages::find($id);
        
        // Xóa tấm hình đó đi
        $file_old_url = public_path('uploads/'. $product_image->images);
        if (file_exists($file_old_url)){
            unlink($file_old_url);
        }
        
        //Delete
        $product_image->delete();

        //Chuyển lại trang của mình
        return redirect()->back();
    }

    //Chúng ta thường xuyên sử dụng dòng code này, nên sẽ tạo ra một hàm public function để dùng chung
    public function uploadImageDetail ($images, $id){
          /* uploads hình */
          if(count($images) > 0){
            $count = 0;
            $data_images = [];
            foreach ($images as $img_detail){
                $count++;
                $fileNameDetail = $count . '-' .time() . '-' . $img_detail->getClientOriginalName();
                $img_detail->move(public_path('uploads/'), $fileNameDetail); /* mình sẽ có cái file sử dụng hàm move vô cái uploads_path */
                
                $data_images[] = [
                    'images' => $fileNameDetail,
                    'product_id' => $id,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ];
            }
            ProductImages::insert($data_images);
        }
    }
}