const types = document.querySelectorAll('.type');
const sums = document.querySelectorAll('.sum');
const total = document.querySelector('#total');

const update = () => {
    let value = 0
    if (!sums[0].disabled) {
        value += parseInt(sums[0].value);
    }
    if (!sums[1].disabled) {
        value += parseInt(sums[1].value);
    }
    if (!sums[2].disabled) {
        value += parseInt(sums[2].value);
    }
    total.value = value;

}

types[0].addEventListener('click', () => {
    if (sums[0].disabled) {
        sums[0].disabled = false;
    } else if (!sums[0].disabled) {
        sums[0].disabled = true;
    }
    update();
});

types[1].addEventListener('click', () => {
    if (sums[1].disabled) {
        sums[1].disabled = false;
    } else if (!sums[1].disabled) {
        sums[1].disabled = true;
    }
    update();
});

types[2].addEventListener('click', () => {
    if (sums[2].disabled) {
        sums[2].disabled = false;
    } else if (!sums[2].disabled) {
        sums[2].disabled = true;
    }
    update();
});

sums[0].addEventListener('change', () => {
    update();
});
sums[1].addEventListener('change', () => {
    update();
});
sums[2].addEventListener('change', () => {
    update();
});
