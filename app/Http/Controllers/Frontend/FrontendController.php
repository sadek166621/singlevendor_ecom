<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Banner;
use App\Models\Slider;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\MultiImg;
use App\Models\Page;
use App\Models\OrderDetail;
use App\Models\Vendor;
use App\Models\Coupon;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Utility\CategoryUtility;

class FrontendController extends Controller
{
    /*=================== Start Index Methoed ===================*/
    public function index(Request $request)
    {



        //Product All Status Active
        // $products = Product::where('status',1)->orderBy('id','DESC')->get();

        $products = Product::where('status',1)->where('is_featured',1)->orderBy('id','DESC')->get();

        // Search Start
        $sort_search =null;
        if ($request->has('search')){
            $sort_search = $request->search;
            $products = $products->where('name_en', 'like', '%'.$sort_search.'%');
            // dd($products);
        }else{
            $products = Product::where('status',1)->where('is_featured',1)->orderBy('id','DESC')->get();
        }
        // $products = $products->paginate(15);
        // Search Start

        // Header Category Start
        $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->limit(11)->get();
        // Header Category End

        // Category Featured all
        $featured_category = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->limit(15)->get();

        //Slider
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(10)->get();
        // Product Top Selling
        $product_top_sellings = Product::where('status',1)->orderBy('id','ASC')->limit(9)->get();
        //Product Trending
        $product_trendings = Product::where('status',1)->orderBy('id','DESC')->limit(12)->get();
        //Product Recently Added
        $product_recently_adds = Product::where('status',1)->latest()->skip(2)->limit(9)->get();

        $product_top_rates = Product::where('status',1)->orderBy('regular_price')->limit(9)->get();
        // Home Banner
        $home_banners = Banner::where('status',1)->where('position',1)->orderBy('id','DESC')->limit(1)->get();

        // Daily Best Sells
        //dd(date('Y-m-d'));
        $todays_sale  = OrderDetail::where('created_at', 'like', '%'.date('Y-m-d').'%')->get();
        //$todays_sale  = DB::table('order_details')->select('*')->where('created_at', 'like', '%'.date('Y-m-d').'%')->get();
        $todays_sale = $todays_sale->unique('product_id');
        //dd($todays_sale);

        // today_best_sales
        // $today_best_sales  = Product::where('status',1)->where('is_deals',1)->latest()->get();
        // dd($today_best_sales);

        //Home2 featured category
        $home2_featured_categories = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->get();
        // Hot deals product
        $hot_deals = Product::where('status',1)->where('is_deals',1)->latest()->take(9)->get();

        $home_view = 'FrontEnd.home.index';

        // $campaign = \App\Models\Campaing::where('status', 1)->where('is_featured', 1)->first();
        // $start_diff=date_diff(date_create($campaign->flash_start), date_create(date('d-m-Y H:i:s')));
        // $end_diff=date_diff(date_create(date('d-m-Y H:i:s')), date_create($campaign->flash_end));
        // dd($end_diff);
        // if($campaign && $start_diff->invert == 0 && $end_diff->invert == 0){
        //     dd($campaign);
        // }
        //dd($hot_deals);

        //dd($featured_category);

        $brands = Brand::where('status',1)->get();

        return view($home_view, compact('brands','categories','sliders','featured_category','products','product_top_sellings','product_trendings','product_recently_adds','product_top_rates','home_banners','sort_search','todays_sale','home2_featured_categories','hot_deals'));
    } // end method

    // public function shopgrid(){
    //     $products = Product::where('status',1)->orderBy('id','DESC')->get();

    //     return view('FrontEnd.shopgrid.index', compact('products'));
    // }

    public function index2(Request $request)
    {

        //Product All Status Active
        $products = Product::where('status',1)->orderBy('id','DESC')->get();

        // Search Start
        $sort_search =null;
        if ($request->has('search')){
            $sort_search = $request->search;
            $products = $products->where('name_en', 'like', '%'.$sort_search.'%');
            // dd($products);
        }else{
            $products = Product::where('status',1)->orderBy('id','DESC')->get();
        }
        // $products = $products->paginate(15);
        // Search Start

        // Header Category Start
        $categories = Category::orderBy('name_en','DESC')->where('status','=',1)->limit(5)->get();
        // Header Category End

        // Category Featured all
        $featured_category = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->limit(15)->get();

        //Slider
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(10)->get();
        // Product Top Selling
        $product_top_sellings = Product::where('status',1)->orderBy('id','ASC')->limit(2)->get();
        //Product Trending
        $product_trendings = Product::where('status',1)->orderBy('id','ASC')->skip(2)->limit(2)->get();
        //Product Recently Added
        $product_recently_adds = Product::where('status',1)->latest()->skip(2)->limit(2)->get();

        $product_top_rates = Product::where('status',1)->orderBy('regular_price')->limit(2)->get();
        // Home Banner
        $home_banners = Banner::where('status',1)->where('position',1)->orderBy('id','DESC')->get();

        // Daily Best Sells
        //dd(date('Y-m-d'));
        $todays_sale  = OrderDetail::where('created_at', 'like', '%'.date('Y-m-d').'%')->get();
        // dd($todays_sale);

        //Home2 featured category
        $home2_featured_categories = Category::orderBy('name_en','DESC')->where('is_featured','=',1)->where('status','=',1)->get();
        // Hot deals product
        $hot_deals = Product::where('status',1)->where('is_deals',1)->latest()->take(4)->get();

        return view('frontend.home2', compact('categories','sliders','featured_category','products','product_top_sellings','product_trendings','product_recently_adds','product_top_rates','home_banners','sort_search','todays_sale','home2_featured_categories','hot_deals'));
    } // end method

    /* ========== Start ProductDetails Method ======== */

    public function loadMoreProducts(Request $request)
    {
        $count = $request->input('count', 12); // Number of products to load (default is 12)
        $offset = $request->input('offset', 0); // Offset for pagination

        $products = Product::where('status', 1)
            ->orderBy('id', 'ASC')
            ->skip($offset)
            ->limit($count)
            ->get();

        $nextOffset = $offset + $count;

        return response()->json(['products' => $products, 'nextOffset' => $nextOffset]);
    }
    public function productDetails($slug){

        $product = Product::where('slug', $slug)->first();
        if($product){
            if($product->id){
                $multiImg = MultiImg::where('product_id',$product->id)->limit(3)->get();
            }

            /* ================= Product Color Eng ================== */
            $color_en = $product->product_color_en;
            $product_color_en = explode(',', $color_en);

            /* ================= Product Size Eng =================== */
            $size_en = $product->product_size_en;
            $product_size_en = explode(',', $size_en);

            /* ================= Realted Product =============== */
            $cat_id = $product->category_id;
            $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$product->id)->orderBy('id','DESC')->get();

            $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->limit(5)->get();
            $new_products = Product::orderBy('name_en')->where('status','=',1)->limit(3)->latest()->get();

            return view('FrontEnd.product.product_details', compact('product','multiImg','categories','new_products','product_color_en','product_size_en','relatedProduct'));
        }

        return view('FrontEnd.product.productNotFound');
    }

    /* ========== Start CatWiseProduct Method ======== */
    public function CatWiseProduct(Request $request,$slug){

        $category = Category::where('slug', $slug)->first();
        // dd($category);

        // Top filter Start
        $sort_by = $request->sort_by;
        $brand_id = $request->brand;

        $conditions = ['status' => 1];

        if($brand_id != null){
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }elseif ($request->brand != null) {
            $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }

        $products_sort_by = Product::where($conditions);

        switch ($sort_by) {
            case 'newest':
                $products_sort_by->orderBy('created_at', 'desc')->paginate(10);
                break;
            case 'oldest':
                $products_sort_by->orderBy('created_at', 'asc')->paginate(10);
                break;
            case 'price-asc':
                $products_sort_by->orderBy('regular_price', 'asc')->paginate(10);
                break;
            case 'price-desc':
                $products_sort_by->orderBy('regular_price', 'desc')->paginate(10);
                break;
            default:
                $products_sort_by->orderBy('id', 'desc')->paginate(10);
                break;
        }
        // Top filter End

        $min_price = $request->get('filter_price_start');
        $max_price = $request->get('filter_price_end');

        $conditions = ['status' => 1];

        if($request->brand_id != null && $request->brand_id>0){
            $conditions = array_merge($conditions, ['brand_id' => $request->brand_id]);
        }

        $products = Product::where($conditions);

        if($min_price != null && $max_price != null){
            $products->where('regular_price', '>=', $min_price)->where('regular_price', '<=', $max_price);
        }

        $category_ids = CategoryUtility::children_ids($category->id);
        $category_ids[] = $category->id;
        $products->whereIn('category_id', $category_ids);

        $products = $products->orderBy('created_at', 'desc')->paginate(12);

        $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->get();
        // dd($products);
        $subcategories = Category::orderBy('name_en','ASC')->where('status',1)->where('parent_id',$category->id)->get();

        return view('FrontEnd.product.category_view',compact('products','categories','category','sort_by','brand_id','subcategories'));
    } // end method
    /* ========== End CatWiseProduct Method ======== */

     /* ========== Start CatWiseProduct Method ======== */
    public function VendorWiseProduct(Request $request,$slug){

        $vendor = Vendor::where('slug', $slug)->first();
        // dd($category);

        $products = Product::where('status', 1)->where('vendor_id',$vendor->id)->orderBy('id','DESC')->paginate(20);
        // Price Filter
        if ($request->get('filter_price_start')!== Null && $request->get('filter_price_end')!== Null ){
            $filter_price_start = $request->get('filter_price_start');
            $filter_price_end = $request->get('filter_price_end');

            if ($filter_price_start>0 && $filter_price_end>0) {
                $products = Product::where('status','=',1)->where('vendor_id',$vendor->id)->whereBetween('regular_price',[$filter_price_start,$filter_price_end])->paginate(20);
                // dd($products);
            }

        }

        $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->get();
        // dd($products);

        return view('frontEnd.product.vendor_view',compact('products','categories','vendor'));
    } // end method
    /* ========== End CatWiseProduct Method ======== */

    /* ========== Start TagWiseProduct Method ======== */
    // public function TagWiseProduct($id,$slug){

    //     $products = Product::where('status','=',1)->where('tag_id',$id)->orderBy('id','DESC')->paginate(5);
    //     $categories = Category::orderBy('name_en','ASC')->where('status','=',1)->limit(5)->get();
    //     $tags = Tag::orderBy('name_en','ASC')->where('status','=',1)->limit(5)->get();
    //     $tag = Tag::find($id);
    //     $new_products = Product::orderBy('name_en')->where('status','=',1)->limit(3)->latest()->get();

    //     return view('frontend.product.tag_view',compact('products','categories','tags','tag','new_products'));
    // } // end method
    /* ========== End TagWiseProduct Method ======== */


    /* ================= Start ProductViewAjax Method ================= */
    public function ProductViewAjax($id){

        $product = Product::with('category','brand')->findOrFail($id);
        //dd($product);
        $attribute_values = json_decode($product->attribute_values);

        $attributes = new Collection;
        foreach($attribute_values as $key => $attribute_value){
            $attr = Attribute::select('id','name')->where('id',$attribute_value->attribute_id)->first();
            // $attribute->name = $attr->name;
            // $attribute->id = $attr->id;
            $attr->values = $attribute_value->values;
            $attributes->add($attr);
        }


        return response()->json(array(
            'product' => $product,
            'attributes' => $attributes,
        ));
    }
    /* ================= END PRODUCT VIEW WITH MODAL METHOD =================== */


    public function pageAbout(){
//        $page = Page::where('slug', $slug)->first();
        return view('FrontEnd.about_us.index');
    }

    /* ================= Start Product Search =================== */
    public function ProductSearch(Request $request){
        //$request->validate(["search" => "required"]);
        $sort_by = $request->sort_by;
        $brand_id = $request->brand;

        $conditions = ['status' => 1];

        if($brand_id != null){
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }elseif ($request->brand != null) {
            $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }

        $products_sort_by = Product::where($conditions);

        switch ($sort_by) {
            case 'newest':
                $products_sort_by->orderBy('created_at', 'desc')->paginate(10);
                break;
            case 'oldest':
                $products_sort_by->orderBy('created_at', 'asc')->paginate(10);
                break;
            case 'price-asc':
                $products_sort_by->orderBy('regular_price', 'asc')->paginate(10);
                break;
            case 'price-desc':
                $products_sort_by->orderBy('regular_price', 'desc')->paginate(10);
                break;
            default:
                $products_sort_by->orderBy('id', 'desc')->paginate(10);
                break;
        }

        $item = $request->search;
        $category_id = $request->searchCategory;
        // echo "$item";

        // Header Category Start //
        $categories = Category::orderBy('name_en','DESC')->where('status', 1)->get();
        if($category_id == 0){
            $products = Product::where('name_en','LIKE',"%$item%")->where('status'
            , 1)->latest()->get();
        }else{
            $products = Product::where('name_en','LIKE',"%$item%")->where('category_id', $category_id)->where('status'
            , 1)->latest()->get();
        }

        $attributes = Attribute::orderBy('name', 'DESC')->where('status', 1)->latest()->get();

        return view('FrontEnd.product.search',compact('products','categories','attributes','sort_by','brand_id'));

    } // end method

    /* ================= End Product Search =================== */

    /* ================= Start Advance Product Search =================== */
    public function advanceProduct(Request $request){

        // return $request;

        $request->validate(["search" => "required"]);

        $item = $request->search;
        $category_id = $request->category;
        // echo "$item";

        // Header Category Start //
        $categories = Category::orderBy('name_en','DESC')->where('status', 1)->get();

        if($category_id == 0){
            $products = Product::where('name_en','LIKE',"%$item%")->where('status'
            , 1)->latest()->get();
        }else{
            $products = Product::where('name_en','LIKE',"%$item%")->where('category_id', $category_id)->where('status'
            , 1)->latest()->get();
        }

        $attributes = Attribute::orderBy('name', 'DESC')->where('status', 1)->latest()->get();

        return view('FrontEnd.product.advance_search',compact('products','categories','attributes'));

    } // end method

    /* ================= End Advance Product Search =================== */

    /* ================= Start Hot Deals Page Show =================== */
    public function hotDeals(Request $request){

        $sort_by = $request->sort_by;
        $brand_id = $request->brand;

        $conditions = ['status' => 1];

        if($brand_id != null){
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }elseif ($request->brand != null) {
            $brand_id = (Brand::where('slug', $request->brand)->first() != null) ? Brand::where('slug', $request->brand)->first()->id : null;
            $conditions = array_merge($conditions, ['brand_id' => $brand_id]);
        }

        $products_sort_by = Product::where($conditions);

        switch ($sort_by) {
            case 'newest':
                $products_sort_by->orderBy('created_at', 'desc')->paginate(10);
                break;
            case 'oldest':
                $products_sort_by->orderBy('created_at', 'asc')->paginate(10);
                break;
            case 'price-asc':
                $products_sort_by->orderBy('regular_price', 'asc')->paginate(10);
                break;
            case 'price-desc':
                $products_sort_by->orderBy('regular_price', 'desc')->paginate(10);
                break;
            default:
                $products_sort_by->orderBy('id', 'desc')->paginate(10);
                break;
        }
        // Hot deals product
        $products = Product::where('status',1)->where('is_deals',1)->paginate(5);

        // Category Filter Start
        if ($request->get('filtercategory')){

            $checked = $_GET['filtercategory'];
            // filter With name start
            $category_filter = Category::whereIn('name_en', $checked)->get();
            $catId = [];
            foreach($category_filter as $cat_list){
                array_push($catId, $cat_list->id);
            }
            // filter With name end

            $products = Product::whereIn('category_id', $catId)->where('status', 1)->where('is_deals',1)->latest()->paginate(10);
            // dd($products);
        }
        // Category Filter End

        $attributes = Attribute::orderBy('name', 'DESC')->where('status', 1)->latest()->get();
        // End Shop Product //
        return view('FrontEnd.deals.hot_deals',compact('attributes','products','sort_by','brand_id'));

    } // end method

    public function applycoupon(Request $request){
        $coupon = Coupon::where('coupon_code',$request->apply_coupon)
                        ->where('status',1)
                        ->first();
        if ($coupon){
            if ($coupon->discount<= $request->cart_value){
                Session::put('couponCode', $coupon->coupon_code);
                Session::put('discountType', $coupon->discount_type);
                Session::put('amount', $coupon->discount);
                Session::put('status', $coupon->status);
//                return back()->with('message','WoW you got'.$coupon->discount_type=='Percent'? $coupon->amount  : $coupon->amount.'৳' .' '.'Discount');
                    // dd('you got discount');
                return back()->with('message','WoW !! you got Discount');
            }else{
                // dd('not enought cart');
                return back()->with('message','Not Enough Cart Amount To Get Offer Please Update Cart Amount');
            }
        }
        if (!$coupon){
            // dd('invalid');
            return back()->with('message','invalid coupon code');
        }
    }

    public function PageContact()
    {
        return view('FrontEnd.contact.index');
    }
    public function PageTerms()
    {
        return view('FrontEnd.terms_conditions.index');
    }
    public function PagePolicy()
    {
        return view('FrontEnd.privacy_policy.index');
    }

    public function PageHelp()
    {
        return view('FrontEnd.help.index');
    }

    public function PageFaq()
    {
        return view('FrontEnd.FAQ.index');
    }
}
