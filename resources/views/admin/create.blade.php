<form action="{{ route('admin.store') }}" method="post">
    @csrf

    <div class="mb-3">
        <label class="form-label"form-label>status</label>
        <input type="text" name="status">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>destination</label>
        <input type="text" name="destination">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>description</label>
        <input type="textarea" name="description">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>date</label>
        <input type="date" name="date">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>cost</label>
        <input type="number" name="cost">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>organizer</label>
        <input type="text" name="organizer">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>rating</label>
        <input type="number" name="rating">
    </div>
    <div class="mb-3">
        <label class="form-label"form-label>picture</label>
        <input type="text" name="picture">
    </div>

    <button type="submit" class="btn tbn-primary">Submit</button>
</form>