const successTimeout = setTimeout(hideSuccess, 3000);

function hideSuccess() {
    let message = document.querySelector('#message');
    message.classList = 'hidden';
    console.log(message);
}
