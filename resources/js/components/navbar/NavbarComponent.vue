<template>
    <header style="text-align: center" class="gradiant my-3">
        <div class="logo" :style="{ 'background-image': 'url(' + image + ')' }">

        </div>
        <nav>
            <ul class="topmenu">
                <li><a href="/home" class="submenu-link">Home</a>
                    <ul class="submenu">
                        <li><a href="/login">Log In</a></li>
                        <li><a href="/register">Sign Up</a></li>
                        <li><a href="/logout">Log Out</a></li>
                    </ul>
                </li>
                <li><a href="/" class="submenu-link">All Products</a>
                    <ul class="submenu">
                        <li><a href="/categories">Categories</a></li>
                    </ul>
                </li>
                <li><a href="about" class="submenu-link">About as</a>
                    <ul class="submenu">
                        <li><a href="about/history">History</a></li>
                        <li><a href="about/awards">Awards</a></li>
                        <li><a href="about/contact">Contact</a></li>
                    </ul>
                </li>
                <li><a href="/basket"><i class="fa fa-shopping-basket" aria-hidden="true"></i><br>Basket</a></li>
                </ul>
        </nav>
    </header>
</template>

<script>
export default {
    data(){
        return {
            image: "https://techtoday.in.ua/wp-content/uploads/2019/01/appliance-electronics-industry.jpg"
        }
    }
};
</script>

<style scoped>
* {box-sizing: border-box;}
body {
    margin: 0;
    background: #f2f2f2;
}

header a {
    display: block;
    text-decoration: none;
    outline: none;
    transition: .3s ease-in-out;
}
.logo {
    height: 200px;
    color: #D5B45B;
    font-family: 'Playfair Display', serif;
    font-size: 2.5em;
    padding: 50px 0;
}
nav {
    display: table;
    margin: 0 auto;
}
nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}
.topmenu:after {
    content: "";
    display: table;
    clear: both;
}
.topmenu > li {
    width: 25%;
    float: left;
    position: relative;
    font-family: 'Open Sans', sans-serif;
}
.topmenu > li > a {
    text-transform: uppercase;
    font-size: 14px;
    font-weight: bold;
    color: #404040;
    padding: 15px 30px;
}
.topmenu li a:hover {color: #D5B45B;}
.submenu-link:after {
    content: "\f107";
    font-family: "FontAwesome";
    color: inherit;
    margin-left: 10px;
}
.submenu {
    background: #273037;
    position: absolute;
    left: 0;
    top: 100%;
    z-index: 5;
    width: 180px;
    opacity: 0;
    transform: scaleY(0);
    transform-origin :0 0;
    transition: .5s ease-in-out;
}
.submenu a {
    color: white;
    text-align: left;
    padding: 12px 15px;
    font-size: 13px;
    border-bottom: 1px solid rgba(255,255,255,.1);
}
.submenu li:last-child a {border-bottom: none;}
.topmenu > li:hover .submenu {
    opacity: 1;
    transform: scaleY(1);
}
</style>
