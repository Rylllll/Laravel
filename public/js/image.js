function toggleFullscreen() {
    var overlay = document.getElementById('imageOverlay');
    var closeButton = document.getElementById('closeButton');
    var imageContainer = document.getElementById('imageContainer');
    var fullscreenImage = document.getElementById('fullscreenImage');
    overlay.classList.toggle('hidden');
    closeButton.addEventListener('click', toggleFullscreen);
    if (!overlay.classList.contains('hidden')) {
        imageContainer.style.height = window.innerHeight + 'px';
        fullscreenImage.style.maxHeight = window.innerHeight - 80 + 'px';
        document.body.classList.add('overflow-hidden');
    } else {
        document.body.classList.remove('overflow-hidden');
    }
}