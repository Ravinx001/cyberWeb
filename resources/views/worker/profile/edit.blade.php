<x-worker-app-layout>

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Profile</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('worker.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>

            @include('worker.profile.partials.update-profile-information-form')

            @include('worker.profile.partials.update-password-form')

        </div>
    </main>

</x-worker-app-layout>
