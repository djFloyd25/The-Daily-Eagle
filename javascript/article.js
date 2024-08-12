document.addEventListener('DOMContentLoaded', function(event){
    event.preventDefault();

    const image = localStorage.getItem('image');
    const title = localStorage.getItem('title');
    const genre = localStorage.getItem('genre');
    const article = localStorage.getItem('article');

    document.getElementById('cs-article-image-main').src = image;
    document.getElementById('cs-article-title-main').textContent = title;
    document.getElementById('cs-article-text-main').textContent = article;
});
