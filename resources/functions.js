$(document).ready(function() {
   $("#dropdown-content").hide();
   $("#account-link").click(function(){

   $("#dropdown-content").toggle('slow');
   });
});


/**
 * Function that builds an xmlhttp object deppending on the browser type
 * @return an xmlhttp object.
 */
function getXMLHTTP() {
    var xmlhttp;

    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return xmlhttp;
}

/**
 * Function that modifies the content of the mentions select box with the mentions of
 * the selected degree.
 */
function loadProducts(brand_id) {
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('brands').innerHTML = this.responseText;
        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/brands/products/" + brand_id, true);
    xmlhttp.send();
}

function loadProduct(product_id) {
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('brands').innerHTML = this.responseText;
        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/product/view/" + product_id, true);
    xmlhttp.send();
}

/**
 * Function that modifies the content of the mentions select box with the mentions of
 * the selected degree.
 */
function addToCart(product_info) {
    var product_info = product_info.split(',');
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var responseArray = xmlhttp.responseText.split("||");
            document.getElementById('num_products_cart').innerHTML = responseArray[0];
        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/cart/add/" + product_info[0] +  "/" + product_info[2] + "/" + product_info[1], true);
    xmlhttp.send();
}

/**
 * Function that modifies the content of the mentions select box with the mentions of
 * the selected degree.
 */
function delFromCart(product_id) {
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var responseArray = xmlhttp.responseText.split("||");
            if (responseArray[0] === '0' || responseArray[1] === '0'){
                document.getElementById('cart_products').innerHTML ="No products found in your cart!";
                document.getElementById('num_products_cart').innerHTML ="";

            }else{
              document.getElementById('num_products_cart').innerHTML = responseArray[0];
              document.getElementById('cart_product_' + product_id).innerHTML = "";
              document.getElementById('total_price').innerHTML = "Total: " + responseArray[1] + "€";
            }


        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/cart/delete/" + product_id, true);
    xmlhttp.send();
}

function loadCartSize() {
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var responseArray = xmlhttp.responseText.split("||");
            if (responseArray[0] === '0'){
                document.getElementById('num_products_cart').innerHTML = "";
            }else{
                document.getElementById('num_products_cart').innerHTML = responseArray[0];
            }
        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/cart/size", true);
    xmlhttp.send();
}

function checkCredentials() {
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('cart_products').innerHTML = this.responseText;
        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/user/confirmPurchase", true);
    xmlhttp.send();
}

function showEditProfileForm() {
    var xmlhttp = getXMLHTTP();
    /* What to do when we get the asynchormous response from the server */
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('user_info').innerHTML = this.responseText;
        }
    }

    /* Sending the asynchronous request to the server */
    xmlhttp.open("GET", "/~tdiw-h1/user/editProfile", true);
    xmlhttp.send();
}
