<template>
    <div class="masonry">
        <div class="grid" v-for="category in categories">
            <div class="grid__body">
                <div class="relative">
                    <p>{{ category.image }}</p>
                    <p class="name">{{ category.name }}</p>
                    <h3 class="item">Категория: {{ category.code }}</h3>
                    <p class="price">{{ category.price }} грн.</p>
                </div>
                <div class="mt-auto">
                    <a class="grid__tag button24"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        categories: {
            default: []
        }
    },
}
</script>

