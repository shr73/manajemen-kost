<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Periksa Ulang Kesalahan Pengisian Form
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
    </div> 
    @endif
</div>
