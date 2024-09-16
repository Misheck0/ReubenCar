<h1>Edit Car Part</h1>

<p>Editing car part with ID: {{ $id }}</p>

<!-- You can also access the car part details if fetched -->
@if(isset($data))
    <p>Part Name: {{ $data->part_name }}</p>
    <p>Part Description: {{ $data->price }}</p>
@endif

<!-- Your form for editing goes here -->
<form action="{{ route('part.update', ['id' => $id]) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Add form fields -->
    <button type="submit" class="btn btn-primary">Update</button>
</form>
