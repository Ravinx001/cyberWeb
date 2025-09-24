<x-user-app-layout>

    <main class="container-fluid d-flex justify-content-center" style="background-color: #000000; color: #ffffff; min-height: 80vh;">
        <div>
            <h3 class="mt-4" style="color: #0bf5ea;">Profile</h3>
            <ol class="breadcrumb mb-4" style="background-color: #1a1a1a;">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" style="color: #0bf5ea;">Home</a></li>
                <li class="breadcrumb-item active" style="color: #ffffff;">Profile</li>
            </ol>

            @include('user.profile.partials.update-profile-information-form')

            @include('user.profile.partials.update-password-form')
        </div>
    </main>

</x-user-app-layout>
