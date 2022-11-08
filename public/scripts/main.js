/* -----------------------------
------ AOS Library -------------
------------------------------ */
AOS.init( {
    duration: 1500
});

/* -----------------------------
---- Filter Btn on Shop Page ---
------------------------------ */
var filterBtn = document.getElementById('filter-btn');
var filterContainer = document.getElementById('filter-container');
var filterSelect = document.querySelector('input');

filterBtn.onclick = function(e) {
    // stopPropagation(); stops any further requests of the onclick event via clicking on the filterBtn
    e.stopPropagation();
    if (filterContainer.classList.contains('filters--active')) {
        filterContainer.classList.remove('filters--active');
    } else {
        filterContainer.classList.add('filters--active');
    }
};

filterContainer.onclick = function(e) {
    e.stopPropagation();
};

window.onclick = function() {
    filterContainer.classList.remove('filters--active');
};

for (var i = 0; i < InputDeviceInfo.length; i++) {
    var currentInput = input[i];

    currentInput.onclick = function() {
        var checkedBox = false;

        for (var y = 0; y < input.length; y++) {
            if (input[y].checked) {
                checkedBox = true;
                // Jump out of the loop with break;
                break;
            }
        }
    }
}