<template>
    <div class="masonry">
        <div class="grid product" v-for="category in categories">
                <div class="relative">
                    <div>
                    <img v-if="category.code === 'tv' "
                          src="https://filearchive.cnews.ru/img/news/2019/07/26/r604.jpg">
                    <img v-if="category.code === 'vacuum'"
                         src="https://i.allo.ua/media/catalog/product/cache/1/image/2000x2000/af097278c5db4767b0fe9bb92fe21690/g/f/gfvm51xe441.jpg">

                    <img v-if="category.code === 'kitchen' " src="https://cdn.27.ua/499/0e/ae/1117870_34.jpeg">
                    <img v-if="category.code === 'coffeemachine'"
                         src="https://i8.rozetka.ua/goods/16897873/saeco_iperautomatica_10004970_images_16897873238.png">
                    </div>
                    <div class="name">{{ category.name }}</div>
                    <div class="item">Категория: {{ category.code }}</div>
                    <div class="price">{{ category.price }} грн.</div>
                </div>
                <div class="mt-auto">
                    <a class="product-atc"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
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

</style>
