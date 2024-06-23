<div>
    <h1>Notes List</h1>
    <ul>
        @foreach ($titles as $title)
            <li>{{ $title->title }}</li>
        @endforeach
    </ul>

    <form wire:submit.prevent="storeNote">
        @csrf
        <label for="text">Enter your Note :</label>
        <input type="text" wire:model="title">
        <div>
            @error('title')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>
        @if (session()->has('message'))
            <div class="px-6 py-4 bg-blue-50 rounded-lg" style="color: green">
                {{ session('message') }}
            </div>
        @endif
        <br>
        <button type="submit">Save</button>
    </form>
</div>
