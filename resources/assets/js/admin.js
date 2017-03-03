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

const showSuccessMessage = () => {
  const HTMLMessage = '<div class="alert alert-success">Post created successfully!</div>';
  document.querySelector('.container-success').innerHTML = HTMLMessage;
};

const handleErrorFormPost = (e) => {
  alert("Ops... ");
};

const isGreatherThan = len => val => len < val.trim().length;

const validationRules = [
  {
    field: 'title', 
    validations: [
      [isGreatherThan(3), 'Minimum Title length of 3 is required.']
    ]
  },
  {
    field: 'subtitle', 
    validations: [
      [isGreatherThan(3), 'Minimum Name length of 3 is required.']
    ]
  },
  {
    field: 'image', 
    validations: [
      [isGreatherThan(10), 'Minimum Image length of 10 is required.']
    ]
  },
  {
    field: 'description', 
    validations: [
      [isGreatherThan(10), 'Minimum Description length of 10 is required.']
    ]
  },
  {
    field: 'text', 
    validations: [
      [isGreatherThan(10), 'Minimum Text length of 10 is required.']
    ]
  }
];

const makeValidations = (input, validationRules) => (
  validationRules.map(rule => (
    rule.validations.map(([test, msgError]) => (
      !test(input[rule.field]) ? msgError : null
    ))
  )).filter(errors => errors.filter(e => !!e).length > 0)
);

const getHTMLErrorMessages = (errors) => {
  if (errors.length <= 0) return null;
  return (
    `<div class="alert alert-danger">
      ${errors.map(error => (
        error.join('</div><div class="alert alert-danger">')
      )).join('</div><div class="alert alert-danger">')}
    </div>`
  )
}

const showErrorMessages = (errorMessagesHTML) => {
  document.querySelector('.container-success').innerHTML = '';
  document.querySelector('.container-errors').innerHTML = errorMessagesHTML;
}

const hideErrorMessages = () => {
  document.querySelector('.container-errors').innerHTML = '';
};

const handleErrorsValidation = () => {
  const errors = makeValidations(getFormFieldValues(), validationRules);
  if (errors.length > 0) {
    showErrorMessages(getHTMLErrorMessages(errors));
    return false;
  }
  return true;
};

const handleCallbackFormPost = ({ data }) => {
  clearInputsForm();
  showSuccessMessage();
  hideErrorMessages();
  appendNewPostInList(data);
};

const handleSubmitFormPosts = event => {
  event.preventDefault();
  event.stopPropagation();

  if (handleErrorsValidation()) {
    axios.post(posts.STORE, getFormFieldValues())
        .then(handleCallbackFormPost)
        .catch(handleErrorFormPost);
  }
};

formPosts.addEventListener('submit', handleSubmitFormPosts, false);