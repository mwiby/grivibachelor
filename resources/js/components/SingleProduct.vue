<template>
  <div>
    <div class="container mb-5">
      <div class="row">
        <div class="card col-lg-4 col-md-6 col-sm-6 col-xs-12">
          <img
            src="img/men_hoodie.jpg"
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
          <img src="img/men_hoodie.jpg" data-dismiss="modal" aria-label="Close" />
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
      product: {}
    };
  },
  created() {
    this.getProduct();
  },
  // Henter produktet
  methods: {
    getProduct() {
      axios.get("product/" + this.id).then(
        response => {
          let { data } = response;

          this.product = data;
        },
        error => {
          console.error(error);
        }
      );
    }
  }
};
</script>