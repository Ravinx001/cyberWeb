<x-admin-app-layout>

    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Profile</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>

            @include('admin.profile.partials.update-profile-information-form')

            @include('admin.profile.partials.update-password-form')

            @include('admin.profile.partials.delete-user-form')

        </div>
    </main>

</x-admin-app-layout>
