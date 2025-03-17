<x-layout>
    <form action="{{ route('characters.store') }}" method="POST">
        @csrf

        <h2>Create a New Character</h2>

        <!-- ninja Name -->
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
            required
        >

        <!-- ninja Bio -->
        <label for="bio">Biography:</label>
        <textarea
            rows="5"
            id="bio" 
            name="bio" 
            required
        ></textarea>

        <!-- select a dojo -->
        <label for="origin_id">Origins:</label>
        <select id="origin_id" name="origin_id" required>
            <option value="" disabled selected>Select a origin</option>

            @foreach($origins as $origin)
                <option value="{{ $origin->id }}">
                    {{ $origin->name }}
                </option>
            @endforeach
            
        </select>

        <button type="submit" class="btn mt-4">Create Character</button>

        <!-- validation errors -->
        
    </form>
</x-layout>