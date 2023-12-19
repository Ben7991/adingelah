<x-layout.home>
    <x-slot name="page">Gallery</x-slot>

    <section class="hero">
        <div class="hero__container">
            <div class="hero__content">
                <h1 class="hero__heading">Gallery</h1>
                <p class="hero__info mb-4">
                    Memories in the form of images from our events and programs
                </p>
            </div>
        </div>
        <div class="hero__icon hero__icon--top">
            <i class="bi bi-balloon-heart text-main fs-3"></i>
        </div>
        <div class="hero__icon hero__icon--bottom">
            <i class="bi bi-balloon-heart text-main fs-4"></i>
        </div>
        <img src="{{ asset("assets/img/banner-gallery.jpg") }}" alt="Hero image" class="hero__image">
    </section>

    <section class="py-5 mt-5 bg-main-o">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset("assets/img/adingelah-1.jpg") }}" alt="Adingelah Foundation Gallery Album Image" class="w-100 shadow rounded">
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset("assets/img/adingelah-2.jpg") }}" alt="Adingelah Foundation Gallery Album Image" class="w-100 shadow rounded">
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset("assets/img/adingelah-3.jpg") }}" alt="Adingelah Foundation Gallery Album Image" class="w-100 shadow rounded">
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset("assets/img/adingelah-4.jpg") }}" alt="Adingelah Foundation Gallery Album Image" class="w-100 shadow rounded">
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset("assets/img/adingelah-5.jpg") }}" alt="Adingelah Foundation Gallery Album Image" class="w-100 shadow rounded">
                </div>
                <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <img src="{{ asset("assets/img/adingelah-6.jpg") }}" alt="Adingelah Foundation Gallery Album Image" class="w-100 shadow rounded">
                </div>
            </div>
        </div>
    </section>


</x-layout.home>
