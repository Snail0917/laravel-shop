<template>
    <div class="contact-form">
        <!-- <form id="contact-form" action="{{ route('send-mail') }}" method="post" data-toggle="validator"> -->
         <form id="contact-form" method="post" data-toggle="validator">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-form form-group">
                        <input type="text" name="name" v-model="name" placeholder="Enter Your Name" data-error="Name is required." required="required">
                        <div class="help-block with-errors"></div>
                    </div> <!-- single form -->
                </div>
                <div class="col-lg-6">
                    <div class="single-form form-group">
                        <input type="email" name="email" v-model="email" placeholder="Enter Your Email"  data-error="Valid email is required." required="required">
                        <div class="help-block with-errors"></div>
                    </div> <!-- single form -->
                </div>
                <div class="col-lg-12">
                    <div class="single-form form-group">
                        <textarea name="message" v-model="message" placeholder="Enter Your Message" data-error="Please,leave us a message." required="required"></textarea>
                        <div class="help-block with-errors"></div>
                    </div> <!-- single form -->
                </div>
                <p class="form-message"></p>
                <div class="col-lg-12">
                    <div class="single-form form-group">
                        <button class="main-btn" type="submit" v-on:click.prevent="getContactUs">CONTACT NOW</button>
                    </div> <!-- single form -->
                </div>
            </div> <!-- row -->
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: '',
                email: '',
                message: '',
            }
        },
        methods: {
            async getContactUs() {
                if(this.name != '' && this.email != '' && this.message) {
                    let loader = this.$loading.show({
                        // Optional parameters
                        container: this.fullPage ? null : this.$refs.formContainer,
                        canCancel: true,
                        onCancel: this.onCancel,
                        color: '#fe7865',
                        height: 100,
                        width : 100,
                        loader: 'dots',
                    });

                    setTimeout(() => {
                        loader.hide()
                    }, 5000)

                    let response = await axios.post('/contact/send-mail', {
                        'name': this.name,
                        'email': this.email,
                        'message': this.message,
                    });


                    if(response.data.success) {
                        this.$toast.success(response.data.success);
                    } else {
                        this.$toast.success(response.data.error);
                    }
                } else {
                    this.$toast.error('Please fill your contact information!');
                    return;
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
