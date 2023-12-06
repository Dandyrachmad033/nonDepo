function cloneForm() {
    // Clone the template row
    var cloneRow = $(".clone-this:first").clone();

    // Clear the input values in the cloned row
    cloneRow.find("input").val("");
    cloneRow.find("button").show();

    // Append the cloned row to the table body
    $("#dataTable tbody").append(cloneRow);
}

function removeForm(button) {
    var clonedRows = $("#dataTable tbody tr.clone-this");
    // Select the last cloned row and remove it
    if (clonedRows.length > 1) {
        // Remove the last cloned row
        clonedRows.last().remove();
    }
}
