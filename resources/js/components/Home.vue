<template>
    <body>
        <header>
            <div class="sass-container row">
                <div class="col-lg-6 col-md-12 text-center px-2 py-2">
                    <h1>Sjekk vårt utvalg</h1>
                    <p>Her kan du finne herre og dame klær i tilgjengelig hos oss i Bøgata</p>
                    <div class="row justify-content-center">
                    <div class="py-3">
                        <a href="#" class="button">Herre </a>
                        </div>
                        <div class="py-3">
                        <a href="#" class="button">Dame</a>
                        </div>
                        </div>
                </div> <!-- venstre col -->

                <div class="col-lg-6 col-md-12 px-2 py-2">
                    <img src="img/utvalg.jpg" width="100%" height="100%">
                    <!-- høyre col -->
                </div>
            </div>
        </header>

            <div class="container py-3">
                <h1 class="text-center">Våre merkervarer</h1>

                <p class="section-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                At obcaecati natus eius ex. Nostrum debitis a tempore laboriosam optio tenetur animi dolore sequi 
                officiis, voluptas facere! Debitis nam porro impedit?</p>
            
                
                <div class="row text-center">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" v-for="brand in brands" v-bind:key="brand.id">
                        <a href="" target="blank"><img :src="'storage/' + brand.image" alt="product" width="230" height="140"></a>
                        <a href="#"><div class="product-name">{{brand.name}}</div> </a>
                    </div>
                    <div class="col-12 text-center my-5">
                    <a href="#" class="button">Vis flere merker</a>
                </div>
                </div> <!-- end products -->
            </div>  <!-- end container -->

        <div class="grayBackground pb-5 pt-3">
            <div class="container ">
                <h1 class="text-center">Følg oss på Instagram</h1>

                <p class="section-description text-center my-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                        <a href="#"><img src="img/insta1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Sjekk denne</h2></a>
                        <div class="blog-description">Sjekk denne herlige trenchen fra @arniesays 🤩🤩 God søndag❣️</div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                        <a href="#"><img src="img/insta2.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Fantastisk flotte</h2></a>
                        <div class="blog-description">Fantastisk flotte basicnyheter fra @ellaandil 🤩😍Velkommen❣️#godlørdag #handlelokalt #sentrumsbutikkene</div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 py-2">
                        <a href="#"><img src="img/insta3.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Innkjøp AW2020</h2></a>
                        <div class="blog-description">Innkjøp AW2020👌😍Lekre farger og kvaliteter❣️@ellaandil @norwegianfashioncenter</div>
                    </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div>
    </body>
</template>

<script>
export default {
    data() {
        return {
            brands: []
        }
    },

    created() {
        this.getBrands();
    },

    methods: {
        
    // Får alle merker
    getBrands() {
      axios({method: 'GET', url: 'clothes/brands'}).then(
        result => {
          this.brands = result.data.brands;
        });
    },
    }
}
</script>