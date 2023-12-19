<x-layout.home>
    <x-slot name="page">Contact</x-slot>

    <section class="hero">
        <div class="hero__container">
            <div class="hero__content">
                <h1 class="hero__heading">Contact Us</h1>
                <p class="hero__info mb-4">
                    We will be glad to here about your suggestions
                </p>
            </div>
        </div>
        <div class="hero__icon hero__icon--top">
            <i class="bi bi-balloon-heart text-main fs-3"></i>
        </div>
        <div class="hero__icon hero__icon--bottom">
            <i class="bi bi-balloon-heart text-main fs-4"></i>
        </div>
        <img src="{{ asset("assets/img/banner-contact.jpg") }}" alt="Hero image" class="hero__image">
    </section>

    <section class="py-5 mt-5 position-relative bg-main-o">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0 mt-4 mt-md-0">
                    <img src="{{ asset("assets/img/adingelah-7.jpg") }}" alt="Children" class="w-100 rounded shadow">
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="mt-0 mb-4">Send us your suggestions</h4>
                    <form action="/mail" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="subject">Email</label>
                            <input type="email" class="form-control" name="subject" id="subject">
                        </div>
                        <div class="form-group mb-4">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="4" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-main rounded-pill px-4">
                            <i class="bi bi-send"></i> Send
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="hero__icon hero__icon--top">
            <i class="bi bi-balloon-heart text-main fs-3"></i>
        </div>
        <div class="hero__icon hero__icon--bottom">
            <i class="bi bi-balloon-heart text-main fs-4"></i>
        </div>
    </section>


</x-layout.home>
