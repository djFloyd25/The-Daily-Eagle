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

const submitArticle = document.getElementById('submit');



submitArticle.addEventListener('click', function(event) {
    event.preventDefault();

    const image = document.getElementById('url').value;
    const title = document.getElementById('title').value;
    const article = document.getElementById('article-content').value;

    const usernameElement = document.getElementById('username');
    const username = usernameElement.textContent || usernameElement.innerText;

    const radios = document.querySelectorAll('input[name="genre"]');
    let selectedValue = null;

    // Iterate through the radio buttons to find the checked one
    for (const radio of radios) {
        if (radio.checked) {
            selectedValue = radio.value;
            break;
        }
    }

    if (image === '' || title === '' || selectedValue == null) {
        alert('Please fill in all fields and select a genre.');
        return;
    }

    document.getElementById('hiddenImage').value = image;
    document.getElementById('hiddenTitle').value = title;
    document.getElementById('hiddenGenre').value = selectedValue;
    document.getElementById('hiddenArticle').value = article;
    document.getElementById('hiddenUsername').value = username;

    // Submit the hidden form
    document.getElementById('hiddenForm').submit();

});