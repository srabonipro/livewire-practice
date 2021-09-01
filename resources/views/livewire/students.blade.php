<div>
    <div class="container p-5">

        {{-- message alert --}}
        @if (session()->has('message'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @include('livewire.create')
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
