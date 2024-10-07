// ==============================================================
    // Product Color Variation Add
// ==============================================================

document.addEventListener("DOMContentLoaded", function () {
    const colorVarAddButton = document.getElementById('colorVarAdd');
    const colorVariationContainer = document.getElementById('colorVariationContainer');
    const colorVariationTemplate = document.getElementById('colorVariationTemplate');

    if (colorVarAddButton && colorVariationContainer && colorVariationTemplate) {
        let rowCounter = 0;

        function addColorVariationRow() {
            rowCounter++;
            const newRow = colorVariationTemplate.cloneNode(true);
            newRow.style.display = 'block';
            newRow.id = ''; // Remove the id to prevent duplication
            colorVariationContainer.appendChild(newRow);

            const deleteButton = newRow.querySelector('.deleteColorVariation');
            const imageInput = newRow.querySelector('.variation-image-input');
            const image = newRow.querySelector('.variation-image');
            const deleteIcon = newRow.querySelector('.delete_uploadImage');

            if (deleteButton && imageInput && image && deleteIcon) {
                // Generate unique IDs for elements
                const uniqueId = `row-${rowCounter}`;
                imageInput.id = `variation-image-input-${uniqueId}`;
                image.id = `variation-image-${uniqueId}`;
                deleteButton.id = `deleteColorVariation-${uniqueId}`;
                deleteIcon.id = `delete_uploadImage-${uniqueId}`;

                deleteButton.addEventListener('click', function () {
                    newRow.remove();
                });

                // Initially hide the delete icon
                deleteIcon.style.display = 'none';

                // Image file input change
                imageInput.addEventListener('change', function () {
                    const selectedFile = imageInput.files[0];
                    if (selectedFile) {
                        const reader = new FileReader();

                        reader.onload = function (e) {
                            image.src = e.target.result;
                            deleteIcon.style.display = 'inline-block';
                        };

                        // Read the selected file as a data URL
                        reader.readAsDataURL(selectedFile);
                    }
                });

                deleteIcon.addEventListener('click', function () {
                    image.src = './assets/images/product-upload-icon.svg';
                    deleteIcon.style.display = 'none';
                });
            }
        }

        colorVarAddButton.addEventListener('click', function (e) {
            e.preventDefault();
            if (colorVariationContainer.style.display === 'none') {
                colorVariationContainer.style.display = 'block';
            }
            addColorVariationRow();
        });

        // Event delegation for deleting a color variation row
        colorVariationContainer.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('deleteColorVariation')) {
                const rowToDelete = event.target.closest('.color-variation');
                rowToDelete.remove();
            }
        });
    }
});


// ==============================================================
    // ck editor Textarea
// ==============================================================

document.addEventListener("DOMContentLoaded", function() {
    createEditor('#editor');
    createEditor('#productDesc');
    createEditor('#productSpecification');
    createEditor('#productSupport');
});

function createEditor(selector) {
    const element = document.querySelector(selector);
    if (element) {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    }
}


// ==============================================================
    // Product Image Upload
// ==============================================================

document.addEventListener("DOMContentLoaded", function () {
    const imageSections = [
        { inputId: 'profile-image-input1', imageId: 'profile-image1', deleteId: 'deleteImage1' },
        { inputId: 'profile-image-input2', imageId: 'profile-image2', deleteId: 'deleteImage2' },
        { inputId: 'profile-image-input3', imageId: 'profile-image3', deleteId: 'deleteImage3' },
    ];

    function handleImageUpload(section) {
        const fileInput = document.getElementById(section.inputId);
        const image = document.getElementById(section.imageId);
        const deleteIcon = document.getElementById(section.deleteId);

        if (fileInput && image && deleteIcon) {
            deleteIcon.style.display = 'none';

            fileInput.addEventListener('change', function () {
                const selectedFile = fileInput.files[0];
                if (selectedFile) {
                    const reader = new FileReader();

                    reader.onload = function (e) {
                        image.src = e.target.result;
                        deleteIcon.style.display = 'inline-block';
                    };

                    reader.readAsDataURL(selectedFile);
                }
            });

            deleteIcon.addEventListener('click', function () {
                image.src = './assets/images/product-upload-icon.svg';
                deleteIcon.style.display = 'none';
            });
        }
    }

    imageSections.forEach(handleImageUpload);
});





