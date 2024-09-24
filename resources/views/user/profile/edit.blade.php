<x-user-app-layout>

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Profile</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>

            @include('user.profile.partials.update-profile-information-form')

            @include('user.profile.partials.update-password-form')

        </div>
    </main>

</x-user-app-layout>
