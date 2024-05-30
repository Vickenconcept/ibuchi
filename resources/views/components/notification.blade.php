<!-- BEGIN: Notification Content -->
<div class="notification">
    @php
    $type = null;
    $msg = null;

    if (session()->has('success')) {
    $type = 'success';
    $msg = session('success');
    }

    if (session()->has('message') || session()->has('status')) {
    $type = 'info';
    $msg = session('status') ?? session('message');
    }

    if (session()->has('error')) {
    $type = 'error';
    $msg = session('error');
    }
    @endphp
    @if($type)
    <div id="notification" data-type="{{ $type }}" data-msg="{{ $msg }}"></div>
    @endif

    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="toastify-validation validation-msg" data-msg="{{ $error }}"></div>
    @endforeach
    @endif
</div>
