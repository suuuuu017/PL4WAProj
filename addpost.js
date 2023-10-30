document.addEventListener('DOMContentLoaded', function () {
    const dataContainer = document.getElementById('data-container');
    const appendButton = document.getElementById('append-button');
    const newDataInput = document.getElementById('new-data');

    appendButton.addEventListener('click', function () {
        const newData = newDataInput.value;
        if (newData.trim() !== '') {
            // Create a new div element to hold the data
            const newDiv = document.createElement('div');
            newDiv.textContent = newData;

            // Append the new data to the data container
            dataContainer.appendChild(newDiv);

            // Clear the input field
            newDataInput.value = '';
        }
    });