function showToastSuccess(content) {
    document.querySelector('.toastText').innerHTML = content
    document.querySelector('.toastalert').style.display = "flex"
    setTimeout(() => {
        document.querySelector('.toastalert').style.display = "none"
    }, 2000);
}
function showToastError(content) {
    document.querySelector('.toasterrorText').innerHTML = content
    document.querySelector('.toasterror').style.display = "flex"
    setTimeout(() => {
        document.querySelector('.toasterror').style.display = "none"
    }, 2000);
}
