<x-layout.home>
    <section class="hero">
        <div class="hero__container">
            <div class="hero__content">
                <h1 class="hero__heading">Adingelah Foundation</h1>
                <p class="hero__info mb-4">
                    We are dedicated towards educating orphans, underprivileged children, and vulnerable women in our society.
                </p>
                <div class="d-flex align-items-center gap-3">
                    <a href="/about-us" class="btn btn-main rounded-pill px-4">
                        <i class="bi bi-book"></i> Read More
                    </a>
                    <a href="/contact-us" class="btn btn-tertiary rounded-pill px-4">
                        <i class="bi bi-envelope"></i> Message Us
                    </a>
                </div>
            </div>
        </div>
        <div class="hero__icon hero__icon--top">
            <i class="bi bi-balloon-heart text-main fs-3"></i>
        </div>
        <div class="hero__icon hero__icon--bottom">
            <i class="bi bi-balloon-heart text-main fs-4"></i>
        </div>
        <img src="{{ asset("assets/img/banner-home.jpg") }}" alt="Hero image" class="hero__image">
    </section>

    <section class="py-5 mt-5 mb-5 position-relative">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-6 mb-4 mb-md-0 mt-4 mt-md-0">
                    <img src="{{ asset("assets/img/adingelah-3.jpg") }}" alt="Children" class="w-100 rounded shadow">
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <h4 class="mt-0 mb-4">How we are helping</h4>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente explicabo quam excepturi repellat deleniti odio voluptate placeat odit distinctio.
                    </p>
                    <p class="mb-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae sapiente explicabo quam excepturi repellat deleniti odio voluptate placeat odit distinctio.
                    </p>
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

    <section class="py-5 bg-main-o">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-3 mb-md-0">
                    <i class="bi bi-calendar text-main fs-3"></i>
                    <h5 class="mb-3 mt-4">Events</h5>
                    <p class="m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, similique.
                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-md-0">
                    <i class="bi bi-arrow-clockwise text-tertiary fs-3"></i>
                    <h5 class="mb-3 mt-4">Programs</h5>
                    <p class="m-0">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, similique.
                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-3 mb-md-0">
                    <i class="bi bi-gift text-main fs-3"></i>
                    <h5 class="mb-3 mt-4">Donations</h5>
                    <p class="m-0">
                        Through your gifts, in the form of cash or others can help change the lives of many.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layout.home>
