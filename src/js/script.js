var body = document.querySelector('body');
var article_content = document.querySelector('article.content');
var add_button = document.querySelector('.add-button');
var content_form = document.querySelector('.content-form');
var content_item = document.querySelector('.content-item');
var content_item_file = document.querySelector('.content-item img');
var content_item_title = document.querySelector('.content-item-title');
var content_item_description = document.querySelector('.content-item-description');
var content_item_button = document.querySelector('.content-item a');
var content_item_modify_button = document.querySelector('.content-item input');

var modify_button = document.querySelector('.modify-button');
var modify_form = document.querySelector('.modify-form');

add_button.addEventListener('click', function(event){
    event.preventDefault();
    content_form.classList.add('open');
    body.style.overflow = "hidden";
});