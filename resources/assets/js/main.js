const menuHeader = document.querySelector('.webedia__header__menu');
const btnMenuHeader = document.querySelector('.webedia__header__menu__btn');
const body = document.getElementsByTagName('body')[0];

const handlerBtnMenuHeaderClick = event => {
  body.classList.toggle('opened');
  menuHeader.classList.toggle('webedia__header__menu--opened');
};

btnMenuHeader.addEventListener('click', handlerBtnMenuHeaderClick);