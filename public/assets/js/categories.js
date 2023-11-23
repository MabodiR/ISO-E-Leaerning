$(document).ready(function() {
    // Make an AJAX request to fetch categories from your API
    $.ajax({
        url: '/api/categories', // Replace with your actual API endpoint
        method: 'GET',
        dataType: 'json',
        success: function(categories) {
            // Populate the dropdown with fetched categories
            populateDropdown(categories);
        },
        error: function(error) {
            console.error('Error fetching categories:', error);
        }
    });

    function populateDropdown(categories) {
        var selectDropdown = $('#categoryDropdown');

        // Loop through categories and append options to the dropdown
        $.each(categories, function(index, category) {
            selectDropdown.append('<option value="' + category.id + '">' + category.name + '</option>');
        });
    }
});