const items = document.querySelectorAll('.gallery-item');
const modal = document.getElementById('imgModal');
const modalImg = document.getElementById('fullImg');
const closeBtn = document.querySelector('.close');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

let currentIndex = 0;

items.forEach((item, index) => {
  item.addEventListener('click', () => {
    modal.style.display = 'block';
    modalImg.src = item.querySelector('img').src; // শুধু img এর src নিবে
    currentIndex = index;
  });
});

closeBtn.onclick = () => modal.style.display = 'none';

nextBtn.onclick = () => {
  currentIndex = (currentIndex + 1) % items.length;
  modalImg.src = items[currentIndex].src;
};

prevBtn.onclick = () => {
  currentIndex = (currentIndex - 1 + items.length) % items.length;
  modalImg.src = items[currentIndex].src;
};

// ESC চাপলে modal বন্ধ
document.addEventListener('keydown', (e) => {
  if (e.key === "Escape") modal.style.display = 'none';
});

