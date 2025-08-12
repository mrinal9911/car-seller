<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarImage;
use App\Models\Enquiry;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with('images')->where('status', 'approved')->latest()->paginate(10);

        $featuredCars = Car::selectRaw('MIN(id) as id, brand')
            ->with(['images' => function ($query) {
                $query->limit(1);
            }])
            ->where('status', 'approved')
            ->groupBy('brand')
            ->take(10)
            ->get();

        return view('cars.index', compact('cars', 'featuredCars'));
    }

    public function homePage()
    {
        $brands = Brand::select('id', 'brand_name', 'brand_logo')
            ->where('status', 1)
            ->orderby('brand_name')
            ->get();

        $featuredCars = Car::with(['images' => function ($query) {
            $query->where('is_main', true)->limit(1);
        }])
            ->latest()
            // ->take(3)
            ->get();

        return view('cars.home', compact('brands', 'featuredCars'));
    }

    public function show($id)
    {
        $car = Car::with('images', 'user')->findOrFail($id);
        return view('cars.show', compact('car'));
    }

    // public function dashboard()
    // {
    //     $cars = auth()->user()->cars()->with('images')->latest()->get();
    //     return view('cars.dashboard', compact('cars'));
    // }

    public function create()
    {
        return view('cars.create'); // Make sure the Blade file exists
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'title'                      => 'required|string|max:255',
                'brand'                      => 'required|string|max:100',
                'model'                      => 'required|string|max:100',
                'bodyType'                   => 'required|string|max:50',
                'transmission'               => 'required|string|max:50',
                'fuelType'                   => 'required|string|max:50',
                'color'                      => 'required|string|max:50',
                'engine'                     => 'required|integer',
                'regMonth'                   => 'required|integer|between:1,12',
                'regYear'                    => 'required|integer|min:1980|max:' . date('Y'),
                'ownershipType'              => 'required|string|max:50',
                'condition'                  => 'required|string|max:50',
                'driven'                     => 'required|integer|min:0',
                'price'                      => 'required|numeric|min:0',
                'isNegotiable'               => 'nullable',
                'description'                => 'required|string',
            ]);

            // 1. Save car details
            $car = Car::create([
                'title'               => $request->title,
                'brand'               => $request->brand,
                'model'               => $request->model,
                'body_type'           => $request->bodyType,
                'transmission'        => $request->transmission,
                'fuel_type'           => $request->fuelType,
                'color'               => $request->color,
                'engine'              => $request->engine,
                'month'               => $request->regMonth,
                'year'                => $request->regYear,
                'ownership_type'      => $request->ownershipType,
                'condition'           => $request->condition,
                'driven'              => $request->driven,
                'price'               => $request->price,
                'is_price_negotiable' => (int)$request->isNegotiable ?? 0,
                'description'         => $request->description,
            ]);


            // 2. Upload and save main image
            if ($request->hasFile('main_image')) {
                $mainImage = $request->file('main_image');
                $mainPath = $mainImage->store('car/main', 'public');

                // Save to CarImage table
                CarImage::create([
                    'car_id'     => $car->id,
                    'image_path' => $mainPath,
                    'is_main'    => true, // or use 1
                ]);
            }

            // 3. Upload and save gallery images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $img) {
                    if ($img->isValid()) {
                        $path = $img->store('car/gallery', 'public');

                        CarImage::create([
                            'car_id' => $car->id,
                            'image_path' => $path,
                            'is_main' => false, // or 0
                        ]);
                    }
                }
            }

            return redirect()->back()->with('success', 'Car listing created successfully.');
        } catch (Exception $e) {
            Log::error('Car creation failed: ' . $e->getMessage());

            return redirect()->back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }

    public function contactUs()
    {
        return view('cars.contact-us'); // Make sure the Blade file exists
    }

    public function postContactUs(Request $request)
    {
        try {

            $request->validate([
                'carId'          => 'nullable|numeric|max:100',
                'userSalutation' => 'required|string|max:100',
                'userName'       => 'required|string|max:100',
                'userPhone'      => 'required|string|max:20',
                'userEmail'      => 'nullable|email|max:100',
                'message'        => 'required|string|max:500'
            ]);

            $mEnquiry            =  new Enquiry();
            $mEnquiry->car_id     = $request->input('carId', null);
            $mEnquiry->salutation = $request->input('userSalutation');
            $mEnquiry->name       = $request->input('userName');
            $mEnquiry->phone      = $request->input('userPhone');
            $mEnquiry->email      = $request->input('userEmail');
            $mEnquiry->message    = $request->input('message');
            $mEnquiry->tag        = $request->input('page_tag') ?? "message";
            $mEnquiry->save();

            if (isset($request->page_name) && $request->page_name === 'vehicleDetailPage') {
                return redirect()->back()->with('success', 'Your enquiry has been sent successfully!');
            } else
                return redirect('/contact')->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            if ($request->page_name === 'vehicleDetailPage') {
                return redirect()->back()->with('error', 'There was an error sending your enquiry: ' . $e->getMessage());
            } else {
                return redirect('/contact')->with('error', 'There was an error sending your message: ' . $e->getMessage());
            }
        }
    }

    public function vehicleList()
    {
        $cars = Car::with('mainImage')->latest()->paginate(10);
        return view('cars.vehicle-list', compact('cars'));
    }

    public function vehicleDetails($id)
    {
        $car = Car::with('images')->findOrFail($id);

        $featuredCars = Car::with('images')
            ->latest()
            ->get();

        return view('cars.vehicle-details', compact('car', 'featuredCars'));
    }

    public function aboutUs()
    {
        return view('cars.about-us');
    }

    public function dashboard()
    {
        $carDetails = Car::with('mainImage')->latest()->paginate(10);
        return view('cars.account-listing', compact('carDetails'));
    }

    public function addListing()
    {
        return view('cars.add-listing');
    }

    public function editListing($id)
    {
        $car = Car::with('images')->findOrFail($id);
        return view('cars.edit-listing', compact('car'));
    }


    public function listMessage(Request $req)
    {
        try {
            print_r($req);
            die;
        } catch (Exception $e) {
        }
    }
}
