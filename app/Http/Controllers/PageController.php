<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
    $features = [
        [
            "title" => "High Quality Prints",
            "desc" => "Studio-quality lighting and professional DSLR cameras."
        ],
        [
            "title" => "Custom Props",
            "desc" => "Fun and themed props for every event."
        ],
        [
            "title" => "Instant Sharing",
            "desc" => "Share photos instantly via QR or email."
        ]
    ];

    return view('index', compact('features'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $packages = [
            [
                "name" => "Basic Package",
                "price" => "Rp 1.000.000",
                "features" => ["2 Hours", "Unlimited Photos"]
            ],
            [
                "name" => "Premium Package",
                "price" => "Rp 2.000.000",
                "features" => ["4 Hours", "Props Included", "Instant Print"]
            ]
        ];

        return view('services', compact('packages'));
    }

    public function contact()
    {
        return view('contact');
    }
}
