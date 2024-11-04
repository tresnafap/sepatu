// Select necessary DOM elements
const wrapper = document.querySelector(".slider__wepper");
const menuItems = document.querySelectorAll(".menu__item");
const currentProductImg = document.querySelector(".product-img");
const currentProductTitle = document.querySelector(".product__title");
const currentProductPrice = document.querySelector(".product__price");
const currentProductSubtitle = document.querySelector(".product__subtitle");
const currentProductSizes = document.querySelectorAll(".size");
const currentProductColors = document.querySelectorAll(".color");
const productBtn = document.querySelector(".product__button");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");
const merkInput = document.querySelector("#merk");

// Product data
const products = [
    {
        id: 1,
        title: "VANS",
        price: "1.500.00",
        subtitle: "Sejak debutnya pada tahun 1977, siluet low-top ini telah memantapkan dirinya sebagai ikon di dunia skate, musik, dan mode.",
        colors: [
            {
                code: "pink",
                img: "assets/img/vans.png",
            },
            {
                code: "white",
                img: "assets/img/vvv.png",
            },
        ],
    },
    {
        id: 2,
        title: "ONITSUKA",
        price: "1.000.00",
        subtitle: "Keterangan Onitsuka",
        colors: [
            {
                code: "#faf0e6",
                img: "assets/img/nitdatar.png",
            },
            {
                code: "yellow",
                img: "assets/img/onityelloww.png",
            },
        ],
    },
    {
        id: 3,
        title: "ADIDAS",
        price: "2.500.00",
        subtitle: "Keterangan Adidas",
        colors: [
            {
                code: "teal",
                img: "assets/img/adidas (1).png",
            },
            {
                code: "whitesmoke",
            },
        ],
    },
    {
        id: 4,
        title: "CONVERSE",
        price: "2.500.00",
        subtitle: "Keterangan Converse",
        colors: [
            {
                code: "black",
                img: "assets/img/verse.png",
            },
            {
                code: "white",
                img: "assets/img/versewhitee.png",
            },
        ],
    },
    {
        id: 5,
        title: "NEW BALANCE",
        price: "2.500.00",
        subtitle: "Keterangan NB",
        colors: [
            {
                code: "gray",
                img: "assets/img/nb baru.png",
            },
            {
                code: "whitesmoke",
            },
        ],
    },
];

// Initialize the product display
let shoesProduct = products[0];
updateProductDetails(shoesProduct);

// Event listeners for menu items to slide and update products
menuItems.forEach((item, index) => {
    item.addEventListener("click", () => {
        // Slide navbar
        wrapper.style.transform = `translateX(${-100 * index}vw)`;

        // Update product details
        shoesProduct = products[index];
        updateProductDetails(shoesProduct);
    });
});

// Function to update product details
function updateProductDetails(product) {
    currentProductTitle.textContent = product.title;
    currentProductPrice.textContent = "IDR " + product.price;
    currentProductSubtitle.textContent = product.subtitle;
    currentProductImg.src = product.colors[0].img;

    // Update colors
    currentProductColors.forEach((color, index) => {
        if (product.colors[index]) {
            color.style.backgroundColor = product.colors[index].code;
            color.style.display = 'block';
        } else {
            color.style.display = 'none';
        }
    });
}

// Event listeners for product colors
currentProductColors.forEach((color, index) => {
    color.addEventListener("click", () => {
        if (shoesProduct.colors[index]) {
            currentProductImg.src = shoesProduct.colors[index].img;
        }
    });
});

// Event listeners for product sizes
currentProductSizes.forEach((sizeElement) => {
    sizeElement.addEventListener("click", () => {
        currentProductSizes.forEach((size) => {
            size.style.backgroundColor = "white";
            size.style.color = "black";
        });
        sizeElement.style.backgroundColor = "black";
        sizeElement.style.color = "white";

        const selectedSize = sizeElement.getAttribute('data-size');
        document.querySelector('#size').value = selectedSize; // Set ukuran ke input tersembunyi
    });
});

// Event listener for the product button
productBtn.addEventListener("click", () => {
    // Set the shoe brand in the payment form
    merkInput.value = shoesProduct.title;
    
    // Show the payment form
    payment.style.display = "flex";
});

// Event listener for the close button
close.addEventListener("click", () => {
    payment.style.display = "none";
});
