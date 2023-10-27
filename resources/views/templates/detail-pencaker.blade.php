<div class="mb-6">
    <label for="name" class="form-label">Pencari
        Kerja</label>
    <input type="text" id="name" value="{{ $applyLoker->pencaker->nama }}" class="form-input" required disabled>
</div>
<div class="mb-6">
    <label for="gender" class="form-label">Jenis
        Kelamin</label>
    <input type="input" id="gender" value="{{ $applyLoker->pencaker->jenis_kelamin }}" class="form-input" required
        disabled>
</div>
<div class="mb-6">
    <label for="telpon" class="form-label">No.
        Telepon</label>
    <input type="input" id="telpon" value="{{ $applyLoker->pencaker->no_telp }}" class="form-input" required
        disabled>
</div>
<div class="mb-6">
    <label for="job" class="form-label">Pekerjaan yang
        Dilamar</label>
    <input type="input" id="job" value="{{ $applyLoker->loker->nama }}" class="form-input" required disabled>
</div>
<div class="mb-6">
    <label for="type" class="form-label">Tipe
        Pekerjaan</label>
    <input type="input" id="type" value="{{ $applyLoker->loker->tipe }}" class="form-input" required disabled>
</div>
<div class="mb-6">
    <label for="cptelpon" class="form-label">No. Telepon
        Narahubung</label>
    <input type="input" id="cptelpon" value="{{ $applyLoker->loker->no_telp_cp }}" class="form-input" required
        disabled>
</div>

@if ($applyLoker->pencaker->foto_profil)
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfil">Foto</label>
        <img class="h-auto max-w-xs" src="{{ asset('storage/' . $applyLoker->pencaker->foto_profil) }}" alt="">
    </div>
@else
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfil">Foto</label>
        <img class="h-auto max-w-xs"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/768px-Default_pfp.svg.png"
            alt="">
    </div>
@endif

@if ($applyLoker->pencaker->foto_ktp)
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfil">Scan
            KTP</label>
        <img class="h-auto max-w-xs" src="{{ asset('storage/' . $applyLoker->pencaker->foto_ktp) }}" alt="">
    </div>
@else
    <div class="mb-6">
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="imageProfil">Scan
            KTP</label>
        <img class="h-auto max-w-xs"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Default_pfp.svg/768px-Default_pfp.svg.png"
            alt="">
    </div>
@endif
