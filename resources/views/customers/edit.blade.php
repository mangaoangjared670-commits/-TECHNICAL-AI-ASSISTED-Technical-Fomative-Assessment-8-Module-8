<form action="{{ route('customers.update', $customer) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" value="{{ old('name', $customer->name) }}" required>
        @error('name') <p>{{ $message }}</p> @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" value="{{ old('email', $customer->email) }}">
        @error('email') <p>{{ $message }}</p> @enderror
    </div>

    <button type="submit">Update Customer</button>
</form>