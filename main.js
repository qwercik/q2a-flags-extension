window.addEventListener('load', function() {
    var flagButtons = document.getElementsByClassName('qa-form-light-button-flag');
    for (var item of flagButtons) {
        item.addEventListener('click', function () {
            alert('You have flagged a post!');
        });
    }
});