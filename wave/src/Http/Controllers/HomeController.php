<?php

namespace Wave\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Slide;
use App\Models\Service;
use App\Models\Contact;
use Wave\Post;
use App\Models\Customer;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	if(setting('auth.dashboard_redirect', true) != "null"){
    		if(!Auth::guest()){
    			return redirect('dashboard');
    		}
    	}

        $seo = [
            'title'         => setting('site.title', 'Laravel Wave'),
            'description'   => setting('site.description', 'Software as a Service Starter Kit'),
            'image'         => url('storage/'.setting('site.icon')),
            'type'          => 'website'

        ];
        $slides =  Slide::get();
        $services =  Service::get();
        $customers =  Customer::get();
        $projects = Post::with(['category'])->where('category_id', 3)->take(9)->get();
        $posts = Post::where('category_id', 4)->take(2)->get();
        return view('theme::home_qc', compact('seo', 'slides', 'services', 'projects', 'customers', 'posts'));
    }

    public function contact(Request $request) {
        $validated = $request->validate([
            'name' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'content' => 'nullable|string',
        ]);
        Contact::create($validated);

        return redirect()->route('wave.home')->with('success', 'Gửi thành công.');
    }
}
