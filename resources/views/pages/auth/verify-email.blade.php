<x-system-layout>



    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url("{{ asset('admin/assets/media/auth/bg5.jpg') }}");
            }

            [data-bs-theme="dark"] body {
                background-image: url("{{ asset('admin/assets/media/auth/bg5-dark.jpg') }}");
            }
        </style>
        <!--end::Page bg image-->

        <!--begin::Logo-->
        <div class="mb-14">
            <a href="../../demo1/dist/index.html" class="">
                <img alt="Logo" src="{{asset('admin')}}/assets/media/logos/custom-2.svg" class="h-40px" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Title-->
        <h1 class="fw-bolder text-gray-900 mb-5">Verify your email</h1>
        <!--end::Title-->
        <!--begin::Action-->
        <div class="fs-6 mb-8">
            <span class="fw-semibold text-gray-500">Did’t receive an email?</span>
            <a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="link-primary fw-bold">Try
                Again</a>
        </div>
        <!--end::Action-->
        <!--begin::Link-->
        <div class="mb-11">
            <a href="../../demo1/dist/index.html" class="btn btn-sm btn-primary">Skip for now</a>
        </div>
        <!--end::Link-->
        <!--begin::Illustration-->
        <div class="mb-0">
            <img src="{{asset('admin')}}/assets/media/auth/please-verify-your-email.png"
                class="mw-100 mh-300px theme-light-show" alt="" />
            <img src="{{asset('admin')}}/assets/media/auth/please-verify-your-email-dark.png"
                class="mw-100 mh-300px theme-dark-show" alt="" />
        </div>
        <!--end::Illustration-->
        <!--end::Wrapper-->
        <!--end::Authentication - Signup Welcome Message-->
    </div>
    <!--end::Root-->

</x-system-layout>