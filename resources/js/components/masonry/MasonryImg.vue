<template>
    <div class="masonry">
        <div class="grid product" v-for="category in categories">
            <div class="relative">
                <div>
                    <img v-if="category.code === 'tv'" src="https://hitech-news.ru/wp-content/uploads/2019/01/320135750_w640_h640_35044044_2.png">
                    <img v-if="category.code === 'vacuum'" src="https://i1.rozetka.ua/goods/12931383/103744050_images_12931383852.jpg">
                    <img v-if="category.code === 'kitchen'" src="https://cdn.27.ua/499/0e/ae/1117870_34.jpeg">
                    <img v-if="category.code === 'coffeemachine'" src="https://i8.rozetka.ua/goods/14835264/philips_series_1200_ep1222_00_images_14835264957.jpg">
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
