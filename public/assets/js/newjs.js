function search_analyse() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('nomanalyse');

    for (i = 0; i < x.length; i++) {
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
    }
}


// get value
document.multiselect('#testSelect1').value;
// select all
document.multiselect('#testSelect1').selectAll();
// deselect all
document.multiselect('#testSelect1').deselectAll();
// set value
document.multiselect('#testSelect1').select(value);
// make a value enabled
document.multiselect('#testSelect1').setIsEnabled(value);
// set the click listener for checkbox with particular value
document.multiselect('#testSelect1').setCheckBoxClick(value, handler);
// destroy
document.multiselect('#testSelect1').destroy();
