document.querySelector("#image-update").addEventListener("change", (event) => {
    const image = document.querySelector("#image_update");
    const cardImage = document.querySelector("#card_image_update");
    const [file] = event.target.files;

    if (file) {
        cardImage.classList.remove("hidden");
        image.src = URL.createObjectURL(file);
    }
});

document
    .getElementById("fileUpdate")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById("previewContainer");
        const filePreview = document.getElementById("filePreviewUpdate");

        if (file) {
            const fileURL = URL.createObjectURL(file);
            filePreview.src = fileURL;
            previewContainer.classList.remove("hidden");
        }
    });

document
    .getElementById("audioUpdate")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const audioPlayer = document.getElementById("audioPlayerUpdate");

        if (file) {
            const fileURL = URL.createObjectURL(file);
            audioPlayer.src = fileURL;
            audioPlayer.classList.remove("hidden");
            audioPlayer.play();
        }
    });

document
    .getElementById("videoUpdate")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const videoPlayer = document.getElementById("videoPlayerUpdate");

        if (file) {
            const fileURL = URL.createObjectURL(file);
            videoPlayer.src = fileURL;
            videoPlayer.classList.remove("hidden");
            videoPlayer.play();
        }
    });


document.querySelector("#image-input").addEventListener("change", (event) => {
    const image = document.querySelector("#image");
    const cardImage = document.querySelector("#card_image");
    const [file] = event.target.files;

    if (file) {
        cardImage.classList.remove("hidden");
        image.src = URL.createObjectURL(file);
    }
});

document
    .getElementById("fileInput")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const previewContainer = document.getElementById("previewContainer");
        const filePreview = document.getElementById("filePreview");

        if (file) {
            const fileURL = URL.createObjectURL(file);
            filePreview.src = fileURL;
            previewContainer.classList.remove("hidden");
        }
    });

document
    .getElementById("audioInput")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const audioPlayer = document.getElementById("audioPlayer");

        if (file) {
            const fileURL = URL.createObjectURL(file);
            audioPlayer.src = fileURL;
            audioPlayer.classList.remove("hidden");
            audioPlayer.play();
        }
    });

document
    .getElementById("videoInput")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];
        const videoPlayer = document.getElementById("videoPlayer");

        if (file) {
            const fileURL = URL.createObjectURL(file);
            videoPlayer.src = fileURL;
            videoPlayer.classList.remove("hidden");
            videoPlayer.play();
        }
    });
