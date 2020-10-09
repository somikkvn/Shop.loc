<template>
    <table>
        <tr class="row">
            <div class="product-item" v-for="category in categories" >
                <td><img class="displayed" src="https://xn--80aklk6at.xn--j1amh/image/cache/catalog/mytech/img/news-blog/bytovaya-tehnika/bytovaya-tehnika-jeto-produkcija-desjatkov-izvestnyh-kompanij/bytovaya-tehnika-jeto-produkcija-desjatkov-izvestnyh-kompanij-800x600.jpg"></td>
                <div class="product-list">
                    <th class="item col-sm">{{category.name}}</th>
                    <th class="item col-sm">Категория: {{category.code}}</th>
                    <td class="price col-sm">{{category.price}} грн</td>
                    <td><a href="" class="button">В корзину</a></td>
                </div>
            </div>
        </tr>
    </table>

</template>

<script>
export default {
    props: {
        categories: {
            // type: Array,
            default: []
        }
    },
    // data()
}
</script>

<style scoped>
* {box-sizing: border-box;}
.product-item {
    width: 300px;
    text-align: center;
    margin: 0 auto;
    border-bottom: 2px solid #F5F5F5;
    background: white;
    font-family: "Open Sans";
    transition: .3s ease-in;
}
.product-item:hover {border-bottom: 2px solid #fc5a5a;}
.product-item img {
    display: block;
    width: 100%;
}
.product-list {
    background: #fafafa;
    padding: 15px 0;
}
.product-list h3 {
    font-size: 18px;
    font-weight: 400;
    color: #444444;
    margin: 0 0 10px 0;
}
.price {
    font-size: 16px;
    color: #fc5a5a;
    display: block;
    margin-bottom: 12px;
}
.button {
    text-decoration: none;
    display: inline-block;
    padding: 0 12px;
    margin-left: 100px;
    background: #cccccc;
    color: white;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 28px;
    transition: .3s ease-in;
}
.product-item:hover .button {background: #fc5a5a;}

IMG.displayed {
    display: block;
    padding-top: 30px;
    margin-left: 50px;
    margin-right: auto;
    width: 200px;
}
</style>
