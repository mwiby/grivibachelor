<template>
    <div>
        
        <div class="sass-container row mobile-content border-bottom">
            <div class="col-lg-12 col-md-12 text-center px-2 py-2">
                <h1>Sjekk vårt utvalg</h1>
                <p>Velkommen til våre nettsider! Her kan du finne herre og dame klær tilgjengelig hos oss i Bøgata</p>

                <div class="row justify-content-center">
                    <div class="py-3">
                        <router-link to="/herre"><a href="#" class="button">Herre</a></router-link>
                    </div>
                    <div class="py-3">
                        <router-link to="/dame"><a href="#" class="button">Dame</a></router-link>
                    </div>
                </div>    
            </div>
        </div>
        <div>
            
        </div>
        
            <img class="desktop-content" style="opacity: 0.7" src="storage/settings/May2020/grivibanner.PNG">

            <div class="container py-3">
                <h1 class="text-center">Våre merkervarer</h1>

                <p class="section-description text-center">
                    Vi er stolte over å presentere de ulike merkekvarene i vår butikk. Hos oss finner du disse merkevarene:
                </p>
            
                
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6" v-for="brand in brands" v-bind:key="brand.id">
                        <a href="" target="blank"><img :src="'storage/' + brand.image" alt="product" width="230" height="140"></a>
                    </div>
                    <div class="col-12 text-center my-5">
                        <div v-if="toggle">
                            <a  v-on:click="getBrands()" class="button">Vis flere merker</a>
                        </div>
                </div>
                </div> <!-- end products -->
            </div>  <!-- end container -->

        <div class="grayBackground pb-5 pt-3">
            <div>
                <h3 class="text-center">Følg oss på</h3>
                <a><img class="instaLogo" src="storage/settings/May2020/instagram.png" alt="Instagram"></a>
            <div class="container-2">
                <div class="row pt-3 pb-4 mx-0">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 px-0 mx-0">
                        <a href="https://www.instagram.com/griviklaer/"><img src="storage/settings/May2020/instagrivi1.PNG" alt="Instagram"></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 px-0 mx-0">
                        <a href="https://www.instagram.com/griviklaer/"><img src="storage/settings/May2020/instagrivi2.png" alt="Instagram"></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 px-0 mx-0">
                        <a href="https://www.instagram.com/griviklaer/"><img src="storage/settings/May2020/instagrivi3.png" alt="Instagram"></a>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 px-0 mx-0">
                        <a href="https://www.instagram.com/griviklaer/"><img src="storage/settings/May2020/instagrivi4.png" alt="Instagram"></a>
                    </div>
                </div>
                </div>
            </div> <!-- end container -->
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            brands: [],

            // Sjekker om button er trykket
            toggle: true
        }
    },

    created() {
        this.getHalfBrands();
    },

    methods: {
        // Får halvparten av merkene
        getHalfBrands() {
            axios({method: 'GET', url: 'clothes/brands'}).then(
            result => {
                var array;

                array = result.data.brands;
                if (array.length <= 4) {
                    this.toggle = false;
                }

                if (array == 'Ingen brands tilgjengelig') {
                    this.toggle = false;
                }

                else {
                    if (array.length >= 8) {
                        this.brands = array.splice(0, Math.ceil(array.length / 2));
                    }
                    else {
                        this.brands = array.splice(0, 4);
                    }
                }
            });
        },

        // Får alle merkene
        getBrands() {
            axios({method: 'GET', url: 'clothes/brands'}).then(
            result => {
                this.brands = result.data.brands;
            });
            this.toggle = false;
        },
    }
}
</script>