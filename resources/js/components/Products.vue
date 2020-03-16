<!-- Bla nedover for kommentarer -->
<template> 
  <!-- container for the whole page -->
  <div class="container">
    <!-- row for the filter on the left side -->
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center">
        <div>
          <h2>
            <i class="fas fa-sliders-h"></i>
            Filter
          </h2>
          <!-- filter dropdown for category -->
          <div v-if="catId == null">
          <a
            class="btn-white"
            data-toggle="collapse"
            href="#collapseCategory"
            role="button"
            aria-expanded="false"
            aria-controls="collapseCategory"
          >
            <h2>Kategori</h2>
          </a>
          <div class="collapse" id="collapseCategory">
            <ul v-for="category in categories" v-bind:key="category.id" class="text-left">
              <li>
                <router-link v-bind:to="gender + '/' + category.slug">{{category.name}}</router-link>
              </li>
            </ul>
          </div>
          </div>

          <!-- filter dropdown for brands -->
          <a
            class="btn-white"
            data-toggle="collapse"
            href="#collapseBrands"
            role="button"
            aria-expanded="false"
            aria-controls="collapseBrands"
          >
            <h2>Merke</h2>
          </a>
          <ul
            v-for="brand in brands" v-bind:key="brand.id"
            class="collapse text-left"
            id="collapseBrands"
          >
            <li>
              <input type="checkbox" v-bind:value="brand.slug" v-model="userSelectedBrands"/>
                {{brand.name}}
            </li>
          </ul>
          <a
            class="btn-white"
            data-toggle="collapse"
            href="#collapsePrice"
            role="button"
            aria-expanded="false"
            aria-controls="collapsePrice"
          >
            <h2>Pris</h2>
          </a>
          <div class="collapse" id="collapsePrice">
            <ul>
              <li>ei litta pris</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- row for the clothes on the right -->
      <div id="card-row" class="row col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <!-- card for every single item in the store -->
        <div
          class="card col-lg-3 col-md-4 col-sm-6 col-xs-12"
          v-for="product in products"
          v-bind:key="product.id"
        >
          <router-link v-bind:to="'/produkt/' + product.slug" id="card-click">
            <img src="img/men_hoodie.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-brand">sdfdsfdsfs</p>
              <p class="card-name">{{product.name}}</p>
              <p class="card-price">{{product.price}},-</p>
            </div>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Produkter som vises
      products: [],

      // Produkter som blir hentet utifra brands
      brandProducts: [],

      // Pather som blir lagret for api call og routes
      apiPathname: "",
      pathname: "",
      gender: "",

      // Ting som kan bli filtrert på
      categories: [],
      brands: [],

      // Brukervalgte ting
      userSelectedBrands: [],

      // Route params
      catId: this.$route.params.catId,

      // Boolean for å se om vi har fått fetchet
      // doneFetching: false
    };
  },
  created() {
    this.getPathname(); // Henter pathname
    this.getProducts(); // Henter produkter
    //this.getCategories(); // Henter kategorier
    //this.getBrands(); // Henter merker
    console.log("created");
  },

  /* Watcher om bruker har selektert noen brands */
  watch: {
    userSelectedBrands: function() {
      if(this.userSelectedBrands.length == 0) {
        this.getProducts();
        console.log("this.getProducts()")
      } 
      else {
        this.getProductsBrand();
        console.log("userSelectedBrands function");
      }
    },
    brandProducts: function() {
      this.products = this.brandProducts;
      console.log("brandProducts function");
    }
  },

  methods: {
    getPathname() { // Sjekker om det er dame eller herre
      var pathname = window.location.href;
      if(pathname.includes("herre") == true) {
        this.apiPathname = 'man';
        this.gender = "herre";
      }
      else if(pathname.includes("dame")) {
        this.apiPathname = 'woman';
        this.gender = "dame";
      }
    },

    // Bestemmer hvilke produkter som vises: Enten kategory produkter eller ikke
    getProducts() {
        if(this.catId == null) {
          this.getNewProducts();
        }
        else {
          this.getProductsCategory();
        }
    },

    // Får 9 nyeste produkter fra enten mann eller dame
    getNewProducts() {
      axios({method: 'GET', url: 'clothes/' + this.apiPathname}).then(
        result => {
          this.products = result.data;
          console.log(result.data);
        });
    },

    // Får alle produktene av en spesifisert kategory
    getProductsCategory() {
      axios({method: 'GET', url: 'categories/man/' + this.catId}).then(
        result => {
          this.products = result.data;
        });
    },

    // Får alle kategorier
    getCategories() {
      axios({method: 'GET', url: 'categories/'}).then(
        result => {
          this.categories = result.data;
        });
    },

    // Får alle merker
    getBrands() {
      axios({method: 'GET', url: 'clothes/brands'}).then(
        result => {
          this.brands = result.data;
        });
    },

    // Får alle merker som er selektert
    getProductsBrand() {
      var testBrand = this.userSelectedBrands[0];
      if(this.userSelectedBrands.length > 0) {
        axios({method: 'GET', url: 'brands/' + testBrand}).then(
          result => {
            this.brandProducts = result.data;
            // Fra lav til høy this.brandProducts.sort((a, b) => (a.price > b.price) ? 1 : -1);
            // Fra høy til lav this.brandProducts.sort((a, b) => (a.price < b.price) ? 1 : -1);
          });
      }
    },


  }
};
</script>