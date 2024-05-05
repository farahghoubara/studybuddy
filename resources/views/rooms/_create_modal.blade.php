<div class="modal fade" id="createRoomModal" tabindex="-1" aria-labelledby="createRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createRoomModalLabel">Create Your Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Add your form here if needed -->
                <form action="{{ route('rooms.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="roomName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="roomName" name="roomName" placeholder="Enter Name">
                    </div>
                    <div class="mb-3">
                        <label for="roomDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="roomDescription" name="roomDescription" placeholder="Enter Description">
                    </div>
                    <div class="mb-3">
                        <label for="roomCategory" class="form-label">Category</label>
                        <select class="form-select" id="roomCategory" name="roomCategory">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="roomType" class="form-label">Type</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roomType" id="publicRoom"
                                value="public">
                            <label class="form-check-label" for="publicRoom">Public</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="roomType" id="privateRoom"
                                value="private">
                            <label class="form-check-label" for="privateRoom">Private</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="roomWallpaper" class="form-label mb-4">Wallpaper</label><br>
                        <div class="container">
                            <div class="row ">
                                @foreach ($wallpapers as $wallpaper)
                                    <div class="col-6 mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="roomWallpaper"
                                                id="roomWallpaper_{{ $wallpaper->id }}" value="{{ $wallpaper->id }}">
                                            <div class="container">
                                                <div
                                                    style="background-image: url('{{ asset('images/' . $wallpaper->path) }}'); background-size: cover; background-position: center; border-radius: 10px; width: 100px; height: 50px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create Room</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
