window.addEventListener('load', function() {
    var flagButtons = document.getElementsByClassName('qa-form-light-button-flag');
    for (var item of flagButtons) {
        item.removeAttribute('onclick');
        item.setAttribute('type', 'button');
        var element = item;
        item.addEventListener('click', function (element) {
            var post = this.parentNode;
            var flagReason = document.createElement('input');
            flagReason.setAttribute('type', 'text');
            flagReason.setAttribute('class', 'qa-form-tall-text');
            flagReason.setAttribute('name', 'flag_details');

            post.appendChild(flagReason);
        });
    }
});