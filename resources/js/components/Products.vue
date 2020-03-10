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
                <router-link v-bind:to="gender + '/' + category.name">{{category.name}}</router-link>
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
            class="collapse text-left"
            id="collapseBrands"
          >
            <li>
              <input type="checkbox" v-model="userSelectedBrands"/>
                Diesel
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
          <router-link v-bind:to="'/produkt/' + product.id" id="card-click">
            <img src="img/men_hoodie.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-brand">{{product.brand}}</p>
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

      // Pather som blir lagret for api call og routes
      apiPathname: "",
      pathname: "",
      gender: "",

      // Ting som kan bli filtrert på
      categories: [],

      // Brukervalgte ting
      userSelectedBrands: [],

      // Route params
      catId: this.$route.params.catId,
    };
  },
  created() {
    
    this.getPathname(); // Henter pathname
    this.getProducts(); // Henter produkter
    this.getCategories(); // Henter kategorier

    
  },

  beforeUpdate() {
  },

  methods: {
    getPathname() { // Sjekker om det er dame eller herre
      var pathname = window.location.href;
      if(pathname.includes("herre") == true) {
        this.apiPathname = 'Men';
        this.gender = "herre";
      }
      else if(pathname.includes("dame")) {
        this.apiPathname = 'Woman';
        this.gender = "dame";
      }
    },

    // Bestemmer hvilke produkter som vises
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
      axios({method: 'GET', url: 'products/' + this.apiPathname}).then(
        result => {
          this.products = result.data;
        });
    },

    // Får alle produktene av en spesifisert kategory
    getProductsCategory() {
      axios({method: 'GET', url: 'categories/' + this.catId}).then(
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

  }
};
</script>