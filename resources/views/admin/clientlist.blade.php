@extends('admin.adminLayout.app')
@section('title', 'Home Page')
@section('content')
    <div class="pan-rhs">
        <div class="row main-head">
            <div class="col-md-4">
                <div class="tit">
                    <h1>Client List</h1>
                </div>
            </div>
            <div class="col-md-8">
                <nav aria-label="breadcrumb" class="d-flex justify-content-end">
                    <a href="{{ route('admin.add_client') }}" class="cta cta-grn">Add New Client</a>
                </nav>
            </div>
        </div>
        <div class="row" style="max-height: 500px; overflow-y:scroll;">
            <div class="col-md-12">
                <div class="box-com box-qui box-lig box-tab">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Father Name</th>
                                <th>Company Name</th>
                                <th>More</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $index => $client)
                                <tr>
                                    <td>{{ $index + 1 }}</td> <!-- Display the index + 1 as the number -->
                                    <td>{{ $client->name }}</td> <!-- Client's name -->
                                    <td>{{ $client->phone }}</td> <!-- Client's phone -->
                                    <td>{{ $client->email }}</td> <!-- Client's email -->
                                    <td>{{ $client->father_name }}</td> <!-- Client's father's name -->
                                    <td>{{ $client->company_name }}</td> <!-- Client's company name -->
                                    <td>
                                        <a href="{{ route('admin.add_client', ['id' => $client->id]) }}"
                                            class="cta cta-grn">Edit/Update</a>

                                    </td>
                                    <td>
                                        <form id="delete-form-{{ $client->id }}"
                                            action="{{ route('admin.deleteclient', $client->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <button type="button" class="btn btn-danger text-light"
                                            onclick="confirmDelete({{ $client->id }})">Delete</button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection()
<script>
    function confirmDelete(clientId) {
        // Show SweetAlert confirmation dialog
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user confirms, submit the form to delete the client
                document.getElementById('delete-form-' + clientId).submit();
                Swal.fire('Deleted!', 'The client has been deleted.', 'success');
            } else {
                Swal.fire('Cancelled', 'Your client data is safe.', 'info');
            }
        });
    }
</script>
