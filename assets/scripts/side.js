
function logging() {
    console.log('Everything is OK!');
    console.warn('Cannot Find Something...');
    console.error('Bruh');
    dumb();
}
function dumb() {
    const timerr = setTimeout(logging, 100);
}
