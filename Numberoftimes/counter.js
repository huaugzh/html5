window.addEventListener('DOMContentLoaded', () => {
    const counterElement = document.getElementById('counter');
    if (!counterElement) return;

    // 取得 PHP 回傳的 JSON
    fetch('counter.php')
        .then(response => response.json())
        .then(data => {
            counterElement.innerText = data.count;
        })
        .catch(err => {
            console.error('無法取得瀏覽次數:', err);
        });
});
