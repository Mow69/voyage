<form action="{{ route('admin.update', $trip->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="mb-3">
        <label class="form-label"form-label>status</label>
        <input type="text" name="status" value="{{ $trip->status }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>destination</label>
        <input type="text" name="destination" value="{{ $trip->destination }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>description</label>
        <input type="textarea" name="description" value="{{ $trip->description }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>date</label>
        <input type="date" name="date" value="{{ $trip->date }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>cost</label>
        <input type="number" name="cost" value="{{ $trip->cost }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>organizer</label>
        <input type="text" name="organizer" value="{{ $trip->organizer }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>rating</label>
        <input type="number" name="rating" value="{{ $trip->rating }}">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>picture</label>
        <input type="text" name="picture" value="{{ $trip->picture }}">
    </div>
    

    <button type="submit" class="btn tbn-primary">Submit</button>
</form>

