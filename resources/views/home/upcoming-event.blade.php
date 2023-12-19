<x-layout.home>
    <x-slot name="page">Event</x-slot>

    <section class="hero">
        <div class="hero__container">
            <div class="hero__content">
                <h1 class="hero__heading">Upcoming Events</h1>
                <p class="hero__info mb-4">
                    What we are currently doing to help
                </p>
            </div>
        </div>
        <div class="hero__icon hero__icon--top">
            <i class="bi bi-balloon-heart text-main fs-3"></i>
        </div>
        <div class="hero__icon hero__icon--bottom">
            <i class="bi bi-balloon-heart text-main fs-4"></i>
        </div>
        <img src="{{ asset("assets/img/banner-event.jpg") }}" alt="Hero image" class="hero__image">
    </section>



</x-layout.home>
