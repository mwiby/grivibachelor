<template>
  <div>

    <div class="text-center" v-if="isFetched == false">
      <div class="spinner-border" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div class="container mb-5" v-else>
      <div class="row">
        <div class="card col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <img
            :src="'storage/' + product.image"
            width="350"
            height="420"
            class="card-img-top"
            alt="..."
            data-toggle="modal"
            data-target="#imgModal"
          />
        </div>
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
          <p class="sp-brand">Brand-placeholder</p>
          <p class="sp-name">{{product.name}}</p>
          <p class="sp-price">{{product.price}},-</p>
          <p class="sp-details">{{product.details}}</p>
          <p class="sp-description">{{product.description}}</p>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="imgModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="imgModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <img :src="'storage/' + product.image" data-dismiss="modal" aria-label="Close" />
        </div>
      </div>
    </div>
  </div>

  
</template>
<script>
export default {
  data() {
    return {
      id: this.$route.params.id,
      product: {},
      isFetched: false
    };
  },
  created() {
    this.getProduct();
    console.log(this.id);
  },
  // Henter produktet
  methods: {
    getProduct() {
      this.isFetched = false;
      axios.get("product/" + this.id).then(
        response => {
          this.product = response.data.product;
          this.isFetched = true;
        },
        error => {
          console.error(error);
        }
      );
    }
  }
};
</script>