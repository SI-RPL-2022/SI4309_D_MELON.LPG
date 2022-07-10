const img = document.querySelector('.img-default');
const fileInput = document.querySelector('.input-file');

fileInput.addEventListener('change', (e) => {
    const imgUrl = URL.createObjectURL(e.target.files?.[0]);

    img.src = imgUrl;
})
