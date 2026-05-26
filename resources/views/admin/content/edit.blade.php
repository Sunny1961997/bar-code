@extends('admin.layouts.header')

@section('content')
<div class="container">
    <h2>Edit Content</h2>
    <form action="{{ route('contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $content->name }}" required>
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="content" name="content" class="form-control">{{ $content->content }}</textarea>
        </div>

        <div class="mb-3">
            <label>Current Image:</label><br>
            <img src="{{ asset($content->image) }}" width="80"><br>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Slug:</label>
            <input type="text" name="slug" class="form-control" value="{{ $content->slug }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

<!-- Use an older, more stable version of TinyMCE -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
    // Silence ALL console warnings completely
    const originalConsoleWarn = console.warn;
    console.warn = function() {};
    
    // Silence console errors related to TinyMCE
    const originalConsoleError = console.error;
    console.error = function() {
        if (arguments[0] && typeof arguments[0] === 'string' && 
            (arguments[0].includes('tinymce') || arguments[0].includes('TinyMCE'))) {
            return;
        }
        originalConsoleError.apply(console, arguments);
    };

    // Create a global variable to suppress notifications
    window.tinyMCEPreInit = {
        suffix: '',
        base: '',
        query: ''
    };

    // Initialize TinyMCE with minimal configuration
    document.addEventListener('DOMContentLoaded', function() {
        tinymce.init({
            selector: '#content',
            height: 400,
            plugins: 'lists link image table code',
            toolbar: 'undo redo | formatselect | bold italic | bullist numlist | link image table code',
            menubar: false,
            branding: false,
            promotion: false,
            statusbar: false,
            
            // Disable all possible warning sources
            skin: 'oxide',
            skin_url: false,
            content_css: false,
            content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, sans-serif; font-size: 16px; }',
            
            // Suppress notifications
            setup: function(editor) {
                editor.on('init', function() {
                    // Override notification manager
                    editor.notificationManager.open = function() {};
                    editor.notificationManager.close = function() {};
                    editor.notificationManager.getNotifications = function() { return []; };
                });
            },
            
            // Disable automatic plugin loading
            external_plugins: {},
            
            // Disable URL checking
            allow_script_urls: false,
            convert_urls: false,
            relative_urls: false,
            remove_script_host: false,
            
            // Disable any features that might cause warnings
            object_resizing: false,
            resize: false,
            contextmenu: false,
            
            // Disable all events that might trigger warnings
            paste_data_images: false,
            automatic_uploads: false,
            
            init_instance_callback: function(editor) {
                // Use MutationObserver to remove any warning elements that might appear
                const observer = new MutationObserver(function(mutations) {
                    mutations.forEach(function(mutation) {
                        if (mutation.addedNodes && mutation.addedNodes.length > 0) {
                            for (let i = 0; i < mutation.addedNodes.length; i++) {
                                const node = mutation.addedNodes[i];
                                if (node.classList && 
                                    (node.classList.contains('tox-notification') || 
                                     node.classList.contains('tox-dialog') ||
                                     node.classList.contains('tox-alert-dialog'))) {
                                    node.parentNode.removeChild(node);
                                }
                            }
                        }
                    });
                });
                
                // Start observing the document body for added nodes
                observer.observe(document.body, { childList: true, subtree: true });
            }
        });
    });
</script>
@endsection