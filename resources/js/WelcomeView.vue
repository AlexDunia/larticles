<template>
  <div v-for="oneproduct in articles" key="oneproduct.id">
<a :href="`/api/article/${oneproduct.id}`"> <h1> {{oneproduct.title}} </h1> </a>
<h1> {{oneproduct.body}} </h1>
/article/{id}
</div>
</template>

<script>

export default {
    name: 'Hello',

    data(){
    return{
      articles:[],
      image: 'Hello world'
    }
  },

  mounted(){
    this.fetcharticles()
  },

  methods:{
    fetcharticles() {
      fetch('api/articles')
      .then(res => res.json())
      .then(res => {
        this.articles = res.data
        // console.log(res.data)
      })
    }
  }
}
</script>

<style>
</style>