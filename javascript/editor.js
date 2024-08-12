document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.querySelector('#cs-header .cs-dropdown');
    const dropdownContent = document.querySelector('#cs-header .cs-drop-ul');

    dropdown.addEventListener('click', function(event) {
        event.stopPropagation();
        dropdownContent.classList.toggle('cs-active');
        dropdown.classList.toggle('cs-active');
    });

    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', function(event) {
        if (!dropdown.contains(event.target)) {
            dropdownContent.classList.remove('cs-active');
            dropdown.classList.remove('cs-active');
        }
    });
});

const submit = document.getElementById('submit');

submit.addEventListener('click', function(event) {
    event.preventDefault();

    const image = document.getElementById('article-url').value;
    const title = document.getElementById('title').value;
    const article = document.getElementById('article-content').value;
    const genre = document.getElementById('genre').value;
    const username = document.getElementById('author').value;

    if (image === '' || title === '' || genre === '') {
        alert('Please fill in all fields and select a genre.');
        return;
    }

    document.getElementById('hiddenImage').value = image;
    document.getElementById('hiddenTitle').value = title;
    document.getElementById('hiddenGenre').value = genre;
    document.getElementById('hiddenArticle').value = article;
    document.getElementById('hiddenUsername').value = username;

    // Submit the hidden form
    document.getElementById('hiddenForm').submit();

});
