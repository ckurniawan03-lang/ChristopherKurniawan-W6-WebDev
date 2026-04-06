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
            'name' => 'Basic Snap',
            'price' => 'Rp 1.500.000',
            'duration' => '/2 hours',
            'features' => [
                'Unlimited Prints (2x6)',
                'Standard Backdrop',
                'Fun Props Set',
                'Online Gallery'
            ],
            'highlight' => false
        ],
        [
            'name' => 'Premium Joy',
            'price' => 'Rp 2.500.000',
            'duration' => '/4 hours',
            'features' => [
                'Unlimited Premium Prints (4x6)',
                'Custom Premium Backdrop',
                'Themed High-End Props',
                'Boomerang & GIF Creation',
                'Scrapbook Station'
            ],
            'highlight' => true
        ],
        [
            'name' => 'Wedding VIP',
            'price' => 'Rp 4.000.000',
            'duration' => '/6 hours',
            'features' => [
                'Everything in Premium',
                '360 Video Booth Included',
                'Custom Photo Template Design',
                'Instant Social Media Sharing Kiosk',
                'Idle Time (1 hour free)'
            ],
            'highlight' => false
        ],
    ];

    return view('services', compact('packages'));
    }

    public function contact()
    {
        return view('contact');
    }
}
