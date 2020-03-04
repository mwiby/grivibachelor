<!-- Bla nedover for kommentarer -->
<template>
  <div>
    <div class="container">
      <div class="row">
        <div
          class="card col-lg-3 col-md-4 col-sm-6 col-xs-12"
          v-for="product in products"
          v-bind:key="product.id">
          <a href="#" id="card-click">
            <img src="img/men_hoodie.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-brand">{{product.brand}}</p>
              <p class="card-name">{{product.name}}</p>
              <p class="card-price">{{product.price}},-</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      // Bare test data for å prøve litt, siden jeg ikke har noe api.
      womanProducts: [
        { id: 1, name: "Woman123", brand: "Vans", price: 499 },
        { id: 2, name: "Leather-jacket", brand: "Lacoste", price: 899 },
        { id: 3, name: "Cocacola genser", brand: "Ella", price: 199 },
        { id: 4, name: "Pepsi genser", brand: "Dammm", price: 449 },
        { id: 5, name: "Grey jacket", brand: "Lacoste", price: 499 }
      ],

      manProducts: [
        { id: 1, name: "Pokemon genser", brand: "xcovk", price: 499 },
        { id: 2, name: "Bukse cocacola", brand: "kpofds", price: 899 },
        { id: 3, name: "Vø trening", brand: "asd", price: 199 },
        { id: 4, name: "Dc shoes", brand: "såpfl", price: 449 },
        { id: 5, name: "Alloha", brand: "Ssd", price: 499 }
      ],

      products: [],

      pathname: ""
    };
  },
  created() {
    this.getPathname();
    if (this.pathname == "/herre") {
      this.getMenClothes();   // Hent ut de nyeste klæra for herre : get.(api/products/herre), vet ikke hvordan syntaxen er for å lage api linker
    } else {
      this.getWomanClothes(); // Hent ut de nyeste klæra for herre : get.(api/products/dame)
    }
  },

  methods: {
    getPathname() { // Sjekker om det er dame eller herre
      var pathname = window.location.pathname;
      this.pathname = pathname;
    },
    // Disse er bare for test
    getMenClothes() {
      this.products = this.manProducts;
    },

    getWomanClothes() {
      this.products = this.womanProducts;
    }
    // Når det kommer metoder for klesfilteret etterhvert:
    // Api for kategori. Må få alle klær av type kategori. Feks alle gensere for herrer.
    // Api for brands. Må få retunert alle brands av en type kategori. Utifra hva slags brands som er selected i filteret.
    // Feks hvis en herre har valgt diesel og replay på genser kategorien. Så må jeg få retunert alle disel og replay gensere for herre.
  }
};
</script>