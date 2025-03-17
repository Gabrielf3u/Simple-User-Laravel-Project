<x-layout>
    <form action="{{ route('characters.store') }}" method="POST">
        @csrf

        <h2>Create a New Character</h2>

        <!-- Character Name -->
        <label for="name">Character Name:</label>
        <input 
            type="text" 
            id="name" 
            name="name" 
            value="{{ old('name') }}" 
            required
        >

        <!-- ninja Strength -->
        <label for="age">Character Age:</label>
        <input 
            type="number" 
            id="age" 
            name="age" 
            value="{{ old('age') }}"
            required
        >

        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio" 
            name="bio" 
            required
        >{{ old('bio') }}</textarea>

        <!-- select a Origin -->
        <label for="origin_id">Origins:</label>
        <select id="origin_id" name="origin_id" required>
            <option value="" disabled selected>Select a origin</option>

            @foreach($origins as $origin)
                <option value="{{ $origin->id }}" {{ $origin->id == old('origin_id') ? 'selected' : '' }}>
                    {{ $origin->name }}
                </option>
            @endforeach
            
        </select>

        <button type="submit" class="btn mt-4">Create Character</button>

        <!-- validation errors -->
        @if ($errors->any())
            <ul class="ul.px-4.py-2.bg-red-100">
                @foreach ($errors->all() as $error)
                    <li class="my-2 text-red-500"> {{ $error }}</li>
                @endforeach
        @endif
        
    </form>
</x-layout>