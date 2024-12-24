$(document).ready(function () {
    $("#registrationForm").on("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting traditionally

        const formData = $(this).serializeArray(); // Collect form data
        let formattedOutput = "<h3>Submitted Information</h3><ul>";

        formData.forEach(field => {
            formattedOutput += `<li><strong>${field.name}:</strong> ${field.value}</li>`;
        });

        formattedOutput += "</ul>";

        $("#output").html(formattedOutput).fadeIn();
    });
});
