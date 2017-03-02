import axios from 'axios';
import { posts } from './routes'
const formPosts = document.getElementById('form_posts');

const getValue = el => formPosts.querySelector(el).value;

const getFormFieldValues = () => ({
  title: getValue('#title'),
  subtitle: getValue('#subtitle'),
  image: getValue('#image'),
  description: getValue('#description'),
  text: getValue('#text')
});

const clearInputsForm = () => {
  formPosts
    .querySelectorAll('input[type="text"], textarea')
    .forEach(input => {
      input.value = '';
    });
};

const appendNewPostInList = ({ data }) => {
  const tr = `<tr><td>${data.title}</td></tr>`;
  const tbody = document.querySelector('#posts_list_table tbody');
  tbody.innerHTML = tbody.innerHTML + tr;
};

const showSuccessMessage = () => alert("Post created successfully!");

const handleCallbackFormPost = ({ data }) => {
  clearInputsForm();
  showSuccessMessage();
  appendNewPostInList(data);
};

const handleErrorFormPost = (e) => {
  console.log(e);
  alert("Ops... ");
};

const handleSubmitFormPosts = event => {
  event.preventDefault();

  axios.post(posts.STORE, getFormFieldValues())
        .then(handleCallbackFormPost)
        .catch(handleErrorFormPost);

};

formPosts.addEventListener('submit', handleSubmitFormPosts, false);