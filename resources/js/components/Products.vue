<!-- Bla nedover for kommentarer -->
<template>
  <div>
    <!-- Breadcrum navigering - kommer kun opp om bruker er på kategori-->
    <nav aria-label="breadcrumb" v-if="catId">
      <ol class="breadcrumb grayBackground left-padding">
        <router-link v-bind:to="'/' + gender">
          <li class="breadcrumb-item" aria-current="page">{{gender | firstLetterUpper}} ></li>
        </router-link>
        <li
          class="breadcrumb-item"
          aria-current="page"
          style="font-weight: bold"
        >&nbsp;{{catId | remove- | firstLetterUpper}}</li>
      </ol>
    </nav>

    <!-- Gender section -->

    <div class="grayBackground productHeader py-5" v-else>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6 col-sm-12 pt-2">
            <h5 class="pb-3">{{gender | firstLetterUpper}}</h5>

            <h4 v-if="products.length == 0 && isFetched == true">Ingen produkter har blitt lagt inn enda</h4>

            <h4 v-else class="pb-2">Velg en Kategori</h4>

            <ul id="hl" v-for="category in categories" v-bind:key="category.id">
              <router-link v-bind:to="gender + '/' + category.slug">
                <li>{{category.name}}</li>
              </router-link>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12 py-2 justify-content-right">
            <img v-if="gender == 'dame'" id="banner-picture" src="img/grivibilde2.png" alt="image" />
            <img v-else id="banner-picture" src="img/grivibilde.png" alt="image" />
          </div>
        </div>
        <!-- end category -->
      </div>
      <!-- end container -->
    </div>

    <!-- container for the whole page -->
    <div class="container">
      <div class="row pb-3" v-if="catId">
        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 mb-1">
          <div class="dropdown">
            <button
              class="btn btn-default dropdown-toggle"
              type="button"
              id="dropdownMenuButton filterButton"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >Filtrer på merker</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <ul id="padding-none" class="dropdown-width" v-for="brand in brands" v-bind:key="brand.id">
                <li class="dropdown-item">
                  <div class="filter-checkbox">
                    <input
                      class="noCheckbox"
                      type="checkbox"
                      v-bind:value="brand.slug"
                      v-bind:id="brand.slug"
                      v-model="userSelectedBrands"
                    />
                    <label class="dropdown-width" v-bind:for="brand.slug">{{brand.name}}</label>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Spacer -->
        <div class="col-lg-6 col-md-4 col-sm-2 col-xs-0"></div>

        <div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
          <select v-model="userSelectedSorting">
            <option>Standard sortering</option>
            <option>Billigste først</option>
            <option>Dyreste først</option>
          </select>
        </div>
      </div>
      <!-- End row -->

      <!-- Selected brands -->
      <div class="row">
        <div class=" ml-3" v-for="(brand, index) in userSelectedBrands" v-bind:key="index">
          <a class="button2" v-on:click="removeUserselectedBrands(index)">
           <div> {{brand | remove- | firstLetterUpper}} x</div> 
          </a>
        </div>
      </div>

      <!-- Spinner mens klæra blir fetcha -->
      <div class="text-center" v-if="isFetched == false">
        <div class="spinner-border" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>

      <!-- row for the filter on the left side -->
      <div class="row pt-3" v-else>
        <!-- row for the clothes on the right -->
        <div id="card-row" class="row col-12">
          <!-- card for every single item in the store -->
          <div
            class="card col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12"
            v-for="product in products"
            v-bind:key="product.id"
          >
            <router-link v-bind:to="'/produkt/' + product.slug" id="card-click">
              <img 
                :src="'storage/' + product.image"
                class="card-img-top"
                alt="..."
                width="244"
                height="295"
              />
              <!--  -->
              <div class="card-body">
                <p v-if="catId" class="card-brand">{{product.brand.name}}</p>
                <p class="card-name">{{product.name}}</p>
                <p class="card-price">{{product.price}},-</p>
              </div>
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Lagring av alle produktene på ett sted
      allProducts: [],

      // Produkter som vises
      products: [],

      // Pather som blir lagret for api call og routes
      apiPathname: "",
      gender: "",

      // Ting som kan bli filtrert på
      categories: [],
      brands: [],
      allBrands: [],

      // Brukervalgte ting
      userSelectedBrands: [],
      userSelectedSorting: "Standard sortering",

      // Route params
      catId: this.$route.params.catId,

      // Boolean for å se om vi har fått fetchet
      isFetched: false
    };
  },

  created() {
    this.getPathname(); // Henter pathname
    this.getProducts(); // Henter produkter
    this.getBrands(); // Henter merker
  },

  watch: {
    /* Watcher om bruker har selektert noen brands */
    userSelectedBrands: function() {
      if (this.userSelectedBrands.length == 0) {
        this.getProducts();
      } 
      else {
        this.getProductsBrand();
      }
    },
    /* Watcher om bruker har sortert */
    userSelectedSorting: function() {
      if (this.userSelectedSorting == "Standard sortering" ) {
        this.products.sort((a, b) => (a.id > b.id) ? 1 : -1)
      } else if (this.userSelectedSorting == "Billigste først") {
          this.products.sort((a, b) => (a.price > b.price ? 1 : -1));
      } else if (this.userSelectedSorting == "Dyreste først") {
          this.products.sort((a, b) => (a.price < b.price ? 1 : -1));
      }
    },
    /* Watcher om bruker har gått inn på en  kategori */
    catId: function() {
      if (this.catId) {
        this.getBrands();
      }
    }
  },

  methods: {
    getPathname() {
      // Sjekker om det er dame eller herre
      var pathname = window.location.href;
      if (pathname.includes("herre") == true) {
        this.apiPathname = "man";
        this.gender = "herre";
      } else if (pathname.includes("dame")) {
        this.apiPathname = "woman";
        this.gender = "dame";
      }
    },

    // Bestemmer hvilke produkter som vises: Enten kategory produkter eller ikke
    getProducts() {
      if (this.catId == null) {
        this.getNewProducts();
      } else {
        this.getProductsCategory();
      }
    },

    // Får 9 nyeste produkter fra enten mann eller dame
    getNewProducts() {
      axios.get("clothes/" + this.apiPathname ).then(
        result => {
          this.products = result.data.products;
          this.categories = result.data.categories;
          this.isFetched = true;
        }
      );
    },

    // Får alle produktene av en spesifisert kategory
    getProductsCategory() {
      axios.get("clothes/" + this.apiPathname + "/category/" + this.catId).then(result => {
        this.products = result.data.products;
        this.allProducts = result.data.products;
        this.isFetched = true;
      });
    },

    // Returnerer bare brands som eksisterer i oppgitt kategori
    getBrands() {
      axios.get("/clothes/" + this.apiPathname + "/category/" + this.catId + "/brands").then(result => {
        this.brands = result.data.brands;
      });
    },

    // Får alle merker som er selektert
    getProductsBrand() {
      this.products = this.allProducts;
      const sortedProducts = [];

      this.products.forEach((e1)=>this.userSelectedBrands.forEach((e2)=>
        {
          if(e1.brand.slug == e2){
            sortedProducts.push(e1);
          }
        }
      ));
      this.products = sortedProducts;
    },
    removeUserselectedBrands(index) {
      this.userSelectedBrands.splice(index, 1);
    }
  } // End of methods
};
</script>