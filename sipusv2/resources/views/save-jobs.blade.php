<form action="{{ route('job.save') }}" method="POST">
    @csrf
    <div>
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="description">Deskripsi</label>
        <textarea name="description" id="description" required></textarea>
    </div>
    <div>
        <label for="company">Perusahaan</label>
        <input type="text" name="company" id="company" required>
    </div>
    <div>
        <label for="location">Lokasi</label>
        <input type="text" name="location" id="location" required>
    </div>
    <button type="submit">Simpan Lowongan</button>
</form>
