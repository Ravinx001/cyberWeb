<x-admin-app-layout>
    <main>

        <div class="container-fluid px-4">

            <h3 class="my-3">Admin Dashboard</h3>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Users Progress
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quiz Progress</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Quiz Progress</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Animated striped example"
                                            aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                style="width: {{ $user->questionProgress ? $user->questionProgress->questionProgress : '0' }}0%">
                                                {{ $user->questionProgress ? $user->questionProgress->questionProgress : '0' }}0%
                                                Completed</div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </main>
</x-admin-app-layout>
