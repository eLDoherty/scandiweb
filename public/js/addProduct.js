// Display input attribute and validated if empty
let dvdWrapper = document.getElementsByClassName('wrapper__dvd')[0].style;
let furnitureWrapper = document.getElementsByClassName('wrapper__furniture')[0].style;
let bookWrapper = document.getElementsByClassName('wrapper__book')[0].style;
let selectOption = document.getElementById('productType');

// Input field 
let inputSize = document.getElementById('size');
let inputWeight = document.getElementById('weight');
let inputHeight = document.getElementById('height');
let inputWidth = document.getElementById('width');
let inputLength = document.getElementById('length');

const changeVal = selectOption.addEventListener('change' , ()=> {
                        selectOption.value == "dvd" ? dvdWrapper.display = "block" :  dvdWrapper.display = "none";
                        selectOption.value == "furniture" ? furnitureWrapper.display = "block" :  furnitureWrapper.display = "none";
                        selectOption.value == "book" ? bookWrapper.display = "block" :  bookWrapper.display = "none";
                            if( selectOption.value == "dvd") {
                                inputSize.setAttribute("required" , "");
                                inputWeight.removeAttribute("required");
                                inputHeight.removeAttribute("required");
                                inputWidth.removeAttribute("required");
                                inputLength.removeAttribute("required");
                            } else if( selectOption.value == "book" ) {
                                inputWeight.setAttribute("required" , "");
                                inputSize.removeAttribute("required");
                                inputHeight.removeAttribute("required");
                                inputWidth.removeAttribute("required");
                                inputLength.removeAttribute("required");
                            } else if( selectOption.value == "furniture" ) {
                                inputHeight.setAttribute("required" , "");
                                inputWidth.setAttribute("required" , "");
                                inputLength.setAttribute("required" , "");
                                inputWeight.removeAttribute("required");
                                inputSize.removeAttribute("required");
                            } else {
                                console.log("Choose type");
                            }
                    })