<x-supervisor-app-layout>

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Profile</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('supervisor.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>

            @include('supervisor.profile.partials.update-profile-information-form')

            @include('supervisor.profile.partials.update-password-form')

        </div>
    </main>

</x-supervisor-app-layout>
