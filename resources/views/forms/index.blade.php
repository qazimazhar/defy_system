@extends('Forms.layouts.master')
@section('content')

<section class="front">
    <main>
        <div class="container py-5 abc">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 mt-5">
                    <h1 class="mb-4">Hi,</h1>
                    <p>Here at <b>Defy Insurance Agency</b> we’ve prepared this online application to help your business find the right coverage.</p>
                    <p>You’ll be guided through a personalized set of questions to help us better understand your business. At the end, you’ll see competing quotes from the nation’s top insurance companies. All in a matter of minutes!</p>
                    <button type="button" class="btn btn-dark hide-btn mt-3">Get started</button>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <img src="{{ asset('images/bnr.png')}}" alt="">
                </div>
            </div>
        </div>
    </main>
</section>

@endsection