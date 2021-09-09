@extends('layouts.home')

@section('custome_style')
    <link href="{{ asset('css/intro.css') }}" rel="stylesheet">
    
@endsection

@section('content')
    {{-- intro --}}
    <div class="container intro-container">
        <div class="row">
            <div class="col-lg-6 intro-image-container">
                <img src="{{ asset('images/intro-1.png') }}" alt="">
                <img class="overlay-img" src="{{ asset('images/intro-2.png') }}" alt="">
            </div>
            <div class="col-lg-6">
                <p class="intro-title">
                    With <span class="orange-color">NgaoduVietnam</span>, immerses you in majestic space and unique cultural features
                </p>
                <div class="row">
                    <div class="col-lg-2">
                        <img src="{{ asset('images/shape.png') }}" alt="">
                    </div>
                    <div class="col-lg-10">
                        <p class="intro-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. Elementum scelerisque phasellus donec lectus ullamcorper faucibus. Malesuada et adipiscing molestie egestas leo ut.</p>
                        <p class="intro-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus viverra nuQlla eget sed odio. Vulputate risus faucibus sem non, feugiat nec consequat, montes. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- destinations --}}
    <div class="container dest-container">
        <div class="row">
            <div class="col-lg-6">
                <p class="dest-title">Discover fascinating destinations</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <button class="bg-black text-white btn-viewall">View all</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 dest-item">
                <img class="w-100" src="{{ asset('images/dest-1.png') }}" alt="">
                <p class="dest-item-name">Sapa, Laocai</p>
                <p class="dest-item-exp">24 experiences</p>
            </div>
            <div class="col-lg-3 dest-item">
                <img class="w-100" src="{{ asset('images/dest-2.png') }}" alt="">
                <p class="dest-item-name">Sapa, Laocai</p>
                <p class="dest-item-exp">24 experiences</p>
            </div>
            <div class="col-lg-3 dest-item">
                <img class="w-100" src="{{ asset('images/dest-3.png') }}" alt="">
                <p class="dest-item-name">Sapa, Laocai</p>
                <p class="dest-item-exp">24 experiences</p>
            </div>
            <div class="col-lg-3 dest-item">
                <img class="w-100" src="{{ asset('images/dest-4.png') }}" alt="">
                <p class="dest-item-name">Sapa, Laocai</p>
                <p class="dest-item-exp">24 experiences</p>
            </div>
        </div>
    </div>
    {{-- tour --}}
    <div class="container dest-container">
        <div class="row">
            <div class="col-lg-6">
                <p class="dest-title">Attractive tour and interesting experiences</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <button class="bg-black text-white btn-viewall">View all</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 tour-item">
                <div class="w-100 tour-item-img-container">
                    <img class="w-100 mb-3" src="{{asset('images/tour-1.png')}}" alt="">   
                    <img class="highlight" src="{{asset('images/no-highlight.png')}}" alt="">                 
                    <div class="d-flex tour-item-rate align-items-center justify-content-between">
                        <i class="fas fa-star"></i>
                        <p>&nbsp4.5</p>
                    </div>
                </div>
                <div class="d-flex">
                    <span><i class="fas fa-map-marker-alt orange-color"></i></span>
                    <p class="tour-desc">Sapa, Laocai</p>
                </div>
                <p class="tour-title">Discover interesting things in the romantic coastal city of Vungtau</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span><i class="far fa-calendar-alt orange-color"></i></span>
                        <p class="tour-desc">3 days - 2 night</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="tour-desc">from</p><span class="tour-price">$146.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 tour-item">
                <div class="w-100 tour-item-img-container">
                    <img class="w-100 mb-3" src="{{asset('images/tour-1.png')}}" alt="">   
                    <img class="highlight" src="{{asset('images/highlight.png')}}" alt="">                 
                    <div class="d-flex tour-item-rate align-items-center justify-content-between">
                        <i class="fas fa-star"></i>
                        <p>&nbsp4.5</p>
                    </div>
                </div>
                <div class="d-flex">
                    <span><i class="fas fa-map-marker-alt orange-color"></i></span>
                    <p class="tour-desc">Sapa, Laocai</p>
                </div>
                <p class="tour-title">Discover the most majestic Fansipan peak in Vietnam - the roof of Indochina</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span><i class="far fa-calendar-alt orange-color"></i></span>
                        <p class="tour-desc">3 days - 2 night</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="tour-desc">from</p><span class="tour-price">$234.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 tour-item">
                <div class="w-100 tour-item-img-container">
                    <img class="w-100 mb-3" src="{{asset('images/tour-1.png')}}" alt="">   
                    <img class="highlight" src="{{asset('images/highlight.png')}}" alt="">                 
                    <div class="d-flex tour-item-rate align-items-center justify-content-between">
                        <i class="fas fa-star"></i>
                        <p>&nbsp4.5</p>
                    </div>
                </div>
                <div class="d-flex">
                    <span><i class="fas fa-map-marker-alt orange-color"></i></span>
                    <p class="tour-desc">Sapa, Laocai</p>
                </div>
                <p class="tour-title">Experience sea tourism on Phuquoc golden pearl</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span><i class="far fa-calendar-alt orange-color"></i></span>
                        <p class="tour-desc">3 days - 2 night</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="tour-desc">from</p><span class="tour-price">$234.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- traditional --}}
    <div class="container dest-container">
        <div class="row">
            <div class="col-lg-6">
                <p class="dest-title">Experience the traditional cultural beauties of Vietnam</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-end align-items-center">
                <button class="bg-black text-white btn-viewall">View all</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 tour-item">
                <div class="w-100 tour-item-img-container">
                    <img class="w-100 mb-3" src="{{asset('images/cult-1.png')}}" alt="">   
                    <img class="highlight" src="{{asset('images/highlight.png')}}" alt="">                 
                    <div class="d-flex tour-item-rate align-items-center justify-content-between">
                        <i class="fas fa-star"></i>
                        <p>&nbsp4.5</p>
                    </div>
                </div>
                <div class="d-flex">
                    <span><i class="fas fa-map-marker-alt orange-color"></i></span>
                    <p class="tour-desc">Lang Vong, Hanoi</p>
                </div>
                <p class="tour-title">“ Com lang Vong “ - Traditional culinary features of the old Hanoi people</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span><i class="far fa-calendar-alt orange-color"></i></span>
                        <p class="tour-desc">6 hours</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="tour-desc">from</p><span class="tour-price">$234.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 tour-item">
                <div class="w-100 tour-item-img-container">
                    <img class="w-100 mb-3" src="{{asset('images/cult-2.png')}}" alt="">   
                    <img class="highlight" src="{{asset('images/highlight.png')}}" alt="">                 
                    <div class="d-flex tour-item-rate align-items-center justify-content-between">
                        <i class="fas fa-star"></i>
                        <p>&nbsp4.5</p>
                    </div>
                </div>
                <div class="d-flex">
                    <span><i class="fas fa-map-marker-alt orange-color"></i></span>
                    <p class="tour-desc">Hue City, Thuathienhue</p>
                </div>
                <p class="tour-title">“ Bun bo Hue “ - culinary specialties in the ancient capital of Hue</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span><i class="far fa-calendar-alt orange-color"></i></span>
                        <p class="tour-desc">6 hours</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="tour-desc">from</p><span class="tour-price">$234.00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 tour-item">
                <div class="w-100 tour-item-img-container">
                    <img class="w-100 mb-3" src="{{asset('images/cult-3.png')}}" alt="">   
                    <img class="highlight" src="{{asset('images/highlight.png')}}" alt="">                 
                    <div class="d-flex tour-item-rate align-items-center justify-content-between">
                        <i class="fas fa-star"></i>
                        <p>&nbsp4.5</p>
                    </div>
                </div>
                <div class="d-flex">
                    <span><i class="fas fa-map-marker-alt orange-color"></i></span>
                    <p class="tour-desc">Tiendu, Bacninh</p>
                </div>
                <p class="tour-title">Heritage of Quan Ho Bac Ninh - Singing passionate hearts</p>
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <span><i class="far fa-calendar-alt orange-color"></i></span>
                        <p class="tour-desc">2 hours</p>
                    </div>
                    <div class="d-flex align-items-center">
                        <p class="tour-desc">from</p><span class="tour-price">$234.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- email --}}
    <div class="container email-container">
        <div class="row">
            <div class="col-lg-5">
                <p class="email-title">Leave us an email,<br>to get <span class="orange-color">the latest deals</span></p>
            </div>
            <div class="col-lg-7 d-flex align-items-center justify-content-end">
                <form action="">
                    <div class="d-flex">
                        <div class="input-group input-group-lg email-input">
                            <span class="input-group-text form-group-icon" id="inputGroup-sizing-lg">
                              <i class="far fa-envelope orange-color"></i>
                            </span>
                            <input type="text" class="form-control border-none" 
                            aria-label="Sizing example input" 
                            aria-describedby="inputGroup-sizing-lg"
                            placeholder="example@gmail.com"
                            >
                        </div>
                        <Button type="submit" class="email-btn">Send</Button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection