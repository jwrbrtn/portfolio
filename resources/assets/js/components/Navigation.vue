<template>
<section class="hero animated  fadeIn is-light is-fullheight">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand ">
          <a class="navbar-item ">

          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item animated bounceInDown" :class="[ view === 'home' ? 'is-active' : '']" @click="view='home'"> 
              Home
            </a>
            <a class="navbar-item animated bounceInDown " :class="[ view === 'about' ? 'is-active' : '']"  @click="view='about'">
              About
            </a>
            <a class="navbar-item animated bounceInDown " :class="[ view === 'blog' ? 'is-active' : '']"  @click="view='blog'">
              Blog
            </a>
            <a class="navbar-item animated bounceInDown" :class="[ view === 'projects' ? 'is-active' : '']" @click="view='projects'">
              Projects
            </a>

            <a class="navbar-item animated bounceInDown" :class="[ view === 'contact' ? 'is-active' : '']" @click="view='contact'">
              Contact
            </a>

          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->



  <!-- Home Section -->
  <div class="hero-body animated fadeIn" v-if="view === 'home'">
    <div class="container has-text-centered">
      <h1 class="title special animated slideInLeft">
        Jess Warburton
      </h1>
      <h2 class="subtitle animated slideInRight">
        Web Developer
      </h2>
    </div>
  </div>


<!-- About Section -->

    <div class="hero-body animated fadeIn" v-if="view === 'about'">
    <div class="container about has-text-centered">
      <h1 class="title">
        About Me
      </h1>
      <p class="has-text-justified"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

</p>
    </div>
  </div>

    <!-- Blog Section -->

    <div class="hero-body animated fadeIn" v-if="view === 'blog'">
    <div class="container has-text-centered">
      <h1 class="title">
        Blog
      </h1>

      <div class="columns">
        <div class="column">
          
        </div>
        <div class="column">
          Second column
        </div>
        <div class="column">
          Third column
        </div>
        <div class="column">
          Fourth column
        </div>
      </div>






    </div>
  </div>

<!-- Projects Section -->

    <div class="hero-body animated fadeIn" v-if="view === 'projects'">
    <div class="container has-text-centered">
      <h1 class="title">
        Projects
      </h1>
      <h2 class="subtitle">
        Subtitle
      </h2>
    </div>
  </div>


<!-- Contact Section -->

    <div class="hero-body animated fadeIn" v-if="view === 'projects'">
    <div class="container has-text-centered">
      <h1 class="title">
        Projects
      </h1>
      <h2 class="subtitle">
        Subtitle
      </h2>
    </div>
  </div>



</section>

</template>

<script>

    export default {

        mounted() {
            console.log('Navigation mounted.')
        },
        

        data() {
                    return {
                        view: 'home',
                    }
                },

    }
</script>