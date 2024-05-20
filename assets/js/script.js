document.addEventListener("DOMContentLoaded", function() {
    var loading = document.getElementById('loading');
    var content = document.getElementById('content');

    window.onload = function() {
        loading.style.display = 'none';
        content.style.display = 'block';
        document.body.style.overflow = 'auto';
    };
});