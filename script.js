var article_content = document.querySelector('article.content');
var add_button = document.querySelector('.add-button');
var content_form = document.querySelector('.content-form');
var content_item = document.querySelector('.content-item');
var content_item_file = document.querySelector('.content-item img');
var content_item_title = document.querySelector('.content-item-title');
var content_item_description = document.querySelector('.content-item-description');

add_button.addEventListener('click', function(event){
    event.preventDefault();
    content_form.classList.add('open');
    
});

if(!content_form.classList.contains('open')){
    content_form.classList.remove('open');
    
}

content_item_title.addEventListener('click', function(event){
    event.preventDefault();
    this.setAttribute('contenteditable', 'true');
});

content_item_description.addEventListener('click', function(event){
    event.preventDefault();
    this.setAttribute('contenteditable', 'true');
});

content_item_file.addEventListener('click', function(event){
    event.preventDefault();
    
});
