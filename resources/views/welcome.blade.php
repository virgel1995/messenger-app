@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
   {{-- left image --}}
        <div class="col-md-7">
            <h1 class="text-left mt-5 pt-5">Time To Met New Friends</h1>
            <h2 class="text-left m-2 text-success">It's Free ?!!</h2>

<h3 class="mt-3 text-capitalize w-75 "> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quo reprehenderit quod a veritatis vitae accusamus laborum, ex soluta impedit voluptas, asperiores possimus consequatur placeat inventore at obcaecati quasi nemo rem modi repudiandae! Eius distinctio exercitationem alias aperiam quidem molestiae sequi dolorum harum delectus saepe culpa deleniti, molestias, commodi doloribus quos perferendis ad sint consequatur repudiandae perspiciatis vel? Quaerat deleniti maxime magni porro. Rem totam eum blanditiis maxime vel veniam necessitatibus? Omnis qui earum tenetur quod nostrum beatae accusantium delectus dignissimos vitae consectetur, eum odit atque sint quaerat possimus magnam in unde dicta ad quasi doloribus. Quisquam cupiditate nobis placeat.</h3>
<h2 class="text-left m-2 text-success bg-secondary rounded w-75 text-center ml-2">No Credit Card Requirments</h2>



<a class=" btn btn-outline-primary m-1"
href="{{ route('register') }}">{{ __('New User ?') }}</a>

<a class=" btn btn-outline-success m-1"
href="{{ route('login') }}">{{ __('Have Account') }}</a>

        </div>
       {{-- left content End --}}

       {{-- right content --}}
        <div class="col-md-5 bg-silver w-100 text-center justify-content-center m-auto">
            <img class="border rounded w-95 h-90" src="{{ asset('images/backgrounds/20.png') }}" alt="image">
        </div>
    {{-- right content End--}}


    </div>
</div>



 @endsection
