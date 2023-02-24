<template>
    <div class="container">
        <hr>
        <button class="btn btn-warning text-center"
            v-on:click.prevent="addProductToCart()">
            Add To Cart
        </button>
    </div>
</template>

<script>
    export default {
        data() {
            return {

            }
        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart() {

                //Checking if user logged in.
                if(this.userId == 0){
                    this.$toast.error('You need to login, To add this product in Cart!');
                    return;
                }

                //If user logged in then add product to cart.
                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });

                this.emitter.emit('changeInCart', response.data.items);
                this.$toast.success('Added product successfully!');
            }
        },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>
