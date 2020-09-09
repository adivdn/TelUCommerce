// console.log("running");

let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name: "Midoriya Tshirt",
        tag: "midoriyatshirt",
        price: 15,
        inCart:0
    },
    {
        name: "Tanjiro Tshirt",
        tag: "tanjirotshirt",
        price: 25,
        inCart:0
    },
    {
        name: "Gon Tshirt",
        tag: "gontshirt",
        price: 20,
        inCart:0
    },
    {
        name: "Meliodas Tshirt",
        tag: "meliodastshirt",
        price: 15,
        inCart:0 
    }
];

for (let i=0; i < carts.length; i++){
    carts[i].addEventListener('click', () =>{
        // console.log("added to cart")
         cartNumbers(products[i]);
         totalCost(products[i]);
    })
}

function onLoadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if ( productNumbers ){
        document.querySelector('.cart .cart-items').textContent = productNumbers;
    }
}

 function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    // console.log(productNumbers);
    // console.log(typeof productNumbers);
    productNumbers = parseInt(productNumbers);
    // console.log(typeof productNumbers);
   
    if( productNumbers ){
         localStorage.setItem('cartNumbers', productNumbers + 1);
         document.querySelector('.cart .cart-items').textContent = productNumbers + 1;
    } else {
         localStorage.setItem('cartNumbers', 1);
         document.querySelector('.cart .cart-items').textContent = 1;
    }

    setItems(product);
 }

 function setItems(product){
    //  console.log("inside of setItems function");
    //  console.log("My product is",product);
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if(cartItems != null){

        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag] : product
            }
        } else {
            
        }
        cartItems[product.tag].inCart += 1;
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
 }

 function totalCost(product){
    let cartCost = localStorage.getItem('totalCost');

    console.log("My Cart Cost is", cartCost);
    console.log(typeof cartCost);

    if (cartCost != null) {
       cartCost = parseInt(cartCost);
       localStorage.setItem("totalCost", cartCost + product.price);
        
    } else {
        localStorage.setItem("totalCost", product.price);
        
    }

}

function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector
    (".products");
    
    let cartCost = localStorage.getItem('totalCost');

    console.log(cartItems);
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                
                <img class="rounded-top" src="./image/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            <div class="price">
            ${item.price}
            </div>
            <div class="quantity">
                <ion-icon name="arrow-undo-circle-outline"></ion-icon>
                <span>${item.inCart}</span>
                <ion-icon name="arrow-redo-circle-outline"></ion-icon>
            </div>

            <div class="total">
                <span><h6 class="basketTotalTitle">
                    $${item.inCart * item.price},00
                </h6></span>
                <span><ion-icon name="trash-outline"></ion-icon></span>
                
            </div>
            `
        });

        productContainer.innerHTML += `
            <div class="basketTotalContainer">
                <h6 class="basketTotalTitle">
                    Basket Total
                </h6>
                <h6 class="basketTotal">
                    $${cartCost},00
                </h6>
        `
    }
 }

 onLoadCartNumbers();

 displayCart();

//  <ion-icon name="trash-outline"></ion-icon>