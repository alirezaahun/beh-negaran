<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\bottomBannerResource;
use App\Http\Resources\V1\sliderResource;
use App\Http\Resources\V1\topBannerResource;
use App\Models\Banner;
use App\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $main = Banner::where('type', 'main')->where('is_active', 1)->first();
        $sliders = Banner::where('type', 'slider')->where('is_active', 1)->orderBy('priority')->get();
        $logos = Banner::where('type', 'logo-sazmani')->where('is_active', 1)->orderBy('priority')->get();
        $second_logos = Banner::where('type', 'logo-sherkati')->where('is_active', 1)->orderBy('priority')->get();
        // $products = Product::where('is_active' , 1)->get();
        // return (sliderResource::collection($sliders))->additional(['topBanners' => [topBannerResource::collection($TopBanners)] , 'bottomBanners' => [bottomBannerResource::collection($BottomBanners)]]);


        return view('home.index', compact('main', 'sliders', 'logos', 'second_logos'));
    }


    public function about()
    {

        return view('home.about-us');
    }



    public function services()
    {

        return view('home.services');
    }

    public function projects()
    {

        return view('home.projects');
    }
    public function jobOpportunities()
    {

        return view('home.jobOpportunities');
    }
    public function notFound()
    {

        return view('home.page-not-found');
    }
    public function faq()
    {

        return view('home.questions-and-answers');
    }
    public function policy()
    {

        return view('home.terms-of-service');
    }
    public function order()
    {

        $user = User::where('id', auth()->id())->first();
        return view('home.order', compact('user'));
    }
    public function profile()
    {


        $user = User::where('id', auth()->id())->first();
        $getOrders = $user->Orders()->with('OrderItems')->with('TransActions')->get();
        return view('home.profile', compact('user', 'getOrders'));
    }

    public function editname(Request $request, $id)
    {

        $user = User::find($id);

        switch (true) {
            case $request->has('name'):

                $request->validate([

                    'name' => 'required'

                ]);

                $user->update([

                    'name' => $request->name

                ]);
                break;

            case $request->has('familyName'):
                $request->validate([

                    'familyName' => 'required'

                ]);

                $user->update([

                    'familyName' => $request->familyName

                ]);
                break;

            case $request->has('email'):

                $request->validate([

                    'email' => 'required'

                ]);

                $user->update([

                    'email' => $request->email

                ]);

                break;

            case $request->has('melliCode'):
                $request->validate([

                    'melliCode' => 'required'

                ]);

                $user->update([

                    'melliCode' => $request->melliCode

                ]);

                break;

            case $request->has('companyName'):
                $request->validate([

                    'companyName' => 'required'

                ]);

                $user->update([

                    'companyName' => $request->companyName

                ]);

                break;

            case $request->has('companyRegistryNumber'):
                $request->validate([

                    'companyRegistryNumber' => 'required'

                ]);

                $user->update([

                    'companyRegistryNumber' => $request->companyRegistryNumber

                ]);

                break;

            case $request->has('economicNumber'):
                $request->validate([

                    'economicNumber' => 'required'

                ]);

                $user->update([

                    'economicNumber' => $request->economicNumber

                ]);

                break;

            case $request->has('postalCode'):
                $request->validate([

                    'postalCode' => 'required'

                ]);

                $user->update([

                    'postalCode' => $request->postalCode

                ]);

                break;

            case $request->has('companyMelliCode'):
                $request->validate([

                    'companyMelliCode' => 'required'

                ]);

                $user->update([

                    'companyMelliCode' => $request->companyMelliCode

                ]);

                break;

            case $request->has('telNumber'):
                $request->validate([

                    'telNumber' => 'required'

                ]);

                $user->update([

                    'telNumber' => $request->telNumber

                ]);

                break;

            case $request->has(['state', 'town']):

                $request->validate([

                    'state' => 'required',
                    'town' => 'required'

                ]);

                $user->update([

                    'companyState' => $request->state,
                    'companyTown' => $request->town

                ]);

                break;

            case $request->has('companyAddress'):
                $request->validate([

                    'companyAddress' => 'required'

                ]);

                $user->update([

                    'companyAddress' => $request->companyAddress

                ]);

                break;








            default:
                dd("nothing");
                break;
        }

        return redirect()->route('home.profile');
    }

    public function usertype(Request $request)
    {
        session()->put('user', $request->user);
        return session()->get('user');
    }

    public function logout()
    {

        auth()->logout();

        return redirect('/');
    }
}
