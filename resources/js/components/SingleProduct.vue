<template>
  <div>
    <div class="container">
      <div class="row">
        <div
          class="card col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <img src="img/men_hoodie.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="card-brand">{{product.brand}}</p>
              <p class="card-name">{{product.name}}</p>
              <p class="card-price">{{product.price}},-</p>
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
            id: this.$route.params.id,
            product: {}
        }
    },
    created() {
        this.getProduct();
    },
    methods: {
        getProduct() {
          axios.get('products/' + this.id).then(response => {
            let { data } = response;     
            
            this.product = data;
          },
            error => {
            console.error(error)
          })
        }
    }
}
</script>