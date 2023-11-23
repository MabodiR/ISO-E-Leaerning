    // Listen to the change event of the toggle dropdown
    $('#toggleDropdown').change(function() {
        var toggleValue = $(this).val();

        // Toggle the visibility of the course container based on the selected option
        if (toggleValue === 'hide') {
            $('#courseContainer').hide();
        } else if (toggleValue === 'show') {
            $('#courseContainer').show();
        }
    });