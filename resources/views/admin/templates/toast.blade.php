@if (session('message_toast'))
    <div class="toast-message {{ session('success_toast') ? 'success' : 'error'  }}">
        <a class="toast-message-close"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="toast-message-container">
            <p class="title">{{ session('message_toast') }}</p>
        </div>
    </div>
@endif
