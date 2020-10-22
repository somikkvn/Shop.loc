<template>
    <div>
        <div v-if="items.length === 0">
            <div style="text-align: center; padding: 16px; background: #de8885">
                <h1>Your cart is empty!</h1>
            </div>
            <br>
            <div style="text-align: center; padding: 16px; background: #85de86">
                <h2><a href="/categories">To make purchases, return to the product selection page.</a></h2>
            </div>
        </div>
        <table v-if="items.length > 0" class="table table-hover table-bordered">
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Count</th>
                <th>Amount</th>
                <th>Button</th>
            </tr>
            <tr v-for="(item, index) in items">
                <td :id="'name_'+item.id">{{ item.name }}</td>
                <td :id="'price_'+item.id">{{ item.price }}</td>
                <td :id="'count_'+item.id">
                    <div class="wrapper">
                        <input v-model="countNumber[index]" style="width: 43px" id="number-diet" class="js-number"
                               type="number" min="1" max="99" name="number">
                    </div>
                </td>
                <td :id="'sum_'+item.id">{{ power((item.price).toFixed(2), (countNumber[index])).toFixed(2) }}</td>
                <td :id="'button_'+item.id">
                    <button @click="delItem(index)" class="btn btn-danger button_basket">Delete</button>
                </td>
            </tr>
        </table>
        <button v-if="items.length > 0" style="width: 100%" @click="delAllItems()" class="btn btn-danger">Delete All
        </button>
        <p v-if="items.length > 0" style="padding: 15px"><b>Total: {{ itogs }}</b></p>
        <button v-if="items.length > 0" @click="checkoutStripe()" id="checkout-button" class="btn btn-info">Checkout
        </button>
    </div>
</template>
<script>

export default {
    props: {
        categories: {
            //
        }
    },

    data() {
        return {
            items: this.categories,
            itog: 0,
            countNumber: [],
        }
    },

    computed: {
        itogs() {
            this.itog = 0;
            for (let index = 0; index < this.items.length; index++) {
                this.itog += this.items[index].price * this.countNumber[index];
            }
            return this.itog.toFixed(2);
        }
    },

    created: function () {
        for (let index = 0; index < this.items.length; index++) {
            this.countNumber[index] = this.items[index].count;
        }
    },

    methods: {
        delItem(index) {
            let elem = this.items.slice(index, index + 1)[0];
            axios({
                method: 'post',
                url: '/delbasket',
                data: {
                    id: elem.id,
                }
            })
            .then(res => {
                this.countNumber.splice(index, 1);
                this.items.splice(index, 1);
            });
        },

        delAllItems() {
            axios({
                method: 'post',
                url: '/delbasketall',
            })
            .then(res => {
                this.items = [];
            });
        },

        checkoutStripe() {
            let new_arr = new Array();
            this.items.map((index, key) => {
                let new_obj = {
                    product_id: index.id,
                    count: this.countNumber[key]
                };
                new_arr.push(new_obj);
            });

            const str = JSON.stringify(new_arr);

            axios.post('/insstripe', {card: str})
            .then((response) => {
                window.location.href = '/stripe';
            })
            .catch((error) => {
                console.log(error);
            });
        },

        power(sum, count) {
            return sum * count;
        },
    }
}
</script>

<style scoped>

</style>
