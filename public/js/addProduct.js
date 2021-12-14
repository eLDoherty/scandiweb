// Display input attribute
let dvdWrapper = document.getElementsByClassName('wrapper__dvd')[0].style;
let furnitureWrapper = document.getElementsByClassName('wrapper__furniture')[0].style;
let bookWrapper = document.getElementsByClassName('wrapper__book')[0].style;
let selectOption = document.getElementById('productType');
const changeVal = selectOption.addEventListener('change' , (val)=> {
                        selectOption.value == "dvd" ? dvdWrapper.display = "block" :  dvdWrapper.display = "none";
                        selectOption.value == "furniture" ? furnitureWrapper.display = "block" :  furnitureWrapper.display = "none";
                        selectOption.value == "book" ? bookWrapper.display = "block" :  bookWrapper.display = "none";
                    })