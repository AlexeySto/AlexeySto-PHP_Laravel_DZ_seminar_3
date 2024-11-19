<div class="add-booksform-wrapper">
    <form name="add-new-book" id="add-new-book" method="post" action="{{url('store')}}">
        @csrf
        <div class="form-section">
            <label for="title">Title</labe1>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>
        <div class="form-section">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control" required>
        </div>
        <div class="form-section">
            <label for="genre">Choose Genre:</label>
            <select name="genre" id="genre">
                <option value="fantasy">Fantasy</option>
                <option value="sci-fi">Sci-Fi</option>
                <option value="mystery">Mystery</option>
                <option value="drama">Drama</option>
            </select>
        </div>
        <button type="submit" class="btn btn primary">Submit</button>
    </form>
</div>
