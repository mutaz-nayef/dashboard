<x-system-layout>

    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url("{{ asset('admin/assets/media/auth/bg8.jpg') }}");
            }

            [data-bs-theme="dark"] body {
                background-image: url("{{ asset('admin/assets/media/auth/bg8-dark.jpg') }}");
            }
        </style>
        <!--end::Page bg image-->


        <!--begin::Logo-->
        <div class="mb-7">
            <a href="/metronic8/demo1/index.html" class="">
                <img alt="Logo" src="{{asset('admin')}}/assets/media/logos/custom-2.svg" class="h-40px" />
            </a>
        </div>
        <!--end::Logo-->

        <!--begin::Title-->
        <h1 class="fw-bolder text-gray-900 mb-5">
            Welcome to Metronic </h1>
        <!--end::Title-->

        <!--begin::Text-->
        <div class="fw-semibold fs-6 text-gray-500 mb-7">
            This is your opportunity to get creative and make a name
            <br />
            that gives readers an idea
        </div>
        <!--end::Text-->

        <!--begin::Illustration-->
        <div class="mb-0">
            <img src="{{asset('admin')}}/assets/media/auth/welcome.png" class="mw-100 mh-300px theme-light-show"
                alt="" />
            <img src="{{asset('admin')}}/assets/media/auth/welcome-dark.png" class="mw-100 mh-300px theme-dark-show"
                alt="" />
        </div>
        <!--end::Illustration-->

        <!--begin::Link-->
        <div class="mb-0">
            <a href="/metronic8/demo1/index.html" class="btn btn-sm btn-primary">Go To Dashboard</a>
        </div>
        <!--end::Link-->

        <!--end::Authentication - Signup Welcome Message-->
    </div>

    <!--end::Root-->
</x-system-layout>