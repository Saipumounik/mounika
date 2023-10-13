let image = document.querySelectorAll('.image');
let btn = document.querySelectorAll('button');
let footer = document.getElementsByClassName('footer')[0];

let no_of_image = image.length;
let curr_image_index = 0;
let intervalId;  


const autoplayInterval = 3000; 


function moveToNextImage() {
    if (curr_image_index < no_of_image - 1) {
        image[curr_image_index].classList.remove("active");
        curr_image_index++;
        image[curr_image_index].classList.add("active");
    } else {
        clearInterval(intervalId); 
    }
    footer.innerHTML = image[curr_image_index].getAttribute('data-iamge-type');
}

// Start the autoplay
intervalId = setInterval(moveToNextImage, autoplayInterval);


for (b of btn) {
    b.addEventListener('click', move);
}

function move(e) {
    clearInterval(intervalId); 
    
    if (e.target.id == 'left') {
        if (curr_image_index > 0) {
            image[curr_image_index].classList.remove("active");
            curr_image_index--;
            image[curr_image_index].classList.add("active");
        } else {
            return;
        }
    }

    if (e.target.id == 'right') {
        if (curr_image_index < no_of_image - 1) {
            image[curr_image_index].classList.remove("active");
            curr_image_index++;
            image[curr_image_index].classList.add("active");
        } else {
            return;
        }
    }

    footer.innerHTML = image[curr_image_index].getAttribute('data-iamge-type');

   
    intervalId = setInterval(moveToNextImage, autoplayInterval);
}



