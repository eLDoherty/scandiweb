// Display input attribute
const productType = document.getElementById('productType')
                    .addEventListener('change' , ()=> {
                        let dvdWrapper = document.getElementsByClassName('wrapper__dvd')[0].style;
                        return dvdWrapper.display == "none" ?  dvdWrapper.display = "block" : dvdWrapper.display = "none";
                    })