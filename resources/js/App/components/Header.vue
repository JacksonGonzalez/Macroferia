<template>
  <div>
    <!--Main Navigation-->
    <!-- <header>
      <nav class="navbar navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand" href="#"><strong>Navbar</strong></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opinions</a>
            </li>
          </ul>
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header> -->

    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Carousel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <button class="btn btn-success ml-2 my-2 my-sm-0" type="submit">Iniciar Sesion</button>
            </div>
        </nav>
    </header>
    <!--Main Navigation-->
  </div>
</template>

<script>
export default {
  name: "Header",
  data() {
    return {
      loading: false,
    };
  },
  components: {},
  mounted() {},
};
</script>

<style scoped>
header {
  /* background: purple; */
}
</style>
