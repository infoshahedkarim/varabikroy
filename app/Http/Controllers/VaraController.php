<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Place;
use App\Models\Ad;
use App\Models\Image;
use App\Models\SendEmail;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class VaraController extends Controller
{

    public function getmsg(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'category' => 'required',
            'msg' => 'required',
        ]);


        // Prepare the email body
        $emailBody = "You have a new contact form submission:\n\n"
            . "Name: {$request->name}\n"
            . "Email: {$request->email}\n"
            . "Phone: {$request->phone}\n\n"
            . "Category: {$request->category}\n\n"
            . "Message:\n{$request->msg}";

        Mail::raw($emailBody, function ($message) use ($request) {
            $message->to("shahed@ridgebenit.com")
                ->subject("New Contact Form Submission from: " . $request->name)
                ->from('shahed@ridgebenit.com', 'Ridgeben IT Website Form')
                ->replyTo($request->email, $request->name); // So you can reply directly
        });

        SendEmail::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'category' => $request->category,
            'msg' => $request->msg,
        ]);


        if ($request->ajax()) {
            return response()->json(['success' => true]);
        }

        return back()->with('success', 'Message sent successfully!');
    }



    public function checkSlug($slug)
    {
        try {
            $slugExists = Category::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }


    public function slugCheck($slug)
    {
        try {
            $slugExists = Place::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }


    public function adSlugCheck($slug)
    {
        try {
            $slugExists = Ad::where('slug', $slug)->exists();
            return response()->json(['exists' => $slugExists]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }


    // Category



    public function c_create()
    {
        return view('back.add-category');
    }


    public function c_show()
    {
        $categories = Category::all();
        return view('back.show-category', compact('categories'));
    }


    public function c_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:category,slug',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        try {

            $iconName = null;


            if ($request->hasFile('img')) {
                $icon = $request->file('img');
                $iconName = Str::slug($request->name) . 'img' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            // Save to database
            Category::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'img' => $iconName,
            ]);

            return redirect()->route('back.ccreate')->with('success', 'Category added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('back.ccreate')->with('error', 'Error saving Category: ' . $e->getMessage());
        }
    }

    public function c_edit($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('back.edit-category', compact('category'));
    }


    public function c_update(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('category', 'slug')->ignore($category->id)],
            'img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);

        if ($request->hasFile('img')) {
            $icon = $request->file('img');
            $iconName = Str::slug($request->name) . '-img-' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);

            // Delete old image
            if ($category->img && file_exists(public_path('storage/' . $category->img))) {
                unlink(public_path('storage/' . $category->img));
            }
        } else {
            $iconName = $category->img;
        }

        try {
            $category->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'img' => $iconName,
            ]);

            return redirect()->route('back.cshow')->with('success', 'Category updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving Category: ' . $e->getMessage());
        }
    }

    public function c_delete(Category $category)
    {

        $category->delete();
        return redirect(route('back.cshow'))->with('success', 'Category deleted successfully');
    }


    // place methods start




    public function p_create()
    {
        return view('back.add-place');
    }


    public function p_show()
    {
        $places = Place::all();
        return view('back.show-place', compact('places'));
    }


    public function p_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:places,slug',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        try {

            $iconName = null;


            if ($request->hasFile('img')) {
                $icon = $request->file('img');
                $iconName = Str::slug($request->name) . 'img' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            } else {
                $iconName = null;
            }

            // Save to database
            Place::create([
                'name' => $request->name,
                'slug' => $request->slug,
                'img' => $iconName,
            ]);

            return redirect()->route('back.pcreate')->with('success', 'Place added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('back.pcreate')->with('error', 'Error saving Place: ' . $e->getMessage());
        }
    }

    public function p_edit($slug)
    {
        $place = Place::where('slug', $slug)->firstOrFail(); // Fetch product by slug
        return view('back.edit-place', compact('place'));
    }


    public function p_update(Request $request, $slug)
    {
        $place = Place::where('slug', $slug)->firstOrFail();

        $request->validate([
            'name' => 'required',
            'slug' => ['required', Rule::unique('places', 'slug')->ignore($place->id)],
            'img' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',

        ]);

        if ($request->hasFile('img')) {
            $icon = $request->file('img');
            $iconName = Str::slug($request->name) . '-img-' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);

            // Delete old image
            if ($place->img && file_exists(public_path('storage/' . $place->img))) {
                unlink(public_path('storage/' . $place->img));
            }
        } else {
            $iconName = $place->img;
        }

        try {
            $place->update([
                'name' => $request->name,
                'slug' => $request->slug,
                'img' => $iconName,
            ]);

            return redirect()->route('back.pshow')->with('success', 'place updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error saving place: ' . $e->getMessage());
        }
    }

    public function p_delete(Place $place)
    {

        $place->delete();
        return redirect(route('back.pshow'))->with('success', 'place deleted successfully');
    }



    // ads 


    public function create()
    {
        $places = Place::all();
        $categories = Category::all();
        return view('back.add-ad', compact('places', 'categories'));
    }


    public function show()
    {
        $ads = Ad::with('images')->get();
        $places = Place::all();
        $categories = Category::all();
        return view('back.show-ad', compact('ads', 'places', 'categories'));
    }

    public function togglePremium(Request $request, $id)
    {
        $request->validate([
            'premium_ads' => 'required|boolean',
        ]);

        $ad = Ad::findOrFail($id);
        $ad->premium_ads = $request->premium_ads;
        $ad->save();

        return back()->with('success', 'Premium status updated successfully.');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:ads,slug',
            'subtitle' => 'required',
            'img' => 'required|image|max:2048',
            'images.*' => 'image|max:2048', // additional images
            'price' => 'nullable',
            'place_id' => 'nullable|exists:places,id',
            'category_id' => 'nullable|exists:category,id',
            'des' => 'required',
            'contact' => 'nullable',
            'premium_ads' => 'nullable|boolean',
        ]);

        try {
            $iconName = null;
            if ($request->hasFile('img')) {
                $icon = $request->file('img');
                $iconName = Str::slug($request->title) . '-img-' . time() . '.' . $icon->getClientOriginalExtension();
                $icon->move(public_path('storage'), $iconName);
            }

            $ad = Ad::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'subtitle' => $request->subtitle,
                'img' => $iconName,
                'price' => $request->price ?? 0,
                'place_id' => $request->place_id ?? 0,
                'category_id' => $request->category_id ?? 0,
                'des' => $request->des,
                'contact' => $request->contact ?? 0,
                'premium_ads' => $request->premium_ads ? true : false,
            ]);

            // Store multiple images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('storage'), $filename);

                    Image::create([
                        'ad_id' => $ad->id,
                        'image_path' => 'storage/' . $filename
                    ]);
                }
            }

            return redirect()->route('back.create')->with('success', 'Ad added successfully!');
        } catch (\Exception $e) {
            return redirect()->route('back.create')->with('error', 'Error saving Ad: ' . $e->getMessage());
        }
    }


    public function edit($slug)
    {
        $ad = Ad::with('images')->where('slug', $slug)->firstOrFail();
        $places = Place::all();
        $categories = Category::all();
        return view('back.edit-ad', compact('ad', 'places', 'categories'));
    }



    public function update(Request $request, $slug)
    {
        $ad = Ad::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('ads', 'slug')->ignore($ad->id)],
            'img' => 'nullable|image|max:2048',
            'images.*' => 'image|max:2048',
            'price' => 'nullable',
            'place_id' => 'nullable|exists:places,id',
            'category_id' => 'nullable|exists:category,id',
            'des' => 'required',
            'contact' => 'nullable',
            'premium_ads' => 'nullable|boolean',
        ]);

        if ($request->hasFile('img')) {
            $icon = $request->file('img');
            $iconName = Str::slug($request->title) . '-img-' . time() . '.' . $icon->getClientOriginalExtension();
            $icon->move(public_path('storage'), $iconName);

            if ($ad->img && file_exists(public_path('storage/' . $ad->img))) {
                unlink(public_path('storage/' . $ad->img));
            }
        } else {
            $iconName = $ad->img;
        }

        try {
            $ad->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'subtitle' => $request->subtitle,
                'img' => $iconName,
                'price' => $request->price ?? 0,
                'place_id' => $request->place_id ?? 0,
                'category_id' => $request->category_id ?? 0,
                'des' => $request->des,
                'contact' => $request->contact ?? 0,
                'premium_ads' => $request->premium_ads ? true : false,
            ]);

            // Add additional images
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $filename = time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path('storage'), $filename);

                    Image::create([
                        'ad_id' => $ad->id,
                        'image_path' => 'storage/' . $filename
                    ]);
                }
            }

            return redirect()->route('back.show')->with('success', 'Ad updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating Ad: ' . $e->getMessage());
        }
    }


    public function delete(Ad $ad)
    {

        $ad->delete();
        return redirect(route('back.show'))->with('success', 'Ad deleted successfully');
    }

    public function deleteImage($id)
    {
        $img = Image::findOrFail($id);

        // Delete file from storage
        if (file_exists(public_path($img->image_path))) {
            unlink(public_path($img->image_path));
        }

        // Delete record from DB
        $img->delete();

        return back()->with('success', 'Image deleted successfully.');
    }


    public function contact()
    {
        $categories = Category::all();
        return view('frontend.contact', compact('categories'));
    }

    public function indexMessages()
    {
        $messages = SendEmail::latest()->get();
        return view('back.show-email', compact('messages'));
    }


    public function deleteMessage($id)
    {
        $message = SendEmail::findOrFail($id);
        $message->delete();

        return redirect()->route('contact.messages')->with('success', 'Message deleted successfully.');
    }

    public function homePage(Request $request)
    {
        $ads = Ad::orderBy('created_at', 'desc')->paginate(8);
        $pres = Ad::where('premium_ads', true)
            ->orderBy('created_at', 'desc')->get();

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.index', compact('ads'))->render()
            ]);
        }

        return view('frontend.index', compact('ads', 'pres'));
    }

    public function all_ads(Request $request){
        $categories = Category::all();
        $ads = Ad::orderBy('created_at', 'desc')->paginate(8);

         if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.index', compact('ads'))->render()
            ]);
        }

        return view('frontend.all-project', compact('ads', 'categories'));


    }

    public function to_let(){
        $places = Place::all();
        return view('frontend.tolet', compact('places'));
    }
    
    public function sell_s(){
        $categories = Category::all();
        return view('frontend.sells', compact('categories'));
    }

    public function adsByPlace($id)
{
    $ads = Ad::where('place_id', $id)->orderBy('created_at', 'desc')->paginate(12);
    return view('frontend.allproj', compact('ads'));
}
    public function adsByCategory($id)
{
    $ads = Ad::where('category_id', $id)->orderBy('created_at', 'desc')->paginate(12);
    return view('frontend.allproj', compact('ads'));
}

public function ads_details($slug)
{
    $ad = Ad::with('images', 'category', 'place')->where('slug', $slug)->firstOrFail();
    return view('frontend.project-details', compact('ad'));

}

public function search(Request $request)
{
    $query = $request->input('query');

    $ads = Ad::with(['category', 'place'])
        ->where('title', 'like', "%{$query}%")
        ->orWhere('slug', 'like', "%{$query}%")
        ->orWhereHas('category', function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%");
        })
        ->orWhereHas('place', function ($q) use ($query) {
            $q->where('name', 'like', "%{$query}%");
        })
        ->paginate(12);

    return view('frontend.allproj', compact('ads'));
    if (!$query) {
    return redirect()->back()->with('error', 'Please enter a search term.');
}
}












}
